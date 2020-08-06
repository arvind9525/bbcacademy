<?php
$FirstName = _POST['FirstName'];
$LastName = _POST['LasstName'];
$VillageName = _POST['VillageName'];
$PostName = _POST['PostName'];
$BlockName = _POST['BlockName'];
$DistrictName = _POST['DistrictName'];
$DOB = _POST['DOB'];
$HigherQualification = _POST['HigherQualification'];
$AdharNumber = _POST['AdharNumber'];
$Number = _POST['Number'];
$Email =_POST['Email'];
$CourseName =_['CourseName'];
$Gender =_['Gender'];
$StateName =['StateName'];
$PinCode =['PinCode'];
$host="localhost";
//database conection//
$conn = new mysqli('localhost','new', '','resistration');
if($conn->connection_error)
{
    die('connection Faield :'.conn->connection_error);
}
else{
    $stmt=$conn->prepare("insert into resistration(Firstname,LastName,VillageName, PostName,BlockName,
    DistrictName,DOB,HigherQualification,AdharNumber,Number,Email,CourseName,Gender,StateName,Pincode))values(?,?
    ,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssisiissssi",$FirstName,$LastName,$VillageName,$PostName,$BlockName,$DistrictName,
    $DOB,$HigherQualification,$AdharNumber,$Number,$Email,$CourseName,$Gender,$StateName,$Pincode);
    $stmt->execute();
    echo"resistration Successfully.......";
    stmt->close();
    $conn->close();
}

?>