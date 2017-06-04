<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
	protected $table = 'acara';
	public $timestamps = false;

	protected $fillable = ['nama_acara', 'harga_tiket', 'lokasi'];

	public function transactions() {
		return $this->hasOne('App\Transactions');
	}
}
