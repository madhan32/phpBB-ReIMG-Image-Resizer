<?php
/**
* @package ReIMG Image Resizer AJAX
* @copyright (c) 2010 DavidIQ.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*/

define('IN_PHPBB', true);
$phpbb_root_path = '../';
$phpEx = substr(strrchr(__FILE__, '.'), 1);
include($phpbb_root_path . 'common.' . $phpEx);

// Start session management
$user->session_begin();
$auth->acl($user->data);
$user->setup();

$width = 0;
$height = 0;
$imgsrc = request_var('img', '');

if ($imgsrc)
{
	//We use getimagesize to get the height and width of the image
	list($width, $height) = @getimagesize(urldecode($imgsrc));
}

echo (int) $width . '||' . (int) $height;

?>