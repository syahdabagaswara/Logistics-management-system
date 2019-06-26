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
                    <li class=" menu-item-has-children dropdown ">
                        <a href="#" class=" dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class=" menu-icon" src="{{asset('assets/icons/icon_inventori.svg')}}">Inventori</a>
                        <ul class="sub-menu children dropdown-menu ">
                            <li ><i class=" fa fa-circle "></i><a class="" href="produk">Produk</a></li>
                            <li><i class="fa fa-circle"></i><a href="stokmasuk">Stok Masuk</a></li>
                            <li><i class="fa fa-circle"></i><a href="stokkeluar">Stok Keluar</a></li>
                            
                            <li><i class="fa fa-circle"></i><a href="totalstok">Total Stok</a></li>
                            <li><i class="fa fa-circle"></i><a href="supplier">Supplier</a></li>
                            <li><i class="fa fa-circle"></i><a href="returbarang">Retur Barang</a></li>
                            <li><i class="fa fa-circle"></i><a href="returpenjualan">Retur Penjualan</a></li>
                            
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown show open">
                        <a href="#" class="active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="active menu-icon" src="{{asset('assets/icons/icon_pegawai.svg')}}">Pegawai</a>
                        <ul class="sub-menu children dropdown-menu  show">
                           <li ><i class="  fa fa-circle "></i><a  href="datapegawai">Data Pegawai</a></li>
                            <li><i class=" fa fa-circle"></i><a  href="penjualan">Penjualan</a></li>
                            <li><i class=" active fa fa-circle"></i><a class="active" href="keuntungan">Keuntungan</a></li>
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
                <div class="col-lg-4 col-md-6">
                    <h3 style="color:#8c8e8d;"><b>Keuntungan</b></h3>
                </div>

                <div class="col-lg-8 col-md-6" style="max-width: 65.166667%;">
                    <div class="row">
                        <div class="col-lg-3" style="    padding-left: 10px;">
                              <div class="input-group">
                                    <div class="input-group">
                                    <div class="input-group-btn" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                        <div class="btn-group" >
                                            <div id="filterjenisbarang">
                                            </div>
                                            </div>
                                        </div>      
                                    </div>
                                </div>
                        </div>
                        
                        
                        <div class="col-lg-4 ">               
                            <div class="input-prepend input-group" style="width: 200px;-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);"> 
                            <input type="text" style="cursor: pointer;" placeholder="" name="reportrange" id="reportrange" class="form-control" value=""><span class=""></span>
                            

                            </div>        
                        </div>
                        
                        
                        <div class="col-lg-3" style="    padding-left: 10px;padding-right: 15px" >
                            
                                <div id ="filter_global" class="input-group" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                    <input id="global_filter" name="x_card_code" type="text" class="form-control global_filter cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Cari">
                                    

                                        <div class="input-group-addon">
                                            <span class="fa fa-search fa-sm" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                            data-trigger="hover"></span>
                                         </div>
                                </div>
                            
                        </div>
                        <div class="col-lg-2">
                            <div class="input-group-btn" >
                                        <button class="btn btn-secondary " style="-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);">
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
                                    
                                    
                                </table>
                            </div>
                        </div>
                     
                </div><!-- /# column -->
            </div>
            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <form id="tambah">
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
                                        <a >Jenis Barang</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <select data-placeholder="" type="text" id="" name="jenisbarang" class=" form-control form-input standardSelect required" tabindex="1"> 
                                        <option  class="option" value=""  selected>Pilih Jenis Barang</option>
                                        <option value="United States">A</option>
                                        <option value="United Kingdom">B</option> 
                                    </select>
                                </div>
                            </div>
                             <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nama Barang</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <select data-placeholder="" type="text" id="" name="namabarang" class=" form-control form-input standardSelect required" tabindex="1"> 
                                        <option  class="option" value=""  selected>Pilih Nama Barang</option>
                                        <option value="United States">A</option>
                                        <option value="United Kingdom">B</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Kode Barang</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="kodebarang" name="kodebarang"  class="form-control form-input" value="SAE12345678" disabled>
                                </div>
                            </div>
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Supplier</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                  
                                    <select data-placeholder="" type="text" id="" name="supplier" class=" form-control form-input standardSelect required" tabindex="1"> 
                                        <option  class="option" value=""  selected>Pilih Supplier</option>
                                        <option value="United States">A</option>
                                        <option value="United Kingdom">B</option>
                                        
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
                                        <a >Tanggal Masuk</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="kodebarang" name="tanggalmasuk"  class="form-control form-input" value="20 - 10 - 2018" disabled>
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
                    <form id="editdata">
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
                                        <a >Jenis Barang</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <select data-placeholder="" type="text" id="" name="jenisbarang" class=" form-control form-input standardSelect required" tabindex="1"> 
                                        <option  class="option" value=""  selected>Pilih Jenis Barang</option>
                                        <option value="United States">A</option>
                                        <option value="United Kingdom">B</option> 
                                    </select>
                                </div>
                            </div>
                             <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nama Barang</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <select data-placeholder="" type="text" id="" name="namabarang" class=" form-control form-input standardSelect required" tabindex="1"> 
                                        <option  class="option" value=""  selected>Pilih Nama Barang</option>
                                        <option value="United States">A</option>
                                        <option value="United Kingdom">B</option> 
                                    </select>
                                </div>
                            </div>
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Kode Barang</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="kodebarang" name="kodebarang"  class="form-control form-input" value="SAE12345678" disabled>
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
                                        <a >Nomor Nota</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="hargabeli" name="nomornota" placeholder="Masukan Harga Beli" class="required form-control form-input">
                                    
                                </div>
                            </div> 
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nama Toko</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="namatoko" name="namatoko" placeholder="Masukan Harga Beli" class="required form-control form-input">
                                    
                                </div>
                            </div> 
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Tanggal Masuk</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="kodebarang" name="tanggalmasuk"  class="form-control form-input" value="20 - 10 - 2018" disabled>
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
            <div class="modal fade" id="largeModal1" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <div class="modal-content">
                    <form id="editdata">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Detail Stok Masuk</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row form-space-detail" >
                                <div class="col-md-3 text-left form-detail-name" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >Nomor Nota</a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail" style="border-top: 1px solid #e5e5e5;">
                                    <div class="form-tambah-separator">
                                        <a >SAE123456789</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Pegawai </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <a >Ikhsan Mus</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Pokok </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <a >10.152.159 </a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Jual </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <a >10.152.159</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Operasional </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <a >10.158.159</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Rugi/Laba </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <a >Laba</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-space-detail">
                                <div class="col-md-3 text-left form-detail-name">
                                    <div class="form-tambah-separator">
                                        <a >Tanggal </a>
                                    </div>
                                </div>
                                <div class="col-md-1 text-left form-detail-sep">
                                    <div class="form-tambah-separator">
                                        <a >:</a>
                                    </div>
                                </div>
                                <div class="col-lg-8 text-left form-detail">
                                    <div class="form-tambah-separator">
                                        <a >20 - 10 - 2018</a>
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
     
    <script type="text/javascript">
        $(document).ready(function() {
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
                              var startDate = new Date(data[2]);
                              
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

                          var dataSet = [
                            @foreach($data as $i)
                            ['{{ $i->no_nota }}',
                                '{{ $i->pegawai }}',
                              '<?php echo date('M d, Y', strtotime($i->tgl)); ?>',
                              '10.158.159',
                              '{{ $i->laba }}',
                            ],
                            @endforeach
                          ];
                          var table = $('#bootstrap-data-table').DataTable({
                            "language": {
                                "paginate": {
                                
                                "next":       "Selanjutnya"
                                
                            }
                            },
                            "order": [
                              [0, "desc"]
                            ],"columnDefs": [ {
                            "targets": -1,
                            "data": null,
                            "defaultContent": "<button type='button' class='editdata' data-toggle='modal' data-target='#largeModal1'>Detail</button>"
                            } ],
                            lengthChange: false,
                            data: dataSet,
                            columns: [{
                            title: "Nomor Nota"
                          },
                          {
                            title: "Pegawai"
                          },
                          {
                            title: "Tanggal"
                          },
                          {
                            title: "Jual"
                          },
                          {
                            title: "Rugi/Laba"
                          },
                          {
                            title: "Aksi"
                          }
                        ],
                        initComplete: function () {
                        this.api().column( 1 ).every( function () {
                        var column = this;
                        var select = $('<select class="form-control btn btn-primary placeholder  "><option value="">Nama Pegawai </option><option value="">Semua</option></select>')
                            .appendTo( $('#filterjenisbarang').empty() )
                            .on( 'change', function () {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );
                                column.search( val ? '^'+val+'$' : '', true, false ).draw();
                            } );
                            
                                    column.data().unique().sort().each( function ( d, j ) {
                                        select.append( '<option value="'+d+'">'+d+'</option>' )
                                    } );
                                } );
                            }     
                                  });
                        });

    </script>
    <script type="text/javascript">
        
        $(document).ready(function () {
            $('select').niceSelect();
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
            $('#tambah').validate({
             ignore: [],
            rules: {jenisbarang: { required: true },
                    namabarang: { required: true },
                    jumlah: { required: true },
                    nomornota: { required: true },
                    namatoko: { required: true},
                    tanggalmasuk: { required: true }
                    },
            messages: {
                    jenisbarang: {required: "Jenis barang harus diisi"},
                    namabarang: { required: "Nama barang harus diisi" },
                    jumlah: {required: "Jumlah Barang harus diisi"},
                    nomornota: { required: "Nomor Nota harus diisi" },
                    namatoko: { required: "Nama Toko harus diisi" },
                    tanggalmasuk: { required: "Tanggal harus diisi" }
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
            rules: {jenisbarang: { required: true },
                    namabarang: { required: true },
                    jumlah: { required: true },
                    nomornota: { required: true },
                    namatoko: { required: true},
                    tanggalmasuk: { required: true }
                    },
            messages: {
                    jenisbarang: {required: "Jenis barang harus diisi"},
                    namabarang: { required: "Nama barang harus diisi" },
                    jumlah: {required: "Jumlah Barang harus diisi"},
                    nomornota: { required: "Nomor Nota harus diisi" },
                    namatoko: { required: "Nama Toko harus diisi" },
                    tanggalmasuk: { required: "Tanggal harus diisi" }
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




<div id="container">
  
 
  
</div>



</body>
</html>
