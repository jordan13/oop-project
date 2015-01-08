<!-- Example 1 -->
<?php
if(is_bool("Jordan is awesome"))
	echo"It is a boolean";
else
	echo 'It is not a boolean';
	var_dump(is_bool('ABC'));
	var_dump(is_bool('1234'));
	var_dump(is_bool(123));
	var_dump(is_bool(false));

?>
<!-- Example 2  -->
<?php
if(is_integer(5678))
	echo"It is an integer";
else
	echo 'It is not an integer';
	var_dump(is_integer(123456));
	var_dump(is_integer(1234));
	var_dump(is_integer(123));
	var_dump(is_integer(false));
?>
<!-- Example 3 -->
<?php
if(is_null("Disco Disco"))
	echo"It is a null";
else
	echo 'It is not a null';
	var_dump(is_null('JKL'));
	var_dump(is_null('1234'));
	var_dump(is_null(123));
	var_dump(is_null(false));

?>