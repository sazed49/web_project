
<?php

include("navibar.php");

?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: #cbd8f5;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 10px;
}

.about-section {
  padding: 10px;
  text-align: center;
  background-color: black;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: black;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}



@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p>This website was created for the project of web development laboratory in my 3rd year 1st term semister. </p>
  <p>I have developed it using html,css,javascirpt,cookies,session,SQLDatabase.</p>
</div>

<h2 style="text-align:center">Developers's Info</h2>
<div class="row">
  

  <div style="text-align: center;" class="column">
    <div class="card">
      <img src="images/contact.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Md.Sazedur Rahman</h2>
        <p class="title">3rd Year Undergraduate Student</p>
        <p>Khulna University Of Engineering and Technology.</p>
        
        <p><a href="mailto:rahman1707049@stud.kuet.ac.bd">rahman1707049@stud.kuet.ac.bd</a>
        </p>
      </div>
    </div>
  </div>
  
  
</div>

</body>
</html>