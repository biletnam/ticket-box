<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    protected $table = 'transactions';
    public $timestamps = false;

    protected $fillable = ['user_id', 'acara_id', 'jumlah_pembayaran', 'status_pembayaran', 'status_kehadiran', 'unique_id', 'is_terverifikasi'];

    public function acara() {
    	return $this->belongsTo('App\Acara', 'acara_id');
    }

    public function customer() {
    	return $this->belongsTo('App\Customer', 'user_id');
    }
}
