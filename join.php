<?php
$conn = mysqli_connect("localhost", "root", "", "retro_club");
if(isset($_POST['submit_btn'])) {
    $u = $_POST['user'];
    $f = $_POST['fav'];
    $d = $_POST['dob'];
    // Basic Insert
    $sql = "INSERT INTO members (username, fav_device, joined_at) VALUES ('$u', '$f', '$d')";
    mysqli_query($conn, $sql);
    echo "Member Added!";
}
?>

<html>
    <head>
        <tite>Join Club</tite>
        <link rel="stylesheet" href="style.css">
    </head>
    <form action="join.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <p><legend>User Details</legend></p>
            <p><label>Name:</label><input type="text" name="user" placeholder="Enter Name" size="30" maxlength="50" required></p>
            <p><label>Password:</label><input type="password" name="pass"></p>
            <p><label>DOB:</label><input type="date" name="dob"></p>
            <p><label>Age:</label><input type="number" name="age" min="18" max="99"></p>
            <p><input type="radio" name="fav" value="Mac" checked>Mac <input type="radio" name="fav" value="PC" checked>PC</p>
            <p><input type="checkbox" name="agree" value="yes"> I agree</p>
            <p><select name="country">
                    <option value="sl">Sri Lanka</option>
                    <option value="uk" selected>UK</option>
               </select></p>
            <p><input type="file" name="profile_pic">Upload a profile picture</p>
            <p><input type="hidden" name="secret" value="123"></p>
            <p><textarea name="msg" rows="4" cols="50"></textarea></p>
            <p><input type="submit" name="submit_btn" value="Register">
                <input type="reset" value="Clear Form">
                <input type="button" value="Click Me(JS usually)"></p>
        </fieldset>
    </form>
</html>
