<?php

namespace FavourUp\EcommAPI;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use FavourUp\EcommAPI\EcommAPI;

class EcommAPIServiceProvider extends ServiceProvider

{
	public function boot()
	{
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
	}

	public function register()
	{

		$this->app->bind('favourup.ecommAPI',function($app){
             return new EcommAPI();
        });

		// AliasLoader::getInstance()->alias('EcommAPI', 'FavourUp\EcommAPI\Facades\EcommAPI');

	}

}