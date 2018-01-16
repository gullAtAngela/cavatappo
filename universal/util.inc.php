<?php

function eventList($options, $list, &$request = null) {
	$request === null
		&& $request = &$_POST;

	$output = "<label for=\"$list\">" . ucfirst($list). "</label>\n";
	$output .= "\n<select name=\"$list\">\n";
	foreach ($options as $value => $label) {
		if (strtotime($label['publishedUntil'] . " " . $time) >= strtotime(date('Y-m-d G:i:s'))) {
			$selected = $request[$list] == $value ? 'selected' : '';
			$output .= "<option value=\"$value\" $selected>{$label['titel']}</option>\n";
		}
		// else {
		// 	$output .= "<option value=\"-1\" $selected>Aktuell keine Events</option>\n";
		// }
	}
	
	$output .= "</select>\n";
	return $output;
}

function input($name, $value, $type = 'text', $class = '') {
	$output = "<label for=\"$name\">$value</label>\n";
	$output .= "\t<input class=\"$class\" type=\"$type\" name=\"$name\">\n";

	return $output;
}

function util_checkboxInput($options, $name, $submit, &$request = null) {
	$request === null
		&& $request =&$_POST;

	
	foreach ($options as $value => $label) {
		// $output = "<label for=\"$label\">$label</label>";
			$output .= "<label for=\"$label\">$label</label><input name=\"$name\" type=\"checkbox\"";
		if (isset($request['$submit'])) {
			$checked = "";
		} else {
			$checked = $request[$name] == $value ? 'checked' : '';
		}
		
		$output .= " value=\"$value\" $checked>\n";
	}
	return $output;
}	