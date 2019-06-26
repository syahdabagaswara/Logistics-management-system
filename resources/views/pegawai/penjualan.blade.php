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
    <link href="{{asset('assets/css/modalwizard.css')}}" rel="stylesheet">
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
                            <li><i class=" active fa fa-circle"></i><a class="active" href="penjualan">Penjualan</a></li>
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
                    <h3 style="color:#8c8e8d;"><b>Penjualan</b></h3>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        
                        <div class="col-lg-4" style="padding-right: 0px!important; max-width: 32.333333%;">
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
                        
                        
                        <div class="col-lg-5 ">               
                            <div class="input-prepend input-group" style="width: 190px;-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);"> 
                            <input type="button" value="    Tanggal                       &#x1F4C6;" style="cursor: pointer;"  name="reportrange" id="reportrange" class="text-left form-control" value=""><span class=""></span>
                            

                            </div>        
                        </div>
                        
                        
                        <div class="col-lg-3">
                                <div id ="filter_global" class="input-group" style="-webkit-box-shadow: 0 4px 8px   rgba(0, 0, 0, 0.20);box-shadow: 0 4px 8px  rgba(0, 0, 0, 0.20);">
                                    <input id="global_filter" name="x_card_code" type="text" class="form-control global_filter cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Cari">
                                    

                                        <div class="input-group-addon">
                                            <span class="fa fa-search fa-sm" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                            data-trigger="hover"></span>
                                         </div>
                                </div>
                            
                        </div>
                        
                    </div>

                </div>
                <div class="col-lg-3 col-md-6" style="padding-left: 0px">
                    <div class="row">
                        

                        <div class="col-lg-6 col-md-2">
                            
                                
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
                                                            <th>Nomor Nota</th>
                                                            <th>Nama Pegawai</th>
                                                            
                                                            <th>Nama Toko</th>
                                                            <th>Tanggal</th>
                                                            <th>Total</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($data as $i)
                                                        <tr>
                                                            <td>{{ $i->kode }}</td>
                                                            <td>{{ $i->nama }}</td>
                                                            <td>{{ $i->toko }}</td>
                                                            <td><?php echo date('M d, Y', strtotime($i->tanggal)); ?></td>
                                                            <td>{{ $i->total }}</td>
                                                            <td><a href="detailpenjualan?kode={{$i->kode}}"><button type='button' class='detaildata' >Detail</button></a><button type='button' class='editdata' data-toggle='modal' data-target='#largeModal' data-info="{{$i->kode}},{{$i->nama}},{{$i->toko}},{{$i->tanggal}},{{$i->total}},{{ $i->kd_toko }}">Edit</button><button type='button' class='deletedata' data-toggle='modal' data-target='#deletedata' data-info="{{$i->kode}},{{$i->nama}},{{$i->toko}},{{$i->tanggal}},{{$i->total}}">Hapus</button></td>
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
                    <div class="modal-content" style="width: 1056px;left:-50px;">
                    <form id="msform" method="POST" action="{{ url('penjualanAdd') }}">
                    {{ csrf_field() }}
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Tambah Data Penjualan</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                             <ul id="progressbar">
                                    <li style="margin-left: 65px;" class="active"><p style="left: 250px;">Nota<p></li>
                                    <li style="margin-left: -213px;"><p style="left: 250px;">Detail Barang<p></li>
                                    
                            </ul>
                            <fieldset>
                            
                            <div id="form">
                               
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nomor Nota</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="nomornota" name="nomornota"  class="form-control form-input" value="SAE12345678" readonly>
                                </div>
                            </div>
                             
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nama Toko</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <select data-placeholder="" type="text" id="namatoko" name="namatoko" class=" form-control form-input standardSelect required" tabindex="1"> 
                                    <option  class="option" value=""  selected>Pilih Toko</option>
                                        @foreach($pelanggan as $data)
                                             <option value="{{$data->kode}}">{{$data->nama}}</option> 
                                        @endforeach
                                    </select>
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
                                
                                <input  type="button" value="Batal" class="action-button btn btn-danger" data-dismiss="modal">
                                <input type="button" name="next" class="next action-button btn btn-success " value="Berikutnya" />
                            </fieldset>
                            <fieldset>
                            
                            <div id="form">
                                <div class="row head-table-wid" id="registration1" style="border-top: 1px solid #f2f2f2">

                                    <div class="col-md-3 text-center" style="margin-left:30px;max-width: 190px!important;">
                                        <div class="form-group">
                                        <label>Nama Barang</label>
                                        <select onchange="updateRow(1);" data-placeholder="" type="text" id="name1" name="namabarang[]" class=" form-control form-input standardSelect " tabindex="1"> 
                                            <option  class="option" value=""  selected>Pilih Jenis Barang</option>
                                            @foreach($produk as $d)
                                            <option value="{{$d->kode}}">{{$d->nama}}</option> 
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-center">
                                        <div class="form-group">
                                            <label>Jumlah Barang</label>
                                            <input onkeyup="calculateRow(1);" type="text" id="jumlahbarang1" name="jumlahbarang[]" value="0" class="form-control form-input-wizard">
                                        </div>
                                    </div>

                                    <div class="col-md-3 text-center">
                                        <div class="form-group">
                                            <label>Harga Barang</label>
                                        
                                            <input onkeyup="calculateRow(1);" type="text" id="hargabarang1" name="hargabarang[]" value="0" class="form-control form-input-wizard">
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <div class="form-group">
                                            <label>Harga Pokok</label>
                                        
                                            <input  type="text" id="hargapokok1" name="hargapokok[]" value="0" class="form-control form-input-wizard" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-3 text-center">
                                        <div class="form-group">
                                            <label>Laba/Rugi</label>
                                        
                                            <input  type="text" id="labarugi1" name="labarugi" value="0"  class="form-control form-input-wizard" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-2 text-center">
                                        <div class="form-group">
                                            <label>Total Harga</label>
                                            <input readonly type="text" id="totalharga1" name="totalharga[]" value="0" class="form-control form-input-wizard">
                                        </div>
                                    </div>

                                    <div class="col-md-1">
                                        <a href="javascript:void(0);" onclick="removeRow(1);" style="float:left;top:56px!important;"  class="fieldsbutton"> Hapus</a>    
                                    </div>
                                </div>

                                <div id="addedRows"></div>


                                <div class="row">
                                        
                                    <div class="input-group-btn text-right" style="position: absolute;left: 30px;">
                                        <button class="btn btn-warning" onclick="addMoreRowss(this.form);"   type="button">
                                            <i class="fa fa-plus fa-lg"></i> <a class="tambah">Tambah Barang</a>
                                        </button>
                                    </div>  
                                </div>    

                                
                                 
                            </div>  
                                
                                <input type="button" name="previous" class="previous action-button btn btn-danger " value="Sebelumnya" />
                                
                                <input  type="submit" name="submit" id="submit" class="submit action-button btn btn-success" value="Tambah">
                        </fieldset>

                            
                          
                        </div>
                        
        <!-- progressbar -->
                       
                        <!-- fieldsets -->
                        
                        
                    </form>    
                    </div>
                </div>
            </div>

            <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content"  >
                    <form id="editdata" method="POST" action="{{ url('penjualanUpdate') }}">
                    {{ csrf_field() }}
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Ubah Penjualan</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nomor Nota</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahnomornota" name="ubahnomornota"  class="form-control form-input" value="SAE12345678" readonly>
                                </div>
                            </div>
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nama Pegawai</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahnamapegawai" name="ubahnamapegawai"  class="form-control form-input" value="SAE12345678" readonly> 
                                </div>
                            </div>
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nama Toko</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <select data-placeholder="" type="text" id="ubahnamatoko" name="ubahnamatoko" class=" form-control form-input standardSelect required" tabindex="1"> 
                                        <option  class="option" value="" hidden selected>Pilih Jenis Barang</option>
                                        @foreach($pelanggan as $i)
                                        <option value="{{ $i->kode }}">{{ $i->nama }}</option>
                                        @endforeach
                                    </select>
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
                    <form id="" method="POST" action="{{ url('penjualanDelete') }}">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Hapus Data Penjualan</a>
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
                                <input  type="text" id="kode" name="kode" placeholder="Masukan Nomor Handphone" class="did required form-control form-input" hidden>
                                
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
                        $('#mediumModal select').niceSelect();
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
                              var startDate = new Date(data[3]);
                              
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
                            lengthChange: false,
                             buttons: [
                                { 
                                    extend: 'excel',
                                    title: 'Estu SAE - Penjualan',
                                    exportOptions: {
                                        columns: [ 0, 1, 2, 3, 4 ]
                                    }
                                }
                            ],
                            
                        initComplete: function () {
                        this.api().column( 1 ).every( function () {
                        var column = this;
                        var select = $('<select class="form-control btn btn-primary placeholder  "><option value="">Nama Pegawai</option><option value="">Semua</option></select>')
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
                          $("#unduhexcel").on("click", function() {
                            table.button( '.buttons-excel' ).trigger();
                        });
                        });

    </script>
    <script type="text/javascript">
        
        $(document).ready(function () {
                $('#filterjenisbarang select').niceSelect();
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
            $.validator.addMethod(
                "uDate",
                function(value, element) {
                    // put your own logic here, this is just a (crappy) example
                    return value.match(/^\d{4}-\d{2}-\d{2}$/);
                },
                "Please enter a date in the format dd/mm/yyyy."
            );
            
            $('#largeModal').on('hidden.bs.modal', function () {
              
                $('#editdata').prop('selectedIndex',0);
                $('#editdata').validate().resetForm();
                $('.error').removeClass('error');
            });
            
           
            $('#editdata').validate({
            ignore: [],
            rules: {           ubahnamapegawai:{required:true},
                                ubahnamatoko: { required: true},
                                ubahtanggal: { required: true,uDate:true }
                                },
                        messages: {
                                ubahnamapegawai:{required:"Nama Pegawai Harus Diisi"},
                                ubahnamatoko: { required: "Nama Toko harus diisi" },
                                ubahtanggal: { required: "Tanggal harus diisi",uDate:"Masukan hanya tanggal saja" }
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
        $(document).ready(function () {
            $('#mediumModal select').niceSelect();

             $('#mediumModal').on('hidden.bs.modal', function () {
                $('#mediumModal #msform').validate().resetForm();
                $('.error').removeClass('error');
            });
                var current_fs, next_fs, previous_fs; //fieldsets
                var left, opacity, scale; //fieldset properties which we will animate
                var animating; //flag to prevent quick multi-click glitches

                $("#mediumModal .next").click(function () {
                    document.getElementById("submit").disabled = true;
                       
                    $('#mediumModal #msform').validate({
                        ignore: [],
                        rules: {namapegawai:{required:true},
                                namatoko: { required: true},
                                tanggal: { required: true }
                                },
                        messages: {
                                namapegawai:{required:"Nama Pegawai Harus Diisi"},
                                namatoko: { required: "Nama Toko harus diisi" },
                                tanggal: { required: "Tanggal harus diisi" }
                                },
                        errorPlacement: function(error, element) {
                        if (element.is('select:hidden')) {
                            error.insertAfter(element.next('.nice-select'));
                        } else {
                            error.insertAfter(element);
                        }
                        }
                    });

                    if ((!$('#mediumModal #msform').valid())) {
                        return false;
                    }
                    
                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parent();              //fieldset
                    next_fs = $(this).parent().next();          //next fieldset

                    //activate next step on progressbar using the index of next_fs
                    $("#mediumModal #progressbar li").eq($("#mediumModal fieldset").index(next_fs)).addClass("#mediumModal active");


                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale current_fs down to 80%
                            scale = 1 - (1 - now) * 0.2;
                            //2. bring next_fs from the right(50%)
                            left = (now * 50) + "%";
                            //3. increase opacity of next_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({
                                'transform': 'scale(' + scale + ')'
                            });
                            next_fs.css({
                                'left': left,
                                'opacity': opacity
                            });
                        },
                        duration: 0,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });

                $("#mediumModal .previous").click(function () {
                    $('#addedRows').empty();
                    $('#registration1').find('input:text').val('0');
                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();

                    //de-activate current step on progressbar
                    $("#mediumModal #progressbar li").eq($("#mediumModal fieldset").index(current_fs)).removeClass("#mediumModal active");

                    //show the previous fieldset
                    previous_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale previous_fs from 80% to 100%
                            scale = 0.8 + (1 - now) * 0.2;
                            //2. take current_fs to the right(50%) - from 0%
                            left = ((1 - now) * 50) + "%";
                            //3. increase opacity of previous_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({
                                'left': left
                            });
                            previous_fs.css({
                                'transform': 'scale(' + scale + ')',
                                'opacity': opacity
                            });
                        },
                        duration: 0,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });


                // $(".submit").click(function () {
                //     return false;
                // });
                $('.head-table-wid select').niceSelect();
             $('#largeModal').on('hidden.bs.modal', function () {
                $('#largeModal #msform').validate().resetForm();
                $('#largeModal .error').removeClass('#largeModal error');
                history.pushState(null, '', '/distributor/public/penjualan');
                
            });
             $('#largeModal1').on('hidden.bs.modal', function () {
                
                
            });
                var current_fs, next_fs, previous_fs; //fieldsets
                var left, opacity, scale; //fieldset properties which we will animate
                var animating; //flag to prevent quick multi-click glitches

                $("#largeModal .next").click(function () {
                    
                       
                    $('#largeModal #msform').validate({
                        ignore: [],
                        rules: {

                                ubahnamatoko: { required: true},
                                ubahtanggal: { required: true }
                                },
                        messages: {
                                
                                ubahnamatoko: { required: "Nama Toko harus diisi" },
                                ubahtanggal: { required: "Tanggal harus diisi" }
                                },
                        errorPlacement: function(error, element) {
                        if (element.is('select:hidden')) {
                            error.insertAfter(element.next('.nice-select'));
                        } else {
                            error.insertAfter(element);
                        }
                        }
                    });

                    if ((!$('#largeModal #msform').valid())) {
                        return false;
                    }
                    
                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parent();              //fieldset
                    next_fs = $(this).parent().next();          //next fieldset

                    //activate next step on progressbar using the index of next_fs
                    $("#largeModal #progressbar li").eq($("#largeModal fieldset").index(next_fs)).addClass("#largeModal active");


                    //show the next fieldset
                    next_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale current_fs down to 80%
                            scale = 1 - (1 - now) * 0.2;
                            //2. bring next_fs from the right(50%)
                            left = (now * 50) + "%";
                            //3. increase opacity of next_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({
                                'transform': 'scale(' + scale + ')'
                            });
                            next_fs.css({
                                'left': left,
                                'opacity': opacity
                            });
                        },
                        duration: 0,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });

                $("#largeModal .previous").click(function () {
                    $('#addedRows').empty();
                    if (animating) return false;
                    animating = true;

                    current_fs = $(this).parent();
                    previous_fs = $(this).parent().prev();

                    //de-activate current step on progressbar
                    $("#largeModal #progressbar li").eq($("#largeModal fieldset").index(current_fs)).removeClass("#largeModal active");
                    var rowCount = 1;
           
                    //show the previous fieldset
                    previous_fs.show();
                    //hide the current fieldset with style
                    current_fs.animate({
                        opacity: 0
                    }, {
                        step: function (now, mx) {
                            //as the opacity of current_fs reduces to 0 - stored in "now"
                            //1. scale previous_fs from 80% to 100%
                            scale = 0.8 + (1 - now) * 0.2;
                            //2. take current_fs to the right(50%) - from 0%
                            left = ((1 - now) * 50) + "%";
                            //3. increase opacity of previous_fs to 1 as it moves in
                            opacity = 1 - now;
                            current_fs.css({
                                'left': left
                            });
                            previous_fs.css({
                                'transform': 'scale(' + scale + ')',
                                'opacity': opacity
                            });
                        },
                        duration: 0,
                        complete: function () {
                            current_fs.hide();
                            animating = false;
                        },
                        //this comes from the custom easing plugin
                        easing: 'easeInOutBack'
                    });
                });


                // $(".submit").click(function () {
                //     return false;
                // });
                
            });
        
    </script>
    <script type="text/javascript">
        //  Insert content with the append() method.
            var rowCounts = 1;
            function addMoreRowss(frm) {
            
            rowCounts ++;
            var recRow = '<div class="row head-table-wid" id="registration'+rowCounts+'"  style="border-top: 1px solid #f2f2f2"><div class="col-md-3 text-center" style="margin-left:30px;max-width: 190px!important;"><div class="form-group"><select onchange="updateRow('+rowCounts+');" data-placeholder="" type="text" id="name'+rowCounts+'" name="namabarang[]" class=" form-control form-input standardSelect " tabindex="1"> <option  class="option" value=""  selected>Pilih Jenis Barang</option>@foreach($produk as $d)<option value="{{$d->kode}}">{{$d->nama}}</option>@endforeach</select>                                        </div>                                        </div>                                        <div class="col-md-3 text-center">                                        <div class="form-group"><input onkeyup="calculateRow(1);"  type="text" id="jumlahbarang'+rowCounts+'" name="jumlahbarang[]" value="0" class="form-control form-input-wizard">                                        </div>                                        </div>                                        <div class="col-md-3 text-center">                                        <div class="form-group">                                                                                                                        <input onkeyup="calculateRow('+rowCounts+');" type="text" id="hargabarang'+rowCounts+'" name="hargabarang[]" value="0" class="form-control form-input-wizard">                                        </div>                                        </div><div class="col-md-3 text-center"><div class="form-group">                                           <input  type="text" id="hargapokok'+rowCounts+'" name="hargapokok[]" value="0" class="form-control form-input-wizard" readonly>                                      </div>                                    </div> <div class="col-md-3 text-center"><div class="form-group"><input  type="text" id="labarugi'+rowCounts+'" name="laba/rugi" value="0" class="form-control form-input-wizard" readonly></div></div><div class="col-md-2 text-center">                                        <div class="form-group">                                                                                <input readonly type="text" id="totalharga'+rowCounts+'" name="totalharga[]" value="0" class="form-control form-input-wizard">                                        </div>                                        </div>                                        <div class="col-md-1">                                        <a href="javascript:void(0);" onclick="removeRow('+rowCounts+');" style="float:left;" class="fieldsbutton"> Hapus</a>                                            </div>                                        </div>';
            jQuery('#mediumModal #addedRows').append(recRow);
            $('select').niceSelect();
            for (x = 1; x <= rowCounts; x++) { 
                      var check=$('#mediumModal #registration'+x+' #hargapokok'+x+'').text();
                      var numcheck=0;
                      if(check==0||check==null){
                        numcheck=1;
                        
                        }else{
                            
                        }
                    
                    if(numcheck!=0){
                        document.getElementById("submit").disabled = true;
                    }else{
                        document.getElementById("submit").disabled = false;
                    }
                    
                     
                   
                    }
            };
               
            // Remove Content

            function removeRow(removeNum) {
                
            if(removeNum == 1){
                alert("Kolom Pertama Tidak Bisa Dihapus");
                return false;
            } else {    
            jQuery('#mediumModal #registration'+removeNum).remove(); 
            }
            for (x = 1; x <= rowCounts; x++) { 
                      var check=$('#mediumModal #registration'+x+' #hargapokok'+x+'').text();
                      var numcheck=0;
                      if(check=="Tidak Ada"||check==null){
                        numcheck=1;
                        
                        }else{
                            
                        }
                    
                    if(numcheck!=0){
                        document.getElementById("submit").disabled = true;
                    }else{
                        document.getElementById("submit").disabled = false;
                    }
                    
                     
                   
                    }

            };
            function calculateRow(Nl){
                
                var cal=parseInt($('#mediumModal #registration'+Nl+' #hargabarang'+Nl).val());
                var kok=parseInt($('#mediumModal #registration'+Nl+' #hargapokok'+Nl).val());
                var lala=parseInt($('#mediumModal #registration'+Nl+' #jumlahbarang'+Nl).val());
                var PB=cal-kok;
                var cc=cal*lala;
                $('#mediumModal #registration'+Nl+' #labarugi'+Nl).text(PB).val(PB);
                $('#mediumModal #registration'+Nl+' #totalharga'+Nl).text(cc).val(cc);
            };
            

            function updateRow(Num) {
               
                 $.ajax({
                  type: "GET",
                  url: "detailvalidasi",
                  dataType: "json",
                  
                  success: function(data) {
                    var cal=parseInt($('#mediumModal #registration'+Num+' #hargabarang'+Num).val());
                    var kok=parseInt($('#mediumModal #registration'+Num+' #hargapokok'+Num).val());
                    var PB=cal-kok;
                    $('#mediumModal #registration'+Num+' #labarugi'+Num).text(PB).val(PB);

                     var select=$('#mediumModal #registration'+Num+' #name'+Num+' option:selected ').val();
                     var date=$('#mediumModal #tanggal').val();
                     
                        // $(select).html();
                     for (var i in data) {
                        var da=data[i].kd_barang;
                        var dite=data[i].tgl_keluar;
                        
                        if(date==dite && select==da){
                            
                                $('#mediumModal #registration'+Num+' #hargapokok'+Num).text(data[i].harga).val(data[i].harga);
                                break;
                          
                        }else {
                        $('#mediumModal #registration'+Num+' #hargapokok'+Num).text("Tidak Ada").val("Tidak Ada"); 
                        //    break;
                        }
                        
                     }
                var x=1;
                for (x = 1; x <= rowCounts; x++) { 
                      var check=$('#mediumModal #registration'+x+' #hargapokok'+x+'').text();
                      var numcheck=0;
                      if(check=="Tidak Ada"||check==null){
                        numcheck=1;
                        
                        }else{
                            
                        }
                    
                    if(numcheck!=0){
                        document.getElementById("submit").disabled = true;
                    }else{
                        document.getElementById("submit").disabled = false;
                    }
                    
                     
                   
                    }
                    var cal=parseInt($('#mediumModal #registration'+Num+' #hargabarang'+Num).val());
                    var kok=parseInt($('#mediumModal #registration'+Num+' #hargapokok'+Num).val());
                    var PB=kok-cal;
                    $('#mediumModal #registration'+Num+' #labarugi'+Num).text(PB).val(PB);
                     

                     
                    
                  },
                  complete: function() {}
               });
                
            

            };

             

            


    </script>
     <script type="text/javascript">

        $(document).on('click', '.editdata', function() {
            var stuff = $(this).data('info').split(',');
            fillmodalData(stuff)
            $('#largeModal').modal('show');


        });
        function fillmodalData(details){
            $('#ubahnomornota').val(details[0]);
            $('#ubahnamapegawai').val(details[1]);
            $('#ubahnamatoko').find(':selected').val(details[5]).text(details[2]);

            var date = new Date(details[3]);
            $('#ubahtanggal').val( date.getFullYear() + '-' + ("0" + (date.getMonth() + 1)).slice(-2) + '-' + ("0" +date.getDate()).slice(-2) );
            
               
        }
    </script>
    <script type="text/javascript">
        $(document).on('click', '.detaildata', function() {
            var stuff = $(this).data('info').split(',');
            $('#detailnomornota').val(stuff[0]);
            $('#detailnamapegawai').val(stuff[1]);
            $('#detailnamatoko').val(stuff[2]);
            var date = new Date(stuff[3]);
            $('#detailtanggal').val( date.getFullYear() + '-' + ("0" + (date.getMonth() + 1)).slice(-2) + '-' + ("0" +date.getDate()).slice(-2) );
            $('#detailtotal').val(stuff[4]);
            

            history.pushState(null, '', '/distributor/public/penjualan/'+stuff[0]+'');
           
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
     <script type="text/javascript">
       
    </script>




<div id="container">
  
 
  
</div>



</body>
</html>
