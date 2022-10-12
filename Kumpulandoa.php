<?php
$data=file_get_contents("https://doa-doa-api-ahmadramadhan.fly.dev/api");
$doa=json_decode($data);

$table = "<h3>Kumpulandoa</h3>";
$table .= "<table border=1>
			";
for($i=0;$i<count($doa);$i++){
	$id=$i+1;
	$table .= "<ol>
				<li style=list-style:none;>{$id}. {$doa[$i]->doa}</li>
				<ul><li>{$doa[$i]->ayat}</li>
					<li>{$doa[$i]->latin}</li>
					<li>{$doa[$i]->artinya}</li></ul>
				</ol>";
}
$table .= "</table>";
echo $table;
?>