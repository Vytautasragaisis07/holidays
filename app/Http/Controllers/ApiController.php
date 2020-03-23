<?php

namespace App\Http\Controllers;

use App\Holiday;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function allHolidays()
    {

        $holidays = Holiday::all();

        return $holidays;
    }

}
