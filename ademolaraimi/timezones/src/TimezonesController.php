<?php

namespace Ademolaraimi\Timezones;
 
use Carbon\Carbon;
use App\Http\Controllers\Controller;
 
class TimezonesController extends Controller
{
 
    public function index($timezone = NULL)
    {
        $current_time = ($timezone)
            ? Carbon::now(str_replace('-', '/', $timezone))
            : Carbon::now();

        return view('timezones::time', compact('current_time'));
    }
}