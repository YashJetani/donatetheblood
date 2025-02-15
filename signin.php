<?php
<<<<<<< HEAD
ob_start();
include "include/header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['email']);
    $password = md5($_POST['password']); // Hash input password before comparing
    $table = $_POST['table']; // Get table name (donor/receiver)

    if ($table == "donor") {
        $query = "SELECT * FROM $table WHERE email = ?";

        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($row = $result->fetch_assoc()) {
            if ($password === $row['password']) { // Ensure correct comparison

                $_SESSION['user_id'] = $row['id'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['save_life_date'] = $row['save_life_date'];
                $_SESSION['table'] = $table; 
                header("Location: user/index.php");
                exit();
             } else {
                echo "Incorrect password!";
            }
        } else {
            echo "Invalid email!";
        }
    }else{
        $query = "SELECT * FROM $table WHERE email = ?";
    
            $stmt = $connection->prepare($query);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();
    
            if ($row = $result->fetch_assoc()) {
                if ($password === $row['password']) { // Ensure correct comparison          
                            $_SESSION['user_id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['save_life_date'] = $row['save_life_date'];
                    $_SESSION['table'] = $table; 
                    header("Location: receiver/recindex.php");
                    exit();
            } else {
                echo "Incorrect password!";
            }
        } else {
            echo "Invalid email!";
        }
    }
    }
=======
	ob_start();
	include ('include/header.php');
	if(isset($_POST['SignIn'])){
		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$email = $_POST['email'];
		} else {
			$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>please fill Email filed.</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		}

		if (isset($_POST['password']) && !empty($_POST['password'])) {
			$password = $_POST['password'];
			$password = md5($password);
		} else {
			$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>please enter password</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
		}

		// login 
		if(isset($email) && isset($password)){

			$sql = "SELECT * FROM donor WHERE email = '$email' AND password = '$password'";
			$result = mysqli_query($connection,$sql);
			if(mysqli_num_rows($result) > 0){
				while ($row = mysqli_fetch_assoc($result)){

					$_SESSION['user_id'] = $row['id'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['save_life_date'] = $row['save_life_date'];		
					//header('location: user/index.php');
					header("Location: user/index.php");
				}				

				
			}
			else{
				$submitError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>No record found, please enter valid email or password</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';

			}

		}
}
>>>>>>> 6c3cf47163697bdaeac0da01ca96eb5a8f1fbd40
?>






<style>
	.size{
		min-height: 0px;
		padding: 60px 0 60px 0;

	}
	h1{
		color: white;
	}
	.form-group{
		text-align: left;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	.form-container{
		background-color: white;
		border: .5px solid #eee;
		border-radius: 5px;
		padding: 20px 10px 20px 30px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
	}

	.modal {
        display: none;
        position: fixed;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
        animation: fadeIn 0.3s ease-in-out;
    }

    /* Modal Box */
    .modal-content {
        background: white;
        padding: 20px;
        text-align: center;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        width: 300px;
        animation: scaleUp 0.3s ease-in-out;
        position: relative;
    }

    /* Close Button (X) */
    .close-btn {
        position: absolute;
        top: 10px;
        right: 15px;
        font-size: 24px;
        cursor: pointer;
        color: #888;
    }

    .close-btn:hover {
        color: red;
    }

    /* OK Button */
    button {
        background: #ff3b3b;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
        font-size: 16px;
        margin-top: 10px;
        border-radius: 5px;
        transition: background 0.3s ease-in-out;
    }

    button:hover {
        background: #d63030;
    }

    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes scaleUp {
        from { transform: scale(0.8); }
        to { transform: scale(1); }
    }
</style>
<body>
<div id="errorModal" class="modal">
    <div class="modal-content">
        <span class="close-btn" onclick="closeModal()">&times;</span>
        <h2>⚠️ Oops!</h2>
        <p id="errorMessage">Please select a Signin type.</p>
        <button onclick="closeModal()">OK</button>
    </div>
</div>
 <div class="container-fluid red-background size">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<h1 class="text-center">Sign In</h1>
			<hr class="white-bar">
		</div>
	</div>
</div>
<div class="conatiner size ">
	<div class="row">
		<div class="col-md-6 offset-md-3 form-container">
		<h3>Sign In</h3>
		<hr class="red-bar">
		
		<!-- Erorr Messages -->
	
		<?php
		if(isset($submitError))
		{
			echo $submitError;
		}
		?>

			<form id="signinForm" action="" method="post" novalidate>
			<div class="form-group">
					<label for="name">Signin As :</label><br>
					<select class="form-control demo-default" id="table" name="table" required>
						<!-- title="please select blood group from the list"> -->
						<option value="">--- Select ---</option>
						<?php //if(isset($table)) echo '<option selected="" value="'.$table.'">'.$table.'</option>'; ?>
						<option value="donor">donor</option>
						<option value="receiver">receiver</option>
					</select>
					<small id="error-message" style="color: red;"></small>
				</div>	
			<div class="form-group">
					<label for="email">Email.</label>
					<input type="text" name="email" class="form-control" placeholder="Email" required <?php if(isset($email)) echo $email; ?>>
					<?php
					if(isset($emailError))
					{
						echo $emailError;
					}
					?>
				</div>
				<div class="form-group">
					<label for="password">Password</label>	
				<input type="password" name="password" placeholder="Password" required class="form-control">
				<div class="password-input">
					</div>
					<?php

					if(isset($passwordError))
					{
						echo $passwordError;
					}
					?>
				</div>
				<div class="form-group">
					<button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">Sign In</button>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelector("#signinForm").addEventListener("submit", function (event) {
            let tableSelect = document.getElementById("table");
            let modal = document.getElementById("errorModal");

            if (tableSelect.value === "") {
                event.preventDefault(); // Stop form submission
                modal.style.display = "flex"; // Show popup modal
            }
        });
    });

    function closeModal() {
        document.getElementById("errorModal").style.display = "none";
    }
</script>
</body>
<?php include 'include/footer.php' ?>
