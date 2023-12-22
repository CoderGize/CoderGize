<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\Partner;
use App\Models\Process;
use App\Models\Service;
use App\Models\Customer;
use App\Models\Strategy;
use App\Models\Info;
use App\Models\Description;
use App\Models\Category;
use App\Models\Project;
use App\Models\Servicepage;
use App\Models\Pop;
use App\Models\Serviceslider;
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

    public function getServiceSlider(){

        $serviceslider = ServiceSlider::all();

        return response()->json($serviceslider);

    }

    public function getCustomer(){

        $customer = Customer::all();

        return response()->json($customer);

    }

    public function getStrategy(){

        $strategy = Strategy::all();

        return response()->json($strategy);

    }

    public function getPop(){

        $pop = Pop::all();

        return response()->json($pop);

    }

    public function getInfo(){

        $info = Info::all();

        return response()->json($info);

    }

    public function getDescription(){

        $description = Description::all();

        return response()->json($description);

    }

    public function getProject(){

        $project = Project::all();

        return response()->json($project);

    }

    public function getCategory(){

        $category = Category::all();

        return response()->json($category);

    }

    public function getServicePage(){

        $service_page = Servicepage::find(1);

        return response()->json($service_page);

    }

    public function getSocial(){

        $social = Social::all();

        return response()->json($social);

    }




}
