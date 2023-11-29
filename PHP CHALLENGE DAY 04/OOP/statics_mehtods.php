<?php
// static methods can be called directly - without creating an instance of a class.

class Classname{
    public static function staticMethod(){
        echo "Hello World!";
    }
// 
}
// call static method
Classname::staticMethod();
?><br>

<?php
 class greating{
    public static function welcome(){
        echo "Hello all PHP Devs ";
    }

    public function __construct()
    {
        self::welcome();
    }
 }

 new greating();
?>
<br>
<?php
 class domain{
    protected static function getWebUrl(){
        return "www.mvungi.com";
    }
 }

 class Mvungi extends domain{
    public $web;
    public function __construct()
    {
        $this -> web = parent::getWebUrl();
    }

 }
 $domainName = new Mvungi;
 echo $domainName -> web;
?>