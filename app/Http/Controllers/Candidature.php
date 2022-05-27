<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class Candidature extends Controller
{
    /**
     * @param $data => associative array with all data
     * @return boolean
     * take form data and save it in ot db
     */
    public function register($data): bool
    {
        print_r($data);
        return true;
    }
}
