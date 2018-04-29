<?php

require('prosescrud.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD EVENT</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<div class="container">
<div class="row">
<h1>CRUD EVENT</h1>
</div>

<div class="row">
<h2>Form</h2>

<div class="col-md-12">
<form action="crud.php" method="POST">
    <div class="form-group">
    <label for="event">Event</label>
        <input type="text" name="event" class="form-control" id="event" value="<?= $event['nama'] ?>" placeholder="Nama Event">
    </div>
    <div class="form-group">
    <label for="event">Lokasi</label>
        <input type="text" name="lokasi" class="form-control" id="lokasi" value="<?php echo $event['lokasi'] ?>" placeholder="Lokasi Event">
    </div>
    <div class="form-group">
    <label for="event">Harga Tiket Masuk</label>
        <input type="number" name="htm" class="form-control" id="htm" placeholder="Harga Tiket Masuk">
    </div>
<button type="submit" class="btn btn-primary">Simpan</button>
</form>
</div>
</div>

<div class="row">
    <h2>Daftar Event</h2>
    <div class="col-md-12">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Event</th>
                <th scope="col">Lokasi</th>
                <th scope="col">HTM</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                while($data = $hasil->fetch_assoc()) 
                {
                ?>
                <tr>
                    <th scope="row"><?php echo $no++ ?></th>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['lokasi'] ?></td>
                    <td><?php echo $data['htm'] ?></td>
                    <td>
                        <a href="crud.php?aksi=edit&id=<?php echo $data['id'] ?>" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
            </table>
    </div>
</div>

</div>
</body>
</html>