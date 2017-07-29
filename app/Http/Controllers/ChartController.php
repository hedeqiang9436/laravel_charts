<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ConsoleTVs\Charts\Facades\Charts;
class ChartController extends Controller
{
    public function index()
    {
        $chart = Charts::create('line', 'highcharts')
            ->title('My nice chart')
            ->labels(['First', 'Second', 'Third'])
            ->values([5,10,20])
            ->dimensions(1000,500)
            ->responsive(false);
        return view('welcome', ['chart' => $chart]);
    }
}
