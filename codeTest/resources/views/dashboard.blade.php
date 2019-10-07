<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Codetest</title>

        <!-- FAVICON -->
        <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#00943f">
        <meta name="theme-color" content="#ffffff">
        <!-- END FAVICON -->
        
        <link rel="stylesheet" href="{{asset('styles/plugins.css')}}">

        <link rel="stylesheet" href="{{asset('styles/main.css')}}">
        
        <script src="{{asset('scripts/modernizr.js')}}"></script>
    </head>
    <body id="">
        <!--[if lt IE 10]>
          <p class="browserupgrade">Perbaharui browser Anda untuk tampilan yang maksimal!</p>
        <![endif]-->
        
        <!-- NAVBAR -->
        <nav id="top-nav" class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <p class="navbar-brand">Kasir Server</p>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="" id="link_dagang">Dashboard</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown profil">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <img src="{{asset('images/pegawai/pegawai-1.png')}}" alt="Nama Pegawai 1" class="img-circle">
                                {{Session::get('name')}} - {{Session::get('type')}} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/Logout">Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav> <!-- END NAVBAR -->
        @if (session('status'))
            <div class="alert alert-success">
                {{session('status')}}    
            </div>
        @endif
        <!-- MAIN CONTENT -->
        <div class="main-wrapper container-fluid">
            <div class="container">
                <div class="row">   
                    <div class="col-xs-12">
                        <ul class="nav nav-pills">
                            <li role="presentation"> <h3 class="head-judul m-r-1">Data Barang</h3>  </li>
                            <li role="presentation">
                                <div class="form  form-inline form-custom">
                                    <div class="input-group input-group-lg input-group-transparent">
                                        <div class="input-group-addon"><i class="fa fa-search"></i></div>
                                        <input type="text" class="form-control font-primary" id="cari_dagangan" placeholder="Cari data barang">
                                    </div>
                                </div>
                            </li>
                            <li role="presentation" class="pull-right"><a href="#" class="btn btn-primary btn-sm btn-bold" data-toggle="modal" data-target="#modal_tambah">Tambah Barang Baru</a></li>
                        </ul>
                        <div class="well no-padding m-t-1">
                            @if (Session::get('type') == "Owner")
                            <table class="table table-custom table-striped" id="tabel_dagangan">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Stok</th>
                                        <th>Harga Jual</th>
                                        <th>Harga Beli</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="wrapper">
                                    @foreach($barang as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->nama_barang}}</td>
                                        <td>{{$data->stok}}</td>
                                        <td>{{$data->harga_jual}}</td>
                                        <td>{{$data->harga_beli}}</td>
                                        <td>
                                            <ul class="list-inline m-b-0">
                                                <li>
                                                     <a href="/Barang/{{$data->id}}"><img src="{{asset('images/icons/icon-pencil.png')}}" data-toggle="tooltip" data-placement="bottom" title="Edit"/></a>
                                                </li>
                                                <li>
                                                   <a href="/Delete/{{$data->id}}" onclick = "return confirmDialog();"><img src="{{asset('images/icons/icon-trash.png')}}" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Hapus"/></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                            @if (Session::get('type') == "Admin")
                            <table class="table table-custom table-striped" id="tabel_dagangan">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Stok</th>
                                        <th>Harga Jual</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="wrapper">
                                    @foreach($barang as $item => $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->nama_barang}}</td>
                                        <td>{{$data->stok}}</td>
                                        <td>{{$data->harga_jual}}</td>
                                        <td>
                                            <ul class="list-inline m-b-0">
                                                <li>
                                                     <a href="/Barang/{{$data->id}}"><img src="{{asset('images/icons/icon-pencil.png')}}" data-toggle="tooltip" data-placement="bottom" title="Edit"/></a>
                                                </li>
                                                <li>
                                                   <a href="" onclick = "return confirmDialog();"><img src="{{asset('images/icons/icon-trash.png')}}" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Hapus"/></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                            @if (Session::get('type') == "Staff")
                            <table class="table table-custom table-striped" id="tabel_dagangan">
                                <thead>
                                    <tr>
                                        <th>Kode Barang</th>
                                        <th>Nama Barang</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="wrapper">
                                    @foreach($barang as $item => $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->nama_barang}}</td>
                                        <td>{{$data->stok}}</td>
                                        <td>
                                            <ul class="list-inline m-b-0">
                                                <li>
                                                     <a href="/Barang/{{$data->id}}"><img src="{{asset('images/icons/icon-pencil.png')}}" data-toggle="tooltip" data-placement="bottom" title="Edit"/></a>
                                                </li>
                                                <li>
                                                   <a href="" onclick = "return confirmDialog();"><img src="{{asset('images/icons/icon-trash.png')}}" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Hapus"/></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @endif
                        </div>
                    </div>
                </div>  
            </div>
        </div><!-- /.container --><!-- END MAIN CONTENT -->

        <!-- MODAL: tambah dagangan -->
        <div class="modal fade modal-custom" tabindex="-1" role="dialog" id="modal_tambah" aria-labelledby="modal_tambah" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <form class="form form-custom clearfix" method="POST" action="/AddBarang">
                        @csrf
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p class="modal-title">Tambah Data Dagangan</p>
                        </div>
                        <div class="modal-body p-t-15 row">
                            <div class="clearfix"></div>
                            <div class="form-group col-md-10">
                                <label for="tambah_detail_item">Nama Barang</label>
                                <input id="tambah_detail_item" type="text" required name="namabarang" class="form-control">
                            </div>
                            <div class="form-group col-md-10">
                                <label for="tambah_modal">Stok</label>
                                <input id="tambah_modal" type="number" required name="stok" class="form-control">
                            </div>
                            <div class="form-group col-md-10">
                                <label for="tambah_penjual">Harga Jual (Rp)</label>
                                <input id="tambah_penjual" type="number" required name="hargajual" class="form-control">
                            </div>
                            <div class="form-group col-md-10">
                                <label for="tambah_non_penjual">Harga Beli (Rp)</label>
                                <input id="tambah_non_penjual" type="number" required name="hargabeli" class="form-control">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="tambah_submit" class="btn btn-primary btn-lg btn-bold pull-left"">Simpan</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.MODAL -->

        <!-- MODAL: ubah dagangan -->
        <div class="modal fade modal-custom" tabindex="-1" role="dialog" id="modal_ubah" aria-labelledby="modal_ubah" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content">
                    <form class="form form-custom clearfix">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <p class="modal-title">Ubah Data Barang</p>
                        </div>
                        <div class="modal-body p-t-15 row">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="ubah_submit" class="btn btn-primary btn-lg btn-bold pull-left"">Simpan</button>
                        </div>
                    </form>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.MODAL -->

        <script src="{{asset('scripts/vendors.js')}}"></script>
        
        <script src="{{asset('scripts/plugins.js')}}"></script>

        <script src="{{asset('scripts/main.js')}}"></script>

        <script language="javascript">
            $('body').on('hidden.bs.modal', '.modal', function () {
                $(this).removeData('bs.modal');
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function() {
                /* Datatable: Data Produk*/
                var tabel_dagangan = $('#tabel_dagangan').DataTable({
                    "footerCallback": function ( row, data, start, end, display ) {
                        var api = this.api(), data;
             
                        // Remove the formatting to get integer data for summation
                        var intVal = function ( i ) {
                            return typeof i === 'string' ?
                                i.replace(/[\$,]/g, '')*1 :
                                typeof i === 'number' ?
                                    i : 0;
                        };
                        // Total over all pages
                        total = api
                            .column( 1 )
                            .data()
                            .reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
                        // Total over this page
                        pageTotal = api
                            .column( 1, { page: 'current'} )
                            .data()
                            .reduce( function (a, b) {
                                return intVal(a) + intVal(b);
                            }, 0 );
             
                        // Update footer
                        $( api.column( 1 ).footer() ).html(
                            '$'+pageTotal +' ( $'+ total +' total)'
                        );
                    }
                });
                $('#cari_dagangan ').on( 'keyup', function () {
                    tabel_dagangan.search( this.value ).draw();
                });
            })
            function confirmDialog(){
                return confirm("Apakah Anda Yakin Ingin Menghapus Data Ini?")
            }
        </script>
    </body>
</html>
