<?php namespace App;

use Tsawler\Vcms5\models\Page;

class CatraPage extends Page {


    public function pageDetails()
    {
        return $this->hasOne('App\PageDetail', 'id', 'page_id');
    }
}
