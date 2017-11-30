<?php

function list_render ($options, $employer, &$request = null) {
	$request === null
		&& $request = &$_POST;

	$output = "\n<select name=\"$employer\">\n";
	foreach ($options as $value => $label) {
		$selected = $request[$employer] == $value ? 'selected' : '';
		$output .= "<option value=\"$value\" $selected>$label</option>\n";
	}
	
	$output .= "</select>\n";
	return $output;
}

function util_checkboxInput ($options, $name, $submit, &$request = null) {
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