<?php 
$trackurl = $_POST["url"];
$xurl = "https://open.spotify.com/oembed?url=".$trackurl;
$kaynak = file_get_contents($xurl);
$data = json_decode($kaynak);
$cikolata = $data->thumbnail_url;
echo "<img src='$cikolata' >"; 

?>
