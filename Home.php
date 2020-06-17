<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="asset/css/boostrap.min.css" rel="stylesheet"/>
</head>
<body>
    <h1>ABC Speech & Drama Academy</h1>
    <div class="signup">
        <h2>Create your account</h2>
        <p class="des">Create your account & join with us now!</p>

        <form method="POST"action="signup.php" id="signup">
           
        <input type="text" name="fname" id="fname" placeholder="First Name" required>
        <input type="text" name="lname" id="lname" placeholder="Last Name" required><br><br>
        <input type="text" name="uname" id="uname" placeholder="Username" required><br><br>
        <input type="text" name="mnum" id="mnum" placeholder="Mobile Number" required><br><br>

        <input type="text" name="email" id="email" placeholder="Email" required><br><br>

        <input type="password" name="pwd" id="pwd" placeholder="Password" required>
        <input type="password" name="conpwd" id="conpwd" placeholder="Confirm Password" required><br><br>

        <input type="checkbox" id="rules" name="rules" value="agree" required>
        <label for="rules">I accept the<a href="termsofuse.php"> Terms of Use </a> & <a href="privacypolicy"> Privacy Policy </a>.</label><br><br><br>

        <button type="submit" name=submit value="submit" id="submit">SIGN UP</button>
        </form>
    
    </div>

</body>