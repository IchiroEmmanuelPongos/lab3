<!DOCTYPE html>
<html>
<style>
#center{
text-align:center;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
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
height: 50%;
padding: 15px;
align-content: center;
}

.row::after {
content: "";
display: table;
clear: both;
}

@media screen and (max-width:600px) {
  .column {
    width: 100%;
  }
}

#intro{
font-family: Arial, Helvetica, sans-serif;
font-size: 20px;
text-align: justify;
background-color: grey;	

}
#blend{
background-color: grey;	
	
}
</style>
<body>
<div class="row">
	<div class="column" id="blend">
<h1 id="center">About Me</h1>	
<h2 id="center">Pongos, Ichiro Emmanuel</h3>
<?php
$me = [
    'src'    => 'images/Picture.jpg',
    'alt'    => 'N/a',
    'class'  => 'center',
    'width'  => '50%',
    'height' => '50%',
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
<h2>IT Experience: Programming</h2>
<ul> 
<li>C</li> 
<li>Python</li>
<li>Java</li>
</ul>

<h2> Hobbies / Interests</h2>
<ol>
<li>Drawing Digital Art</li>
<li>Playing Video Games</li>
<li>Making recorded videos and editing them</li>
</ol>


</body>
</html>