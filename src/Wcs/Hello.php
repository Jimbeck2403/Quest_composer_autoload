<?php

namespace App\Wcs;

class Hello
{
    private $hi = "Hello World !";


    public function talk(){
        return $this -> hi;
    }

}