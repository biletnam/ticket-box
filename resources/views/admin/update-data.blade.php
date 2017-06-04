@extends('layouts.admin')

@section('content')
<div class="content">
	<div class="row">
		<div class="col-md-7">
			<div class="card">
				<div class="header"  style="background-color: #ba0133; border-radius: 5px 5px 0 0; padding-bottom: 15px">
					<h4 class="title" style="color: white">Sunting Data Pembeli Tiket</h4>
					<p class="category" style="color: white">Isi Biodata pembeli dengan lengkap</p>
				</div>
				<div class="content">
					<form method="post" action="{{ url('/update-data') }}" enctype="multipart/form-data">
						{{ csrf_field() }}
						<input type="hidden" name="_method" value="put">
						<input type="hidden" name="user_id" id="user_id" value="{!! $transaction->customer->id !!}">
						<input type="hidden" name="transaction_id" id="transaction_id" value="{!! $transaction->id !!}">
						<div class="form-group">
							<label for="nomor_identitas">Nomor Identitas (KTP / SIM / KTM)</label>
							<input type="text" class="form-control" id="nomor_identitas" placeholder="Nomor Identitas" name="nomor_identitas" autofocus="" autocomplete="off" required="" value="{!! $transaction->customer->nomor_identitas !!}">
						</div>
						<div class="form-group">
							<label for="nama">Nama Lengkap</label>
							<input type="text" class="form-control" id="nama" placeholder="Nama Lengkap" name="nama" autocomplete="off" required="" value="{!! $transaction->customer->nama !!}">
						</div>
						<div class="form-group" id="email-container">
							<label for="nama">Email</label>
							<input type="email" class="form-control" id="email" placeholder="Email" name="email" autocomplete="off" required="" value="{!! $transaction->customer->email !!}">
						</div>
						<div class="form-group">
							<label for="umur">Umur</label>
							<input type="text" class="form-control" id="umur" placeholder="Umur" name="umur" autocomplete="off" required="" value="{!! $transaction->customer->umur !!}">
						</div>
						<div class="form-group">
							<label>Jenis Kelamin</label>
							<div>
								<label class="radio {{ ($transaction->customer->jenis_kelamin == 'Laki-laki') ? 'checked' : '' }}" id="radio-laki">
									<span class="icons">
										<span class="first-icon fa fa-circle-o"></span>
										<span class="second-icon fa fa-dot-circle-o"></span>
									</span>
									<input type="radio" data-toggle="radio" name="jenis_kelamin" value="Laki-laki" {{ ($transaction->customer->jenis_kelamin == 'Laki-laki') ? 'checked' : '' }}>Laki-laki
								</label>
							</div>
							<div>
								<label class="radio {{ ($transaction->customer->jenis_kelamin == 'Perempuan') ? 'checked' : '' }}" id="radio-perempuan">
									<span class="icons">
										<span class="first-icon fa fa-circle-o"></span>
										<span class="second-icon fa fa-dot-circle-o"></span>
									</span>
									<input type="radio" data-toggle="radio" name="jenis_kelamin" value="Perempuan" {{ ($transaction->customer->jenis_kelamin == 'Perempuan') ? 'checked' : '' }}>Perempuan
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
						<p class="category" style="color: white">Sunting Jenis Tiket Acara dan Pembayaran</p>
					</div>
					<div class="content">
						<div class="form-group">
							<label for="sel1">PILIH ACARA</label>
							<select class="form-control" id="select-acara" name="acara" required="">
								<option value="">Pilih Acara</option>
								@foreach($acara as $val)
								<option value="{!! $val->id !!}" {{ ($transaction->acara->id == $val->id) ? 'selected' : '' }}>{!! $val->nama_acara !!}</option>
								@endforeach()
							</select>
						</div>						

						<div class="detail-acara">
							
						</div>

						<div class="form-group">
							<label for="jumlah_pembayaran">Nominal Pembayaran</label>
							<div class="input-group">
								<span class="input-group-addon">Rp. </span>
								<input type="text" class="form-control" aria-label="Amount (to the nearest rupiah)" name="jumlah_pembayaran" id="jumlah_pembayaran" placeholder="Nominal Pembayaran" value="{!! $transaction->jumlah_pembayaran !!}" autocomplete="off">
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