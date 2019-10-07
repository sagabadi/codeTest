<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="/Update/{{$barang->id}}" method="post">
                            @csrf
                            <h3 class="text-center text-info">Update Barang</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Nama Barang:</label><br>
                                <input type="text" required name="namabarang" id="namabarang" value="{{$barang->nama_barang}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Stok:</label><br>
                                <input type="number" required name="stok" id="stok" value="{{$barang->stok}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Harga Jual:</label><br>
                                <input type="number" required name="hargajual" id="hargajual" value="{{$barang->harga_jual}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username" class="text-info">Harga Beli:</label><br>
                                <input type="number" required name="hargabeli" id="hargabeli" value="{{$barang->harga_beli}}" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-info btn-md" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
