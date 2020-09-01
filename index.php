<!Doctype html>
 <?php
$servername="localhost";
$username="root";
$password="";
$dbname="absen_pkl";
$conn = mysqli_connect($servername, $username, $password, $dbname);
echo("connection");
if(isset($_POST['Login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $usertype=$_POST['usertype'];
    $query = "SELECT * FROM `multiuserlogin` WHERE username='".$user."' and password ='".
    $pass."' and usertype='".$usertype."'";
    $result = mysqli_query($conn, $query);
    if($result){
        while($row=mysqli_fetch_array($result)){
            echo'<script type="text/javascript">alert("you are login successfully and you are logined as ' .$row['usertype'].'")</script>';
        }
        if(mysqli_num_rows($result)>0){
            ?>
            <script type="text/javascript">
            window.location.href="admin.php"</script>
            <?php

        }else
            ?>
            <script type="text/javascript">
            window.location.href="user.php"</script>
            <?php

            
    }else{
        echo 'no result';

    
    }
}
 ?>
 <html>
 <head>
    <title>Multi User log in system</title>
 </head>
 <body>
    <form method="post" action="">
        <table border="0">
            <tr>
                <td><label for="user">Username</label></td>
                <td><input type="text" name="user" placeholder="enter your username"></td>
            </tr>
            <tr>
                <td><label for="pass">Password</label></td>
                <td><input type="password" name="pass" placeholder="enter your password"></td>
            </tr>
            <tr>
                <td> 
                    Select user type
                </td>
                <td>
                    <select name="usertype">
                        <option value="admin">admin</option>
                        <option value="user">user</option>   
                    </select>
                </td>
                <tr>
                    <td><button type="submit" name="Login" value="Login">Login</button></td>
                </tr>
            </tr>
        </table>
    </form> 
 </body>
 </html>