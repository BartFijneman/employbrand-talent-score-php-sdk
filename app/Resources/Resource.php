<?php

namespace EmploybrandTS\Resources;

use EmploybrandTS\EmploybrandTS;


abstract class Resource
{

    protected $employbrandTS;


    public function __construct(EmploybrandTS $employbrandTS)
    {
        $this->employbrandTS = $employbrandTS;
    }

}
