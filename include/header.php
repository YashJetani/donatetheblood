<?php
include 'config.php';
if (session_status() === PHP_SESSION_NONE) {
    session_start();

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    if (isset($_SESSION['table'])) {  // Check if table is set
        if ($_SESSION['table'] === "donor") {
            include 'usernav.php'; // Load donor navigation
        } elseif ($_SESSION['table'] === "receiver") {
            include 'receivernav.php'; // Load receiver navigation
        } else {
            include 'navigation.php'; // Default navigation
        }
    } else {
        include 'navigation.php'; // Default navigation if table is missing
    }
} else {
    include 'navigation.php'; // Default for non-logged-in users
}
}
?>
<!DOCTYPE html>

	<head>
		<title>Donate The Blood</title>
		<meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Blood Donation Website">
        <meta name="author" content="Exceptional Programmers">

        <link rel="stylesheet" href="css/styles.css">

		<!-- Bootstrap Link CSS Files -->
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

        <!-- Custom Link CSS Files -->
		<link rel="stylesheet" href="css/custom.css">

		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	</head>



<?php 
//            include 'config.php';
            // include('..\include\config.php');

//            session_start();
//            if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
//                include 'usernav.php';
//            }else{
//               include 'navigation.php';
//            }           
?>
<?php 
// include 'config.php';
// session_start();

// if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
//     $user_id = $_SESSION['user_id'];

//     // Check if user exists in the donor table
//     $query = "SELECT id FROM donor WHERE id = ?";
//     $stmt = $connection->prepare($query);
//     $stmt->bind_param("i", $user_id);
//     $stmt->execute();
//     $stmt->store_result();
    
//     if ($stmt->num_rows > 0) {
//         include 'usernav.php';  // Load donor navigation
//     } else {
//         // Check if user exists in the receiver table
//         $query = "SELECT id FROM receiver WHERE id = ?";
//         $stmt = $connection->prepare($query);
//         $stmt->bind_param("i", $user_id);
//         $stmt->execute();
//         $stmt->store_result();

//         if ($stmt->num_rows > 0) {
//             include 'receivernav.php';  // Load receiver navigation
//         } else {
//             include 'navigation.php';  // Default navigation if user not found
//         }
//     }
// } else {
//     include 'navigation.php';  // Default navigation for non-logged-in users
// }
?>
<?php
include 'config.php';
session_start();

if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    if (isset($_SESSION['table'])) {  // Check if table is set
        if ($_SESSION['table'] === "donor") {
            include 'usernav.php'; // Load donor navigation
        } elseif ($_SESSION['table'] === "receiver") {
            include 'receivernav.php'; // Load receiver navigation
        } else {
            include 'navigation.php'; // Default navigation
        }
    } else {
        include 'navigation.php'; // Default navigation if table is missing
    }
} else {
    include 'navigation.php'; // Default for non-logged-in users
}
?>


