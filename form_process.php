<!DOCTYPE html>
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>PHP Web Form</title>
</head>
<body>
 <h2>Registration Form</h2>
 <form action="form_process.php" method="post">
 <!-- Name Input -->
 <label for="name">Name:</label><br>
 <input type="text" id="name" name="name"><br><br>
 <!-- Email Input -->
 <label for="email">Email:</label><br>
 <input type="text" id="email" name="email"><br><br>
 <!-- Password Input -->
 <label for="password">Password:</label><br>
 <input type="password" id="password" name="password"><br><br>
 <!-- Gender Radio Buttons -->
 <label>Gender:</label><br>
 <input type="radio" id="male" name="gender" value="Male"> Male<br>
 <input type="radio" id="female" name="gender" value="Female"> Female<br><br>
 <!-- Submit Button -->
 <input type="submit" value="Submit">
 </form>
</body>
</html>