<!DOCTYPE html>
<html>
<head>
    <title>FORM SISWA BAR</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        .warning {
            color: #FF0000;
        }
        body {
           
           width: 800px;
            background: #393E41;
            margin: 250px auto;

        }
    </style>
</head>
<body>
    <div class="row">
        <div col-md-10>
            <div class="card">
                <div class="card-header">
                    DATA SISWA BARU
                </div>
                <div class="card-body">
                    <form method="post" action="simpansiswa.php">
                        <div class="form-group row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" id="Nama" class="form-control" class="warning">
                            </div>
                        </div><br>
                        <div class="form-group row">
                             <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
                             <div class="col-sm-10">
                                  <input type="text" name="kelas" id="kelas" class="form-control" class=" warning">
                             </div>
                        </div><br>
                        <div class="form-group row">
                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" name="alamat" id="alamat" class="form-control" class=" warning">
                            </div>
                        </div> <br>
                         <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                                <span><a href="cetakdata.php" class="btn btn-danger">Batal</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>