<?php
// database hostname, you don't usually need to change this
define('db_host','localhost');
// database username
define('db_user','root');
// database password
define('db_pass','');
// database name
define('db_name','pieter');
// database charset, change this only if utf8 is not supported by your language
define('db_charset','utf8');
// Global settings
// Image quality - the image is compressed with a value lower than 100 and the file size is reduced
define('image_quality','100');
// Correct image orientation for mobile upload
define('correct_image_orientation',false);
// Image max width; -1 = no max width
define('image_max_width','-1');
// Image max height; -1 = no max height
define('image_max_height','-1');
// Upload approval required
define('approval_required',true);
// Maximum filesize for uploaded files, measured in bytes
// Image max filesize; 5MB default
define('image_max_size','50000000');
// Audio max filesize; 20MB default
define('audio_max_size','20000000');
// Video max filesize; 100MB default
define('video_max_size','100000000');
// Admin credentials
// Admin username
define('admin_user','manezinho');
// Admin password
define('admin_pass','manezinho');
// PHP global settings; you can either adjust the values below or edit them in the php.ini file
// Increase the max upload file size
ini_set('post_max_size', '100M');
ini_set('upload_max_filesize', '100M'); 
// Mail server settings
// Send mail from which address?
define('mail_from','pieter@pieter-adriaans.com');
// Where should we send the contact form mail?
define('support_email','pieter@pieter-adriaans.com');
// Is SMTP server?
define('SMTP',true);
// SMTP Hostname
define('smtp_host','');
// SMTP Port number
define('smtp_port','465');
// SMTP Username
define('smtp_username','');
// SMTP Password
define('smtp_password','anderpassword');
//captcha
define('RECAPTCHA_SITE_KEY', '6LfdSrglAAAAAEWiISY3wc6FZWDizXDcTSXp_S1p');
define('RECAPTCHA_SECRET_KEY', '6LfdSrglAAAAAFUihtQ-hdjOU3qQ9FZjp2V9fZqM');

?>