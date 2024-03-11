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
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name='Nama'>
                </div>
            </div>
            <div class="row mb-1">
                <label class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-5">
                <input type="text" class="form-control" name='Email'>
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
                <div class="col-sm-5">
                <input type="date" class="form-control" name='TTL'>
                </div>
            </div>
            Program Studi: 
                <select name="dropdown">
                    <option value="choose" >Pilih Program Studi</option>
                    <option value="BM" >Manajemen Bisnis</option>
                    <option value="SI" >Sistem Informasi</option>
                    <option value="CS" >Ilmu Komputer</option>
                    <option value="TI" >Teknik Industri</option>
                    <option value="Ps" >Psikologi</option>
                    <option value="IK" >Ilmu Komunikasi</option>
                    <option value="SE" >Sastra Inggris</option>
                </select><br>
                Alamat: <textarea name='address' cols="30" rows="5"></textarea><br>
                Handphone: <input type="number" maxlength="12" name='HP'><br>
                Jenis Kelamin: <input type="radio" name='jk' value="Laki-Laki">Laki-Laki
                               <input type="radio" name='jk' value="Perempuan" checked>Perempuan<br>
                <input name='btnSave' type="submit" placeholder="Save">
                <input name='btnCancel' type="reset" placeholder="Cancel"><br>
            </form>
        </body>
        </html>
    
    
<?php
}
        ?>