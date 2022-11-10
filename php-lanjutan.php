<?php
$nama ="Ovinda Dwi";

// PERULANGAN FOR
/* $no=10;

for($i=0; $i<=$no; $i++){
    $n=$i+1;
echo$n. " ". $nama."<br/>";
} */

//PERULANGAN WHILE
/* $no=10;
$i=0;

while($i < $no){
    $n= $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}*/

// PERULANGAN DO WHILE
/* $no=10
$i=0;
do{
$n= $i + 1;
echo $n." ".$nama."<br />";
$i++;
}while
($i < $no); */

//PERULANGAN ARRAY
//contoh1
/* $data = array ('vinda','bima','trii');
foreach($data as $value){
    echo $value."<br/>";
}
*/

//menampilkan 1 kolom
/* $data = array ('vinda','bima','trii');
 echo $data[2];*/

 //ARRAY+PERULANGAN
 // contoh1
//$data = array ('vinda','bima','trii'); //datanya
/* for($i=0; $i<count($data); $i++){ //cara1
    echo $data[$i]."<br>";
} */
//contoh2
/* $data = array ('vinda','bima','trii'); //datanya
 foreach($data as $value){ //cara2
    echo $value."<br/>";
} */

//PERCABANGAN
//contoh1
/* if($nama="Vinda"){
    echo $nama."Asli BWI";
}else{
    echo"Bukan Namanya";
} */
//contoh2
 /*if($nama == "Kirana"){
    echo $nama."Orang BWI";
}else if ($nama=="Wati"){
    echo"Berasal dari pulau Jawa";
} else {
    echo"dari mana ?";
} */
//contoh3
/* switch($nama){
    case "Putu";
    $pesan = $nama."orang bali";
    break;
    case "Budi";
    $pesan = $nama."orang lain";
    break;
    default;
    $pesan = $nama."orang jawa";
}
echo $pesan; */
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Lanjutan PHP</title>
</head>

<body>
    <h1>Input Data + Perulangan</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <input type="submit" name="submit" value="Submit">
    </form>
    <br />
    <?php
        if(!empty($_POST['submit'])) {

            switch($_POST['nama']) {
                case "Ovinda":
                    $pesan = $_POST['nama']." adalah orang Banyuwangi";
                break;
                case "Kiranasari":
                    $pesan = $_POST['nama']." berasal dari pulau Jawa";
                break;
                default:
                    $pesan = $_POST['nama']." darimana ya?";
            
            }

            for ($i=0;$i<$_POST['no'];$i++) {
                echo $pesan."<br>";
            }

        } else {
            echo "Anda belum input nama dan jumlah";
        }
    ?>
</body>

</html>