<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer as Customer;
use App\Acara as Acara;
use App\Transactions as Transaction;

class CustomerController extends Controller
{

	public function create(Request $request) {
		if (Customer::where('email', $request->email)->count() < 1 ) {
			$customer = new Customer;
			$customer->nama = $request->nama;
			$customer->nomor_identitas = $request->nomor_identitas;
			$customer->umur = $request->umur;
			$customer->jenis_kelamin = $request->jenis_kelamin;
			$customer->email = $request->email;
			$customer->save();
		}
		$user_id = $request->id;
		if (!isset($request->id)) {
			$user = Customer::select('id')->where('email', $request->email)->first();
			$user_id = $user->id;			
		}
		$acara = Acara::select('harga_tiket')->find($request->acara);
		$harga_tiket = $acara->harga_tiket;
		$status_pembayaran = ($harga_tiket <= $request->jumlah_pembayaran) ? 1 : 0;
		$transaction = new Transaction;
		$transaction->user_id = $user_id;
		$transaction->acara_id = $request->acara;
		$transaction->jumlah_pembayaran = $request->jumlah_pembayaran;
		$transaction->status_pembayaran = $status_pembayaran;
		$transaction->save();
		return redirect('home');
	}

	public function input() {
		$acara = Acara::all();
		return view('admin.insert-data', compact('acara'));
	}

	public function searchCustomer(Request $request) {
		$customer = Customer::where('nomor_identitas', $request->search)->orWhere('email', $request->search)->first();
		return $customer;
	}

	public function delete($id) {
		$customer = Customer::find($id);
		$customer->delete();
		return redirect('home');
	}
}
