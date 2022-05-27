<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Candidature extends Controller
{
    /**
     * @param $data => associative array with all data
     * @return boolean
     * take form data and save it in ot db
     */
    public function register($data): bool
    {
        echo $data;
        return true;
    }
}
