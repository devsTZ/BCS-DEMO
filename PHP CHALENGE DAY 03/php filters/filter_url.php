<!-- Why use filters 
 Many web applications receive external input. 
 such as User input from a form
 Cookies
 Web services data
 Server variables
 Database query results.
-->

<!-- Sanitize and validate a URL -->
<?php
 $url = "http://mvungi.com";
//  remove all illegal character from url
$url = filter_var($url, FILTER_SANITIZE_URL);

// validate url
if(!filter_var($url, FILTER_VALIDATE_URL) === false){
    echo "$url is a valid URL";
}else{
    echo "$url is not a valid URL";
}

?>