<?php 
	session_start();
	if(!isset($_SESSION['username']) and !isset($_SESSION['email'])){
		header('location: loginform.php');
	}
?>

<!DOCTYPE html>
<html>
    <head>
       <title>INAZUMA User details</title>
   <style>

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
        margin-top:30px;
        margin-left : 80px;
        padding-left: 30px;
        padding-right: 30px;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .hd1
    {
        text-align: left;
        padding-left: 300px;
        margin-top: 150px;
        margin-bottom: 10px;
        color: white;
        font-size: 40px;
        font-family: Century Gothic, CenturyGothic, AppleGothic, sans-serif;

    }
    .hd2
    {
        text-align:center;
        font-size: 30px;
        color: rgb(229, 236, 255);
        font-family: Lucida Sans, Helvetica, Arial, sans-serif;
    }

    table
    {
        font-family: arial,sans-serif;
        margin-left: auto; 
		margin-right: auto;
        padding-top: 20px;
        padding-bottom: 20px;
    }
    td,th
    {
        text-align: left;
        padding: 8px;
        color: white;
        font-size: larger;
    }
    .button
        {
            background-color: #4CAF50; /* Green */
            border: 1px;
            border-radius: 15px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            display: inline-block;
            font-size: 20px;
            margin-top: 15px;
            margin-right: 15px;
            position:absolute;
            top:0;
            right:0;
            cursor: pointer;
            width: 200px;
            height: 55px;
        }

    </style>
    </head>
<body>
    <p class="hd1">INAZUMA</p>
    <a href="logout.php"><button type="button" class="button">Logout</button></a><br><br>

<fieldset>
        <legend><p class="hd2">User Info</p></legend>
        <table>
                <tr>
                    <td>NAME:</td><td><?php echo $_SESSION['name']; ?></td>
                </tr>
                <tr>
                    <td>EMAIL:</td><td><?php echo $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <td>GENDER:</td><td><?php echo $_SESSION['gender']; ?></td>
                </tr>
                <tr>
                    <td>PASSWORD:</td><td><?php echo "************"; ?></td>
                </tr>
        </table>
    </fieldset>
</body>
</html>
