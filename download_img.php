<?php

$max_rozmiar = 1024*1024;

if(is_uploaded_file($_FILES['send_img_x"']['tmp_name'])){
  if($_FILES['send_img_x"']['size']>$max_rozmiar){
    echo 'Błąd! Plik jest za duźy!';
  }else {
      echo "Odebrano plik. Początkowa nazwa: ".$_FILES['send_img_x"']['name'];
      echo '<br/>';
      if (isset($_FILES['send_img_x"']['type'])){
        echo 'Typ: '.$_FILES['send_img_x"']['type'].'<br/>';

      }
    $name=basename($_FILES['send_img_x"']["name"]);
    move_uploaded_file($_FILES['send_img_x"']['tmp_name'], "send_img/".$name);
    }
}else{
  echo 'Błąd przy przesyłaniu danych!';
}

?>
