<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Amazon_ecs extends CI_Controller {

	/**
	 * Example: Amazon ECS Search
	 *
	 * Documentation: 
	 * http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/
	 *
	 */
	public function index()
	{	
		$this->load->spark('AmazonECS/0.0.1');
		
		var_dump($this->ecs->category('Books')->responseGroup('Large')->search("Codeigniter"));
	}
}
