<?php

namespace App\Http\Controllers;

use App\Serie;
// use http\Env\Request;

class SeriesController extends BaseController
{
    public function __construct()
    {
        $this->classe = Serie::class;
    }

}
