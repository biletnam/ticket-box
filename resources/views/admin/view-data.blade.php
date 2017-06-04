@extends('layouts.admin')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-7">
       <div class="card">
         <div class="header"  style="background-color: #ba0133; border-radius: 5px 5px 0 0; padding-bottom: 15px">
           <h4 class="title" style="color: white">Data Member</h4>
           <p class="category" style="color: white">Lihat Detail Member {!! $customer->nama !!}</p>
         </div>
         <div class="content">
          <div class="panel-body">
            <div class="row">
              <div class="col-md-3 col-lg-3 " align="center"> 
                <img alt="User Pic" src="{{ ($customer->jenis_kelamin == 'Laki-laki') ? asset('img/man.png') : asset('img/girl.png') }}" class="img-circle img-responsive"> 
              </div>
              <div class=" col-md-9 col-lg-9 "> 
                <table class="table table-user-information">
                  <tbody>
                    <tr>
                      <td>Nama Lengkap</td>
                      <td>{!! $customer->nama !!}</td>
                    </tr>
                    <tr>
                      <td>Nomor Identitas</td>
                      <td>{!! $customer->nomor_identitas !!}</td>
                    </tr>
                    <tr>
                      <td>Email</td>
                      <td>{!! $customer->email !!}</td>
                    </tr>
                    <tr>
                      <td>Umur</td>
                      <td>{!! $customer->umur !!}</td>
                    </tr>
                    <tr>
                      <td>Jenis Kelamin</td>
                      <td>{!! $customer->jenis_kelamin !!}</td>
                    </tr>
                    <tr>
                    </tbody>
                  </table>

                  <button type="button" class="btn btn-hapus hapus-member pull-right" data-toggle="modal" data-target="#delete-member" data-id="{!! $customer->id !!}" style="margin-top: 13px">Hapus Member</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5">
       <div class="card">
         <div class="header"  style="background-color: #ba0133; border-radius: 5px 5px 0 0; padding-bottom: 15px">
           <h4 class="title" style="color: white">Transaksi Penjualan Tiket</h4>
           <p class="category" style="color: white">Riwayat pembelian tiket {!! $customer->nama !!}</p>
         </div>
         <div class="content table-responsive">
          <div class="row">
            <ul class="listrap">
              @foreach($customer->transactions as $val)
              <li>
                <div class="listrap-toggle">
                  <img src="{{ asset('img/ticket.png') }}" width="60"/>
                </div>
                <strong>
                  {!! $val->acara->nama_acara !!} 
                  <button type="button" class="btn btn-hapus hapus-transaksi pull-right" data-toggle="modal" data-target="#myModal" data-id="{!! $val->id !!}" style="margin-top: 13px">
                    <i class="glyphicon glyphicon-trash"></i>
                  </button>
                </strong>
              </li>
              @endforeach()
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

@endsection()