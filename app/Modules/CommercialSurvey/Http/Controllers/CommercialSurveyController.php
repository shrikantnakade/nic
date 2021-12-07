<?php

namespace App\Modules\CommercialSurvey\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//added comment
class CommercialSurveyController extends Controller
{

    /**
     * Display the module welcome screen
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        return view("CommercialSurvey::welcome");
    }
}
