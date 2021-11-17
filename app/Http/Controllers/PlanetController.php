<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\SolarSystem;

class PlanetController extends Controller
{
    private $planets;
    function __construct()
    {
        $this->planets = Planet::with('solarSystem')->get();
    }

    public function index(Request $request)
    {
        return view('planets/index', ['planets' => $this->planets, 'request' => $request]);
    }

    public function show($planet = null)
    {
        return view('planets/show', ['planets' => $this->planets, 'parameter' => $planet]);
    }
}
