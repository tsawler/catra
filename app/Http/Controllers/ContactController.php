<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Tsawler\Vcms5\controllers\VcmsBaseController;

class ContactController extends VcmsBaseController
{
    public function getContact()
    {
        $menu_choice = "";

        return View::make('public.contact')
            ->with('menu', $this->menu)
            ->with('menu_choice', $menu_choice)
            ->with('page_category_id', 0);
    }
}
