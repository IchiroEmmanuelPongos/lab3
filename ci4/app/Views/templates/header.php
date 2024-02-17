<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pongos Site</title>
<style>

.t {
  float: top;
  width: 100%;
  text-align: center;
  font-family: "Times New Roman", Times, serif;
  font-size: 25px;
  color: white;
  bottom: 350px;

  position: absolute;
  text-decoration: none;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: right;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: green;
  
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: green;
  overflow: hidden;
}

.dropdown:hover .dropdown-content {
  display: block;
  overflow: hidden;
}





</style>

<div class="navbar">
<div class="dropdown">
    <button class="dropbtn">Projects 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
  <a href="#intro">About Me</a>
  <a href="#news">Gallery</a>
   
</div>
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
