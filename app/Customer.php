<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

	protected $table = 'customers';
	public $timestamps = false;

	protected $fillable = ['nama', 'nomor_identitas', 'umur', 'jenis_kelamin', 'email'];

	public function transactions() {
		return $this->hasMany('App\Transactions');
	}
}
