<head>
  <meta charset="UTF-8">
  <title>62</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<br>
<br>
<br>
<br>
<br>

</body>
</html>

<?php 
$trackurl = $_POST["url"];
$xurl = "https://open.spotify.com/oembed?url=".$trackurl;
$kaynak = file_get_contents($xurl);
$data = json_decode($kaynak);
$tracknam = $data->title;
$cikolata = $data->thumbnail_url;
echo "<h1>$tracknam</h1>"; 
echo "<img src='$cikolata' >"; 
echo "<br>";
echo "<br>";
echo "<br>";
echo "<a href='$cikolata' class='download-btn' download>Resim Dosyasını İndir</a>";

?>
