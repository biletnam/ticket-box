<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer as Customer;
use App\Acara as Acara;
use App\Transactions as Transaction;

class TransactionController extends Controller
{
	public function index()
	{
		$transactions = Transaction::orderBy('id', 'desc')->paginate(5);
		return view('admin.home', compact('transactions'));
	}

	public function delete(Request $request, $id) {
		$transaction = Transaction::find($id);
		$transaction->delete();
		return redirect('home');
	}

	public function updateForm($id) {
		$transaction = Transaction::find($id);
		$acara = Acara::all();
		return view('admin.update-data', compact('transaction', 'acara'));
	}

	public function update(Request $request) {
		$customer = Customer::find($request->user_id);
		$customer->nama = $request->nama;
		$customer->nomor_identitas = $request->nomor_identitas;
		$customer->umur = $request->umur;
		$customer->jenis_kelamin = $request->jenis_kelamin;
		$customer->email = $request->email;
		$customer->save();
		$acara = Acara::select('harga_tiket')->find($request->acara);
		$harga_tiket = $acara->harga_tiket;
		$status_pembayaran = ($harga_tiket <= $request->jumlah_pembayaran) ? 1 : 0;
		$transaction = Transaction::find($request->transaction_id);
		$transaction->user_id = $request->user_id;
		$transaction->acara_id = $request->acara;
		$transaction->jumlah_pembayaran = $request->jumlah_pembayaran;
		$transaction->status_pembayaran = $status_pembayaran;
		$transaction->save();
		return redirect('home');
	}
}
