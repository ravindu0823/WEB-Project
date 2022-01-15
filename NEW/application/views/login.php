<!Doctype html>
<html>
<head>
    <style><?php include 'SignIn.css' ?></style>
    <title>Sign In</title>
</head>
<body>
<table>
    <tr>
        <td><img src='Images/nsbm_logo_favicon.png' alt='NSBM LOGO' class='round'></td>
        <td><a href="home.php"><input type='button' value='Home' class="button"></td>
        <td><input type='button' value='News' class="button"></td>
        <td><input type='button' value='About Us' class="button"></td>
        <td><input type='button' value='Contact Us' class="button"></td>
        <td width="300px"></td>
        <td><input type="button" value="Sign In" class="button1"></td>
        <td><input type="button" value="Sign Up" class="button1"></td>
        <td><img src='Images/Profile.png' alt='NSBM LOGO' class="round1"></td>
    </tr>
</table>
<br><br>
<div style="position: fixed; right: 600px" class="signin">Sign In</div>
<br><br><br><br><br><br><br><br>
<table border="1">
    <tr>
       <td rowspan="5" width="1000px"><center><img src="Images/Group%201.png" class="logo"></center></td>
    </tr>
    <tr height="10px">
        <td class="signin1">Index No</td>
    </tr>
    <tr height="10px">
        <td><input type="text" name="indexno" placeholder="Index No" style="position: relative; top: -20px" class="boxes"></td>
    </tr>
    <tr height="50px">
        <td class="signin1"><div style="position: relative; top: 50px">Password</div></td>
    </tr>
    <tr height="50px">
        <td><input type="password" name="pass" placeholder="Password" style="position: relative; top: -10px" class="boxes"></td>
    </tr>
</table>
</body>
</html>