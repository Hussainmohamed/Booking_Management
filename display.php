<?php
 $con=mysqli_connect("localhost","root","","test");
if(isset($_POST['Startdate'])){
   $date=$_POST['Startdate'];
   $edate=$_POST['Enddate'];
$res=$con->query("select * from booking where Start='$date' or End='$edate'");
$cnt=mysqli_num_rows($res);
if($cnt==1){
echo "1";
}else{

}

}else{
  
    $res=$con->query("select * from booking");
    while($row=mysqli_fetch_array($res)){
        $data[]=array(
            'Id'=>$row['Id'],
            'title'=>$row['title'],
            'start'=>$row['Start'],
            'end'=>$row['End']
    
        );
    }
    echo json_encode($data);
}

?>