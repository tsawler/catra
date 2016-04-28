<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Province;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;
use Tsawler\Vcms5\controllers\VcmsBaseController;

/**
 * Class DataController
 * @package App\Http\Controllers
 */
class DataController extends VcmsBaseController
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


    public function getProvincialData()
    {
        $data = Province::orderBy('province', 'year')->get();

        return View::make('vcms5::admin.provincial-data-list')
            ->with('data', $data);
    }


    public function getItem()
    {
        $id = Input::get('id');

        $provinces = [
            'AB' => 'AB',
            'BC' => 'BC',
            'MB' => 'MB',
            'NB' => 'NB',
            'NL' => 'NL',
            'NS' => 'NS',
            'NT' => 'NT',
            'NU' => 'NU',
            'ON' => 'ON',
            'PE' => 'PE',
            'QC' => 'QC',
            'Sk' => 'SK',
            'YT' => 'YT',
        ];

        if ($id > 0)
            $province = Province::find($id);
        else
            $province = new Province();

        return View::make('vcms5::admin.provincial-data-item')
            ->with('data', $province)
            ->with('provinces', $provinces);
    }
    
    
    public function postItem()
    {
        $id = Input::get('id');
        if ($id > 0)
            $province = Province::find($id);
        else
            $province = new Province();

        $province->province = Input::get('province');
        $province->year = Input::get('year');
        $province->collected = Input::get('collected');
        $province->recycled = Input::get('recycled');
        $province->energy_recovery = Input::get('energy_recovery');
        $province->diversion_rate = Input::get('diversion_rate');
        $province->five_year_average = Input::get('five_year_average');
        $province->save();

        return Redirect::to('/admin/data/provincial-data');
    }


    public function deleteItem()
    {
        $id = Input::get('id');
        Province::find($id)->delete();
        return Redirect::to('/admin/data/provincial-data');

    }
}
