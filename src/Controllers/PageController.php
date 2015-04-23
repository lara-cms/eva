<?php namespace LaraCms\Eva\Controllers;

use App\Page;
use App\Menu;

use View,Response,Input;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Exception\HttpException;

class PageController extends Controller {
    
    public function getPage ()
    {
        $page = Page::getConstantModel();
        
        $template = Config('lara-cms.master.template');

        if (isset($template[$page->template]))
        {
            $tpl = $template[$page->template];
        }
        else
        {
            $tpl = 'page';
        }

        return response(View::make('eva::tpl.'.$tpl,compact(['page'])), 200)->header('Content-Type', 'text/html');
    }

}
