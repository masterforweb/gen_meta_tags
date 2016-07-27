<?php

	/**
	* GENERATION META TAGS
	*/
	
	function gen_meta_tags($key = null, $value = '', $type = 'meta') {
		
		static $metatags = '';
		
		if ($key == null){
			echo $metatags;
		}
		elseif ($type == 'meta') {
			$metatags .= gen_meta_tag($key, $value);	 
		}
		elseif ($type == 'ogmeta'){
			$metatags .= gen_ogmeta_tag($key, $value);
		}
		elseif ($type == 'tag'){
			$metatags .= gen_tag($key, $value);	
		}	

		return True;

	}

	function express_gen_meta_tags ($title, $description, $img = '', $url = ''){
		
		gen_meta_tags('title', $title, 'tag');
		gen_meta_tags('description', $description);
		
		/** twitter*/
		gen_meta_tags('twitter:title', $title);
		gen_meta_tags('twitter:url', $url);
		gen_meta_tags('twitter:image', $img);

		/**  facebook*/
		gen_meta_tags('og:title', $title);
		gen_meta_tags('og:url', $url);
		gen_meta_tags('og:description', $description);
		gen_meta_tags('og:image', $img);

	}



	function gen_meta_tag($key = '', $value = '')
	{
		
		if (trim($value) !== '')
			return '<meta name="'.$key.'" content="'.htmlspecialchars_decode($value).'">';
		else
			return '';

	}

	function gen_ogmeta_tag($key = '', $value = '')
	{
		
		if (trim($value) !== '')
			return '<meta property="'.$key.'" content="'.htmlspecialchars_decode($value).'">';
		else
			return '';

	}

	function gen_tag($tag, $value){
		
		if (trim($value) !== '')
			return '<'.$tag.'>'.$value.'</'.$tag.'>';
		else
			return '';

	}

	
