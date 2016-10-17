<?php

/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 9/28/16
 * Time: 6:50 PM
 */
namespace traffik\Transformers\Traits;

use traffik\Transformers\StationTransformer;

trait StationTransformable
{

    protected function getStationTransformer(){
        return new StationTransformer();
    }

}