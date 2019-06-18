<?php
//   Facade: Facade.php   2019-06-18 16:47  albert $
//  Note: 

namespace Rocareer\QcloudSms;

use Illuminate\Support\Facades\Facade as LaravelFacade;
class Facade extends LaravelFacade
{
	protected static function getFacadeAccessor()
	{
		return 'qcloudsms';
	}
}