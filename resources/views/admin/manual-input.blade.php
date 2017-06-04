@extends('layouts.admin')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="card">
          <div class="header">
           <h4 class="title">Input Unique ID</h4>
           <p class="category">Masukan unik id untuk verifikasi manual</p>
         </div>
         <hr>
         <div class="content">
           <form class="form-inline">
            <div class="form-group">
              <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Masukan Unique ID" style="width: 309px;">
            </div>
            <button type="submit" class="btn" style="background-color: #ba0133; color: white">Temukan Unique ID</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="header">
          <h4 class="title">Daftar Peserta</h4>
          <p class="category">Verifikasi manual peserta yang sudah terdaftar</p>
        </div>
        <hr>
        <div class="content table-responsive">
          <table class="table table-condensed table-bordered text-center">
            <thead style="background-color: #ba0133; color: white">
              <td>Nama Peserta</td>
              <td>Nomor Identitas</td>
              <td>Email</td>
              <td>Jumlah Pembayaran</td>
              <td>Status Pembayaran</td>
              <td>Status Kehadiran</td>
              <td>Unique ID</td>
              <td>Action</td>
            </thead>
            <div class="modal fade" tabindex="-1" role="dialog" id="myModal">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Warning Notification </h4>
                  </div>
                  <div class="modal-body">
                    <p>Apakah anda yakin ingin memprosesnya?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Yes</button>
                  </div>

                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <tr>
              <td>Abid Bagus Kurniawan</td>
              <td>155150401111001</td>
              <td>abidbagudkurniawan@gmail.com</td>
              <td>100.001</td>
              <td>Sudah</td>
              <td>Belum Hadir</td>
              <td>MXXJE-3424</td>
              <td><button class="btn btn-success" data-toggle="modal" data-target="#myModal">Verifikasi</button></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
@endsection()