<?php 
include "header.php";
 
//Isi atau Content 
//http://localhost/lat3/index.php
//http://localhost/lat3/index.php?menu=1
if(isset($_GET['menu'])){
    if($_GET['menu']==1){
        include "artikel.php";
    }else if($_GET['menu']==2){
        include "form.php";
    }else if($_GET['menu']==3){
        include "manage.php";
    }else if($_GET['menu']==4){
        include "form_edit.php";
    }else{
        echo "Pilih Menu";
    }
}else{
    include "home.php";
}



include "footer.php";

?>
