<?

	function gen_meta_tags($key = null, $value = null, $type = 'meta') {
		
		static $metatags = '';
		
		if ($value == null){
			echo $metatags;
		}
		elseif ($type == 'meta') {
			$metatags .= gen_meta($key, $value);	 
		}
		elseif ($type == 'ogmeta'){
			$metatags .= gen_ogmeta($key, $value);
		}	

		return True;

	}

	function express_gen_meta_tags ($title, $description, $img, $url = ''){
		
		gen_meta_tags('title', $title);
		gen_meta_tags('description', $description);
		
		/** twitter*/
		gen_meta_tags('twitter:title', $title);
		gen_meta_tags('twitter:url', $url);
		gen_meta_tags('twitter:image', $img);

		/**  facebook*/
		gen_meta_tags('og:title', $title);
		gen_meta_tags('og:url', $url);
		gen_meta_tags('og:description', $description);
		gen_meta_tags('og:image', $image);

	}



	function gen_meta_tag($key = '', $value = '')
	{
		return '<meta name="'.$key.'" content="'.$value.'">';						
	}

	function gen_ogmeta_tag($key = '', $value = '')
	{
		return '<meta property="'.$key.'" content="'.$value.'">';						
	}

	function gen_title_tag($value){
		return '<title>'.$value.'</title>';
	}

	
