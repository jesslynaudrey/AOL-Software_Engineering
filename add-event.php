<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SaC</title>
    <link rel="stylesheet" href="./add-event.css" />
    <style>
        .container {
            width: 30%;
            margin: auto;
        }

        .title {
            font-family: Poppins;
            color: black;
            font-size: 50px;
            font-weight: bold;
            text-align: center;
        }

        form {
            margin-top: 30px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 25px;
            font-weight: bold;
        }

        .form-group input[type="text"],
        .form-group input[type="file"] {
            width: 100%;
            height: 30px;
            padding: 5px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .tombol {
            background-color: #2e5bff;
            color: #fff;
            font-size: 27px;
            font-family: Poppins;
            font-weight: bold;
            width: 270px;
            padding: 10px 30px;
            border: none;
            border-radius: 100px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .tombol:hover {
            background-color: #1e3dbf;
        }
    </style>
</head>
<body background="public/external/bg.png">
    <div class="container">
        <p class="title"><b>Add Event</b></p>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nama">Nama Event:</label>
                <input type="text" name="nama-event">
            </div>
            <div class="form-group">
                <label for="desc">Deskripsi Event:</label>
                <input type="text" name="desc-event">
            </div>
            <div class="form-group">
                <label for="tgl">Tanggal Event:</label>
                <input type="text" name="tgl-event">
            </div>
            <div class="form-group">
                <label for="image">Upload Image:</label>
                <input type="file" name="image">
            </div>
            <input class="tombol" type="submit" name="add" value="Add Event">
        </form>
    </div>
</body>
</html>


<?php
  include "connection.php";

  if(isset($_POST['add'])) {
    $file_diperbolehkan	= array('png','jpg');
    $img = $_FILES['image']['name'];
    $x = explode('.', $img);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];

    if(in_array($ekstensi, $file_diperbolehkan) == true){
        if($ukuran < 1044070){
            move_uploaded_file($file_tmp, 'image/'.$img);
            $nama=$_POST['nama-event'];
            $desc=$_POST['desc-event'];
            $tanggal=$_POST['tgl-event'];

            $sql = "insert into eventt (Image,Nama_Event,Deskripsi_Event,Tanggal_Event) values('$img','$nama','$desc','$tanggal')";
            if($sql){
                echo 'FILE BERHASIL DI UPLOAD';
            } else {
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }


    $hasil=mysqli_query($conn,$sql);

    if($hasil) {
      echo "<script>window.location.href='../web/home-admin.php';</script>";
    }
  }

?>
