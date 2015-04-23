<?php namespace LaraCms\Eva;

use Illuminate\Support\ServiceProvider;

class EvaServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
            
            $this->loadViewsFrom(__DIR__.'/../views', 'eva');

            $this->publishes([
                __DIR__.'/../views' => base_path('resources/views/vendor/eva'),
            ]);


            include __DIR__.'/../routes.php';
            include __DIR__.'/../composer.php';
	}
        // ---
	/**
	 * Register the application services. 
	 *
	 * @return void
	 */
	public function register()
	{
		//
	}
        

}
