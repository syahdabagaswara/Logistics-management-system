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

                    <li class="active">
                        <a class="active" href="index"><img class="menu-icon" src="{{asset('assets/icons/icon_dashboard.svg')}}">Dashboard </a>
                    </li>
                    <li class=" menu-item-has-children dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="menu-icon" src="{{asset('assets/icons/icon_inventori.svg')}}">Inventori</a>
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
                    <h2 style="color:#8c8e8d;"><b>Dashboard</b></h2>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-3">
                        </div>
                        <div class="col-lg-4 ">               
                            <div class="input-prepend input-group" style="width: 200px;-webkit-box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);"> 
                            <input type="text" style="" name="reportrange" id="reportrange" class="form-control" value=""><span></span>
                            </div>        
                        </div>
                        <div class="col-lg-1">
                        </div>
                        
                        <div class="col-lg-4">
                            
                                <div id ="filter_global" class="input-group" style="-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);">
                                    <input id="global_filter" name="x_card_code" type="text" class="form-control global_filter cc-cvc" value="" data-val="true" data-val-required="Please enter the security code" data-val-cc-cvc="Please enter a valid security code" autocomplete="off" placeholder="Search">
                                    

                                        <div class="input-group-addon">
                                            <span class="fa fa-search fa-sm" data-toggle="popover" data-container="body" data-html="true" data-title="Security Code"
                                                            data-content="<div class='text-center one-card'>The 3 digit code on back of the card..<div class='visa-mc-cvc-preview'></div></div>"
                                                            data-trigger="hover"></span>
                                         </div>
                                </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
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
                                        <button class="btn btn-secondary " style="-webkit-box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);box-shadow: 0 0 20px rgba(0, 0, 0, 0.08);">
                                            <i class="fa fa-plus fa-lg"></i><a class="unduh">Unduh</a>
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
                            <div id="dashboard" class="card-body">
                                <h3 style="margin-bottom:30px;color:#8c8e8d;" class="text-center">Inventori</h3>
                                <div class="row">
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="produk">Produk</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="stokmasuk">Stok Masuk</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="stokkeluar">Stok Keluar</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="totalstok">Total Stok</a>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="supplier">Supplier</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="returbarang">Retur Barang</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="stokkeluar">Stok Keluar</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="returpenjualan">Retur Penjualan</a>
                                    </div>
                                    
                                </div>
                            </div>
                            <div id="dashboard1" class="card-body">
                                <h3 style="margin-bottom:30px;color:#8c8e8d;" class="text-center">Pegawai</h3>
                                <div class="row">
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="datapegawai">Data Pegawai</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="penjualan">Penjualan</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="keuntungan">Keuntungan</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="setoran">Setoran</a>
                                    </div>
                                    
                                </div>
                                <div class="row">
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="returpegawai">Retur Penjualan</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="komisi">Komisi</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="pinjaman">Pinjaman</a>
                                    </div>
                                </div>
                            </div>
                            <div id="dashboard2" class="card-body">
                                <h3 style="margin-bottom:30px;color:#8c8e8d;" class="text-center">Pelanggan</h3>
                                <div class="row">
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="datatoko">Data Toko</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="pembelian">Pembelian</a>
                                    </div>
                                    <div class="col-lg-3" >
                                        <a  class="btn"  href="returbarangpelanggan">Retur Barang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          


          
            
            <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a class="modal-title" id="mediumModalLabel">Tambah Data Produk</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-5 text-right">
                                    <div class="form-tambah">
                                        <a >Kode Barang</a>
                                    </div>
                                    <div class="form-tambah">
                                        <a >Nama Barang</a>
                                    </div>
                                    <div class="form-tambah">
                                        <a >Jenis Barang</a>
                                    </div>
                                    <div class="form-tambah">
                                        <a >Harga</a>
                                    </div>
                                    <div class="form-tambah">
                                        <a >Supplier</a>
                                    </div>

                                </div>
                                <div class="col-lg-5 text-left">
                                    <input type="text" id="text-input" name="text-input" placeholder="Masukan Kode Barang" class="form-input">
                                    <input type="text" id="text-input" name="text-input" placeholder="Masukan Nama Barang" class="form-input">
                                    <input type="text" id="text-input" name="text-input" placeholder="Masukan Jenis Barang" class="form-input">
                                    <input type="text" id="text-input" name="text-input" placeholder="Masukan Harga" class="form-input">
                                    <select data-placeholder="" class=" form-input standardSelect" tabindex="1">
                                        <option  class="option"value="" label="Pilih Supplier"></option>
                                        <option value="United States">A</option>
                                        <option value="United Kingdom">B</option>
                                        
                                    </select>
                                </div>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-success">Buat</button>
                        </div>
                    </div>
                </div>
            </div>
             <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" >
                    <div class="modal-content">
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Edit Data Produk</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-5 text-right">
                                    <div class="form-tambah">
                                        <a >Kode Barang</a>
                                    </div>
                                    <div class="form-tambah">
                                        <a >Nama Barang</a>
                                    </div>
                                    <div class="form-tambah">
                                        <a >Jenis Barang</a>
                                    </div>
                                    <div class="form-tambah">
                                        <a >Harga</a>
                                    </div>
                                    <div class="form-tambah">
                                        <a >Supplier</a>
                                    </div>

                                </div>
                                <div class="col-lg-5 text-left">
                                    <input type="text" id="text-input" name="text-input" placeholder="Masukan Kode Barang" class="form-input">
                                    <input type="text" id="text-input" name="text-input" placeholder="Masukan Nama Barang" class="form-input">
                                    <input type="text" id="text-input" name="text-input" placeholder="Masukan Jenis Barang" class="form-input">
                                    <input type="text" id="text-input" name="text-input" placeholder="Masukan Harga" class="form-input">
                                    <select data-placeholder="" class=" form-input standardSelect" tabindex="1">
                                        <option  class="option"value="" label="Pilih Supplier"></option>
                                        <option value="United States">A</option>
                                        <option value="United Kingdom">B</option>
                                        
                                    </select>
                                </div>
                            </div>
                          
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>

  

          


        </div> <!-- .content -->


        
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-lg-12 text-center" style="font-weight: 500;font-size: 16px">
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
    <script src="{{asset('assets/js/moment.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
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

                            function cb(start, end) {
                              $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                            }

                            $('#reportrange').daterangepicker({
                                "locale": {
                                    "format": "DD/MM/YYYY",
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
                                        "Nopember",
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
                              var startDate = new Date(data[1]);
                              
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
                            ['2093',
                              'Feb 23, 2018',
                              'asd asd ',
                              'asd@hotmail.com',
                              '£ 50',
                              '£0.00',
                              
                            ],
                            ['2092',
                              'Feb 23, 2018',
                              'asddd asddd',
                              'dddd@hotmail.com',
                              '£ 50',
                              '£0.00',
                              
                            ],
                            ['2050',
                              'Feb 20, 2018',
                              'Angus Fret',
                              'angus@fgf.co.uk',
                              '£ 50',
                              '£0.00',
                              
                            ],
                            ['2048',
                              'Feb 19, 2018',
                              'John Smith',
                              'john@smith.com',
                              '£ 50',
                              '£0.00',
                              
                            ],

                            ['2046',
                              'Feb 19, 2018',
                              'Ana Ana',
                              'ana@talktalk.net',
                              '£ 50',
                              '£0.00',
                              
                            ],
                            ['2045',
                              'Feb 19, 2018',
                              'Ray N',
                              'rayn@nn.com',
                              '£ 50',
                              '£0.00',
                              
                            ],
                            ['2044',
                              'Feb 16, 2018',
                              'Paul  N',
                              'paul@gmail.com',
                              '£ 200',
                              '£0.00',
                              
                            ],
                            ['2042',
                              'Feb 13, 2018',
                              'Bradley New',
                              'new-marden@hotmail.com',
                              '£ 100',
                              '£0.00',
                              
                            ],

                            ['2012',
                              'Jan 27, 2018',
                              'Mark Zuckenberg',
                              'markzeg@me.com',
                              '£ 150',
                              '£0.00',
                              
                            ],

                          ];
                          var table = $('#bootstrap-data-table').DataTable({
                            "order": [
                              [0, "desc"]
                            ],
                            "columnDefs": [ {
                            "targets": -1,
                            "data": null,
                            "defaultContent": "<button type='button' class='editdata' data-toggle='modal' data-target='#largeModal'>Edit</button><button type='button' class='deletedata' data-toggle='modal' data-target='#largeModal'>Hapus</button>"
                            } ],
                            lengthChange: false,
                            data: dataSet,
                            columns: [{
                            title: "ORDER ID"
                          },
                          {
                            title: "ORDER DATE"
                          },
                          {
                            title: "PURCHASED BY"
                          },
                          {
                            title: "RECIPIENT"
                          },
                          {
                            title: "ORDER TOTAL"
                          },
                          {
                            title: "VAT"
                          },
                          {
                            title: "EXPIRY"
                          }

                        ]
                            
                            
                          });

  
  



                });

    </script>




<div id="container">
  
 
  
</div>



</body>
</html>
