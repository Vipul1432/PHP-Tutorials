<?php
class Abc {
	public function __call($name, $arguments) {
		
		echo "Calling object method '$name' "
			. implode(', ', $arguments). "\n";
	}

	public static function __callStatic($name, $arguments) {
		
		echo "Calling static method '$name' "
			. implode(', ', $arguments). "\n";
	}
}

// Create new object
$obj = new Abc;

$obj->runTest('in object context');

Abc::runTest('in static context');
?>
