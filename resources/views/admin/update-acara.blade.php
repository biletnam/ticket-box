@extends('layouts.admin')

@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="header"  style="background-color: #ba0133; border-radius: 5px 5px 0 0; padding-bottom: 15px">
					<h4 class="title" style="color: white">Daftar Acara</h4>
					<p class="category" style="color: white">Lihat daftar acara yang tersedia</p>
				</div>
				<div class="content table-responsive">
					<table class="table table-bordered table-condensed text-center">
						<thead>
							<td width="150">Nama Acara</td>
							<td width="120">Harga Tiket</td>
							<td width="150">Lokasi</td>
							<td>Aksi</td>
						</thead>
						@foreach($acara as $val)
						<tr>
							<td>{!! $val->nama_acara !!}</td>
							<td>{!! $val->harga_tiket !!}</td>
							<td>{!! $val->lokasi !!}</td>
							<td>
								<a href="{{ url("/edit-acara/$val->id") }}" class="btn btn-danger"><i class="glyphicon glyphicon-edit"></i></a>
								<a href="{{ url("/delete-acara/$val->id") }}" class="btn btn-hapus"><i class="glyphicon glyphicon-trash"></i></a>
							</td>
						</tr>
						@endforeach()
					</table>
					{{ $acara->links() }}
				</div>
			</div>
		</div>
		<div class="col-md-5">
			<div class="card">
				<div class="header"  style="background-color: #ba0133; border-radius: 5px 5px 0 0; padding-bottom: 15px">
					<h4 class="title" style="color: white">Sunting Acara</h4>
					<p class="category" style="color: white">Ubah acara dari database</p>
				</div>
				<div class="content">
					<form method="post" action="{{ url('/acara') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="put">
						<input type="hidden" name="id" value="{!! $acara_edit->id !!}">
						<div class="form-group">
							<label for="nama_acara">Nama Acara</label>
							<input type="text" class="form-control" id="nama_acara" placeholder="Nama acara" name="nama_acara" autocomplete="off" required="" value="{!! $acara_edit->nama_acara !!}">
						</div>
						<div class="form-group" id="email-container">
							<label for="harga_tiket">Harga Tiket</label>
							<div class="input-group">
								<span class="input-group-addon">Rp. </span>
								<input type="text" class="form-control" aria-label="Amount (to the nearest rupiah)" name="harga_tiket" id="harga_tiket" placeholder="Harga Tiket" value="{!! $acara_edit->harga_tiket !!}">
							</div>
						</div>
						<div class="form-group">
							<label for="lokasi">Lokasi</label>
							<input type="text" class="form-control" id="lokasi" placeholder="Lokasi" name="lokasi" autocomplete="off" required="" value="{!! $acara_edit->lokasi !!}" autocomplete="off">
						</div>
						<input type="submit" class="btn btn-block btn-info" value="Simpan">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection