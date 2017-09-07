<?php

function get_buttons() {
	$str = '';
	$btns = array (
		1 => 'Save',
		2 => 'Cancel',
		3 => 'Refresh',
		4 => 'Delete';
		5 => 'Business Operation'
	);

	while(list($k, $v)=each($btns)) {
		$str .= '<input type="submit" value="'.$v.'" name="btn_'$k'" id="btn_'$k'" />'; 
	}
	return $str;
}


?>


<html>

<body>
	<div id="buttons_panel">
		<?php echo get_buttons(); ?>
	</div>
</body>

</html>