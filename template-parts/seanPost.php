<?php 
	class seanPost {
		var $title;
		var $dateCreated;
        var $full_description; 
        var $min_description; 
        var $URL;
        var $link; 
        var $imgURL;
		var $description_trimmed;
		var $tags_formatted;
	}

	function getPostProperties($the_query){
		$allPosts = array();

		if ( $the_query->have_posts()) {
			while ( $the_query->have_posts() ) {
				$the_query->the_post();

				$map =  array(
					'min_description' => get_the_excerpt(),
					'full_description' => get_the_content(),
					'link' => get_the_permalink(),
					'imgURL' => get_the_post_thumbnail_url(),
					'title' => get_the_title(),
					'dateCreated' => get_the_date(), 
					'tags' => get_the_tags(),
					'tags_formatted' => get_the_tag_list('<button type="button" class="p-1 btn btn-primaryMid">',   '</button> <button type="button" class="p-1 btn btn-primaryMid">'   ,   '</button>')
				);
		
				$seansPost = new seanPost();
		
				foreach($map as $k => $v){
					$seansPost->$k = $v;
				}
				array_push($allPosts, $seansPost);
	
			}
		}

        return $allPosts;
	}
	
	function buildTagBtns($post_tags){
		$anchorBtns = '';

		if ($post_tags) {
			foreach($post_tags as $tag) {
				$anchorBtns .= '<button type="button" class="seanBtnPadding btn btn-primaryMid">' .
										$tag -> name .
								'</button>'; 
				$anchorBtns .= ' ';
			}
		 };
		
		return $anchorBtns;
	}
?>