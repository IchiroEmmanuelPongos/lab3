<!DOCTYPE html>
<html>
<style>
.center{
display: block;
  margin-left: auto;
  margin-right: auto;

}

#Ab{
text-align:center;	
font-size: 40px;	
}
#Na{
text-align:center;
font-size: 30px;	
	
}

* {
  box-sizing: border-box;
}
body {
  margin: 0;
}

.column {
float: left;
width: 50%;
height: 700px;
padding: 15px;
align-content: center;
background-color: #d1ff99;
}

.column2 {
float: left;
width: 50%;
height: 500px;
padding: 15px;
align-content: center;
background-color: #6cb1c4;
}

.row::after {
content: "";
display: table;
clear: both;

}


#intro{
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
text-align: justify;
}

#list{
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
text-align: left;
}

}
</style>
<body>
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












<div class="row">
	<div class="column">
	
<h1 id="Ab">About Me</p>	
<h2 id="Na">Pongos, Ichiro Emmanuel</h3>
<?php
$me = [
    'src'    => 'images/Picture.jpg',
    'alt'    => 'N/a',
    'class'  => 'center',
    'width'  => '',
    'height' => '35%',
    'title'  => 'Myself',
    'rel'    => 'lightbox',
];
echo img($me);
?>
	</div>
	<div class="column" id="intro">	
		
<p>I am currently 20 year's old and a year 2 student in <em>Asia Pacific College</em> enrolled on the section <strong>BSIT-MI221</strong>.
I chose this course because I want to learn more about how to create my own webpages to improve my portfolio and apply them on my future potential jobs. 
Currently applying a Public School Scholarship to help me when it comes to the school tuition.</p>
<p>My goals in life right now as a student is to finish school and focus on my career. 
I want to earn the things I want to accomplish that's possible with my current capabilities and wish to improve them.</p>

	</div>
</div>

<div class="row">
	<div class="column2" id="list">
<h2 id="center">IT Experience: Programming</h2>
<ul> 
<li>C</li> 
<li>Python</li>
<li>Java</li>
</ul>
	</div>
	<div class="column2" id="list">
<h2 id="center">Hobbies / Interests</h2>
<ol>
<li>Drawing Digital Art</li>
<li>Playing Video Games</li>
<li>Making recorded videos and editing them</li>
</ol>
	</div>
</div>
</body>
</html>