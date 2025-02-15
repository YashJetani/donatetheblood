<?php
	include ('include/header.php');

?>
<div class="container-fluid header-img">
	<div class="row">
		<div class="col-md-6 offset-md-3">

			<div class="header">
				<h1 class="text-center">Donate the blood, save the life</h1>
				<p class="text-center">Donate the blood to help the others.</p>
			</div>


			<h1 class="text-center">Search The Donors</h1>
			<hr class="white-bar text-center">

			<form action="search.php" method="get" class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
				<div class="form-group text-center justify-content-center">

					<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default"
						required>
						<option value="" style="text-align:center">-- Select City --</option>
						<optgroup title="Azad Jammu and Kashmir (Azad Kashmir)"
							label="&raquo; GUJARAT"></optgroup>
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
				</div>
				<div class="form-group center-aligned">
					<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;"
						class="form-control demo-default text-center margin10px">
						<option value="" text-align="center">-- blood group --</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>

					</select>
				</div>
				<div class="form-group center-aligned">
					<button type="submit" class="btn btn-lg btn-danger">Search</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- header ends -->

<!-- donate section -->
<div class="container-fluid red-background">
	<div class="row">
		<div class="col-md-12">
			<h1 class="text-center" style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
			<hr class="white-bar">
			<p class="text-center pera-text">
			Blood donation refers to a practice where people donate their blood to people so it helps them with their health problems. Blood is one of the most essential fluids of our body that helps in the smooth functioning of our body. If the body loses blood in excessive amounts, people to get deadly diseases and even die.
			Whole blood donation is the most common type of blood donation. During this donation, you donate about a pint (about half a liter) of whole blood. The blood is then separated into its components — red cells, plasma and sometimes platelets.
			</p>
			<a href="#" class="btn btn-default btn-lg text-center center-aligned">Become a Life Saver!</a>
		</div>
	</div>
</div>
<!-- end doante section -->


<div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Vission</h3>
				<img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
				The practice of voluntary blood donation can not only guarantee the needs of clinical blood use, ensure the safety of blood transfusion, and achieve the purpose of treating diseases and saving lives, but it is also a social mutual aid behaviour, which was an important embodiment of the humanitarian spirit and start to new life to the donate the blood 
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Goal</h3>
				<img src="img/target.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
				Before you give blood, you will be asked questions about your medical history, including any medication you are taking, and about your current health and lifestyle. You may also be asked about recent travel; for example, if you live in a country where there is no malaria, you may be asked whether you have recently visited a tropical country. 
				</p>
			</div>
		</div>

		<div class="col">
			<div class="card">
				<h3 class="text-center red">Our Mission</h3>
				<img src="img/goal.png" alt="Our Vission" class="img img-responsive" width="168" height="168">
				<p class="text-center">
				We continuously evaluate and improve our processes and outreach efforts to enhance the effectiveness of our mission. By staying responsive to the evolving needs of the community and advancements in medical technology, we can better serve both donors and recipients of donated blood.In summary, our mission is centered around promoting voluntary blood donation
				</p>
			</div>
		</div>
	</div>
</div>

<!-- end aboutus section -->


<?php
//include footer file
include ('include/footer.php')
?>