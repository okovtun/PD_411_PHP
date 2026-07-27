<?php

function create_table_header($results)
{
	$metadata = sqlsrv_field_metadata($results);
	print_r($metadata);
	$table_header = '<table><thead><tr>';
	for($i = 0; $i < sqlsrv_num_fields($results); $i++)
	{
		//echo $metadata[$i]['Name'] . '<br>';
		$table_header .= "<th>{$metadata[$i]['Name']}</th>";
	}
	$table_header .= '</tr></thead>';
	return $table_header;
}

?>