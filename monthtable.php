<!DOCTYPE html>
<html>
  <title>Work Study Hours</title>

<?
include('navbar.php');
include('connection.php');
$id= $_POST['ID'];
$con = connect();
$query = "SELECT * FROM user WHERE StudentID =".$id;
$res=mysqli_query($con,$query);

if(mysqli_num_rows($res)>0){
?>

<table width="62%" cellpadding="1" cellspacing="1" id="resultTable">
          <thead>
            <tr bgcolor="#33FF00" style="margin-bottom:10px;">
              <th width="18%" bgcolor="#FFFF00"> January </th>
              <th width="19%" bgcolor="#FFFF00"> February </th>
			  <th width="16%" bgcolor="#FFFF00"> March </th>
              <th width="18%" bgcolor="#FFFF00"> April </th>
              <th width="18%" bgcolor="#FFFF00"> May </th>
            </tr>
          </thead>
          
          <tbody>
          <?
          $jan="January";
          $feb="February";
          $mar="March";
          $ap="April";
          $may="May";
          $totaljan= gethour($id,$jan);
          $totalfeb= gethour($id,$feb);
          $totalmar= gethour($id,$mar);
          $totalap= gethour($id,$ap);
          $totalmay= gethour($id,$may);
					  echo '<tr>';
					  echo '<td>'.$totaljan.'</td>';
					  echo '<td><div align="center">'.$totalfeb.'</div></td>';
                      echo '<td><div align="center">'.$totalmar.'</div></td>';
                      echo '<td><div align="center">'.$totalap.'</div></td>';
                      echo '<td><div align="center">'.$totalmay.'</div></td>';
					  

		?>
          </tbody>
          



       </table>

    
          <? 
         }else{
                    print("enter a valid ID");
                  }


    function gethour($id,$month){
                    $con = connect();
                    $quer= "SELECT SUM(`Working Hours`) as totalhours FROM keiserworkinghoursdb.area_students WHERE StudentID = '$id' and `month`= '$month'";
                    $resu= mysqli_query($con,$quer);
                    $column= mysqli_fetch_array($resu);
                    $Totalhours= $column['totalhours'];
                    $total= floatval(number_format($Totalhours, 2, '.', ''));
                    return $total;
      
                  }
          ?>

</html>



<?   include('footer.php');
              ?>



</html>