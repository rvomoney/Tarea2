<?php

function asgInput($nombre,$label){

	$required = '';

	return "<div>
		<label>{$label}: </label>
		<input type='text' name='$nombre' {$required} />
	</div>";
}
?>