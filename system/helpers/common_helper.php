<?php

if ( ! function_exists('getallcategorys'))
{
	function getallcategorys($array)
	{
		$ci = get_instance();
		$ci->load->model('model_category');
		$ci->load->model('model_blog');
		$allcategory= array();	
    	$results = $ci->model_category->getcategorys(0);
		if ($results) {  
			foreach($results as $val){
				$subresults = $ci->model_category->getcategorys($val->id);
				
							if($val->image) {	

							$thumbimages=resizeimage($val->image,1600,1038);
							$image = $thumbimages;

						}

						else {

							$thumbimages=resizeimage('no_image.jpg',1600,1038);
							$image = $thumbimages;

						}
				
				
				$subcategory= array();	 
				if ($subresults) { 
					foreach($subresults as $val1){

						$subresults1 = $ci->model_category->getcategorys($val1->id);
						$subcategory1= array();	 
						if ($subresults1) { 
							foreach($subresults1 as $val2){
								$subcategory1[] = array(
									'id' => $val2->id,
									'name' => $val2->name,
									'shortdescription' => $val2->shortdescription,
									'iocn' => $val2->image,
									'href' => base_url().$val->linkname.'/'.$val1->linkname.'/'.$val2->linkname
								);
							}
						}
							
							
									if($val1->icon) {	

							$thumbpdfcap=resizeimage($val1->icon,50,50);
							$icon = $thumbpdfcap;

						}

						else {

							$thumbpdfcap=resizeimage('no_image.jpg',50,50);
							$icon = $thumbpdfcap;

						}	
						
						
						
							if($val1->image) {	

							$thumbimages=resizeimage($val1->image,400,293);
							$image = $thumbimages;

						}

						else {

							$thumbimages=resizeimage('no_image.jpg',400,293);
							$image = $thumbimages;

						}		
						
						
						
						
									
						
						$subcategory[] = array(
											
							'id' => $val1->id,
							'name' => $val1->name,
							'subname' => $val1->subname,
							'icon' => $icon,
							'image' => $image,							
							'shortdescription' => $val1->shortdescription,	
							'homelist' => $val1->homelist,
							'home' => $val1->home,						
							'child' => $subcategory1,
							'href' => base_url().$val->linkname.'/'.$val1->linkname
						);
					}
				}
				
				
				
					
			
				
				
				$allcategory[] = array(
					'id' => $val->id,
					'name' => $val->name,
					'top' => $val->top,
					'shortdescription' => $val->shortdescription,					
					'image' => $image,
					'icon' => $val->icon,
					'homelist' => $val->homelist,
					'subname' => $val->subname,
					'home' => $val->home,		
					'child' => $subcategory,
					'href' => base_url().$val->linkname
				);
			}
		}

		return $allcategory;
	}
}






if ( ! function_exists('getpages'))
{
	function getpages($array)
	{
		$ci = get_instance();
		$ci->load->model('model_category');
		$allcategory= array();	
    	$results = $ci->model_category->getpages(0);
		if ($results) {  
			foreach($results as $val){
				$subresults = $ci->model_category->getpages($val->id);
				$subcategory= array();	 
				if ($subresults) { 
					foreach($subresults as $val1){

						$subresults1 = $ci->model_category->getpages($val1->id);
						$subcategory1= array();	 
						if ($subresults1) { 
							foreach($subresults1 as $val2){
								$subcategory1[] = array(
									'id' => $val2->id,
									'name' => $val2->name,
									'shortdescription' => $val2->shortdescription,
									'image' => $val2->image,	
									'home' => $val2->home,
									'href' => base_url().$val->linkname.'/'.$val1->linkname.'/'.$val2->linkname
								);
							}
						}
						$subcategory[] = array(
							'id' => $val1->id,
							'name' => $val1->name,
							'shortdescription' => $val1->shortdescription,	
							'image' => $val1->image,							
							'home' => $val1->home,
							'child' => $subcategory1,
							'href' => base_url().$val->linkname.'/'.$val1->linkname
						);
					}
				}
				$allcategory[] = array(
					'id' => $val->id,
					'name' => $val->name,
					'subname' => $val->subname,
					'shortdescription' => $val->shortdescription,
					'image' => $val->image,	
					'home' => $val->home,
					'child' => $subcategory,
					'href' => base_url().$val->linkname
				);
			}
		}
		return $allcategory;
	}
}


if ( ! function_exists('getbottompages'))
{
	function getbottompages()
	{
		$ci = get_instance();
		$ci->load->model('model_page');
		$cmsdata= "";
    	$results = $ci->model_page->getbottomcontents();
		if ($results) {  
			foreach($results as $val){
				$cmsdata.="<li><a href='".base_url().$val->linkname."'>".$val->name."</a><li>";
			}
		}
		return $cmsdata;
	}
}


if ( ! function_exists('getbottomblog'))
{
	function getbottomblog()
	{
		$ci = get_instance();
		$ci->load->model('model_blog');
		$cmsdata= "";
    	$results = $ci->model_blog->getbottomblogcontents();
		if ($results) {
			foreach($results as $val) {
				$cmsdata.="<div class='post'><div class='thumb'>
											<a href='".base_url()."blog/".$val->linkname."'>
												<img src='".UPLOADFILE.$val->banner."' alt=''>
											</a>
										</div>
										<h4><a href='".base_url()."blog/".$val->linkname."'>".$val->name.".</a></h4>
										<span class='date'>".date("M j, Y", strtotime($val->date_added))."</span></div>";
			}
		}
		return $cmsdata;
	}
}


if ( ! function_exists('getallhservice'))
{
	function getallhservice()
	{
		$ci = get_instance();
		$ci->load->model('model_category');
		$cmsdata= "";
    	$results = $ci->model_category->getallhservicecontents();
		if ($results) {
			foreach($results as $val) {
				$cmsdata.="<li><a href='".base_url().$val->linkname."'>".$val->name."</a></li>";
			}
		}
		return $cmsdata;
	}
}

if ( ! function_exists('getallcservice'))
{
	function getallcservice()
	{
		$ci = get_instance();
		$ci->load->model('model_category');
		$cmsdata= "";
    	$results = $ci->model_category->getallcservicecontents();
		if ($results) {
			foreach($results as $val) {
				$cmsdata.="<a class='menu-item' href='".base_url().$val->linkname."'>".$val->name."</a>";
			}
		}
		return $cmsdata;
	}
}

if ( ! function_exists('getallstservice'))
{
	function getallstservice()
	{
		$ci = get_instance();
		$ci->load->model('model_category');
		$cmsdata= "";
    	$results = $ci->model_category->getallstservicecontents();
		if ($results) {
			foreach($results as $val) {
				$cmsdata.="<a class='menu-item' href='".base_url().$val->linkname."'>".$val->name."</a>";
			}
		}
		return $cmsdata;
	}
}

if ( ! function_exists('getresinsproduct'))
{
	function getresinsproduct()
	{
		$ci = get_instance();
		$ci->load->model('model_category');
		$cmsdata= "";
    	$results = $ci->model_category->getresinsproductcontents();
		if ($results) {
			foreach($results as $val) {
				$cmsdata.="<a class='menu-item' href='".base_url().$val->linkname."'>".$val->name."</a>";
			}
		}
		return $cmsdata;
	}
}


if ( ! function_exists('webdata'))
{
	function webdata()
	{
		$ci = get_instance();
		$ci->load->model('model_setting');
		$webdata = $ci->model_setting->getwebsiteinfo();
		return $webdata;
	}
}
