<?php

namespace App\Models;

use Jenssegers\Mongodb\Eloquent\Model;

class Statistic extends Model
{
    protected $collection = 'users';
	protected $primaryKey = '_id';
	protected $connection = 'mongodb';
}
