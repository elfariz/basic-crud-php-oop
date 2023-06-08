<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=x, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid;
        }
    </style>
</head>
<body>
    <?php
        include('../model/Database.php');
        $db = new Database();
    ?>
<div>
    <form action="../controller/proses.php?act=add" method="post">
        <label for="name">Nama: <input type="text" id="name" name="nama"></label><br/>
        <label for="age">Umur: <input type="number" name="umur" id="age"></label><br/>
        <label for="submit"><input type="submit" value="Tambah Kontak" id="submit"></label>
    </form>
    </div>
    <div>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Umur</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
            $no = 1;
            foreach($db->show_data() as $show) { 
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $show["nama"]; ?></td>
            <td><?php echo $show["umur"] ?></td>
            <td><a href="edit.php?id=<?php echo $show["id"]; ?>">Edit</a></td>
            <td><a href="../controller/proses.php?act=delete&id=<?php echo $show["id"]; ?>">delete</a></td>
        </tr>
          <?php  }
        ?>
    </table>
    </div>
</body>
</html>