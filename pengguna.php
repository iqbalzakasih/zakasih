<?php
 
$connect=mysqli_connect('localhost', 'id12789063_zakasih', 'Panser1932', 'id12789063_akademik');
 
$query = "SELECT * from pengguna ";
$result = mysqli_query($connect,$query) or die(mysqli_error());
 
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
    $temp = array(

    "id" => $row["id"],
    "nama" => $row["nama"], 
    "email" => $row["email"],
    "negara" => $row["negara"]);
    
    array_push($arr, $temp);
}
 
$data = json_encode($arr);
 
echo "{\"Menampilkan Data Penggua\":" . $data . "}";
?>