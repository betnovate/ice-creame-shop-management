<?php
$showAlert = false;
$showError = false;
$exists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Include file which makes the
    // Database Connection.
    include 'connect.php';

    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];

    $sql = "Select * from users where username='$username'";

    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);

    // This sql query is use to check if
    // the username is already present
    // or not in our Database
    if ($num == 0) {
        if (($password == $cpassword) && $exists == false) {

            $hash = password_hash($password,
                    PASSWORD_DEFAULT);

            // Password Hashing is used here.
            $sql = "INSERT INTO `users` ( `username`,
				`password`, `date`) VALUES ('$username',
				'$hash', current_timestamp())";

            $result = mysqli_query($con, $sql);

            if ($result) {
                $showAlert = true;
            }
        } else {
            $showError = "Passwords do not match";
        }
    }// end if

    if ($num > 0) {
        $exists = "Username is available";
       header("Location: cart.html");
    }
 else {
        echo '<script type="text/javascript">alert("soory!");</script>';
}
}
?>

<!doctype html>

<html lang="en">

    <head>

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content=
              "width=device-width, initial-scale=1,
              shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href=
              "https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
              integrity=
              "sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
              crossorigin="anonymous">
    </head>

    <body>

<?php
if ($showAlert) {

    echo ' <div class="alert alert-success
			alert-dismissible fade show" role="alert">
	
			<strong>Success!</strong> Your account is
			now created and you can login.
			<button type="button" class="close"
				data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">×</span>
			</button>
		</div> ';
}

if ($showError) {

    echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
		<strong>Error!</strong> ' . $showError . '
	
	<button type="button" class="close"
			data-dismiss="alert aria-label="Close">
			<span aria-hidden="true">×</span>
	</button>
	</div> ';
}

if ($exists) {
    echo ' <div class="alert alert-danger
			alert-dismissible fade show" role="alert">
	
		<strong>welcome</strong> ' . $exists . '
		<button type="button" class="close"
			data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">×</span>
		</button>
	</div> ';
}
?>
	
