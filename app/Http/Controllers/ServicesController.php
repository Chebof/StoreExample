<?php

namespace App\Http\Controllers;

use App\Service;

class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('store.services', ['services' => $services]);
    }
}
