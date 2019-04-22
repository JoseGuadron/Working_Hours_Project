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

include_once('navbar.php');
?>
 <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script type="text/javascript">
			var start_time;
			var current_time;
			
			//gets current server time

			var get_time = function () {
				$.ajax({
					type: 'GET',
					url: 'clock.php',
					data: ({ action : 'get_time' }),
					success: (function (data) {
						start_time = new Date(
							data.year, 
							data.month, 
							data.day,
							data.hour, 
							data.minute, 
							data.second
						);
						$('#clock').html(current_time.toLocaleTimeString());
					}),
					dataType: 'json'
				});
			}
			
			//counts 0.25s
			var cnt_time = function () {
				current_time = new Date(start_time.getTime() + 250);
				$('#clock').html(current_time.toLocaleTimeString());
				start_time = current_time;
			}
			
			setInterval(cnt_time, 250); //add 250ms to current time every 250ms
			setInterval(get_time, 30250); //sync with server every 30,25 second
			get_time();
		</script>
<div id="wrapper">
			<div id="clock"></div>
		</div>

<?php
$con = connect();
$query = "SELECT * FROM user WHERE StudentID =".$id;
$res=mysqli_query($con,$query);


if(mysqli_num_rows($res)>0){
    echo "<br>";
    $date = date ('y-m-d');
    $hours= date('H:i');
    $tiempo= date('A');
    echo " <h2 class='labelname'> TIME OF LOGING IS $hours ", $tiempo. "</h2>" ;
    $strSQL= "INSERT INTO `area_students` (`StudentID`,`Date`,`Time_In`) VALUES
    ('$id','$date','$hours')";
    $que= mysqli_query($con,$strSQL);
    include('running.php');
    include('footer.php');
   

}else{
    echo "<h2> Insert a Valid ID </h2>";
}

?>

