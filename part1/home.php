<html>
<head>
	<title>Home - Log in or Sign up</title>
<style>
    body {
        margin-left: 20%;
        margin-right: 20%;
       
    }
.main {
    /* width: fit-content; */
    display: grid;
        grid-template-columns: 2fr 2fr;
        grid-template-rows: 50% 50%;
        
}
.signup {

    
    grid-column-start: 1;
    grid-column-end: 1;
    box-shadow: 3px 6px #888888;
    border-radius: 2%;
    background: rgb(32, 150, 109);
    color: white;
    width: fit-content;
}
.login {
    
    align-self: right;
    grid-column-start: 2;
    grid-column-end: 2;
    box-shadow: 3px 6px #888888;
    border-radius: 2%;
    background: rgb(40, 52, 53);
    color: white;
    width: fit-content;
}

 h2 {
   
    padding-bottom: 40px;
} 
</style>
</head>

<body>
<h2>Sign Up or Log In</h2>
    <div class="main">
 
   

    <form method="POST" action="safe.php">

 <div class="signup">
    

    <fieldset>
              <legend>Sign Up</legend>
    

    <label for="fullname">Full Name: </label>

        <input type="text" name="fullname" id="fullname" required> <br> 

        <label for="username">User name:</label>

        <input type="text" name="username" id="username" required> <br>

        <label for="password">Password:</label>

        <input type="text" name="password" id="password" required><br> 
        <label for="confirmPassword">Confirm Password:</label>

        <input type="text" name="confirmPassword" id="confirmPassword" required><br> 
        <label for="email">Email:</label>

        <input type="text" name="email" id="email" required><br> 
        <label for="phone">Phone:</label>

        <input type="text" name="phone" id="phone" required><br> 
        <label for="dob">Date of Birth:</label>

        <input type="text" name="dob" id="dob" required><br> 
        <label for="socialsecurity">Social Security Number:</label>

        <input type="text" name="socialsecurity" id="socialsecurity" required><br>

        <input type="hidden" name="form_submitted" value="1" />

        <input type="submit" name="submit" value="Submit">

    
</fieldset>
</div>
</form>

<form action="safe.php" method="POST"> 
<div class="login">
<fieldset> 
    <legend> Log In </legend>

    <label for="login-username"> Username </label>
    <input type="text" name="login-username" id="login-username" required> <br>
    <label for="login-password"> Password </label>
    <input type="text" name="login-password" id="login-password" required> <br>

    <input type="hidden" name="logged-in" value="1" />

        <button type="submit" name="login" value="login">Log In</button>

</fieldset>
</div>
</form>

</div>
</body>
</html>