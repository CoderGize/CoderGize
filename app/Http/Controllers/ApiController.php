<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Partner;
use App\Models\Process;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getUser()
    {
        $user = User::all();

        return response()->json($user);
    }

    public function getHero(){

        $hero = Hero::all();

        return response()->json($hero);

    }

    public function getService(){

        $service = Service::all();

        return response()->json($service);

    }

    public function getProcess(){

        $process = Process::all();

        return response()->json($process);

    }

    public function getpartner(){

        $partner = Partner::all();

        return response()->json($partner);

    }





}
