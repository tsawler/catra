<?php
namespace App\Http\Controllers;

use Tsawler\Vcms5\controllers\VcmsSearchController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Tsawler\Vcms5\models\News;
use Tsawler\Vcms5\models\Page;
use Illuminate\Support\Facades\View;
use Tsawler\Vcms5\Traits\MenuTrait;

class SearchController extends VcmsSearchController
{

    use MenuTrait;

    public function performSearch()
    {
        if (Input::has('q')) {
            $searchterm = '%' . strtoupper(Input::get('q')) . '%';

            if ((Session::get('lang') == "en") || (Session::get('lang') == null)) {
                $results = Page::whereRaw('page_title like upper(?) or page_content like upper(?)',
                    array($searchterm, $searchterm))
                    ->get();
            } else {
                $results = Page::whereRaw('page_title_fr like upper(?) or page_content_fr like upper(?)',
                    array($searchterm, $searchterm))
                    ->get();
            }


            if ((Session::get('lang') == "en") || (Session::get('lang') == null)) {
                $news = News::whereRaw('title like upper(?) or news_text like upper(?)',
                    array($searchterm, $searchterm))
                    ->get();
            } else {
                $news = News::whereRaw('title_fr like upper(?) or news_text_fr like upper(?)',
                    array($searchterm, $searchterm))
                    ->get();
            }
            

            return View::make('public.search')
                ->with('page_title', 'Search')
                ->with('meta_tags', '')
                ->with('meta', '')
                ->with('searchterm', Input::get('q'))
                ->with('results', $results)
                ->with('news', $news)
                ->with('page_category_id', 1)
                ->with('menu', MenuTrait::getMenu());

        } else {
            return View::make('public.search')
                ->with('page_title', 'Search')
                ->with('searchterm', '')
                ->with('results', [])
                ->with('news', [])
                ->with('page_category_id', 1)
                ->with('menu', MenuTrait::getMenu());
        }
    }

}
