<?php
include "uDebug.php";

class Debug extends uD{}

class Dub{
	public static $pi = 3.14;
	public static $two = 2.0;
}
$a = true;
$b = 3;
uD::dump($a);
uD::dump($b);
uD::dump(Dub::$pi);

class a{
	var $pi = 3.14;
	function b()
	{
		uD::dump($this->pi);
	}
}
$x = new a();
$x->b();

$c = "\nfero\ttaraba\n";
uD::dump($c);

$d = array(1,2,3,"10" => 4,"a"=>"fero","b"=>"taraba");
uD::dump($d);
//Debug::dump($_SERVER);

//TODO: NULL;
$e = NULL;
uD::dump($e);

uD::dump(Dub::$two);

?>
