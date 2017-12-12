<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Image;
use App\Province;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;

/**
 * Class ProvincesController
 * @package App\Http\Controllers
 */
class ProvincesController extends Controller
{

    /**
     * @return mixed
     */
    public function getProvince()
    {
        $province = Input::get('province');
        if (Input::has('year'))
            $year = Input::get('year');
        else
            $year = 2016;

        $result = Province::where('province', '=', $province)->where('year', '=', $year)->first();
        $img = Image::where('province', '=', $province)->first();
        $image = $img->image;

        return View::make('public.province')
            ->with('province', $result)
            ->with('image', $image)
            ->with('year', $year);
    }
}
