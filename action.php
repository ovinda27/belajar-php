<?php

if(isset($_GET['p'])) {
    
    if ($_GET['p'] == 'tampil') { 

        echo $_POST['nama'];
        echo "<br/>";
        echo $_POST['password'];

    } else if ($_GET['p'] == "pesan") { 
        echo "Halo apa kabar ".$_POST['nama'];
        echo "<br/>";
        echo "password anda adalah ".$_POST['password'];

    } else if ($_GET['p'] == "aman") { 
    
        if (!empty( $_POST['nama'])) {
            echo $_POST['nama'];
        } else {
            echo "nama belum dimasukan";
        }

        echo "<br/>";

        if (!empty( $_POST['password'])) {
            echo $_POST['password'];
        } else {
            echo "password masih kosong";
        }
    } else if ($_GET['p'] == "gambar") { // menampilkan gambar
        $size = getimagesize($_FILES['berkas']['tmp_name']); // mengambil gambar
        $image = "data:".$size['mime'].";base64,".
                 base64_encode(file_get_contents($_FILES['berkas']['tmp_name'])); // menampilkan gambar
        
        echo "<image src='".$image."' width='720'>";
    }

}  else {
    echo "Anda tidak boleh mengakses halaman ini";
}