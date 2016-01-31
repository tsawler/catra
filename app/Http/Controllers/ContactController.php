<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\View;
use Tsawler\Vcms5\controllers\VcmsBaseController;

/**
 * Class ContactController
 * @package App\Http\Controllers
 */
class ContactController extends VcmsBaseController
{

    /**
     * @return mixed
     */
    public function getContact()
    {
        $menu_choice = "";

        return View::make('public.contact')
            ->with('menu', $this->menu)
            ->with('menu_choice', $menu_choice)
            ->with('page_category_id', 0);
    }
}
