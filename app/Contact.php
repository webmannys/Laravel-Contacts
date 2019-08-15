<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $fillable = [
		'First_Name',
		'Last_Name',
		'Streeet',
		'City',
		'State',
		'Zip',
		'Mobile_Phone',
		'Home_Phone'		
	];
	
	public function author() {
    return $this->belongsTo('App\User', 'user_id');
  }
}
