<?php
    $name=$_POST['name'];
    $designation=$_POST['designation'];
    $contact=$_POST['contact'];
    $salary=$_POST['salary'];

    if(strlen($name)>15){
        echo "name length should not excit 15 ";
    }
    else if(strlen($contact)!=11){
        echo "contact length have to be 11";
    }
    else if($designation==""){
        echo "designation can't be empty";
    }
    else if($contact==""){
        echo "contact can't be empty";
    }
    else if($salary==""){
        echo "salary is not valid";
    }
    else if($salary <= 0){
        echo "salary is not valid";
    }
    else{
        echo "All informations are valid";
    }
?>
