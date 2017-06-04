@extends('layouts.admin')

@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="header"  style="background-color: #ba0133; border-radius: 5px 5px 0 0; padding-bottom: 15px">
					<h4 class="title" style="color: white">Input Data Pembeli Tiket</h4>
					<p class="category" style="color: white">Isi Biodata pembeli dengan lengkap</p>
				</div>
				<div class="content">
					<form method="post" action="{{ url('/customer') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="post">
						<input type="hidden" name="user_id" id="user_id">
						<div class="form-group">
							<label for="nomor_identitas">Nomor Identitas (KTP / SIM / KTM)</label>
							<input type="text" class="form-control" id="nomor_identitas" placeholder="Nomor Identitas" name="nomor_identitas" autofocus="" autocomplete="off" required="">
						</div>
						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" autocomplete="off" required="">
						</div>
						<div class="form-group" id="email-container">
							<label for="nama">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email" name="email" autocomplete="off" required="">
						</div>
						<div class="form-group">
							<label for="umur">Umur</label>
							<input type="text" class="form-control" id="umur" placeholder="Umur" name="umur" autocomplete="off" required="">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div>
								<label class="radio checked" id="radio-laki">
									<span class="icons">
										<span class="first-icon fa fa-circle-o"></span>
										<span class="second-icon fa fa-dot-circle-o"></span>
									</span>
									<input type="radio" data-toggle="radio" name="jenis_kelamin" value="Laki-laki" checked="">Laki-laki
								</label>
							</div>
							<div>
								<label class="radio" id="radio-perempuan">
									<span class="icons">
										<span class="first-icon fa fa-circle-o"></span>
										<span class="second-icon fa fa-dot-circle-o"></span>
									</span>
									<input type="radio" data-toggle="radio" name="jenis_kelamin" value="Perempuan">Perempuan
								</label>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="card">
					<div class="header"  style="background-color: #ba0133; border-radius: 5px 5px 0 0; padding-bottom: 15px">
						<h4 class="title" style="color: white">Tiket dan Pembayaran</h4>
						<p class="category" style="color: white">Pilih Jenis Tiket Acara dan Pembayaran</p>
					</div>
					<div class="content">
						<div class="form-group">
							<label for="sel1">PILIH ACARA</label>
							<select class="form-control" id="select-acara" name="acara" required="">
								<option value="">Pilih Acara</option>
								@foreach($acara as $val)
								<option value="{!! $val->id !!}">{!! $val->nama_acara !!}</option>
								@endforeach()
							</select>
						</div>						

						<div class="detail-acara">
							
						</div>

						<div class="form-group">
							<label for="jumlah_pembayaran">Nominal Pembayran</label>
							<div class="input-group">
								<span class="input-group-addon">Rp. </span>
								<input type="text" class="form-control" aria-label="Amount (to the nearest rupiah)" name="jumlah_pembayaran" id="jumlah_pembayaran" placeholder="Nominal Pembayaran" autocomplete="off">
							</div>
						</div>
						<button type="submit" class="btn btn-info btn-block">Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection