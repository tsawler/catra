<?php namespace App\Http\Controllers;

use App\CatraPage;
use App\FileUploader;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Tsawler\Vcms5\controllers\VcmsBaseController;
use Tsawler\Vcms5\Localize;
use Tsawler\Vcms5\models\Page;


/**
 * Class CatraPageController
 * @package App\Http\Controllers
 */
class CatraPageController extends VcmsBaseController {

    /**
     * Show the home page
     *
     * @return mixed
     */
    public function showHome()
    {
        $page_title = "Not active";
        $page_content = "Either the page you requested is not active, or it does not exist.";
        $meta = "";
        $meta_keywords = "";
        $active = 1;
        $page_id = 0;

        if (Cache::has('homepage')) {
            $results = Cache::get('homepage');
        } else {
            $results = DB::table('pages')->where('slug', '=', "home")->get();
            Cache::forever('homepage', $results);
        }

        foreach ($results as $result) {
            $active = $result->active;

            if (($active > 0) || ((Auth::check()) && (Auth::user()->access_level == 3))) {
                if ((Session::get('lang') == null) || (Session::get('lang') == "en")) {
                    $page_title = $result->page_title;
                    $page_content = $result->page_content;
                    $meta = $result->meta;
                    $page_id = $result->id;
                    $meta_keywords = $result->meta_tags;
                    $fragments = Page::find($result->id)->fragments;
                } else {
                    $page_title = $result->page_title_fr;
                    $page_content = $result->page_content_fr;
                    $meta = $result->meta;
                    $page_id = $result->id;
                    $meta_keywords = $result->meta_tags;
                    $fragments = Page::find($result->id)->fragments;
                }

            }
        }

        return View::make('vcms5::public.home')
            ->with('page_title', $page_title)
            ->with('page_content', $page_content)
            ->with('meta', $meta)
            ->with('meta_tags', $meta_keywords)
            ->with('active', $active)
            ->with('page_id', $page_id)
            ->with('fragments', $fragments)
            ->with('menu', $this->menu)
            ->with('menu_choice', 'home');
    }


    /**
     * Save edited page (called via ajax)
     *
     * @return string
     */
    public function savePage()
    {
        if (Auth::user()->hasRole('pages')) {

            $validator = null;

            if (Session::get('lang') == "en") {
                $update_rules = array(
                    'thedata'      => 'required|min:2',
                    'thetitledata' => 'required|min:2|unique:pages,page_title,' . Input::get('page_id')
                );
            } else if (Session::get('lang' == 'fr')) {
                $update_rules = array(
                    'thedata'      => 'required|min:2',
                    'thetitledata' => 'required|min:2|unique:pages,page_title_fr,' . Input::get('page_id')
                );
            } else {
                $update_rules = array(
                    'thedata'      => 'required|min:2',
                    'thetitledata' => 'required|min:2|unique:pages,page_title_es,' . Input::get('page_id')
                );
            }
            $validator = Validator::make(Input::all(), $update_rules);

            if ($validator->passes()) {

                $page = Page::find(Input::get('page_id'));

                if (Session::get('lang') == "fr") {
                    $page->page_content_fr = trim(Input::get('thedata'));
                    $page->page_title_fr = trim(Input::get('thetitledata'));
                    $page->slug_fr = Str::slug(Input::get('thetitledata'));
                } else if (Session::get('lang') == 'es') {
                    $page->page_content_es = trim(Input::get('thedata'));
                    $page->page_title_es = trim(Input::get('thetitledata'));
                    $page->slug_es = Str::slug(Input::get('thetitledata'));
                } else if (Session::get('lang') == 'en') {
                    $page->page_content = trim(Input::get('thedata'));
                    $page->page_title = trim(Input::get('thetitledata'));
                    $page->slug = Str::slug(Input::get('thetitledata'));
                } else {
                    return Session::get('lang') . " is an invalid language";
                }

                $page->save();
                Cache::flush();

                return "Page updated successfully";

            } else {
                return "Error!";
            }
        }
    }


    /**
     * Show a page
     *
     * @return mixed
     */
    public function showPage()
    {
        $slug = Request::segment(1);
        $page_title = "Not active";
        $page_content = "Either the page you requested is not active, or it does not exist.";
        $meta = "";
        $meta_keywords = "";
        $active = 1;
        $page_id = 0;
        $menu_choice = "";


        if ((Cache::has('page_' . $slug . '_' . App::getLocale())) && (getenv('APP_DEBUG') == false)) {
            $results = Cache::get('page_' . $slug . '_' . App::getLocale());
        } else {
            $results = CatraPage::where('slug', '=', $slug)->get();
            Cache::forever('page_' . $slug . '_' . App::getLocale(), $results);
        }

        foreach ($results as $result) {
            $active = $result->active;

            if (($active > 0) || ((Auth::check()) && (Auth::user()->hasRole('pages')))) {
                $page_title_field = Localize::localize('page_title');
                $page_content_field = Localize::localize('page_content');
                $page_title = $result->$page_title_field;
                $page_content = $result->$page_content_field;
                $page_id = $result->id;
                $meta_keywords = $result->meta_tags;
                $meta = $result->meta;
            }
        }

        return View::make('vcms5::public.inside')
            ->with('page_title', $page_title)
            ->with('page_content', $page_content)
            ->with('meta', $meta)
            ->with('meta_tags', $meta_keywords)
            ->with('active', $active)
            ->with('page_id', $page_id)
            ->with('menu', $this->menu)
            ->with('menu_choice', $menu_choice);
    }


    /**
     * List all pages
     *
     * @return mixed
     */
    public function getAllPages()
    {
        $pages = Page::where('active', '=', '1')->orderby('page_title')->get();

        return View::make('vcms5::admin.pages-list-all')
            ->with('allpages', $pages)
            ->with('page_name', '');
    }


    /**
     * Show page for edit or add
     *
     * @return mixed
     */
    public function getEditpage()
    {
        $page_id = Input::get('id');
        if ($page_id > 0) {
            $page = CatraPage::find($page_id);
        } else {
            $page = new CatraPage;
        }

        return View::make('vcms5::admin.pages-edit-page')
            ->with('page_id', $page_id)
            ->with('page', $page);
    }


    /**
     * Save edited page
     *
     * @return mixed
     */
    public function postEditpage()
    {
        $page_id = Input::get('page_id');

        if ($page_id > 0) {
            $page = CatraPage::find($page_id);
        } else {
            $page = new Page;
        }

        $page->page_title = trim(Input::get('page_title'));
        $page->active = Input::get('active');
        $page->page_content = trim(Input::get('page_content'));
        $page->meta = Input::get('meta');
        $page->meta_tags = Input::get('meta_tags');
        $page->slug = Str::slug(trim(Input::get('page_title')));

        if (Input::has('page_title_fr')) {
            $page->page_title_fr = Input::get('page_title_fr');
            $page->page_content_fr = Input::get('page_content_fr');
            $page->slug = Str::slug(trim(Input::get('page_title')));
        }

        if (Input::has('page_title_es')) {
            $page->page_title_es = Input::get('page_title_es');
            $page->page_content_es = Input::get('page_content_es');
            $page->slug_es = Str::slug(trim(Input::get('page_title_es')));
        }

        $page->save();

        $page_id = $page->id;

        // make sure we have a page details entry
        $detail = PageDetail::where('page_id', '=', $page->id)->first();

        if ($detail == null) {
            $detail = new PageDetail();
        }

        $detail->page_id = $page_id;
        $detail->page_type = Input::get("page_type");
        $detail->save();

        Cache::flush();

        return Redirect::to('/admin/page/all-pages')->with('message', 'Page saved successfully');
    }


    /**
     * Delete a page
     *
     * @return mixed
     */
    public function getDeletePage()
    {
        $item = Page::find(Input::get('id'));
        $item->delete();

        return Redirect::to('/admin/page/all-pages')
            ->with('message', 'Page deleted');
    }

}
