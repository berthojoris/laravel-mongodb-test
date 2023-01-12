<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
	{
		$users = Statistic::all()->pluck('username');
		$times = Statistic::all()->pluck('times');

		return view('statistic', compact('users', 'times'));
	}
}
