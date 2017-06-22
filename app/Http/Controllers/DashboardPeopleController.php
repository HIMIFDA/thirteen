<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardPeopleController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('dashboard.people.index');
    }
}
