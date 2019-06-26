<!Doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ela Admin - HTML5 Admin Template</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('images/favicon.png')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">

    <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/pe-icon-7-filled.css')}}">


    <link href="{{asset('assets/weather/css/weather-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/calendar/fullcalendar.css')}}" rel="stylesheet" />

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link href="{{asset('assets/css/charts/chartist.min.css')}}" rel="stylesheet"> 
    <link href="{{asset('assets/css/lib/vector-map/jqvmap.min.css')}}" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-datepicker3.css')}}"> 
    <link href="{{asset('assets/css/nice-select.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/daterangepicker.css')}}"> 

  

</head>
<body ">


    <!-- Left Panel --> 
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default"> 
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                
                <ul class="nav navbar-nav">
                    <li >
                        <div ><a class="navbar-brand" href="./"><img src="{{asset('images/LOGOESTUSAE2.png')}}" alt="Logo"></a></div> 
                    </li>

                    <li class="">
                        <a href="index"><img class="menu-icon" src="{{asset('assets/icons/icon_dashboard.svg')}}">Dashboard </a>
                    </li>
                    <li class=" menu-item-has-children dropdown show open">
                        <a href="#" class="active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="active menu-icon" src="{{asset('assets/icons/icon_inventori.svg')}}">Inventori</a>
                        <ul class="sub-menu children dropdown-menu show">
                            <li ><i class="  fa fa-circle "></i><a  href="produk">Produk</a></li>
                            <li><i class="active fa fa-circle"></i><a class="active" href="stokmasuk">Stok Masuk</a></li>
                            <li><i class="fa fa-circle"></i><a href="stokkeluar">Stok Keluar</a></li>
                            
                            <li><i class="fa fa-circle"></i><a href="totalstok">Total Stok</a></li>
                            <li><i class="fa fa-circle"></i><a href="supplier">Supplier</a></li>
                            <li><i class="fa fa-circle"></i><a href="returbarang">Retur Barang</a></li>
                            <li><i class="fa fa-circle"></i><a href="returpenjualan">Retur Penjualan</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class=" menu-icon" src="{{asset('assets/icons/icon_pegawai.svg')}}">Pegawai</a>
                        <ul class="sub-menu children dropdown-menu">
                           <li ><i class="fa fa-circle "></i><a href="datapegawai">Data Pegawai</a></li>
                            <li><i class="fa fa-circle"></i><a href="penjualan">Penjualan</a></li>
                            <li><i class="fa fa-circle"></i><a href="keuntungan">Keuntungan</a></li>
                            <li><i class="fa fa-circle"></i><a href="setoran">Setoran</a></li>
                            <li><i class="fa fa-circle"></i><a href="returpegawai">Retur Penjualan</a></li>
                            <li><i class=" fa fa-circle"></i><a class="" href="komisi">Komisi</a></li>
                            <li><i class=" fa fa-circle"></i><a href="pinjaman">Pinjaman</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class=" menu-icon" src="{{asset('assets/icons/icon_pelanggan.svg')}}">Pelanggan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li ><i class=" fa fa-circle "></i><a   href="datatoko">Data Toko</a></li>
                           <li ><i class=" fa fa-circle "></i><a href="pembelian">Pembelian</a></li>
                           <li ><i class=" fa fa-circle "></i><a href="returbarangpelanggan">Retur Barang</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class=" menu-icon" src="{{asset('assets/icons/icon_pengaturan.svg')}}">Pengaturan</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                        </ul>
                    </li>
                    
                    

                    
                    
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel --> 
    <!-- Left Panel -->



    <!-- Right Panel --> 
    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">  
            <div class="top-right">
                
            </div>
            <div class="top-right"> 
                <div class="header-menu"> 
                   <div class="dropdown for-notification">
                            <a class="nickname">Administrator</a>
                    </div>

                    <div class="user-area dropdown float-right">

                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('images/white.jpg')}}" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

                            <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

                            <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div> 
                </div>  
            </div>
        </header><!-- /header -->
        <!-- Header-->


        <div class="content pb-0">

            <!-- Widgets  -->
            <div class="row" style="margin-bottom: 30px">
                <div class="col-lg-3 col-md-6">
                    <h3 style="color:#8c8e8d;"><b>Stok Masuk</b></h3>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-4 ">               
                            <div class="input-prepend input-group" style="width: 190px;-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);"> 
                            <input type="button" value="    Tanggal                       &#x1F4C6;" style="cursor: pointer;"  name="reportrange" id="reportrange" class="text-left form-control" value=""><span class=""></span>
                            

                            </div>        
                        </div>
                        <div class="col-lg-1">
                        </div>
                        
                        <div class="col-lg-4">
                            
                                <div id ="filter_global" class="input-group" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                    <input id="global_filter" name="x_card_code" type="text" class="form-control global_filter cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Cari">
                                    

                                        <div class="input-group-addon">
                                            <span class="fa fa-search fa-sm" data-toggle="popover" data-container="body" data-html="true"data-title="Security Code"
                                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                            data-trigger="hover"></span>
                                         </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" style="padding-left: unset!important">
                    <div class="row">
                        

                        <div class="col-lg-6 col-md-2" >
                            
                                
                                    <div class="input-group-btn text-right">
                                        <button class="btn btn-secondary" style="-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);" data-toggle="modal" data-target="#mediumModal">
                                            <i class="fa fa-plus fa-lg"></i> <a class="tambah">Tambah</a>
                                        </button>
                                    </div>
                               
                            
                        </div>
                        <div class="col-lg-6 col-md-2">
                           
                                
                                    <div class="input-group-btn" >
                                        <button class="btn btn-secondary " id="unduhexcel" style="-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);">
                                            <i class="fa fa-arrow-down fa-lg"></i><a class="unduh">Unduh</a>
                                        </button>
                                    </div>
                                
                            
                        </div>

                    </div>
                </div>

                
            </div> 
            <!-- Widgets End -->


          
            <div class="row">
                <div class="col-lg-12">
                        <div class="card" >
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Stok Masuk</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Jumlah</th>
                                            <th>Supplier</th>
                                            <th>Harga Beli</th>
                                            <th>Tanggal Masuk</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $i)
                                        <tr>  
                                            <td>{{$i->kode}}</td>
                                            <td>{{$i->kd_product}}</td>
                                            <td>{{$i->nama}}</td>
                                            <td>{{ number_format($i->jumlah,0,',','.')}}</td>
                                            <td>{{$i->supplier}}</td>
                                            <td>{{"Rp. ". number_format($i->harga,2,',','.')}}</td>
                                            <td><?php echo date('M d, Y', strtotime($i->tgl_masuk)); ?></td>
                                            <td><button type='button' class='detaildata' data-toggle='modal' data-target='#largeModal1' data-info="{{$i->kode}},{{$i->nama}},{{$i->supplier}},{{ number_format($i->jumlah,0,',','.')}},{{'Rp. '. number_format($i->harga,2,',','.')}},{{$i->tgl_masuk}},{{$i->kd_supplier}},{{$i->kd_product}}">Detail</button><button type='button' class='editdata' data-toggle='modal' data-target='#largeModal' data-info="{{$i->kode}},{{$i->nama}},{{$i->supplier}},{{ number_format($i->jumlah,0,',','.')}},{{'Rp. '.number_format($i->harga,2,',','.')}},{{$i->tgl_masuk}},{{$i->kd_supplier}},{{$i->kd_product}}">Edit</button><button type='button' class='deletedata' data-toggle='modal' data-target='#deletedata' data-info='{{$i->kode}},{{$i->nama}},{{$i->jumlah}},{{$i->supplier}},{{$i->harga}},{{$i->tgl_masuk}}'>Hapus</button></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    
                                </table>
                            </div>
                        </div>
                     
                </div><!-- /# column -->
            </div>
            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form id="tambah" method="POST" action="{{ url('stokmasukAdd') }}">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <a class="modal-title" id="mediumModalLabel">Tambah Stok Masuk</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                             <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Kode Barang</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <select data-placeholder="" type="text" id="kode" name="kode" class=" form-control form-input standardSelect required" tabindex="1"> 
                                        <option  class="option" value=""  selected>Pilih Kode Barang</option>
                                        @foreach($produk as $p)
                                            <option value="{{ $p->kode }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Supplier</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                  
                                    <select data-placeholder="" type="text" id="supplier" name="supplier" class=" form-control form-input standardSelect required" tabindex="1"> 
                                        <option  class="option" value=""  selected>Pilih Supplier</option>
                                        @foreach($supplier as $s)
                                            <option value="{{ $s->kode }}">{{ $s->nama }}</option>
                                        @endforeach
                                        
                                    </select>

                                </div>
                            </div>
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Jumlah</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="jumlah" name="jumlah" placeholder="Masukan Jumlah Barang" class="required form-control form-input">
                                    
                                </div>
                            </div>
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Harga Beli</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="hargabeli" name="hargabeli" placeholder="Masukan Harga Beli" class="required form-control form-input">
                                    
                                </div>
                            </div> 
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Tanggal</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="tanggal" autocomplete="off" name="tanggal" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
                                </div>
                            </div>
                            
                          
                        </div>
                        <div class="modal-footer">
                            <input  type="reset" value="Batal" class="btn btn-danger" data-dismiss="modal">
                            <input  type="submit" value="Tambah" class="btn btn-success">
                        </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <div class="modal-content">
                    <form id="editdata" method="POST" action="{{ url('stokmasukUpdate') }}">
                    {{ csrf_field() }}
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Ubah Stok Masuk</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Kode Stok Masuk</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahkodestokmasuk" name="ubahkodestokmasuk"  class="form-control form-input"  readonly>
                                </div>
                            </div>
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Kode Barang</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahkodebarang" name="ubahkode"  class="form-control form-input"  readonly>
                                </div>
                            </div>
                             
                            
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Supplier</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                  
                                    <select data-placeholder="" type="text" id="ubahsupplier" name="ubahsupplier" class=" form-control form-input standardSelect required" tabindex="1"> 
                                        <option  class="option" value="" hidden  selected>Pilih Supplier</option>
                                        @foreach($supplier as $s)
                                            <option value="{{ $s->kode }}">{{ $s->nama }}</option>
                                        @endforeach
                                        
                                    </select>

                                </div>
                            </div>
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Jumlah</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahjumlah" name="ubahjumlah" placeholder="Masukan Jumlah Barang" class="required form-control form-input">
                                    
                                </div>
                            </div>
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Harga Beli</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahhargabeli" name="ubahhargabeli" placeholder="Masukan Harga Beli" class="required form-control form-input">
                                    
                                </div>
                            </div> 
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Tanggal</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahtanggal" name="ubahtanggal" placeholder="Pilih tanggal" class="required tanggal form-control form-input" >
                                </div>
                            </div>
                            
                          
                        </div>
                        <div class="modal-footer">
                            <input  type="reset" value="Batal" class="btn btn-danger" data-dismiss="modal">
                            <input  type="submit" value="Ubah" class="btn btn-success">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
            
            <div class="modal fade" id="deletedata" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <div class="modal-content">
                    <form id="" method="POST" action="{{url('stokmasukDelete')}}">
                        {{csrf_field()}}
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Hapus Data Stok Masuk</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                         <div class="modal-body">
                            <div class="row form-space">
                                
                                <div class="col-lg-12 text-left">
                                    <div class="form-tambah">
                                        <a >Apakah Anda yakin menghapus Data ini?</a>
                                    </div>
                                </div>
                                <input  type="text" id="kode" name="kode" class="did required form-control form-input" hidden>
                                
                            </div>
                            

                        </div>
                        <div class="modal-footer">
                            <input  type="reset" value="Batal" class="btn btn-danger" data-dismiss="modal">
                            <input  type="submit" value="Hapus" class="btn btn-success">

                        </div>
                    </form>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <div class="modal-content">
                    <form id="editdata">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Detail Stok Keluar</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row form-space-detail" >
                                <div class="col-md-3 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >ID StokMasuk</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <input id="detailkodestokmasuk" >
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Kode Barang </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                       <input id="detailkodebarang" >
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Nama Barang </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <input id="detailnamabarang" >
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Jumlah </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <input id="detailjumlah" >
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Supplier </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <input id="detailnamasupplier" ></input>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Harga Beli </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <input id="detailhargabeli" ></input>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Tanggal Masuk</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <input id="detailtanggalmasuk" ></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input  type="reset" value="Tutup" class="btn btn-danger" data-dismiss="modal">
                            
                        </div>
                    </form>
                    </div>
                </div>
            </div>


  

          


        </div> <!-- .content -->


        
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-12 text-center" style="font-weight: 500;font-size: 16px">
                        Copyright &copy; 2018 <a style="color:#03bbd3;">Kuproy GN</a>. All right reserved.
                    </div>
                </div>
            </div>
        </footer>
         


        </div><!-- /#right-panel -->


    <script src="{{asset('assets/js/vendor/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
     <script src="{{asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/validate/jquery.validate.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nice-select.js')}}"></script>
    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/daterangepicker.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
   






     
    <script type="text/javascript">
        $(document).ready(function() {
                        $('#kode').niceSelect();
                        $('#supplier').niceSelect();
                         $('input.global_filter').on( 'keyup click', function () {
                             $('#bootstrap-data-table').DataTable().search(
                                $('#global_filter').val(),
                                
                            ).draw();
                            } );
                         

                          $(function() {
                            var start = moment();
                            var end = moment();
                             $('input[name="reportrange"]').on('apply.daterangepicker', function(ev, picker) {
                                  $(this).val(picker.startDate.format('MMM D, YYYY') + ' - ' + picker.endDate.format('MMM D, YYYY'));
                              });

                              $('input[name="reportrange"]').on('cancel.daterangepicker', function(ev, picker) {
                                  $(this).val('');
                              });

                            function cb(start, end) {
                              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                            }

                            $('#reportrange').daterangepicker({
                                autoUpdateInput: false,
                                "locale": {
                                    "format": "MMM D, YYYY",
                                    "separator": " - ",
                                    "applyLabel": "Pilih",
                                    "cancelLabel": "Batal",
                                    "fromLabel": "Mulai",
                                    "toLabel": "Sampai",
                                    "customRangeLabel": "Sesuaikan",
                                    "daysOfWeek": [
                                        "Min",
                                        "Sen",
                                        "Sel",
                                        "Rab",
                                        "Kam",
                                        "jum",
                                        "Sab"
                                    ],
                                    "monthNames": [
                                        "Januari",
                                        "Februari",
                                        "Maret",
                                        "April",
                                        "Mei",
                                        "Juni",
                                        "July",
                                        "Augustus",
                                        "September",
                                        "Oktober",
                                        "November",
                                        "Desember"
                                    ],
                                    "firstDay": 1
                                },
                                "alwaysShowCalendars": true,
                                "opens": "left",
                                startDate: start,
                                endDate: end,
                                ranges: {
                                'Hari ini': [moment(), moment()],
                                'Kemarin': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                                '7 Hari sebelumnya': [moment().subtract(6, 'days'), moment()],
                                '30 Hari sebelumnya': [moment().subtract(29, 'days'), moment()],
                                'Bulan ini': [moment().startOf('month'), moment().endOf('month')],
                                'Sebulan terakhir': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                              }
                            }, cb);

                            cb(start, end);

                          });
                         

                          $('#reportrange').on('apply.daterangepicker', function(ev, picker) {
                            
                           var start = picker.startDate;
                           var end = picker.endDate;


                          $.fn.dataTable.ext.search.push(
                            function(settings, data, dataIndex) {
                              var min = start;
                              var max = end;
                              var startDate = new Date(data[6]);
                              
                              if (min == null && max == null) {
                                return true;
                              }
                              if (min == null && startDate <= max) {
                                return true;
                              }
                              if (max == null && startDate >= min) {
                                return true;
                              }
                              if (startDate <= max && startDate >= min) {
                                return true;
                              }
                              return false;
                            }
                          );
                          table.draw();
                          $.fn.dataTable.ext.search.pop();
                            });

                          
                          var table = $('#bootstrap-data-table').DataTable({
                            "language": {
                                "paginate": {
                                
                                "next":       "Selanjutnya"
                                
                            }
                            },
                            "order": [
                              [0, "desc"]
                            ],
                            "columnDefs": [
                                {
                                    "targets": [ 0 ],
                                    "visible": false
                                
                                },
                                {
                                    "targets": [ 1 ],
                                    "visible": false
                                }
                            ],
                            
                            lengthChange: false,
                             buttons: [
                                { 
                                    extend: 'excel',
                                    title: 'Estu SAE - Stok Masuk',
                                    exportOptions: {
                                        columns: [ 0, 1, 2, 3, 4,5,6 ]
                                    }
                                }
                            ]
                            
                            
                            
                            
                          });
                        $("#unduhexcel").on("click", function() {
                            table.button( '.buttons-excel' ).trigger();
                        });
                });

    </script>
    <script type="text/javascript">
        
        $(document).ready(function () {
                
                // $('.tanggal').datepicker({
                //     format: "dd-mm-yyyy",
                //     autoclose:true,
                //     orientation: 'bottom'

                // });
                var datePicker = $(".tanggal").datepicker({
                    format: "yyyy-mm-dd",
                autoclose:true});
                var t ;

                $( document ).on(
                    'DOMMouseScroll mousewheel scroll',
                    '#mediumModal', 
                    function(){       
                        window.clearTimeout( t );
                        t = window.setTimeout( function(){            
                            $('.tanggal').datepicker('place')
                        }, 0 );        
                    }
                );
            
            
            
          
        }); 
       
                
     

    </script>
    <script type="text/javascript">
        
        $(document).ready(function () {

            // $('select').niceSelect();
            $('#mediumModal').on('hidden.bs.modal', function () {
                
                $('#tambah').prop('selectedIndex',0);
                $('#tambah').validate().resetForm();
                $('.error').removeClass('error');
            });
            $('#largeModal').on('hidden.bs.modal', function () {
              
                $('#editdata').prop('selectedIndex',0);
                $('#editdata').validate().resetForm();
                $('.error').removeClass('error');
            });
            $.validator.addMethod(
                "uDate",
                function(value, element) {
                    // put your own logic here, this is just a (crappy) example
                    return value.match(/^\d{4}-\d{2}-\d{2}$/);
                },
                "Please enter a date in the format dd/mm/yyyy."
            );
            $('#tambah').validate({
             ignore: [],
            rules: {
                    kode: { required: true },
                    supplier: { required: true},
                    jumlah: { required: true ,number:true},
                    hargabeli: { required: true },
                    tanggal: { required: true ,uDate:true }
                    },
            messages: {
                    
                    kode: { required: "Kode barang harus diisi" },
                    supplier: { required: "Supplier harus diisi" },
                    jumlah: {required: "Nama barang harus diisi",number:"Masukan hanya angka saja"},
                    hargabeli: { required: "Harga Beli harus diisi" },
                    tanggal: { required: "Tanggal harus diisi",uDate:"Masukan hanya tanggal saja" }
                    },
            errorPlacement: function(error, element) {
            if (element.is('select:hidden')) {
                error.insertAfter(element.next('.nice-select'));
            } else {
                error.insertAfter(element);
            }
            }

            });
            
             $('#editdata').validate({
            ignore: [],
            rules: {
                    ubahkode: { required: true },
                    ubahsupplier: { required: true},
                    ubahjumlah: { required: true },
                    ubahhargabeli: { required: true },
                    ubahtanggal: { required: true,uDate:true }
                    },
            messages: {
                    
                    ubahkode: { required: "Kode barang harus diisi" },
                    ubahsupplier: { required: "Supplier harus diisi" },
                    ubahjumlah: {required: "Nama barang harus diisi"},
                    ubahhargabeli: { required: "Harga Beli harus diisi" },
                    ubahtanggal: { required: "Tanggal harus diisi",uDate:"Masukan hanya tanggal saja"}
                    },
            errorPlacement: function(error, element) {
            if (element.is('select:hidden')) {
                error.insertAfter(element.next('.nice-select'));
            } else {
                error.insertAfter(element);
            }
            }            
            }); 
        });      
     

    </script>

    
       <script type="text/javascript">

        $(document).on('click', '.editdata', function() {
            var stuff = $(this).data('info').split(',');
            fillmodalData(stuff)
            $('#largeModal').modal('show');


        });
        function fillmodalData(details){

            $('#ubahkodestokmasuk').val(details[0]);
            $('#ubahsupplier').find(':selected').val(details[7]).text(details[2]);
            $('#ubahjumlah').val(details[3]);
            $('#ubahhargabeli').val(details[4]);
            var date = new Date(details[6]);
           
            $('#ubahtanggal').val( date.getFullYear() + '-' + ("0" + (date.getMonth() + 1)).slice(-2) + '-' + ("0" +date.getDate()).slice(-2) );
            $('#ubahkodebarang').val(details[8]);   
        }
    </script>
    <script type="text/javascript">
        $(document).on('click', '.detaildata', function() {
            var stuff = $(this).data('info').split(',');
            $('#detailkodestokmasuk').val(stuff[0]);
            $('#detailnamabarang').val(stuff[1]);
            $('#detailjumlah').val(stuff[3]);
            $('#detailhargabeli').val(stuff[4]);
            $('#detailtanggalmasuk').val(stuff[5]);
            $('#detailkodebarang').val(stuff[7]);
            $('#detailnamasupplier').val(stuff[2]);
            $('#largeModal1').modal('show');
        });
       
    </script>
     <script type="text/javascript">
        $(document).on('click', '.deletedata', function() {
            var stuff = $(this).data('info').split(',');
            $('.did').val(stuff[0]);
           
        
            $('#deletedata').modal('show');
        });
         
        
    </script>
    <script>
        var rupiah = document.getElementById('jumlah');
        var rupiah2= document.getElementById('ubahjumlah');
		rupiah.addEventListener('keyup', function(e){
			// tambahkan 'Rp.' pada saat form di ketik
			// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
			rupiah.value = formatRupiah(this.value, '');
		});
        rupiah2.addEventListener('keyup',function(e){
            rupiah2.value=formatRupiah(this.value,'');
        });
		/* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}
 
			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
		}

      
    </script>
    <script>
        var rupiah1 = document.getElementById('hargabeli');
        var rupiah3 = document.getElementById('ubahhargabeli');
		rupiah1.addEventListener('keyup', function(e){
			rupiah1.value = formatRupiah1(this.value, 'Rp. ');
		});
        rupiah3.addEventListener('keyup', function(e){
			rupiah3.value = formatRupiah1(this.value, 'Rp. ');
		});
        
 
		/* Fungsi formatRupiah */
		function formatRupiah1(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah1     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);
 
			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah1 += separator + ribuan.join('.');
			}
 
			rupiah1 = split[1] != undefined ? rupiah1 + ',' + split[1] : rupiah1;
			return prefix == undefined ? rupiah1 : (rupiah1 ? 'Rp. ' + rupiah1 : '');
		}

      
    </script>




<div id="container">
  
 
  
</div>



</body>
</html>
