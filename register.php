<!DOCTYPE html>
<html lang="en">


<head>
    <title>User Registration </title>
</head>
<body>
    <table width="20%" align="center" border="0">
        <form  method="post" action="adduser.php">
            <th colspan="2"><h1 align="center">ONLINE MOVIE</h1>
    <h3 align="center">User Registration</h3></th>
        <tr>
            <td>Username :</td> 
            <td> <input type="text" name="username"  placeholder=" Enter username" required=""></td>
        </tr>

        <tr>
            <td> password :</td> 
            <td><input type="password" name="password"  placeholder="Enter password" required=""></td>
        </tr>

        <tr hidden=""> 
            <td>Usertype :</td> 
            <td>
                <select name="type" required>
                <option disabled="">--Usertype--</option>
                <option value="Admin" disabled="" hidden="" > Admin</option>
                <option value="Employee" disabled="" hidden=""> Employee</option>
                <option value="Client" selected > Client</option>
                </select> </td>
        </tr>

        <tr>
            <td>Email : </td> 
            <td><input type="text" name="email"  placeholder="Enter email" required="" ><?php echo $emailErr; ?> </td>
        </tr>

        <tr>
            <td colspan="2" align="center"><br>
                 <input type="submit" name="Register" value="Register">
                 <input type="reset" name="Register" value="Reset">
            <br><br>
        already have an account?<a href="login.php">&nbsp Login</a></td>

        </tr>

 </table>
</form>   
</body>
</html>

