<?php

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
*/


/*
	Amazon Web Sevice API Key
	Must sign up for a developer account here: http://aws.amazon.com/
*/
$config['ECS_API_KEY'] = '';

/*
	Amazon Web Sevice API Secret Key
*/
$config['ECS_API_SECRET_KEY'] = '';

/*
	Language you want the results returned in
	NOTE: Leave null or blank for English
*/
$config['ECS_LANGUAGE'] = null;

/*
	Amazon Web Sevice Affiliate ID Tag
	Must sign up for an affiliate account here: https://affiliate-program.amazon.com/
*/
$config['ECS_ASSOCIATE_TAG'] = '';


