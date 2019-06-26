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

                    <li class="">
                        <a href="index"><img class="menu-icon" src="{{asset('assets/icons/icon_dashboard.svg')}}">Dashboard </a>
                    </li>
                    <li class=" menu-item-has-children dropdown show open">
                        <a href="#" class="active dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="active menu-icon" src="{{asset('assets/icons/icon_inventori.svg')}}">Inventori</a>
                        <ul class="sub-menu children dropdown-menu show">
                            <li ><i class="  fa fa-circle "></i><a  href="produk">Produk</a></li>
                            <li><i class="fa fa-circle"></i><a href="stokmasuk">Stok Masuk</a></li>
                            <li><i class="fa fa-circle"></i><a href="stokkeluar">Stok Keluar</a></li>
                            
                            <li><i class=" fa fa-circle"></i><a href="totalstok">Total Stok</a></li>
                            <li><i class=" active fa fa-circle"></i><a class="active" href="supplier">Supplier</a></li>
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
                    <h3 style="color:#8c8e8d;"><b>Supplier</b></h3>
                </div>

                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-4">
                            
                               
                            
                        </div>
                        <div class="col-lg-4">
                            
                                
                            
                        </div>
                        <div class="col-lg-4">
                            
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
                <div class="col-lg-3 col-md-6" style="padding-left: unset!important">
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
                                            <th>Kode Supplier</th>
                                            <th>Nama Supplier</th>
                                            <th>Alamat Suplier</th>
                                            <th>No Handphone</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $item)
                                            <tr class="item{{$item->kode}}">
                                                <td>{{$item->kode}}</td>
                                                <td>{{$item->nama}}</td>
                                                <td>{{$item->alamat}}</td>
                                                <td>{{$item->no_tlp}}</td>
                                                <td><button type='button' class='editdata' data-toggle='modal' data-target='#largeModal' data-info="{{$item->kode}},{{$item->nama}},{{$item->alamat}},{{$item->no_tlp}}">Edit</button><button type='button' class='deletedata' data-toggle='modal' data-target='#deletedata' data-info="{{$item->kode}},{{$item->nama}},{{$item->alamat}},{{$item->no_tlp}}">Hapus</button></td>
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
                    <form id="tambahdatasupplier" method="POST" action="{{ url('supplierAdd') }}">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <a class="modal-title" id="mediumModalLabel">Tambah Data Supplier</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nama Supplier</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="namasupplier" name="namasupplier" placeholder="Masukan Nama Supplier" class="required form-control form-input">
                                    
                                </div>
                            </div>
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Alamat Supplier</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="alamatsupplier" name="alamatsupplier" placeholder="Masukan Alamat Supplier" class="required form-control form-input">
                                    
                                </div>
                            </div>
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nomor Handphone</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="nomor" name="nomor" placeholder="Masukan Nomor Handphone" class="required form-control form-input">
                                    
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
                    <form id="editdatasupplier" method="POST" action="{{ url('supplierUpdate') }}">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Ubah Data Supplier</a>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                         <div class="modal-body">
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Kode Supplier</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahkodesupplier" name="ubahkodesupplier"  class="form-control form-input" readonly>
                                </div>
                            </div>
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nama Supplier</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahnamasupplier" name="namasupplier" placeholder="Masukan Nama Supplier" class="required form-control form-input">
                                    
                                </div>
                            </div>
                            <div class="row form-space">
                                
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Alamat Supplier</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahalamatsupplier" name="alamatsupplier" placeholder="Masukan Alamat Supplier" class="required form-control form-input">
                                    
                                </div>
                            </div>
                            <div class="row form-space">
                                <div class="col-lg-3 text-left">
                                    <div class="form-tambah">
                                        <a >Nomor Hp</a>
                                    </div>
                                </div>
                                <div class="col-lg-5 text-left">
                                    <input  type="text" id="ubahnomor" name="nomor" placeholder="Masukan Nomor Handphone" class="required form-control form-input">
                                    
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
                    <form id="" method="POST" action="{{ url('supplierDelete') }}">
                        {{ csrf_field() }}
                        <div class="modal-header">
                            <a class="modal-title" id="largeModalLabel">Hapus Data Supplier</a>
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
    <script src="{{asset('assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/buttons.print.min.js')}}"></script>
    <script src="{{asset('assets/js/lib/data-table/jszip.min.js')}}"></script>
     
    <script type="text/javascript">
            $('select').change(function() {
                 if ($(this).children('option:first-child').is(':selected')) {
                   $(this).addClass('placeholder');
                 } else {
                  $(this).removeClass('placeholder');
                 }
                });

            $(document).ready(function() {
                
               $("#unduhexcel").on("click", function() {
                            table.button( '.buttons-excel' ).trigger();
                        }); 
              
              var table=$('#bootstrap-data-table').DataTable({
                 buttons: [
                                { 
                                    extend: 'excel',
                                    title: 'Estu SAE - Data Supplier',
                                    exportOptions: {
                                        columns: [ 0, 1, 2 ,3]
                                    }
                                }
                            ], 
                "language": {
                            "paginate": {    
                                        "next":       "Selanjutnya"
                                        }
                            },
                               
                
                initComplete: function () {
                this.api().column( 4 ).every( function () {
                var column = this;
                var select = $('<select class="form-control btn btn-primary placeholder "><option value="">Supplier</option><option value="">Semua</option></select>')
                    .appendTo( $('#filtersupplier').empty() )
                    .on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );
                
 
 
                        column.search( val ? '^'+val+'$' : '', true, false ).draw();
                    } );
                    
                            column.data().unique().sort().each( function ( d, j ) {
                                select.append( '<option  value="'+d+'">'+d+'</option>' )
                            } );
                        } );
                this.api().column( 2 ).every( function () {
                var column = this;
                var select = $('<select class="form-control btn btn-primary placeholder  "><option value="">Jenis Barang</option><option value="">Semua</option></select>')
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

           
               
     
              $('input.global_filter').on( 'keyup click', function () {
                             $('#bootstrap-data-table').DataTable().search(
                                $('#global_filter').val(),
                                
                            ).draw();
                            } );
            
        

            } );
    </script>
    <script type="text/javascript">
        
        $(document).ready(function () {
            $('select').niceSelect();
            $('#mediumModal').on('hidden.bs.modal', function () {
               
                $('#tambahdatasupplier').prop('selectedIndex',0);
                $('#tambahdatasupplier').validate().resetForm();
                $('.error').removeClass('error');
            });
            $('#largeModal').on('hidden.bs.modal', function () {
                
                $('#editdatasupplier').prop('selectedIndex',0);
                $('#editdatasupplier').validate().resetForm();
                $('.error').removeClass('error');
            });
            $('#tambahdatasupplier').validate({
             ignore: [],
            rules: {
                    kodesupplier: { required: true },
                    namasupplier: { required: true },
                    alamatsupplier: { required: true },
                    nomor:{ required: true,number: true }
                    },
            messages: {
                    kodesupplier: {required: "Kode Supplier harus diisi"},
                    namasupplier: { required: "Nama Supplier harus diisi" },
                    alamatsupplier: { required: "Alamat Supplier harus diisi" },
                    nomor:{ required: "Nomor Handphone Harus diisi",number:"Masukan hanya angka saja" }
                    },
            errorPlacement: function(error, element) {
            if (element.is('select:hidden')) {
                error.insertAfter(element.next('.nice-select'));
            } else {
                error.insertAfter(element);
            }
            }

            });
            $('#editdatasupplier').validate({
            ignore: [],
            rules: {
                    kodesupplier: { required: true },
                    namasupplier: { required: true },
                    alamatsupplier: { required: true },
                    nomor:{ required: true } 
                    },
            messages: {
                    kodesupplier: {required: "Kode Supplier harus diisi"},
                    namasupplier: { required: "Nama Supplier harus diisi" },
                    alamatsupplier: { required: "Alamat Supplier harus diisi" },
                    nomor:{ required: "Nomor Handphone Harus diisi",number:"Masukan hanya angka saja" }
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
            $('#ubahkodesupplier').val(details[0]);
            $('#ubahnamasupplier').val(details[1]);
            $('#ubahalamatsupplier').val(details[2]);
            $('#ubahnomor').val(details[3]);
            
        }
    </script>
    <script type="text/javascript">
        $(document).on('click', '.deletedata', function() {
            var stuff = $(this).data('info').split(',');
            $('.did').val(stuff[0]);
           
        
            $('#deletedata').modal('show');
        });
         
        
    </script>




<div id="container">
  
 
  
</div>



</body>
</html>
