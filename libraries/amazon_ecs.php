<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* Name:  Amazon ECS - Config
* 
* Author: Jd Fiscus
* 	 	  jdfiscus@gmail.com
*         @iamfiscus
*          
* Added Help: Aaron Kuzemchak 
* 			  @akuzemchak
*
* Origin API Class: https://github.com/Exeu/Amazon-ECS-PHP-Library
* 
* Location: http://github.com/iamfiscus/CodeIgniter-Amazon-ECS/
*          
* Created:  06.20.2010 
* 
* Description:  This is a Codeigniter library which allows you to Search Amazon Products, 
* and also lets you put in the you affiliate id so your results will return your associated affiliate link
*
* Requirements: PHP 5.1 or above
* 
*/

class Amazon_ecs {
		
	public function __construct($config) {
		require_once FCPATH.'sparks/AmazonECS/0.0.1/vendor/amazon_ecs/AmazonECS.class.php';
		
		$ecs = new AmazonECS($config['ECS_API_KEY'], $config['ECS_API_SECRET_KEY'], $config['ECS_LANGUAGE'], $config['ECS_ASSOCIATE_TAG']);
		
		$CI =& get_instance();
		$CI->ecs = $ecs;
		
		
	}
	
}