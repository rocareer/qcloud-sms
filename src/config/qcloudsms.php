<?php
//   $Id: sms.php   2019-06-18 01:59  albert $
//  Note: 腾讯云短信配置

return [
	'app_id' => env('QCLOUD_SMS_APP_ID', ''),
	'app_key' => env('QCLOUD_SMS_APP_KEY', ''),
	'smsSign' => env('QCLOUD_SMS_SIGN', '')
];