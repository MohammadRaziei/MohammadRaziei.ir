<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <meta name='description' content=''>
    <meta name='author' content=''>
    <link rel='icon' href='/common/images/download.png'>

    <title>Download <?php $id = $_GET['id']; echo $id; ?></title>

    <!-- Bootstrap core CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css' integrity='sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO' crossorigin='anonymous'>

    <!-- Custom styles for this template -->
    <style type='text/css'>
        body {
            padding-top: 5rem;
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
    </style>
</head>

    
<body onload='myFunction()' >

<nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
      <a class='navbar-brand' href='/'><img src='/common/images/mylogo.png' alt='logo' style='height: 20p;' > </a>
      <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarsExampleDefault' aria-controls='navbarsExampleDefault' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
      </button>

      <div class='collapse navbar-collapse' id='navbarsExampleDefault'>
        <ul class='navbar-nav mr-auto'>
          <li class='nav-item active'>
            <a class='nav-link' href='/'>Home <span class='sr-only'>(current)</span></a>
          </li>
          <li class='nav-item'>
            <a class='nav-link' href='#'>Link</a>
          </li>
          <li class='nav-item'>
            <a class='nav-link disabled' href='#'>Disabled</a>
          </li>
          <li class='nav-item dropdown'>
            <a class='nav-link dropdown-toggle' href='https://example.com' id='dropdown01' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Dropdown</a>
            <div class='dropdown-menu' aria-labelledby='dropdown01'>
              <a class='dropdown-item' href='#'>Action</a>
              <a class='dropdown-item' href='#'>Another action</a>
              <a class='dropdown-item' href='#'>Something else here</a>
            </div>
          </li>
        </ul> <!--
        <form class='form-inline my-2 my-lg-0'>
          <input class='form-control mr-sm-2' type='text' placeholder='Search' aria-label='Search'>
          <button class='btn btn-outline-success my-2 my-sm-0' type='submit'>Search</button>
        </form> -->
      </div>
    </nav>

    <main role='main' class='container'>
      <div class='starter-template'>
        <img src='/common/images/download-gif.gif' alt='Download' style='width: 40px; '>

        <h1>Download is ready</h1>
        <p class='lead'>It may long few seconds. thank you for waiting.</p>
        <?php ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

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

echo (
             " <p> If download doesn't start automaticaly please <a href='$link'>retry</a>.</p>
              <img alt='QR code' width='200' height='200' src='https://chart.googleapis.com/chart?chs=200x200&cht=qr&chl=$encoded_link&choe=UTF-8' title='Scan to download $id.' />

          <script> 
              function myFunction() {
                    location.replace('$link');
                    }
          </script>
          "
    );


/*echo (
"<!DOCTYPE html>
<html>
<head>
<title>Download $id</title>
<link rel='icon' href='/common/images/download.ico'>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script>
$(document).ready(function(){
        $(location).attr('href', '$link');
});

</script>
</head>

<body><!--
<body onload='myFunction()'>
-->
<h1>Download</h1>
<a href='$link'>Here</a>
<script>
function myFunction() {
location.replace('$link');
}
</script>

</body>
</html>
");
*/
 
?>
        
        
        

      </div>
       <footer class="footer-wrapper">
      <div class="container" style="position:fixed;background-color:white;bottom:0px;">
        <div class="row">
          <div class="col-md-12">
            <div class="copyright text-center" style='bottom:2px;'>
              <small>&copy; Powered by https://mohammadraziei.ml/</small>
            </div>
          </div>
        </div>
      </div>
    </footer><!-- End Footer Section -->


    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js' integrity='sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js' integrity='sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy' crossorigin='anonymous'></script>

</body>
</html>

