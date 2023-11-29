<!-- We are going to check what sort of browser the visitor is using. For that, we check the user agent string the browser sends as part of the HTTP requests. This information is stored in a variable.
Variables always start with dollar-sign in PHP-->

<!-- Example 1 -->
<?php 
echo $_SERVER['HTTP_USER_AGENT'];
?>
<!-- Note.......... -->
<!-- $_SERVER Is a special reserved PHP variable that contain all web server information. It is known as the superglobal variable -->


<!-- Example 2  -->
<!--Using controls structure and functions -->
<?php
if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome') !== FALSE){
    echo '<br>';
    echo'You are using Google Chrome .';
}
// you can test othe browser like Mozilla,
?>

<!-- Example 3 -->
<!-- Mixing both HTML and PHP modes. -->
<?php
if(strpos($_SERVER['HTTP_USER_AGENT'],'Chrome') !== FALSE){
?>
<h3>strpos() must have returned non-false <br></h3>
<p>Your are Using Google Chrome.</p>

<?php
 }else  {
?>
<h3>strpos() must have returned Fasle <br></h3>
<p>You are not using Google Chrome.</p>
<?php
}
?>
<!-- Insead of using a PHP echo statement to output something, we jumped out of PHP mode just sent straight HTML. The important and powerful point to note here is that the logical flow of the script remains intact.
Only one of the HTML blocks will end up getting sent to the viewer depending on the result of strpos(). -->
