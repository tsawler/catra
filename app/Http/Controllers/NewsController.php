<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\App;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;
use Tsawler\Vcms5\controllers\VcmsNewsController;
use Tsawler\Vcms5\models\News;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Lang;

/**
 * Class NewsController
 * @package App\Http\Controllers
 */
class NewsController extends VcmsNewsController
{

    /**
     * @return string
     */
    public function allNews()
    {
        return "Foo";
    }

    /**
     * @return mixed
     */
    public function showNews()
    {
        $slug = Request::segment(2);
        $news_title = "Not active";
        $news_text = "Either this news item is not active, or it does not exist";
        $active = 1;
        $news_id = 0;

        $results = DB::table('news')->where('slug', '=', $slug)
            ->get();

        foreach ($results as $result) {
            $active = $result->active;
            if (($active > 0) || ((Auth::check()) && (Auth::user()->hasRole('news')))) {
                if ((Session::get('lang') == null) || (Session::get('lang') == "en")) {
                    $news_title = $result->title;
                    $news_text = $result->news_text;
                    $news_id = $result->id;
                } else {
                    $news_title = $result->title_fr;
                    $news_text = $result->news_text_fr;
                    $news_id = $result->id;
                }
                $news_image = $result->image;
                $news_date = $result->news_date;
            }
        }

        return View::make('public.news')
            ->with('news_title', $news_title)
            ->with('news_text', $news_text)
            ->with('page_content', $news_text)
            ->with('active', $active)
            ->with('news_id', $news_id)
            ->with('news_date', $news_date)
            ->with('news_image', $news_image)
            ->with('menu', $this->menu)
            ->with('page_category_id', 0)
            ->with('page_title', $news_title);
    }

}
