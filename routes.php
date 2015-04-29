<?php
Cache::flush();
//Debugbar::startMeasure('get_page','Получение страници');
$page = Cache::remember('url_'.Request::path(), Config::get('lara-cms.master.life_cache'), function()
{
    return App\Page::where(['url'=>Request::path()])->with('pageField')->first();
});
//Debugbar::stopMeasure('get_page');

if ($page)
{
    if (Input::has('telefon')) {
	Mail::send('emails.main', array('name' => Input::get('telefon','Неуказано'),'telefon'=>Input::get('telefon','Неуказан')), function($message)
	{
	    $message->to('Banditbox@list.ru', 'FrostFactory')->subject('Заявка');
	    $message->to('sav_alex1987@mail.ru', 'FrostFactory')->subject('Заявка');
	});
    }
    
    $page->setConstantModel();
    Route::get('/'.Request::path(), 'LaraCms\Eva\Controllers\PageController@getPage');   
}