<?php

    session_start();
    include('config.php');


   if(! $connection)
   {
      die('Could not connect: ' . mysqli_error());
   }

    //<<------------- ADDING Owner DETAILS TO DATABASE --------------------->>
    if(isset($_POST['register']))
    {
   
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $phno=$_POST['phno'];
        $email=$_POST['email'];
        $accno = $_POST['accno'];
        $retval = mysqli_query($connection,"INSERT into owner(oid, name, pass, phone, email, accno) VALUES('1', '$name', '$pass', '$phno', '$email', '$accno')");
        if($retval)
        {
            echo "Entered data successfully in Owner Table \n";
        }
    }


    //<<------------- CHECKING Owner LOGIN DETAILS from DATABASE --------------------->>
    if(isset($_POST['login']))
    {
        $name=$_POST['name'];
        $pass=$_POST['pass'];
        $check = mysqli_query($connection,"SELECT oid from owner WHERE name='$name' AND pass='$pass' ");
        $row = mysqli_fetch_array($check);
        $no = mysqli_num_rows($check);

        if($no > 0)
        {
            session_start();
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $name;
            $_SESSION["ownerid"] = $row['oid'];
            
            header("location: owner_homepage.php");
            echo $_SESSION["ownerid"] ;
        }
        else
        {
            echo "User does not Exits";
        }
    }

    

    //<<------------- OPENING ADD Houses Page --------------------->>
    if(isset($_POST['add_house']))
    {
        header("location: house.php");
    }


    //<<------------- ADDING House Details TO DATABASE --------------------->>
    if(isset($_POST['house']))
    {
        $status = 'error';
        if(!empty($_FILES["image"]["name"]))
        {
            $fileName = basename($_FILES["image"]["name"]);
            $fileType = pathinfo($fileName);
            $image = $_FILES['image']['tmp_name'];
            $imgContent = addslashes(file_get_contents($image));
        }
        $add=$_POST['add'];
        $town=$_POST['town'];
        $type=$_POST['type'];
        $oid = $_SESSION['ownerid'];

        $query = mysqli_query($connection,"Select MAX(hno) from houses");
        $row = mysqli_fetch_array($query);

        $retval = mysqli_query($connection,"INSERT into houses(img, hno, oid, address, town, type) VALUES('$imgContent', $row[0]+1, '$oid', '$add', '$town', '$type')");
        if($retval)
        {
            $_SESSION["houseno"] = $row[0]+1;
        }
    
        //<<------------- ADDING FLAT Details TO DATABASE --------------------->>
        $bhk=$_POST['bhk'];
        $floors=$_POST['floors'];
        $rentamount=$_POST['rentamount'];
        $hno = $_SESSION["houseno"];

        $query = mysqli_query($connection,"Select MAX(fno) from flat");
        $row = mysqli_fetch_array($query);

        $retval = mysqli_query($connection,"INSERT into flat(fno, hno, bhk, floors, rentamount, status) VALUES($row[0]+1, '$hno', '$bhk', '$floors', '$rentamount', 'Available')");

        //<<------------- ADDING RENT Details TO DATABASE --------------------->>
        $w=$_POST['w'];
        $e=$_POST['e'];
        $p=$_POST['p'];
        $retval = mysqli_query($connection,"INSERT into rate(hno, water, electricity, parking) VALUES($hno, '$w', '$e', '$p')");
        if($retval)
        {
            header("location: house.php");        
        }
    }    


    
    //<<------------- DISPLAYING THE REQUIRED PROPERTIES --------------------->>
    if(isset($_POST['property']))
    {
        $houseno = $_POST['houseno'];
        $_SESSION['disp_hno'] = $houseno;
        header("location: property-single.php");        
        
    }




?>