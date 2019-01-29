<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
	protected $fillable = [
		'artisan_nom',
		'id_metier',
		'departement',
		'email',
	];
}
