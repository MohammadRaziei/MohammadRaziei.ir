

<!--<!DOCTYPE html>
<html>
<body>

<?php
/*
echo "<table style='border: solid 1px black;'>";
 echo "<tr><th>id</th><th>name</th><th>url</th><th>status</th><th>text</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
} 

$servername = "127.0.0.1";
$username = "mohamm29_admin";
$password = "mohamm29_admin";
$dbname = "mohamm29_database";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, url_id, url,status, text FROM links"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 

</body>
</html>

-->
<?php
/*
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
// function insert_url($url) {
//     do{
//         $rand = generateRandomString();
//     }while ($result = $GLOBALS['conn']->query("SELECT * FROM `links` WHERE (url_id = ".$rand.")"));
//     $sql = "INSERT INTO `links` (url_id,url) VALUE('".$rand."','".$url."')";
//     if ($GLOBALS['conn']->query($sql) === TRUE) {
//         echo "New record created successfully";
//         return $rand;
//     } else {
//         echo "Error: " . $sql . "<br>" . GLOBALS['conn']->error;
//         return null;
//     }
// }
$out = get_url($id);
// var_dump( $out['url'] );
// header("location :". $out['url'] ); exit();

// header("Content-Disposition: attachment; filename=\"" . basename($out['url']) . "\"");
// header("Content-Type: application/force-download");
// header("Content-Length: " . filesize($out['url']));
// header("Connection: close");

// header("location : https://docs.google.com/uc?export=download&id=1DUCjRmxVGJNPK55ex7FWsrWp7oWlQIQK");exit();

// @include("/path/to/sitefunctions.php"); /* Move page with 301 http status code*/
/*function movePage($num,$url){
    static $http = array (
        100 => "HTTP/1.1 100 Continue",
        101 => "HTTP/1.1 101 Switching Protocols",
        200 => "HTTP/1.1 200 OK",
        201 => "HTTP/1.1 201 Created",
        202 => "HTTP/1.1 202 Accepted",
        203 => "HTTP/1.1 203 Non-Authoritative Information",
        204 => "HTTP/1.1 204 No Content",
        205 => "HTTP/1.1 205 Reset Content",
        206 => "HTTP/1.1 206 Partial Content",
        300 => "HTTP/1.1 300 Multiple Choices",
        301 => "HTTP/1.1 301 Moved Permanently",
        302 => "HTTP/1.1 302 Found",
        303 => "HTTP/1.1 303 See Other",
        304 => "HTTP/1.1 304 Not Modified",
        305 => "HTTP/1.1 305 Use Proxy",
        307 => "HTTP/1.1 307 Temporary Redirect",
        400 => "HTTP/1.1 400 Bad Request",
        401 => "HTTP/1.1 401 Unauthorized",
        402 => "HTTP/1.1 402 Payment Required",
        403 => "HTTP/1.1 403 Forbidden",
        404 => "HTTP/1.1 404 Not Found",
        405 => "HTTP/1.1 405 Method Not Allowed",
        406 => "HTTP/1.1 406 Not Acceptable",
        407 => "HTTP/1.1 407 Proxy Authentication Required",
        408 => "HTTP/1.1 408 Request Time-out",
        409 => "HTTP/1.1 409 Conflict",
        410 => "HTTP/1.1 410 Gone",
        411 => "HTTP/1.1 411 Length Required",
        412 => "HTTP/1.1 412 Precondition Failed",
        413 => "HTTP/1.1 413 Request Entity Too Large",
        414 => "HTTP/1.1 414 Request-URI Too Large",
        415 => "HTTP/1.1 415 Unsupported Media Type",
        416 => "HTTP/1.1 416 Requested range not satisfiable",
        417 => "HTTP/1.1 417 Expectation Failed",
        500 => "HTTP/1.1 500 Internal Server Error",
        501 => "HTTP/1.1 501 Not Implemented",
        502 => "HTTP/1.1 502 Bad Gateway",
        503 => "HTTP/1.1 503 Service Unavailable",
        504 => "HTTP/1.1 504 Gateway Time-out"
    );
    header($http[$num]);
    header ("Location: $url");
}

movePage(301, $out['url']);

*/










/*





// echo '<br><br>';
    // do{
    //     $rand = generateRandomString();
    // }while ($result = $GLOBALS['conn']->query("SELECT * FROM `links` WHERE (url_id = ".$rand.")"!=null);
// var_dump(get_url('45145'));

// $sql = "SELECT * FROM t_n WHERE(url_id = ".$id.")";

// $result = $conn->query($sql);
// $result = $query->fetch_assoc; fetch_array 

// $url = $result[0]['url'];

// $sql = "INSERT INTO t_n (id,url_id,url1,url2,..) VALUE(234423,23423,'".$f."')";

// $sql = "UPDATE t_n SET url2 = '".$sdf."' WHERE (url_id=   AND url1 = )"





















$link = $out['url'];
$encoded_link = urlencode($link);











*/
?>


















































<?php
/*
$id = $_GET['id'];
echo $id;
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
function insert_url($url) {
    do{
        $rand = generateRandomString();
    }while ($GLOBALS['conn']->query("SELECT * FROM `links` WHERE (url_id = ".$rand.")"));
    $sql = "INSERT INTO `links` (url_id,url) VALUE('".$rand."','".$url."')";
    if ($GLOBALS['conn']->query($sql) === TRUE) {
        echo "New record created successfully";
        return $rand;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        return null;
    }
}



$out = insert_url($id);
echo "<p>your link is available : <a herf=' http://mohammadraziei.ml/link/$out'> http://mohammadraziei.ml/link/$out </a> </p>";
















*/

?>