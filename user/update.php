<?php
include 'include/header.php';




if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {



	include ('/var/www/html/include/config.php');


	// $sql = "SELECT * FROM donor WHERE id=" .$_SESSION['user_id'];

	// $result = mysqli_query($connection,$sql);


	// if (mysqli_num_rows($result)>0) {

	// 	while ($row = mysqli_fetch_assoc($result)) {
	// 		$userID = $row['id'];
	// 		$name = $row['name'];
	// 		$blood_group = $row['blood_group'];
	// 		$gender = $row['gender'];
	// 		$email = $row['email'];
	// 		$contact_no = $row['contact_no'];
	// 		$city = $row['city'];
	// 		$dob = $row['dob'];
	// 		$date = explode("-", $dob);
	// 		$dbpassword = $row['password'];

	// 		// date of birth fatch karvanu baki che
	// 	}
	// }
	if (isset($_POST['submit'])) {
		// if (isset($_POST['term']) === true) { ola a aa ak j line kari che
		if (isset($_POST['name']) && !empty($_POST['name'])) {
			if (preg_match('/^[A-Za-z\s]+$/', $_POST['name'])) {
				$name = $_POST['name'];
			} else {
				$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Only lower and upper case and space characters are allow.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
		} else {
			$nameError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>please fill the name filed</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
		}

		if (isset($_POST['gender']) && !empty($_POST['gender'])) {
			$gender = $_POST['gender'];
		} else {
			$genderError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>please select your gender</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
		}

		if (isset($_POST['day']) && !empty($_POST['day'])) {
			$day = $_POST['day'];
		} else {
			$dayError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>please select your birth day</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
		}

		if (isset($_POST['month']) && !empty($_POST['month'])) {
			$month = $_POST['month'];
		} else {
			$monthError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>please select your birth month</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
		}

		if (isset($_POST['year']) && !empty($_POST['year'])) {
			$year = $_POST['year'];
		} else {
			$yearError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>please select your birth year</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
		}

		if (isset($_POST['blood_group']) && !empty($_POST['blood_group'])) {
			$blood_group = $_POST['blood_group'];
		} else {
			$blood_groupError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>please select your blood group</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
		}

		if (isset($_POST['city']) && !empty($_POST['city'])) {
			if (preg_match('/^[A-Za-z\s]+$/', $_POST['city'])) {
				$city = $_POST['city'];
			} else {
				$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Only lower and upper case and space characters are allow.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
		} else {
			$cityError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>please fill the city filed</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
		}

		if (isset($_POST['contact_no']) && !empty($_POST['contact_no'])) {
			if (preg_match('/\d{10}/', $_POST['contact_no'])) {
				$contact_no = $_POST['contact_no'];
			} else {
				$contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>contact no. should be 10 number.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
		} else {
			$contact_noError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>please fill the contact_no.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
		}

		// if (isset($_POST['password']) && !empty($_POST['password']) && isset($_POST['c_password']) && !empty($_POST['c_password'])) {
		// 	// if (strlen($_POST['password']) >= 6) { aa line ma umang a sudharo kari ne nicheni print karavi che 
		// 		if (preg_match('/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/', $_POST['password'])) {
		// 			if ($_POST['password'] == $_POST['c_password']) {
		// 				$password = $_POST['password'];
		// 				// print_r($password);die;
		// 				// $hashed_password = md5($password);
		// 			} else {
		// 				$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		// 					<strong>password and confirm password are not same.</strong>
		// 					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 					<span aria-hidden="true">&times;</span>
		// 					</button>
		// 				</div>';
		// 			}
		// 		} else {
		// 		// echo"<pre>";print_r('asfdjnk');exit;
		// 			$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		// 				<strong>password must be strong.</strong>
		// 				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 				<span aria-hidden="true">&times;</span>
		// 				</button>
		// 			</div>';
		// 		}
		// 	} else {
		// 		$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		// 		<strong>please fill password filed</strong>
		// 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 		<span aria-hidden="true">&times;</span>
		// 		</button>
		// 	</div>';
		// 	}

		// echo"<pre>";print_r($password);exit;

		if (isset($_POST['email']) && !empty($_POST['email'])) {
			$pattern = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/';
			if (preg_match($pattern, $_POST['email'])) {
				$email = $_POST['email'];
			} else {
				$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>invalid email</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}
		} else {
			$emailError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>please fill the email.</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
		}
		if (isset($name) && isset($blood_group) && isset($gender) && isset($day) && isset($month) && isset($year) && isset($email) && isset($contact_no) && isset($city)) {

			$DonorDOB = $year . "-" . $month . "-" . $day;

			// $password = md5($password);

			$sql = "UPDATE donor SET name='$name',gender='$gender',email='$email',city='$city',dob='$DonorDOB',contact_no='$contact_no',blood_group='$blood_group' WHERE id =" . $_SESSION['user_id'];

			if (mysqli_query($connection, $sql)) {
<<<<<<< HEAD
				// header("location: update.php");
=======
			//	header("location: update.php");
>>>>>>> 6c3cf47163697bdaeac0da01ca96eb5a8f1fbd40
				$updatesuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong> Data Updated Successfully </strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
		 	?>
				<script>
					function myfunction() {
						location.reload();
					}
				</script>
			 <?php
				
			} else {
				$updateError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Oops,Data not updated</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
			}

		}

	





		// } else {
		// 	$termError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
		// 		<strong>please agree with our term and condition</strong>
		// 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		// 		  <span aria-hidden="true">&times;</span>
		// 		</button>
		// 	  </div>';
		// }



	}
	$sql = "SELECT * FROM donor WHERE id=" . $_SESSION['user_id'];

	$result = mysqli_query($connection, $sql);


	if (mysqli_num_rows($result) > 0) {

		while ($row = mysqli_fetch_assoc($result)) {
			$userID = $row['id'];
			$name = $row['name'];
			$blood_group = $row['blood_group'];
			$gender = $row['gender'];
			$email = $row['email'];
			$contact_no = $row['contact_no'];
			$city = $row['city'];
			$dob = $row['dob'];
			$date = explode("-", $dob);
			$dbpassword = $row['password'];

			// date of birth fatch karvanu baki che
		}
	}

	if (isset($_POST['update_pass'])) {

		if (isset($_POST['old_password']) && !empty($_POST['old_password']) && isset($_POST['c_password']) && !empty($_POST['c_password']) && isset($_POST['new_password']) && !empty($_POST['new_password'])) {

			$oldpassword = md5($_POST['old_password']);
			
				if ($oldpassword == $dbpassword) {


					if (preg_match('/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/', $_POST['new_password'])) {
						if ($_POST['new_password'] == $_POST['c_password']) {
							$password = md5($_POST['new_password']);
							
						// print_r($password);die;
						// $hashed_password = md5($password);
						} else {
						$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>password and confirm password are not same.</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
						}
					} else {
						// echo"<pre>";print_r('asfdjnk');exit;
						$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>password must be strong.</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
					}
				} else {
						$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>please enter valid password</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
				}
// if (strlen($_POST['password']) >= 6) { aa line ma umang a sudharo kari ne nicheni print karavi che 
		} else {
			$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					<strong>please fill password filed</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
					</button>
				</div>';
		}
		if (isset($password)) {
			$sql = "UPDATE donor SET password='$password'  WHERE id='$userID' ";

			if (mysqli_query($connection, $sql)) {
				// $_SESSION['save_life_date']=$crntDates;
				// header("location: index.php");
				$updatepasswordsuccess = '<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>password updated </strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				  <span aria-hidden="true">&times;</span>
				</button>
			  </div>';
				?>
				<script>
					function myfunction() {
						location.reload();
					}
				</script>
				<?php
			} else {
				$passwordError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Oops,Data not inserted</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>';
			}
		}
		// echo"<pre>";print_r($password);exit;	
	}
	// include 'include/header.php';

	if(isset($_POST['delete_account'])){
		
		if(isset($_POST['account_password']) && !empty($_POST['account_password'])){
			// $accountpassword = md5($_POST['$account_password']);
			
			// if($account_password)

			$showForm = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
			<strong>Are you sure to Delete your profile?</strong>
			<p></p>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<form target="" method="post">
			<br>
			<input type="hidden" name="userID" value="'.$_SESSION['user_id'].'">
			<button type="submit" name="updateSave" class="btn btn-danger">Yes</button>

			<button type="button" class="btn btn-info" data-dismiss="alert">
			<span aria-hidden="true">Oops! No </span>
			</button>      
		</form>
 </div>';

		}
		else{
			$deleteAccountError = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>please enter your password.</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>';
		}
	}
	if (isset($_POST['userID'])){

		
		// if(){

		// }else{

		// }
	}

	include 'include/sidebar.php';
	?>

	<style>
		.form-group {
			text-align: left;
		}

		.form-container {

			padding: 20px 10px 20px 30px;

		}
	</style>
	<div class="container" style="padding: 60px 0;">
		<div class="row">

			<div class=" card col-md-6 offset-md-3">
				<div class="panel panel-default" style="padding: 20px;">

					<!-- Error Messages -->
					<?php if (isset($updateError))
						echo $updateError;
					if (isset($updatesuccess))
						echo $updatesuccess;
						if(isset($showForm)) echo $showForm;
						if(isset($deletesubmitError)) echo $deletesubmitError;
					?>
					<form class="form-group" action="" method="post" novalidate="">
						<div class="form-group">
							<label for="fullname">Full Name</label>
							<input type="text" name="name" id="fullname" placeholder="Full Name" required
								pattern="[A-Za-z/\s]+" title="Only lower and upper case and space" class="form-control"
								value="<?php if (isset($name))
									echo $name; ?>">
							<?php
							if (isset($nameError))
								echo $nameError;
							?>
						</div><!--full name-->
						<div class="form-group">
							<label for="name">Blood Group</label><br>
							<select class="form-control demo-default" id="blood_group" name="blood_group" required
								title="please select blood group from the list">
								<option value="">---Select Your Blood Group---</option>
								<?php if (isset($blood_group))
									echo '<option selected="" value="' . $blood_group . '">' . $blood_group . '</option>'; ?>"
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+">B+</option>
								<option value="B-">B-</option>
								<option value="O+">O+</option>
								<option value="O-">O-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
							</select>
							<?php
							if (isset($blood_groupError))
								echo $blood_groupError;
							?>
						</div><!--End form-group-->
						<div class="form-group">
							<label for="gender">Gender</label><br>
							Male<input type="radio" name="gender" id="male" value="Male"
								style="margin-left:10px; margin-right:10px;" checked>
							Female<input type="radio" name="gender" id="female" value="Female" style="margin-left:10px;"
								style="margin-left:10px; margin-right:10px;" <?php if (isset($gender)) {
									if ($gender == "Female")
										echo "checked";
								} ?>>
							Other<input type="radio" name="gender" id="other" value="other" style="margin-left:10px;"
								style="margin-left:10px; margin-right:10px;">
							<?php
							if (isset($genderError))
								echo $genderError;
							?>
						</div><!--gender-->
						<div class="form-inline">
							<label for="name">Date of Birth</label><br>
							<select class="form-control demo-default" id="date" name="day" style="margin-bottom:10px;"
								required>
								<option value="">---Date---</option>
								<?php if (isset($date['2']))
									echo '<option selected="" value="' . $date['2'] . '">' . $date['2'] . '</option>'; ?>
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								<option value="07">07</option>
								<option value="08">08</option>
								<option value="09">09</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
								<option value="16">16</option>
								<option value="17">17</option>
								<option value="18">18</option>
								<option value="19">19</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
								<option value="31">31</option>
							</select>
							<select class="form-control demo-default" name="month" id="month" style="margin-bottom:10px;"
								required>
								<option value="">---Month---</option>
								<?php if (isset($date['1']))
									echo '<option selected="" value="' . $date['1'] . '">' . $date['1'] . '</option>'; ?>
								<option value="01">January</option>
								<option value="02">February</option>
								<option value="03">March</option>
								<option value="04">April</option>
								<option value="05">May</option>
								<option value="06">June</option>
								<option value="07">July</option>
								<option value="08">August</option>
								<option value="09">September</option>
								<option value="10">October</option>
								<option value="11">November</option>
								<option value="12">December</option>
							</select>
							<select class="form-control demo-default" id="year" name="year" style="margin-bottom:10px;"
								required>
								<option value="">---Year---</option>
								<?php if (isset($date['0']))
									echo '<option selected="" value="' . $date['0'] . '">' . $date['0'] . '</option>'; ?>
								<option value="1957">1957</option>
								<option value="1958">1958</option>
								<option value="1959">1959</option>
								<option value="1960">1960</option>
								<option value="1961">1961</option>
								<option value="1962">1962</option>
								<option value="1963">1963</option>
								<option value="1964">1964</option>
								<option value="1965">1965</option>
								<option value="1966">1966</option>
								<option value="1967">1967</option>
								<option value="1968">1968</option>
								<option value="1969">1969</option>
								<option value="1970">1970</option>
								<option value="1971">1971</option>
								<option value="1972">1972</option>
								<option value="1973">1973</option>
								<option value="1974">1974</option>
								<option value="1975">1975</option>
								<option value="1976">1976</option>
								<option value="1977">1977</option>
								<option value="1978">1978</option>
								<option value="1979">1979</option>
								<option value="1980">1980</option>
								<option value="1981">1981</option>
								<option value="1982">1982</option>
								<option value="1983">1983</option>
								<option value="1984">1984</option>
								<option value="1985">1985</option>
								<option value="1986">1986</option>
								<option value="1987">1987</option>
								<option value="1988">1988</option>
								<option value="1989">1989</option>
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
								<option value="2001">2001</option>
								<option value="2002">2002</option>
								<option value="2003">2003</option>
								<option value="2004">2004</option>
								<option value="2005">2005</option>
							</select>
						</div><!--End form-group-->
						<?php
						if (isset($dayError))
							echo $dayError;
						?>
						<?php
						if (isset($monthError))
							echo $monthError;
						?>
						<?php
						if (isset($yearError))
							echo $yearError;
						?>

						<div class="form-group">
							<label for="fullname">Email</label>
							<input type="text" name="email" id="email" placeholder="Email"
								pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="Please write correct email"
								class="form-control" value="<?php if (isset($email))
								// update email verification chagnged by yash jetani
								echo $email; ?>">
							<?php
							if (isset($emailError))
								echo $emailError;
							?>
						</div>
						<div class="form-group">
							<label for="contact_no">Contact No</label>
							<input type="text" name="contact_no" value="<?php if (isset($contact_no))
								echo $contact_no; ?>" placeholder="99****" class="form-control" required pattern="^\d{10}$"
								title="10 numeric characters only" maxlength="11" value="<?php if (isset($contact_no))
									echo $contact_no; ?>">
							<?php
							if (isset($contact_noError))
								echo $contact_noError;
							?>
						</div><!--End form-group-->
						<div class="form-group">
							<label for="city">City</label>
							<select name="city" id="city" class="form-control demo-default" required
								title="please select city from the list">
								<option value="">-- Select --</option>
								<?php if (isset($city))
									echo '<option selected="" value="' . $city . '">' . $city . '</option>'; ?>
								<optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; GUJARAT"></optgroup>
								<option value="AHMADABAD">AHMADABAD</option>
								<option value="AMRELI">AMRELI</option>
								<option value="ANAND">ANAND</option>
								<option value="ARAVALLI">ARAVALLI</option>
								<option value="BANASKANTHA">BANASKANTHA</option>
								<option value="BHARUCH">BHARUCH</option>
								<option value="BHAVNAGAR">BHAVNAGAR</option>
								<option value="BOTAD">BOTAD</option>
								<option value="CHHOTA UDEPUR">CHHOTA UDEPUR</option>
								<option value="DAHOD">DAHOD</option>
								<option value="DANGS">DANGS</option>
								<option value="DEVBHUMI DWARKA">DEVBHUMI DWARKA</option>
								<option value="GANDHINAGAR">GANDHINAGAR</option>
								<option value="GIR SOMNATH">GIR SOMNATH</option>
								<option value="JAMNAGAR">JAMNAGAR</option>
								<option value="JUNAGADH">JUNAGADH</option>
								<option value="KACHCHH">KACHCHH</option>
								<option value="KHEDA">KHEDA</option>
								<option value="MAHESANA">MAHESANA</option>
								<option value="MAHISAGAR">MAHISAGAR</option>
								<option value="MORBI">MORBI</option>
								<option value="NARMADA">NARMADA</option>
								<option value="NAVSARI">NAVSARI</option>
								<option value="PANCHMAHALS">PANCHMAHALS</option>
								<option value="PATAN">PATAN</option>
								<option value="PORBANDAR">PORBANDAR</option>
								<option value="RAJKOT">RAJKOT</option>
								<option value="SABARKANTHA">SABARKANTHA</option>
								<option value="SURAT">SURAT</option>
								<option value="SURENDRANAGAR">SURENDRANAGAR</option>
								<option value="TAPI">TAPI</option>
								<option value="VADODARA">VADODARA</option>
								<option value="VALSAD">VALSAD</option>
							</select>
							<?php
							if (isset($cityError)) // aya me sudharo kariyo che { no
								echo $cityError;
							?>
						</div><!--city end-->

						<div class="form-group">
							<button id="submit" name="submit" type="submit" class="btn btn-lg btn-danger center-aligned"
								style="margin-top: 20px;">update</button>
						</div>
					</form>
				</div>
			</div>

			<div class="card col-md-6 offset-md-3">


				<div class="panel panel-default" style="padding: 20px;">
					<form action="" method="post" class="form-group form-container">
						<?php if (isset($passwordError))
							echo $passwordError;
						if (isset($updatepasswordsuccess))
							echo $updatepasswordsuccess;
						?>
						<div class="form-group">
							<label for="oldpassword"> cureent Password</label>
							<input type="password" required name="old_password" placeholder="oldPassword"
								class="form-control">
						</div>
						<div class="form-group">
							<label for="newpassword">new Password</label>
							<input type="password" required name="new_password" placeholder="new Password"
								class="form-control">
						</div>
						<div class="form-group">
							<label for="c_password">confirm Password</label>
							<input type="password" required name="c_password" placeholder="confirm Password"
								class="form-control">
						</div>


						<div class="form-group">
							<button class="btn btn-lg btn-danger center-aligned" type="submit" name="update_pass">update
								password</button>
						</div>

						<!-- password verify with chatgpt code  -->


					</form>
				</div>
			</div>

		</div>
	

<!-- 
	<div class="card col-md-6 offset-md-3">



	

		<div class="panel panel-default" style="padding: 20px">
			<form action=" " method="post" class="form-group form-container">
				<div class="form-group">
					<label for="oldpassword">Password</label>
					<input type="password"  name="account_password" placeholder="Current Password"
						class="form-control">
				</div>

				<div class="form-group">
					<button class="btn btn-lg btn-danger center-aligned" type="submit" name="delete_account">Delete
						Account</button>
				</div>

			</form>
		</div>
	</div>
							
	</div>
	</div> -->

	<!-- <?php
} else {
	header("location:../index.php");
	// include 'include/sidebar.php';
}
include 'include/footer.php';
<<<<<<< HEAD
?> 
=======
?> -->
>>>>>>> 6c3cf47163697bdaeac0da01ca96eb5a8f1fbd40
