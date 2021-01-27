<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>EditProfile</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="Styles/style.css">

	
</head>

<body>

	<div>
		<?php
	
	?>
	</div>

	<div>
		<form action="registration.php" method="post">
			<div class="css__container">
				<div class="prof">
					<h1 class="prof__primary">My Profile</h1>
					<span class="angled-arrow"><i class="fas fa-angle-right"></i></span>
					<h1 class="prof__secondory">Edit Profile</h1>

				</div>
				<div class="profile">
					<div class="profile__cancel">
						<h1 class="prof__tertiary">Cancel</h1>
						<span><i class="fas fa-times"></i></span>
					</div>
					<div class="col-1">
						<div class="profile__img">
							<div class="">
								<img src="tan3.jpeg" alt="">
								<span><i class="far fa-edit"></i></span>
							</div>
						</div>
						<div class="profile__container">
							<div class="profile__fname profile__element margin__correction">
								<label for="firstname">First Name</label>
								<input id="firstname" type="text" name="firstname" required>
							</div>
							<div class="profile__lname profile__element">
								<label for="lastname">Last Name</label>
								<input class="form-control" id="lastname" type="text" name="lastname" required>
							</div>
						</div>
						<div class="profile__password profile__element">
							<label for="passw">Password</label>
							<input class="form-control" id="password" type="password" name="password" required>
							<span>Change Password</span>
						</div>
						<div class="profile__email profile__element">
							<label for="email">Email</label>
							<input class="form-control" id="email" type="email" name="email" required>
						</div>
						<div class="profile__phone profile__element">
							<label for="phonenumber">Phone</label>
							<input class="form-control" id="phonenumber" type="text" name="phonenumber" required>
						</div>
						<div class="profile__address profile__element">
							<label for="address">Address</label>
							<input class="form-control" id="address" type="text" name="address" required>
						</div>
						<div class="profile__nation profile__element">
							<label for="nation">Nation</label>
							<input class="form-control" id="nation" type="text" name="nation" required>
						</div>
					</div>

					<div class="col-2">
						<div class="profile__container">
							<div class="profile__gender profile__element margin__correction">
								<label for="gender">Gender</label>
								<select class="form-control" id="gender" name="gender" required>
									<option value="" selected disabled>Gender</option>
									<option value="Male">Male</option>
									<option value="FeMale">FeMale</option>
									<option value="Not to Say">Not to Say</option>
								</select>
							</div>
							<div class="profile__language profile__element">
								<label for="language">Language</label>
								<select class="form-control" id="language" name="language" required>
									<option value="" selected disabled>Language</option>
									<option value="English">English</option>
									<option value="Hindi">Hindi</option>
									<option value="Marathi">Marathi</option>
								</select>
							</div>
						</div>
						<div class="profile__dob profile__element">
							<label for="dob">Date Of Birth</label>
							<div class="">
								<select name="dob" id="dob">
									<option disabled selected> Month </option>
									<option value='Janaury'>Janaury</option>
									<option value='February'>February</option>
									<option value='March'>March</option>
									<option value='April'>April</option>
									<option value='May'>May</option>
									<option value='June'>June</option>
									<option value='July'>July</option>
									<option value='August'>August</option>
									<option value='September'>September</option>
									<option value='October'>October</option>
									<option value='November'>November</option>
									<option value='December'>December</option>
								</select>
								<select name="dob" id="dob">
									<option disabled selected> Date </option>
									<option value='01'>01</option>
									<option value='02'>02</option>
									<option value='03'>03</option>
									<option value='04'>04</option>
									<option value='05'>05</option>
									<option value='06'>06</option>
									<option value='07'>07</option>
									<option value='08'>08</option>
									<option value='09'>09</option>
									<option value='10'>10</option>
									<option value='11'>11</option>
									<option value='12'>12</option>
									<option value='13'>13</option>
									<option value='14'>14</option>
									<option value='15'>15</option>
									<option value='16'>16</option>
									<option value='17'>17</option>
									<option value='18'>18</option>
									<option value='19'>19</option>
									<option value='20'>20</option>
									<option value='21'>21</option>
									<option value='22'>22</option>
									<option value='23'>23</option>
									<option value='24'>24</option>
									<option value='25'>25</option>
									<option value='26'>26</option>
									<option value='27'>27</option>
									<option value='28'>28</option>
									<option value='29'>29</option>
									<option value='30'>30</option>
									<option value='31'>31</option>
								</select>
								<select name="dob" id="dob">
									<option disabled selected> Year </option>
									<option value="2020">2020</option>
									<option value="2019">2019</option>
									<option value="2018">2018</option>
									<option value="2017">2017</option>
									<option value="2016">2016</option>
									<option value="2015">2015</option>
									<option value="2014">2014</option>
									<option value="2013">2013</option>
									<option value="2012">2012</option>
									<option value="2011">2011</option>
									<option value="2010">2010</option>
									<option value="2009">2009</option>
									<option value="2008">2008</option>
									<option value="2007">2007</option>
									<option value="2006">2006</option>
									<option value="2005">2005</option>
									<option value="2004">2004</option>
									<option value="2003">2003</option>
									<option value="2002">2002</option>
									<option value="2001">2001</option>
									<option value="2000">2000</option>
									<option value="1999">1999</option>
									<option value="1998">1998</option>
									<option value="1997">1997</option>
									<option value="1996">1996</option>
									<option value="1995">1995</option>
									<option value="1994">1994</option>
									<option value="1993">1993</option>
									<option value="1992">1992</option>
									<option value="1991">1991</option>
									<option value="1990">1990</option>
									<option value="1989">1989</option>
									<option value="1988">1988</option>
									<option value="1987">1987</option>
									<option value="1986">1986</option>
									<option value="1985">1985</option>
									<option value="1984">1984</option>
									<option value="1983">1983</option>
									<option value="1982">1982</option>
									<option value="1981">1981</option>
									<option value="1980">1980</option>
									<option value="1979">1979</option>
									<option value="1978">1978</option>
									<option value="1977">1977</option>
									<option value="1976">1976</option>
									<option value="1975">1975</option>
									<option value="1974">1974</option>
									<option value="1973">1973</option>
									<option value="1972">1972</option>
									<option value="1971">1971</option>
									<option value="1970">1970</option>
									<option value="1969">1969</option>
									<option value="1968">1968</option>
									<option value="1967">1967</option>
									<option value="1966">1966</option>
									<option value="1965">1965</option>
									<option value="1964">1964</option>
									<option value="1963">1963</option>
									<option value="1962">1962</option>
									<option value="1961">1961</option>
									<option value="1960">1960</option>
									<option value="1959">1959</option>
									<option value="1958">1958</option>
									<option value="1957">1957</option>
									<option value="1956">1956</option>
									<option value="1955">1955</option>
									<option value="1954">1954</option>
									<option value="1953">1953</option>
									<option value="1952">1952</option>
									<option value="1951">1951</option>
									<option value="1950">1950</option>
									<option value="1949">1949</option>
									<option value="1948">1948</option>
									<option value="1947">1947</option>
									<option value="1946">1946</option>
									<option value="1945">1945</option>
									<option value="1944">1944</option>
									<option value="1943">1943</option>
									<option value="1942">1942</option>
									<option value="1941">1941</option>
									<option value="1940">1940</option>
									<option value="1939">1939</option>
									<option value="1938">1938</option>
									<option value="1937">1937</option>
									<option value="1936">1936</option>
									<option value="1935">1935</option>
									<option value="1934">1934</option>
									<option value="1933">1933</option>
									<option value="1932">1932</option>
									<option value="1931">1931</option>
									<option value="1930">1930</option>
								</select>
							</div>
						</div>
						<div class="profile__container">
							<div class="profile__twitter profile__element margin__correction">
								<label for="twitter">Twitter</label>
								<input class="form-control" id="twitter" type="text" name="twitter" required>
							</div>
							<div class="profile__linkedin profile__element">
								<label for="linkedin">Linked in</label>
								<input class="form-control" id="linkedin" type="text" name="linkedin" required>
							</div>
						</div>
						<div class="profile__container">
							<div class="profile__facebook profile__element margin__correction">
								<label for="facebook">Facebook</label>
								<input class="form-control" id="facebook" type="text" name="facebook" required>
							</div>
							<div class="profile__google profile__element">
								<label for="google">Google</label>
								<input class="form-control" id="google" type="text" name="google" required>
							</div>
						</div>
						<div class="profile__slogan profile__element">
							<label for="slogan">Slogan</label>
							<input class="form-control" id="slogan" type="text" name="slogan" required>
						</div>
						<div class="profile__element" style="margin-bottom: 10px;">
							<label for="">Payment Method</label>
						</div>
						<div class="profile__container">
							<div class="profile__element" style="margin: 0 0 0 0; flex-basis: 35%;">
								<div class="profile__payment">
									<div class="profile__payment-top">
										<div class="profile__payment-img">
											<img src="visa.png" alt="">
										</div>
										<div class="profile__payment-info">
											<span>Visa....814</span>
											<span>Expires 07/25</span>
										</div>
									</div>
									<div class="profile__payment-bot">
										<span>SELECT</span>
									</div>
								</div>
							</div>
							<div class="profile__element" style="margin: 0 10px; flex-basis: 35%;">
								<div class="profile__payment">
									<div class="profile__payment-top">
										<div class="profile__payment-img">
											<img src="mastercard.png" alt="">
										</div>
										<div class="profile__payment-info">
											<span>Master....814</span>
											<span>Expires 07/25</span>
										</div>
									</div>
									<div class="profile__payment-bot">
										<span>SELECT</span>
									</div>
								</div>
							</div>
						</div>

						<div class="profile__container">
							<div class="profile__addpayment profile__element">
								<div class="profile__addpayment-wrapper">
									<div class="icon"><i class="fas fa-calendar-week"></i></div>
									<div class="icon-info">ADD PAYMENT METHOD</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<input type="submit" href="#" class="prof__save-btn" id="register" name="create" value="Save        &rarr;">
		</form>
	</div>
	<script src="https://kit.fontawesome.com/b8e3505483.js" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
	<script type="text/javascript">
		$(function () {
			$('#register').click(function (e) {

				var valid = this.form.checkValidity();

				if (valid) {


					var firstname = $('#firstname').val();
					var lastname = $('#lastname').val();
					var email = $('#email').val();
					var phonenumber = $('#phonenumber').val();
					var password = $('#password').val();
					var address = $('#address').val();
					var nation = $('#nation').val();
					var gender = $('#gender').val();
					var language = $('#language').val();
					var dob = $('#dob').val();
					var twitter = $('#twitter').val();
					var linkedin = $('#linkedin').val();
					var facebook = $('#facebook').val();
					var google = $('#google').val();
					var slogan = $('#slogan').val();

					e.preventDefault();

					$.ajax({
						type: 'POST',
						url: 'process.php',
						data: {
							firstname: firstname,
							lastname: lastname,
							email: email,
							phonenumber: phonenumber,
							password: password,
							address: address,
							nation: nation,
							gender: gender,
							language: language,
							dob: dob,
							twitter: twitter,
							linkedin: linkedin,
							facebook: facebook,
							google: google,
							slogan: slogan

						},
						success: function (data) {
							Swal.fire({
								'title': 'Successful',
								'text': data,
								'type': 'success'
							})

						},
						error: function (data) {
							Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
							})
						}
					});


				} else {

				}





			});


		});
	</script>
</body>

</html>