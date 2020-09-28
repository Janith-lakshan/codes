<!DOCTYPE html>
<!DOCTYPE html>
<html>

<?php
class animal
{
	public $family;
	public $food;

	function __construct($family, $food){
		$this ->family = $family;
		$this ->food = $food;
	}

	public function decl()
	{
		$dec = "The animal is",$this->family, "and the food is",$this->food;
		echo $dec;
	}
}

class Cat extends animal{
	public function message(){
		echo " ";
	}
}

$cat = new Cat("cat", "fish");
$cat->message();
//$cat->decl();
?>

</html>