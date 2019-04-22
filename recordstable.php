<!DOCTYPE html>
<html>
<link href="css/style.css" rel="stylesheet">
<title>Work Study Hours</title>

  <?php

include('navbar.php');
include('connection.php');
$id= $_POST['ID'];
$con = connect();
$query = "SELECT * FROM user WHERE StudentID =".$id;
$res=mysqli_query($con,$query);

if(mysqli_num_rows($res)>0){
?>
<div class="size-50" id="separator"></div>
<table width="62%" cellpadding="1" cellspacing="1" id="resultTable">
          <thead>
            <tr bgcolor="#33FF00" style="margin-bottom:10px;">
              <th width="18%" bgcolor="#FFFF00"> ID </th>
              <th width="19%" bgcolor="#FFFF00"> Working Hours </th>
			  <th width="16%" bgcolor="#FFFF00"> Date </th>
              <th width="18%" bgcolor="#FFFF00"> Time In </th>
              <th width="18%" bgcolor="#FFFF00"> Time Out </th>
              <th width="17%" bgcolor="#FFFF00">month</th>
              
            </tr>
          </thead>
          
          <tbody>
          <?
              
              $con = connect();

              $query= "SELECT * FROM keiserworkinghoursdb.area_students  WHERE StudentID = '$id'";
          $result = mysqli_query($con,$query);
				
				while($row = mysqli_fetch_array($result))
				  {
					echo '<tr>';
					  echo '<td>'.$row['StudentID'].'</td>';
					  echo '<td><div align="center">'.$row['Working Hours'].'</div></td>';
                      echo '<td><div align="center">'.$row['Date'].'</div></td>';
                      echo '<td><div align="center">'.$row['Time_In'].'</div></td>';
                      echo '<td><div align="center">'.$row['Time_Out'].'</div></td>';
					  echo '<td><div align="center">'.$row['month'].'</div></td>';}

		?>
          </tbody>
          



       </table>
<div id="titleh">
  <p id="hourstitle"><h3>TOTAL HOURS </h3>       
       <p> </p>
  
         <? 
          $con = connect();
          $quer= "SELECT SUM(`Working Hours`) as totalhours FROM keiserworkinghoursdb.area_students WHERE StudentID = '$id'";
          $resu= mysqli_query($con,$quer);
          $column= mysqli_fetch_array($resu);
          $Totalhours= $column['totalhours'];
          $total= floatval(number_format($Totalhours, 2, '.', ''));
          
          echo "<p>".$total."</p>";



                  }else{
                    print("enter a valid ID");
                  }
                  ?>
</div>

              <?   include('footer.php');
              ?>
        

</html>