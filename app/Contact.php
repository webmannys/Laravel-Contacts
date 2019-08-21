<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable = [
		'First_Name',
		'Last_Name',
		'Street',
		'City',
		'State',
		'Zip',
		'Mobile_Phone',
		'Home_Phone'		
	];
	
}
