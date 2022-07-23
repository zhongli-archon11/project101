<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>INAZUMA Registration</title>
	<style type="text/css">
		.error
		{
			color: red;
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
		input.submit
		{
			height: 20em;
			width: 7em;
		
		}
		input.cl
		{
			height: 20em;
			width: 7em;
		
		}
		div.para
		{
			position: relative;
			bottom: 10px;
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
            width: 150px;
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
	<legend><p class="hd2"> Registration Form</p></legend>
	<form method="post" action="regform_action.php"  name="myform" onsubmit="return vafun()">
	<table class="center">
	 	<tr>
	 	 	<td><label>Name:</td>
			<td><input type="text" size="40" style="font-size:15px;" name="ename" id="ename" placeholder="Your Name"/>
        </tr>
        <tr>
            <td></td>
			<td><p id="errormsg1" class="error"></p></td>
	 	</tr>

	    <tr>
	 	 	<td>Email ID:</td>
	 		<td><input type="email" size="40" style="font-size:15px;" name="email" id="email" placeholder="youremail@server.com">
        </tr>
        <tr>
            <td></td>
			<td><p id="errormsg2" class="error"></p></td>
	 	</tr>

		<tr>
            <td><label>Gender: </label></td>
			<td><input type="radio" name="gender" id="gender" value="male">Male
			<input type="radio" name="gender" id="gender" value="female" checked>Female
			<input type="radio" name="gender" id="gender" value="other">Other
        </tr>
        <tr>
            <td></td>
			<td></td>
	 	</tr>

		<tr>
			<td><label>Password: </label></td>
			<td><input type="password" size="40" style="font-size:15px;" name="password" id="password" placeholder="Enter a strong password">
        </tr>
        <tr>
            <td></td>
			<td><p id="errormsg4" class="error"></p></td>
	 	</tr>
	 	 	
	 	<tr>
            <td><label>Confirm Password: </label></td>
			<td><input type="password" size="40" style="font-size:15px;" name="cpassword" id="cpassword" placeholder="Confirm your password">
        </tr>
        <tr>
            <td></td>
			<td><p id="errormsg5" class="error"></p></td>
	 	</tr>

	 	<tr>
	 	 	<td></td>
	 		<td><button type="submit" name="submit" onclick="return valfun()" class="button">Register</button>
			 <button type="reset" class="button">Clear All</button></td>
		</tr>
    </table>
	<div class="para"><a href="welcome.php">>>Home</a></div>
	</fieldset>
	</form>
	
	<script type="text/javascript">
	 	function valfun()
		{
			var ename= document.getElementById("ename").value;
            var email= document.getElementById("email").value;
			var gender= document.getElementById("gender");
			var passwd= document.getElementById("password").value;
            var cpasswd= document.getElementById("cpassword").value;
			var ret = true;

			if(ename.length==0)
			{
				document.getElementById("errormsg1").innerHTML="Name must be filled";
				ret= false;
			}
            if(email.length==0)
			{
				document.getElementById("errormsg2").innerHTML="Email must be filled";
				ret= false;
			}

			if(passwd.length==0)
			{
				document.getElementById("errormsg4").innerHTML="Password can not be empty";
				ret= false;
			}
			
			if(cpasswd.length==0)
			{
				document.getElementById("errormsg5").innerHTML="Please confirm your password";
				ret= false;
			}
            

			if(passwd!=cpasswd)
			{
                alert("Password and Confirm password doesn't match");
                ret= false;
            }

			return ret;

		}
	</script>
</body>
</html>