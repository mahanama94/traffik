<?php

namespace traffik\Http\Controllers;

use Illuminate\Http\Request;

use traffik\Http\Requests;
use traffik\Transformers\Traits\StationTransformable;

class StationController extends Controller
{

    use StationTransformable;

    public function index(){
        return response($this->getStationTransformer()->transform(1));
    }

    public function show($station){
        return response($this->getStationTransformer()->transform(1));
    }
}
