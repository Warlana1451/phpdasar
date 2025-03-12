<?php
$team = ["silver","black","blue","white"];
print_r($team);
//menampilkan semua nama yg ada di dalam kurung siku atau variable
echo"<br>";
echo count($team);

//for ($i=0; $i < count($team); $i++) {
    //echo $team[$i];
//}
echo "<ol>";
foreach ($team as $key => $value) {
    echo "<li> $key . $value </li>";
}  
echo "</ol>";
//ini untuk membuat rangkaian berurut kayak "li" atau juga list
echo "<br><br>";
$buah = ["apel","mangga","pisang","jeruk"];
$buah[] = "anggur";
print_r($buah);
"<br>";
echo "<ol>";
foreach ($buah as $key => $value) {
    echo "<li> $key . $value </li><br>";//mengurutkan dari besar ke kecil    
}
echo "</ol>";

$ar_buah = ["a"=>"apel","m"=>"mangga","p"=>"pisang","j"=>"jeruk"];
echo "<ol>";
foreach ($ar_buah as $key => $value) {
    echo "<li>" .$key . $value ."</li>"."<br>";
}
    echo "/ol";    
    sort ($ar_buah); //mengurutkan dari kecil ke besar 
    print_r($ar_buah);
    echo "<hr/>";
    echo "<ol>";
    foreach ($ar_buah as $key => $value) {
        echo "<li>". $key."-" . $value. "</li>"."<br>";
    }
    echo "</ol>"
?>