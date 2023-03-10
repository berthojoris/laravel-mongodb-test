<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Jenssegers\Mongodb\Eloquent\Model;

class Statistic extends Model
{
    protected $collection = 'users';
	protected $primaryKey = '_id';
	protected $connection = 'mongodb';

	protected $appends = ['times'];

	public function getTimesAttribute()
	{
		$start = Carbon::createFromTimestamp($this->getAttribute('loginStart'));
		$end = Carbon::createFromTimestamp($this->getAttribute('loginEnd'));

		return $start->diffInMinutes($end);
	}
}
