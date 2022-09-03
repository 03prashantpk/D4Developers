<?php
//database and emails
include('connection.inc.php');

// Error, connection and other
include('MainFunctions.php');

//email pass and salt code
include("confidentials.php");


session_start();

if (!isset($_SESSION['USER_LOGIN'] )) {
?>
    <script>
        window.location.href = 'login';
    </script>
<?php
}

if (isset($_SESSION['USER_LOGIN'])) {
	$EMAIL = $_SESSION['EMAIL'];
    $USERID = $_SESSION['USER_ID'];
}

$personaldata = mysqli_query($conn, "SELECT * From users WHERE email='$EMAIL' AND public='1'");

while ($row = mysqli_fetch_assoc($personaldata)) {
    $user_id = $row["id"];
    $email = $row['email'];
    $joined_on = $row['joined_on'];
}
