<?php

namespace App\Modules\ResidentialSurvey\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ResidentialSurveyController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("ResidentialSurvey::welcome");
    }
}
