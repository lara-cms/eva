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
    $page->setConstantModel();
    Route::get('/'.Request::path(), 'LaraCms\Eva\Controllers\PageController@getPage');   
}