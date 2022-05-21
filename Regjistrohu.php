
<!DOCTYPE html>
 <html>
 <style>
  select {
    width: 100%;
  padding: 20px 20px;
  margin: 8px 0;
  display: inline-block;
  background-color: #f6f6f6;
  border: none;
  border-radius: 20px;
  color : grey;

  }
	a {
		font-family: sans-serif;
		text-decoration: none;
		color:grey ;
		transition: 4s;
	}

	a:hover {
		text-decoration: underline;
		color:grey ;
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

	div.white{
		 position: absolute;
    top: 20%;
    left: 43%;
    margin-top: -50px;
    margin-left: -50px;
		height: 900px;
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

    <?php 
    if(isset($_POST['submit'])){
        $emri          =  $_REQUEST['name'];
        $mbiemri       = $_REQUEST['sname'];
        $roli          =  $_REQUEST['roli'];
        $password      = $_REQUEST['psw'];
        $pswconfirm    = $_REQUEST['pswconfirm'];
        $email         = $_REQUEST['email'];
        $emailconfirm  = $_REQUEST['emailconfirm'];


        $sql = "INSERT INTO regjistrimi(Emri, Mbiemri,Roli, Password, Fjalkalimi, KonfirmoFjalkalimin, E-mail, KonfirmoEmailin) VALUES (?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->excecute([$emri, $mbiemri, $roli, $password, $pswconfirm, $email, $emailconfirm]);
        if($result) {
          echo 'Te dhenat u ruajten.';
         }else{
          echo'Error.';
         }

        echo $emri;
    }
    ?>
		
 <div class = "white">

<form action="Regjistrohu.php" method="post">
  <div class="imgcontainer">
    <img src="logo.png" alt="Avatar" class="avatar">
    <h3 class = "fonti">Universiteti i Prishtines<br>"Hasan Prishtina"</h3>
  </div>

  <div class="container">
    <input type="text" placeholder="Emri" name="name" required>
    <input type="text" placeholder="Mbiemri" name="sname" required>

  <select name="roli" id="Roli">
    <option value="Student">Student</option>
    <option value="Profesor">Profesor/Asistent</option>
  </select>
  
    <input type="password" placeholder="Fjalkalimi" name="psw" required>
    <input type="password" placeholder="Konfirmo Fjalkalimin" name="pswconfirm" required>
    <input type="text" placeholder="E-mail" name="email" required>
    <input type="text" placeholder="Konfirmo E-mail" name="emailconfirm" required>

</div>
    <div class="zbrast">
    <div class ="center"> 
    <input type="submit" name="submit" value="Regjistrohu">
</form>       
</div>
</div>
    
</form>
</div>

<?php
require_once('config.php');
?>

	</body>
  </html>
