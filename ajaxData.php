<?php


include_once 'connection.php'; 


if(isset($_POST['panchayat'])) {
   



    $sql="select * from panchayat WHERE District_Id = ".$_POST['District']." AND Taluk_Id = ".$_POST['taluk']." AND Panchayt_Name = '".$_POST['panchayat']."'";

    $query =mysqli_query($conn,$sql);

    if(mysqli_num_rows($query) > 0 ) {

        echo "2";

    } else {


        $sql = "INSERT INTO panchayat (Panchayt_Name, Taluk_Id, District_Id )VALUES ('".$_POST["panchayat"]."', '".$_POST["taluk"]."', '".$_POST["District"]."')";



        if (mysqli_query($conn, $sql)) {
         echo "1";
     } else {
         echo "0";
     }
     $conn->close();


 }










} else  if(isset($_POST["district_id"]) && !empty($_POST["district_id"])){
    //Get all Taluk data

    $m="select * from taluk WHERE District_Id = ".$_POST['district_id']."";
    // echo $m;
    $query =mysqli_query($conn,$m);
    
    //Count total number of rows
    $rowCount = mysqli_num_rows($query);
    
    //Display Taluk list
    if($rowCount > 0){
        echo '<option value="" selected disabled>Select Taluk</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['Taluk_Id'].'">'.$row['Taluk_Name'].'</option>';
        }
    }else{
        echo '<option value="" selected disabled>Taluk not available</option>';
    }
}


?>