@extends('layouts.admin')

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
     <div class="col-md-12">
       <div class="card">
         <div class="header"  style="background-color: #ba0133; border-radius: 5px 5px 0 0; padding-bottom: 15px">
           <h4 class="title" style="color: white">Daftar Transaksi Penjualan Tiket</h4>
           <p class="category" style="color: white">Lihat dan pantau penjualan tiket</p>
         </div>
         <div class="content table-responsive">
           <table class="table table-bordered table-condensed text-center">
             <thead>
               <td>Nama Peserta</td>
               <td>Email</td>
               <td>Nama Acara</td>
               <td>Pembayaran</td>
               <td>Aksi</td>
             </thead>
             @foreach($transactions as $transaction)
             <tr>
               <td>{!! $transaction->customer->nama !!}</td>
               <td>{!! $transaction->customer->email !!}</td>
               <td>{!! $transaction->acara->nama_acara !!}</td>
               <td>
                 {!! ($transaction->status_pembayaran) ?  "<p class='status-sudah'>Lunas</p>" : '<p class="status-belum">Belum Lunas</p>' !!}
               </td>
               <td>
                 <a href="{{ url("/view-data/$transaction->id") }}" class="btn btn-danger"><i class="glyphicon glyphicon-eye-open"></i></a>                
                 <a href="{{ url("/edit-data/$transaction->id") }}" class="btn btn-danger"><i class="glyphicon glyphicon-edit"></i></a>
                 <button type="button" class="btn btn-hapus hapus-transaksi" data-toggle="modal" data-target="#myModal" data-id="{!! $transaction->id !!}"><i class="glyphicon glyphicon-trash"></i></button>
               </td>
             </tr>
             @endforeach()
           </table>
           {{ $transactions->links() }}
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

@endsection()