<?php

include 'login_backend.php';
?>

<html>
<!-- perdorimi i css per front end -->
<style>
	a {
		font-family: sans-serif;
		text-decoration: none;
		color:#780808;
		transition: 4s;
	}

	a:hover {
		text-decoration: underline;
		color:#780808;
		font-family: sans-serif;

	}

    a.reg {
    font-family: sans-serif;
    text-decoration: none;
    color:grey;
    transition: 4s;
  }

  a.reg:hover {
    text-decoration: underline;
    color:grey;
    font-family: sans-serif;

  }

	div.center{

		text-align: center;
	}
	div.zbrast{
		 
		height:400px;
  width: 100%;
  align-content: center;
  }
div.password{
   position: absolute;
    top: 20%;
    left: 43%;
    margin-top: 450px;
    margin-left: -40px;
}
	div.white{
		 position: absolute;
    top: 20%;
    left: 43%;
    margin-top: -50px;
    margin-left: -50px;
		height: 600px;
  width: 400px;
  align-content: center;

  padding: 10px;
  box-shadow: 5px 10px 18px #E0E0E0;
  background-color: white;
  }


input[type=text], input[type=password] {
  width: 100%;
  padding: 20px 20px;
  margin: 8px 0;
  display: inline-block;
  background-color: #f6f6f6;
  border: none;
  border-radius: 20px;
}

input[type=submit] {
  background-color: #780808;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 40%;
  border-radius: 12px;
  transition: 0.3s;

}

input[type=submit]:hover {
 
  background-color: white;
  color: #780808;
  border: 1px solid #780808;
}


.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;

}




	}
	.fonti {
		font-family: Helvetica, sans-serif;
		color : grey;

	}
	
	</style>
<head>
	</head>
	<body style="background-image: url('prapavija.png')">
		
 <div class = "white">
  <!-- implementimi i formes ne html-->
<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="logo.png" alt="Avatar" class="avatar">
    <h3 class = "fonti">Universiteti i Prishtines<br>"Hasan Prishtina"</h3>
  </div>

  <div class="container">
    <input type="text" placeholder="E-mail" name="email" required>

    
    <input type="password" placeholder="Password" name="psw" required>
</div>
    <div class="zbrast">
    <div class ="center">  
    <input type="submit" value="Kyqu">
    <div class ="center">
    <span><a class="reg" href="Regjistrohu.php">Regjistrohuni !</a></span>
</div>
</div>

</div>
    
</form>
 
</div>

	</body>
  </html>
  
 