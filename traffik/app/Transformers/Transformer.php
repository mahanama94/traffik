<?php

/**
 * Created by PhpStorm.
 * User: bhanuka
 * Date: 9/28/16
 * Time: 5:57 PM
 */

namespace traffik\Transformers;

abstract class Transformer
{

    public function transformCollection($items){
        $returnArray = array();
        foreach($items as $item){
            array_push($returnArray , $this->transform($item));
        }
        return $returnArray;
    }

    public abstract function transform($item);
}