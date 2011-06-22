##Amazon ECS

###Product API and Associate Tag Enabled

by Jd Fiscus
Help by: Aaron Kuzemchak
Original by: Jan Eichhorn - ://github.com/Exeu/Amazon-ECS-PHP-Library

Hey everybody,

This is a Codeigniter library where you can search the Amazon Product API.
Also you can put an affiliate ID in so that all returning results will give
you a customized affiliate referral url.

###DOCUMENTATION:
Amazon ECS Documentation is located at http://docs.amazonwebservices.com/AWSECommerceService/latest/DG/

###INSTALLATION:
Just copy the files from this package to the corresponding folder in your 
application folder.  For example, copy AmazonECS/config/amazon_ecs.php to 
system/application/config/amazon_ecs.php. 

####Obtaining API Keys:
AWS Developer

1. Sign up for free at http://aws.amazon.com/
2. Go into you account and look at the security credentials
3. Item 3
   * Access Key ID = ```$config['ECS_API_KEY']```
   * Secret Access Key = ```$config['ECS_API_SECRET_KEY']```
	
Affiliate Program

1. Sign up for free at https://affiliate-program.amazon.com/
2. Copy the tracking ID to the corresponding config variables in application/config/amazon_ecs.php
   * Tracking ID = ```$config['ECS_ASSOCIATE_TAG']```


###IMPORTANT:   
In order to use the Affiliate Program (Associate Tag) you must be using PHP 5.1 or higher


Thanks,
-Jd Fiscus
 jdfiscus@gmail.com
 @iamfiscus