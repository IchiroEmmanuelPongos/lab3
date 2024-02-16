<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pongos Site</title>
<style>
#Nav{
list-style-type: none;
  margin: 0;
  padding: 0;
  background-color: #3c3c3c;
  overflow: hidden;
  position:fixed;
  width: 100%;
}

#navbar{
  float: right;
}

li a{
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li :hover{
  background-color: green;
}
</style>


<ul id="Nav">
</li>
  <li id="navbar"><a class="active" href="#intro">About Me</a></li>
  <li id="navbar"><a href="resource.php">Resources n/a</a></li>
  <li id="navbar"><a href="Act1.php">Script1Act n/a</a></li>
  <li id="navbar"><a href="Act2.php">Script2Act n/a</a></li>
  <li id="navbar"><a href="Act3.php">Script3Act n/a</a></li>
  <li id="navbar"><a href="form.php">Survey Form n/a</a></li>
</ul>

<?php
$me = [
    'src'    => 'images/BG.jpg',
    'alt'    => 'N/a',
    'class'  => 'center',
    'width'  => '100%',
    'height' => '850',
    'title'  => 'WindowsXP',
    'rel'    => 'lightbox',
];
echo img($me);
?>
</head>
</html>
