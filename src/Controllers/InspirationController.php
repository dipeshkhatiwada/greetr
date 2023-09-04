<?php
namespace Dipeshkhatiwada\Greetr\Controllers;

use Dipeshkhatiwada\Greetr\Inspire;
use Illuminate\Http\Request;

class InspirationController
{
    public function __invoke(Inspire $inspire) {
        return $inspire->justDoIt();
    }
}