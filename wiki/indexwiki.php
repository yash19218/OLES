<?php
echo'
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="wikistyle.css">';
echo '<div class="container-fluid header">
<ul class="nav navbar-expand ml-2">
  <li class="my-2"><a class="navbar-brand" href="">
    <img src="../images/logo.png" alt="Techro HTML5 template"></a>
  </li>
</ul>
</div>';

$title=$_GET['title'];
echo "<h2 id='wikiheading'>Wikipedia Search - ".$title."<h2>";


$api_url="https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&titles=".ucwords($title)."&redirects=true";
$api_url=str_replace(' ','%20',$api_url);

if($data=json_decode(@file_get_contents($api_url))){
    foreach($data->query->pages as $key=>$val){
        $pageId=$key;
        break;
    }
    $content=$data->query->pages->$pageId->extract;

    header('Content-Type:text/html; charset=utf=8');
    echo $content;
}
else{
    echo 'NO Results Found...';
}

?>