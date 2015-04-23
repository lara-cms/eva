<?php

View::composer( ['eva::layouts.master'], function($view)
{
    //Debugbar::startMeasure('get_menu','Получение меню');

    $menu = Cache::remember('active_menu_'.App\Menu::getIdActiveMenu(), Config::get('digital-code.eva.master.life_cache'), function()
    {
        $id = App\Menu::getIdActiveMenu();
        $menuActive = App\Menu::find($id);
        $m = $menuActive->ancestorsAndSelf()->with('childs')->get();
        $menu = array();
        foreach ($m as $v)
        {
            $menu[] = $v->childs->toArray();
        }
        return $menu;
    });

    $view->with( 'menu', $menu );
  
    
    
    //Debugbar::stopMeasure('get_menu');

});


View::composer( ['eva::tpl.list'], function($view)
{
    //Debugbar::startMeasure('get_pages','Списка ресурсов');
/*
    $menu = Cache::remember('active_menu_'.App\Menu::getIdActiveMenu(), Config::get('digital-code.eva.master.life_cache'), function()
    {
        $id = App\Menu::getIdActiveMenu();
        $menuActive = App\Menu::find($id);
        $m = $menuActive->ancestorsAndSelf()->with('childs')->get();
        $menu = array();
        foreach ($m as $v)
        {
            $menu[] = $v->childs->toArray();
        }
        return $menu;
    });
*/
    $menu = App\Menu::getActiveMenu();
    
    
    
    $cildMenus = $menu->leaves()->get();
    $list = array();
    $ids = [$menu->id];
    
    foreach ($cildMenus as $val) 
    {
        $ids[] = $val->id;
    }

    if (sizeof($ids)>0)
    {
        $list = App\Page::whereIn('menu_id',$ids)->where('template',4)->get();
    }
   
    $view->with( 'list', $list );

   // Debugbar::stopMeasure('get_pages');

});