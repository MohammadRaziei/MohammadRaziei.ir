<!DOCTYPE html> 
<html>
<head>
<style>
    *{
        box-sizing: content-box;

    }
    body {
        background: black;
    }


    .video a{
        float: right;
        z-index: +10;
    }
     .video a img{
        width: 5%;
         max-width: 30px;
         min-width: 20px;
        position: absolute;

        right: 5px;
    }
    
    .video video {
        position: absolute;
        top: 50%;
        left: 0;
        right: 0;
        height: 100vh;
        padding: 0;
        transform: translateY(-50%);
        z-index: -1;
    }
    
</style>
</head>
<!--<body style='background: black'> -->
<body>

<?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$id = $_GET['id'];
$conn = mysqli_connect("127.0.0.1","mohamm29_admin","mohamm29_admin" , "mohamm29_database");

function Check_connection() {
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
     echo "Connected successfully";
}
function generateRandomString($length = 8) {
    return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
}
function get_url($pi) {

    $sql = "SELECT * FROM `links` WHERE (url_id = '".$pi."')";
    $result = $GLOBALS['conn']->query($sql);
    $result= $result->fetch_assoc();
    return $result;
}


$out = get_url($id);
$link = $out['url'];
$encoded_link = urlencode($link);

    echo("
  <div class='video'> 
    <a href='$link' download='$id.mp4'><img src='../common/images/download-button-lte.svg' alt='Download'></a>
    <video width='100%' controls>
        <source src='$link' type='video/mp4'>
        Your browser does not support HTML5 video.
    </video>
    </div>
  ");
  ?>

</body> 
</html>
