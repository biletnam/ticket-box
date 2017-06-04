<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.ico') }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Ticket Box Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
  <meta name="csrf_token" content="{{ csrf_token() }}" id="token">

  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet"/>
  <link href="{{ asset('css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <link href="{{ asset('css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="wrapper">
    <div class="sidebar" data-color="black" data-image="{{ asset('img/background.jpg') }}">
     <div class="sidebar-wrapper">
      <h5 class="text-center judul">Ticket Box</h5>
      <hr>
      <div class="logo">
        <a href="#" class="simple-text judul">
          <img src="{{ asset('img/orang.png') }}" width="100" height="100">
          <h6 class="username">{{ Auth::user()->name }}</h6>
        </a>
      </div>

      <ul class="nav">
        <li {{ (Request::is('home')) ? 'class=active' : '' }}>
          <a href="{{ url('home') }}">
            <i class="pe-7s-note2"></i>
            <p>Transaksi</p>
          </a>
        </li>
        <li {{ (Request::is('manual-input')) ? 'class=active' : '' }}>
          <a href="{{ url('manual-input') }}">
            <i class="pe-7s-note"></i>
            <p>Manual Input</p>
          </a>
        </li>
        <li {{ (Request::is('acara')) ? 'class=active' : '' }}>
          <a href="{{ url('acara') }}">
            <i class="pe-7s-date"></i>
            <p>Daftar Acara</p>
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="main-panel">
    <nav class="navbar navbar-default navbar-fixed">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                Menu
                <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('home') }}">Transaksi</a></li>
                <li><a href="{{ url('manual-input') }}">Manual Input</a></li>
                <li><a href="{{ url('acara') }}">Acara</a></li>
              </ul>
            </li>
            <li>
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <footer class="footer">
      <div class="container-fluid">
        <p class="copyright pull-right">
          &copy; 2017 <a href="#">Ticket Box.</a>, made with love for a better human experience
        </p>
      </div>
    </footer>

  </div>
</div>
@if(isset($transaction))
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Data Transaksi</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin untuk menghapus transaksi tersebut?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-danger button-hapus">Hapus</a>
      </div>
    </div>
  </div>
</div>
@endif

@if(isset($acara))
<div id="hapusacara" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus Acara</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin untuk menghapus acara tersebut?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <a href="#" class="btn btn-danger button-hapus-acara">Hapus</a>
      </div>
    </div>
  </div>
</div>
@endif
</body>

<script src="{{ asset('js/jquery-1.10.2.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/bootstrap-checkbox-radio-switch.js') }}"></script>
<script src="{{ asset('js/chartist.min.js') }}"></script>
<script src="{{ asset('js/light-bootstrap-dashboard.js') }}"></script>
<script src="{{ asset('/js/search-acara.js') }}" type="text/javascript" ></script>
<script src="{{ asset('/js/search-customer.js') }}" type="text/javascript" ></script>
<script src="{{ asset('/js/email-checker.js') }}" type="text/javascript" ></script>
<script src="{{ asset('/js/include.js') }}" type="text/javascript" ></script>

</html>
