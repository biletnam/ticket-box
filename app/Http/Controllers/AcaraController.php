<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acara as Acara;

class AcaraController extends Controller
{
	public function searchAcara(Request $request) {
		$acara = Acara::find($request->search);
		return $acara;
	}

	public function insertForm() {
		$acara = Acara::orderBy('id', 'desc')->paginate(4);
		return view('admin.insert-acara', compact('acara'));
	}

	public function insert(Request $request) {
		$acara = new Acara;
		$acara ->nama_acara = $request->nama_acara;
		$acara ->harga_tiket = $request->harga_tiket;
		$acara ->lokasi = $request->lokasi;
		$acara->save();
		return redirect('acara');
	}

	public function delete($id) {
		$acara = Acara::find($id);
		$acara->delete();
		return redirect('acara');
	}

	public function updateForm($id) {
		$acara = Acara::orderBy('id', 'desc')->paginate(4);
		$acara_edit = Acara::find($id);
		return view('admin.update-acara', compact('acara', 'acara_edit'));
	}

	public function update(Request $request) {
		$acara = Acara::find($request->id);
		$acara ->nama_acara = $request->nama_acara;
		$acara ->harga_tiket = $request->harga_tiket;
		$acara ->lokasi = $request->lokasi;
		$acara->save();
		return redirect('acara');		
	}
}
