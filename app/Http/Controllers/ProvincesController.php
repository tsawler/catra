<?php
namespace App\Http\Controllers;

use App\Province;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

class ProvincesController extends Controller
{
    public function getProvince()
    {
        $province = Input::get('province');
        if (Input::has('year'))
            $year = Input::get('year');
        else
            $year = 2014;

        $result = Province::where('province', '=', $province)->where('year', '=', $year)->first();

        return View::make('public.province')
            ->with('province', $result)
            ->with('year', $year);
    }
}
