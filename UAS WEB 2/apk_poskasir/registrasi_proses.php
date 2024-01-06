
<?php

require 'config.php';


        $user = htmlentities($_POST['user']);
        $pass = htmlentities($_POST['pass']);
        $id = htmlentities($_POST['id']);

        $data[] = $id;
        $data[] = $user;
        $data[] = $pass;
        $data[] = $id;
        
        $sql = "INSERT INTO login (id_login, user, pass, id_member) VALUES (?,?,?,?)";
        $row = $config -> prepare($sql);
        $row -> execute($data);
      

        $id2 = htmlentities($_POST['id']);
        $nama = htmlentities($_POST['nm_member']);
        $alamat = htmlentities($_POST['alamat_member']);
        $tlp = htmlentities($_POST['telepon']);
        $email = htmlentities($_POST['email']);
        $foto = htmlentities($_FILES["foto"]);
        $nik = htmlentities($_POST['nik']);

        $data1[] = $id2;
        $data1[] = $nama;
        $data1[] = $alamat;
        $data1[] = $tlp;
        $data1[] = $email;
        $data1[] = $foto;
        $data1[] = $nik;

        $sql2 = "INSERT INTO member (id_member, nm_member, alamat_member, telepon, email, gambar, NIK) VALUES (?,?,?,?,?,?,?)";
        $row1 = $config -> prepare($sql2);
        $row1 -> execute($data1);
        echo '<script>alert("Registrasi Berhasil");window.location="login.php?page=user&success=tambah-data"</script>';

?>
