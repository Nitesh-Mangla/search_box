<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav input[type=text] {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  border: none;
  font-size: 17px;
}

@media screen and (max-width: 600px) {
  .topnav a, .topnav input[type=text] {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
  ul#suggestion{
	  list-style:none;
	  padding:0px;
	  margin:0px;
	  width:200px;
  }
  
  ul#suggestion li a{
	  display:block;
	  padding:.5em,10px;
	  min-height:1em;
	  background:#ccc;
		color:#000;
  }
  
  ul#suggestion li a:hover{
	  background:#AAA
  }
}
</style>
</head>
<body>

<div class="topnav" id="search_area"> 
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>
  <a href="#contact">Contact</a>
  <form id="myform" method="POST" action="">
  <?php $q = isset($_post['search'])?$_postp['search']:'';?>
  <input type="text" placeholder="Search.." id="search1" name="search"value="<?php echo $q;?>">
  
  </form>
  
  <ul id="suggestion">
  
  </ul>
</div>

</body>
<script  src="auto_suggestion.js"></script>
</html>
