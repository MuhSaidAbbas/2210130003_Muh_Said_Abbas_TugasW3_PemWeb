<?php


if (isset($_POST['btnSave'])) {
    
    $name = $_POST['Nama'];
    $email = $_POST['Email'];
    $pw = $_POST['pw'];
    $ttl = $_POST['TTL'];
    $dp = $_POST['dropdown'];
    $add = $_POST['address'];
    $hp = $_POST['HP'];
    $jk = $_POST['jk'];
    echo "Nama\n: $name <br>";
    echo "Email\n: $email <br>";
    echo "Password\n: $pw <br>";
    echo "Tanggal Lahir\n: $ttl <br>";
    echo "Program Studi\n: $dp <br>";
    echo "Alamat\n: $add <br>";
    echo "Handphone\n: $hp <br>";
    echo "Jenis Kelamin\n: $jk <br>";
    
}

else {
    ?>
    
    
    
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
            <title>Document</title>
        </head>
        <body>
            <form action='' method="post">
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label">Judul Buku</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name='nb'>
                </div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label">Kategori Buku</label>
                <div class="col-sm-5">
                <label class="form-label"></label>
                <select  class="form-select">
                <option>Pilih Kategori Buku</option>
                <option>Fiksi</option>
                <option>Non Fiksi</option>
                <option>Karya Ilmiah</option>
                <option>Majalah</option>
                </select>
            </div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                <input type="password" class="form-control" name='pw'>
                </div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-1">
                    <input type="number" class="form-control" name='TTL'>
                </div>
                <div class="col-sm-1">
                <select name="TTL" class="form-control">
                    <option value="choose" >Pilih Bulan</option>
                    <option value="j" >Januari</option>
                    <option value="f" >Februari</option>
                    <option value="m" >Maret</option>
                    <option value="ap" >April</option>
                    <option value="m" >Mei</option>
                    <option value="jn" >Juni</option>
                    <option value="jl" >Juli</option>
                    <option value="ag" >Agustus</option>
                    <option value="sp" >September</option>
                    <option value="ok" >Oktober</option>
                    <option value="nv" >November</option>
                    <option value="ds" >Desember</option>
                </select>
                </div>
                
                <div class="col-sm-1">
                    <input type="number" class="form-control" name='TTL' min='2024' max='2029'>
                </div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label">Lama Pinjam</label>
                <div class="col-sm-1">
                <input type="number" class="form-control" name='lp'> 
                </div> hari
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label">Nama Anggota</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name='na'>
                </div>
            </div>
            <input name='btnSave' type="submit" placeholder="Save">
                <input name='btnCancel' type="reset" placeholder="Cancel"><br>
            </form>
        </body>
        </html>
    
    
<?php
}
        ?>