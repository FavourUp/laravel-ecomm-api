<?php



Route::get('favourup', function(){

	return EcommAPI::getWooCommerceProducts();

});