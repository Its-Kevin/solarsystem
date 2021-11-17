<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;
use App\Models\SolarSystem;

class SolarSystemController extends Controller
{
    private $solarSystems;
    function __construct()
    {
        $this->solarSystems = SolarSystem::withCount('planets')->get();
    }

    public function index(Request $request)
    {
        return view('solarsystems/index', ['solarSystems' => $this->solarSystems]);
    }

    public function show($id = null)
    {
        return view('solarsystems/show', ['solarSystems' => $this->solarSystems, 'id' => $id]);
    }
}
