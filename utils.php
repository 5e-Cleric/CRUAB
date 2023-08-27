<?php
function console_log($output, $with_script_tags = true) 
{
	//return;
    $js_code = 'console.log('.json_encode($output, JSON_HEX_TAG).');';
    if ($with_script_tags) {
        $js_code = '<script>'.$js_code.'</script>';
    }
    echo $js_code;
}
function XSS($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function sqlinjection($connection, $input){
    $input = mysqli_real_escape_string($connection, $input);
    return $input;
}


function assegurarInputs($input){
	global $conn;
    $input = XSS($input);
    $input = sqlinjection($conn, $input);
    return $input;
}
function getTitol($index)
{
	if($index==0)
		return "Presidència";
	else if($index==1)
		return "Vicepresidència";
	else if($index==2)
		return "Secretaria";
	else if($index==3)
		return "Tresoreria";
	else
		return "Vocalia";
}
?>