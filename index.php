<!DOCTYPE html>
<html lang="en">

<!----------------------------------------------Head start--------------------------------------------------------------------------->
<head>
    <title>Internship Form</title>
    <meta name="viewport" content="width:device-width,initial-scale:1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!----------------------------------------------Head close--------------------------------------------------------------------------->

<!----------------------------------------------Body start--------------------------------------------------------------------------->
<body>

<!----------------------------------------------Form-container start--------------------------------------------------------------------------->
    <div class="form-container">


<!----------------------------------------------Left-container start--------------------------------------------------------------------------->
        <div class="left-container">
            <h1><span style="color: aliceblue;">Welcome to</span> Stoke</h1>
            <p>Let's light some fire and get the show on the road...</p>
            <div class="icon-div">
                <a href="index.php">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="index.php">
                    <i class="fa fa-linkedin"></i>
                </a>
                <a href="index.php">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="index.php" style="color: white; padding: 0px 50px 0 100px;">Privacy Policy</a>
                <span>&copy; 2021 stoke</span>
            </div>
        </div>
<!----------------------------------------------Left-container end----------------------------------------------------------------------------->


<!----------------------------------------------Right-container start--------------------------------------------------------------------------->
        <div class="right-container">
            <h3>Sign Up</h3><br>
            <div class="content">
                <form method="POST" action="insert.php">
                    <input type="text" name="name" placeholder="Name" class="input-box" required>
                    <br><br><br>
                    <input type="email" name="email" placeholder="Work Email" class="input-box" required>
                    <br><br><br>
                    <input type="password" name="pwd" placeholder="Password" class="input-box" required>
                    <br><br>
                    <input type="checkbox" required><label> I agree to stoke <a href="#">Terms</a> and <a href="#">privacy policy</a> </label><br><br>
                    <input type="submit" name="submit" value="Get stoke now" class="btn"><br><br>
                </form>
                <p>Existing user ? <a href="index.php">Login</a></p>
            </div>
        </div>
<!----------------------------------------------Right-container end----------------------------------------------------------------------------->


     </div>
<!----------------------------------------------Form-container end------------------------------------------------------------------------------>

</body>
<!----------------------------------------------Body close-------------------------------------------------------------------------------------->
</html>