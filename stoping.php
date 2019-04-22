<?php
date_default_timezone_set("America/El_Salvador");
$id= $_POST['ID'];
function connect()
{
    if(!($link=mysqli_connect("localhost","root")))
    {
        echo "error connection";
        exit();

    }
    if(!mysqli_select_db($link,"keiserworkinghoursdb"))
    {
        echo "error selecting data base";
        exit();

    }
    return $link;
}


$con = connect();
$query = "SELECT * FROM user WHERE StudentID =".$id;

$res=mysqli_query($con,$query);
//$fila= mysqli_fetch_array ($res);
//print_r($fila);

if(mysqli_num_rows($res)>0){
    print("exist");
    $date = date ('y-m-d');
    $hours= date('H:i');
    $month= date('F');
    $querh="SELECT * FROM keiserworkinghoursdb.area_students  WHERE StudentID = '$id'and StatusID = '0'   AND Date = '$date'";
    $resu=mysqli_query($con,$querh);
    $fila= mysqli_fetch_array ($resu);
    $horaini= $fila['Time_In'];
    $hora= substr($horaini,0,-6);
    $min= substr($horaini,3,-3);

   // echo "horas : ", $hora , "minutos :" , $min;

   //list($hora, $min) = explodest($hora, $min) = explode( " ",time($horaini));
   include_once('logoption.php');
   $horaInicio = new DateTime($horaini);
   $horaTermino = new DateTime($hours);
   
 $interval = $horaInicio->diff($horaTermino);
  $total= sprintf($interval->format('%H:%i'));
   //echo $total;
   $h=(float) substr($total,0,-3);
   $m=(float) substr($total,3);
   $totalhours= $h+($m/60);
  $totalh =floatval(number_format($totalhours, 2, '.', ''));
   echo "Total hours: " . $totalh;
   echo " <h2>   Hours done : ", $h, " Hours" , " with:" ,$m, " minutes </h2> ";
   


 
  //  $totalhours= date('H:s', strtotime(''.$hours.' - '.$hora.' hours - '.$min.' minutes'));
   // echo $totalhours;


    //$sql = "SELECT * FROM keiserdb.area_students WHERE (StudentID = '$id' and Date = '$date')";
  // $result = mysqli_query($con,$sql);


   $sql = "UPDATE keiserworkinghoursdb.area_students SET StatusID='1', `Working Hours`='$totalh' ,Time_Out='$hours' , `month`='$month' WHERE StudentID = '$id'and StatusID = '0'   AND Date = '$date'";
   $result= mysqli_query($con,$sql); 

  
    



}else{
    print("no exist");
}

?>
