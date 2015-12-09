<?php

namespace vphoenix\Http\Controllers;

use Illuminate\Http\Request;

use vphoenix\Http\Requests;
use vphoenix\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }
}
