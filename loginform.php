<?php 
	session_start();
	if(isset($_SESSION['username']) and isset($_SESSION['email']))
	{
		header('location:udetails.php');
	}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>INAZUMA Login</title>
    <style type="text/css">
    .error
		{
		 color: rgb(255, 0, 0);
     font-size: 15px;
		}
    html
		{ 
			background-image: url('https://i.postimg.cc/4dmbJgwf/abstract-communication-technology-network-concept-34629-641.jpg');
    		background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
		}

		fieldset
		{
			border-radius: 30px;
			border: 1px solid rgb(229, 236, 255);
      background-color: black;
			width: 40%;
      margin-top:45px;
      margin-left : 80px;
      padding-left: 30px;
      padding-right: 30px;
			padding-top: 50px;
			padding-bottom: 50px;
		}
		
		.hd1
		{
			text-align: left;
      padding-left: 290px;
      margin-top: 70px;
			color: white;
      font-size: 40px;
      font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
      padding-top: 30px ;
		}
    .hd2
    {
      text-align:center;
      font-size: 30px;
      color: rgb(229, 236, 255);
      font-family: Lucida Sans, Helvetica, Arial, sans-serif;
    }

  td
    {
      font-size: 17px;
      color: white;
			letter-spacing: 1px;
			font-family: Lucida Sans, Helvetica, Arial, sans-serif;
    }

    table.center
		{
			margin-left: auto; 
			margin-right: auto;
		}
    td
    {
      color: white;
			font-size: 20px;
      font-family: Lucida Sans, Helvetica, Arial, sans-serif;
    }

    .button
    {
      border-radius: 5px;
      border: 1px solid white;
      background-color: black;
			text-align: center;
      color: white;
			font-size: 15px;
      display: inline-block;
      cursor: pointer;
      width: 100px;
      height: 30px;
      }

		.button:hover {background-color: #3e8e41}

    .button:active
    {
      background-color: #3e8e41;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }

	</style>
</head>
<body>
  <p class="hd1">INAZUMA</p>
  <fieldset>
  <legend><p class="hd2">Log In</p></legend>
    <form method="post" name="login">
    <table class="center">
      <tr>
      <td><label for="uname">Username: </label></td>
      <td><input type="text" size="30" style="font-size:15px;" placeholder="Enter your email" name="uname" id="username"></td>
      </tr>
      <tr>
        <td></td>
        <td><p id="errormsg1" class="error"></p></td>
      </tr>
      <tr>
      <td><label for="psw">Password: </label></td>
      <td><input type="password" size="30" style="font-size:15px;" placeholder="Enter Password" name="psw" id="password"></td>
      </tr>
      <tr>
          <td></td>
			    <td><p id="errormsg2" class="error"></p></td>
	 	  </tr>
       <tr>
          <td></td>
			    <td><p id="errormsg" class="error"></p></td>
	 	  </tr>
      <tr>
        <td></td>
        <td><button type="submit" name="submit" onclick="return validatef()" class="button">Log In</button>
        <button type="reset" class="button">Clear All</button></td>
      </tr>
    </table>
    <div class="para"><a href="welcome.php">>>Home</a></div>
    </fieldset>
    </form>

    <script type="text/javascript">
		function validatef()
		{
			var uname= document.getElementById("username").value;
			var passwd= document.getElementById("password").value;
      var ret=true;
			
			if(uname.length==0)
			{
				document.getElementById("errormsg1").innerHTML="Username can not be empty";
				ret= false;
			}
			
			if(passwd.length==0)
			{
				document.getElementById("errormsg2").innerHTML="Password can not be empty";
				ret= false;
			}
			
			else if(uname.length==0 && passwd.length==0)
			{
				document.getElementById("errormsg").innerHTML="Username and Password can not be empty";
				ret= false;
			}
      return ret;
		}
    </script>
    <?php
            if(isset($_POST['submit'])) {
                $email = $_POST['uname'];  
                $sql = "SELECT * FROM `Userinfo` WHERE `EMAIL`='$email'";

                $conn= mysqli_connect("localhost", "root","","bca24");

                if($conn->connect_errno)
                {
                      die("Error connection database:" . $conn->connect_error);
                }
                else
                {
                $result = $conn->query($sql);
                if( $result->num_rows<1)
                  echo '<script>alert("Username not valid")</script>';
                else
                {
                    $row = $result->fetch_assoc();

                    if(strcmp($row['uPASSWORD'], md5($_POST['psw']))!=0)
                    {
                      echo '<script>alert("Username or Password mismatch")</script>';
                    }
                    else
                    {
                        $_SESSION['name'] = $row['NAME'];
                        $_SESSION['email']= $email;
                        $_SESSION['gender'] = $row['GENDER'];
                        $_SESSION['password'] = $row['uPASSWORD'];


                        session_write_close();

                        header('location:udetails.php');
                    }
                }
                }
            }
        ?>
</body>
</html>