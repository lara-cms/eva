<?php
View::composer( Config( "lara-cms.master.template_composer.menu" ), function($view)
{
    $menu = Cache::remember( 'active_menu_' . App\Menu::getIdActiveMenu(), Config::get( 'lara-cms.eva.master.life_cache' ), function()
            {
                $id = App\Menu::getIdActiveMenu();
                $menuActive = App\Menu::find( $id );
                $m = $menuActive->ancestorsAndSelf()->with( 'childs' )->get();
                $menu = array();
                foreach ($m as $v)
                {
                    $menu[] = $v->childs->toArray();
                }
                return $menu;
            } );

    $view->with( 'menu', $menu );
} );


View::composer( Config( "lara-cms.master.template_composer.list" ) , function($view)
{
    $menu = App\Menu::getActiveMenu();
    
    $cildMenus = $menu->leaves()->get();
    $list = [];
    $ids = [$menu->id];
    $ids_not = ($menu->page_id) ? [$menu->page_id] : [];
    foreach ($cildMenus as $val) 
    {
        $ids[] = $val->id;
        if ($val->page_id)
        {
            $ids_not[] = $val->page_id;
        }
    }

    if (sizeof($ids)>0)
    {
        $list = App\Page::whereIn('menu_id',$ids)->whereNotIn('id',$ids_not)->paginate(10);;
    }
    
    if ($list) {
        $list_pagin = [];
        $pages = ceil( $list->total() / 10 );
        
        for ($i=1; $i<=$pages;$i++)
        {
            $list_pagin[] = array(
                'number' => $i,
                'url' => App\Page::updateUrlParametr(['page'=>$i]),
                'active' => ($i == $list->currentPage()) ? true : false,
            );
            
        }
    }
    
    $view->with( 'list_pagin', $list_pagin );
    $view->with( 'list', $list );
});
