<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable = [
		'uid',
		'First_Name',
		'Last_Name',
		'Streeet',
		'City',
		'State',
		'Zip',
		'Mobile_Phone',
		'Home_Phone'		
	];
	
	protected $guarded = ['uid'];
}
