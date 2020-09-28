<!DOCTYPE html>
<!DOCTYPE html>
<html>

<?php
class animal{
	public $family;
	public $food;
	function set_family($family){
		$this->family = $family;
	}
	function get_family(){
		return $this->family;
	}
}
$cat = new animal();
$dog = new animal();

$cat -> set_family("Cat");
$dog -> set_family("Dog");

echo $cat->get_family();
echo "<br>";
echo $dog->get_family();
?>

</html>