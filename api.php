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
<br>
<br>
<br>

<h1>Spotify <br>Müzik Kapağı İndirici</h1>

</body>
</html>

<?php 
$trackurl = $_POST["url"];
$xurl = "https://open.spotify.com/oembed?url=".$trackurl;
$kaynak = file_get_contents($xurl);
$data = json_decode($kaynak);
$cikolata = $data->thumbnail_url;
echo "<img src='$cikolata' >"; 

?>
