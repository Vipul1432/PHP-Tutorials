<!-- PHP | array_change_key_case() Function -->

<?php

// PHP code to illustrate array_change_key_case()
// Both the parameters are passed
function change_case($in_array){
	return(array_change_key_case($in_array, CASE_UPPER));
}

// Driver Code
$array = array("Vipul" => 90, "RagHav" => 80,
			"SiTa" => 95, "rohan" => 85, "RISHAV" => 70);
print_r(change_case($array));

?>

<?php echo "<br>"; ?>

<!-- PHP | array_chunk() Function -->

<?php
$input_array = array('a', 'b', 'c', 'd', 'e');
print_r(array_chunk($input_array, 2));
?>

<?php echo "<br>"; ?>

<!-- PHP | array_column() Function -->

<?php
$records = array(
    array(
        'id' => 1432,
        'first_name' => 'Vipul',
        'last_name' => 'Kumar',
    ),
    array(
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ),
    array(
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ),
    array(
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    )
);
$first_names = array_column($records, 'first_name');
print_r($first_names);
?>

<?php echo "<br>"; ?>

<!-- PHP | array_combine() Function -->

<?php
$keys = array('Vipul', 'RagHav', 'SiTa', 'rohan', 'RISHAV');
$values = array(90, 80, 95, 85, 70);
print_r(array_combine($keys, $values));
?>

<?php echo "<br>"; ?>

<!-- PHP | array_count_values() Function -->

<?php
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
?>