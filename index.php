<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>INAZUMA Homepage</title>
	<style type="text/css">

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
            background-color: rgba(000, 000, 000, 0.5);
			width: 80%;
        	margin : auto;
            margin-top: 70px;
			padding: 25px;
			padding-bottom: 500px;
		}
		
		.hd1
		{
            text-align: center;
            margin-top:30px;
			color: white;
            font-size: 40px;
            font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;
            padding-top: 30px ;
		}

        .pl
        {
            color: white;
            font-family: Lucida Sans, Helvetica, Arial, sans-serif;
            font-size: 23px;
        }

        .pr
        {
            color: white;
            font-family: Lucida Sans, Helvetica, Arial, sans-serif;
            font-size: 20px;
        }

        .vl
        {
            border-left: 3px solid rgb(229, 236, 255);
            height: 400px;
        }

        .split
        {
            height: 90%;
            width: 50%;
            position: fixed;
            z-index: 1;
            top: 0;
            overflow-x: hidden;
            padding-top: 20px;
        }

        .left
        {
            left: 50px;
        }

        .right
        {
            right: 50px;
        }

        .centered
        {
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }

        .button
        {
            background-color: #4CAF50; /* Green */
            border: none;
            border-radius: 3px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 20px;
            margin: 4px 2px;
            cursor: pointer;
            width: 200px;
            height: 55px;
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
    <fieldset>
        <p class="hd1">WELCOME TO INAZUMA</p>
        <hr>
        <div class="split left">
            <div class="centered">
                <p class="pl">The principle reason we continue to adapt and evolve our business model is to ensure that we are meeting our customer's expectations. One example of this has been to use modern technology and the introduction of real-time tracking our teams using GPS. This ensures our customers get the time they have paid for has been spent at our customer's homes since this is the most common problem with our industry.</p>
            </div>
        </div>

        <div class="vl centered"></div>

        <div class="split right">
            <div class="centered">
                <p class="pr">Isn't a member yet? Then join us now!</p>
                <a href="regform.php" target="_blank"><button type="button" class="button">Register</button></a>
                <br><br><br>
                <p class="pr"> Already a user?</p>
                <a href="loginform.php" target="_blank"><button type="button" class="button">Log In</button></a>
            </div>
        </div>
    </fieldset>
</body>
</html>