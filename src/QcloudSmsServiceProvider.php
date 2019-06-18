<?php
//   QcloudSmsServiceProvider: QcloudSmsServiceProvider.php   2019-06-18 14:53  albert $
//  Note: 

namespace Rocareer\QcloudSms;


use Illuminate\Support\ServiceProvider;

class QcloudSmsServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->singleton('qcloudsms', function () {
			return new QcloudSms();
		});
	}
	public function boot(){
		$this->publishes([
			__DIR__ . '/config/qcloudsms.php' =>config_path('qcloudsms.php')
		]);
	}
}