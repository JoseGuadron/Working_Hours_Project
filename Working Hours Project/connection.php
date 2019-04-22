<?

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
?>