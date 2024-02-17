<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pongos Site</title>
<style>

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

.container {
}

.t {
  float: top;
  width: 100%;
  text-align: center;
  font-family: "Times New Roman", Times, serif;
  font-size: 25px;
  color: white;
  bottom: 350px;
  right: 0;
  position: absolute;
  text-decoration: none;
}

#Nav{
list-style-type: none;
  margin: 0;
  padding: 0;
  background-color:rgba(0, 51, 0, 1);
  position: fixed;
  width: 100%;
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

<div class="container">
<?php
$me = [
    'src'    => 'images/BG.jpg',
    'alt'    => 'N/a',
    'class'  => '',
    'width'  => '100%',
    'height' => '850',
    'title'  => 'WindowsXP',
    'rel'    => 'lightbox',
];
echo img($me);
?>
<div class="t"><h1 id="time">PM:AM</h1></div>
</div>
<script>
var time = new Date();
document.getElementById('time').innerHTML = time.toLocaleString('en-US', { hour: 'numeric', minute: 'numeric', hour12: true });



</script>
</head>
</html>
