<?php
	include_once 'functions.php';
	require $this->template_path.'config.php';
	
	if(isset($_POST["btnRegister"])){
		$emails = mysql_real_escape_string($_POST['emails']);
		$username = mysql_real_escape_string($_POST['username']);
		$passwords = mysql_real_escape_string($_POST['passwords']);
		$re_password = mysql_real_escape_string($_POST['re_password']);
		$firstname = mysql_real_escape_string($_POST['firstname']);
		$lastname = mysql_real_escape_string($_POST['lastname']);
		$dby = mysql_real_escape_string($_POST['date_birth_year']);
		$dbm = mysql_real_escape_string($_POST['date_birth_month']);
		$dbd = mysql_real_escape_string($_POST['date_birth_day']);
		$dob=sprintf("%04d-%02d-%02d", $dby, $dbm, $dbd);
		$gender = mysql_real_escape_string($_POST['gender']);
		$add1 = mysql_real_escape_string($_POST['add1']);
		$add2 = mysql_real_escape_string($_POST['add2']);
		$city = mysql_real_escape_string($_POST['city']);
		$state = mysql_real_escape_string($_POST['state']);
		$zip = mysql_real_escape_string($_POST['zip']);
		$country = "Malaysia";
		$mobile = mysql_real_escape_string($_POST['mobile']);	
		
		$result = registeruser($emails, $username, $passwords, $re_password, $firstname, $lastname, $dob, $gender, $add1, $add2, $city, $state, $zip, $country, $mobile);
?>
	<div style="color:red;">
		<?php echo $result;?>
	</div>
<?php } ?>

<div class="registration">
	<article class="smallfont">
        All Fields are required to be filled.
	</article>
	<form action="" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
    	<fieldset>
			<legend>ID and Password</legend>
				<table>
					<tr>
						<td>
							Username
						</td>
						<td>
							<input type="text" name="username" value="" class="text" id="username" size="33" maxlength="50" tabindex="10">
                            <script type="text/javascript">
		     					var username = new LiveValidation('username');
		     					username.add(Validate.Presence, {failureMessage: 'You must key in a value!' });
		   					</script> 
						</td>
					</tr>
                    
                     <tr>
						<td>
							Email
						</td>
						<td>
							<input type="text" name="emails" value="" class="text" id="emails" size="33" maxlength="50" tabindex="10">
                            <script type="text/javascript">
								var emails = new LiveValidation('emails');
									emails.add(Validate.Presence);
									emails.add(Validate.Email, {failureMessage: 'Email Not Valid!'});		
							</script>
						</td>
					</tr>
					<tr>
						<td>
							Password
						</td>
						<td>
									<input type="password" name="passwords" value="" class="text" id="passwords" size="33" maxlength="50" tabindex="12">
                                    <script type="text/javascript">
										var passwords = new LiveValidation('passwords');
										passwords.add(Validate.Presence);	
										passwords.add(Validate.Length, { minimum: 6 } );
									</script>
						</td>
					</tr>
					<tr>
						<td>
							Confirm password
						</td>
						<td>
							<input type="password" name="re_password" value="" class="text" id="re_password" size="33" maxlength="50" tabindex="13">
                            <script type="text/javascript">
								var repasswords = new LiveValidation('re_password');
								repasswords.add(Validate.Presence);	
								repasswords.add(Validate.Confirmation, { match: 'passwords'} );
							</script>
						</td>
					</tr>										
					</table>
				</fieldset>
                <fieldset>
					<legend>Personal Information</legend>
				  <table>
					<tr>
						<td>
							First Name
				    	</td>
						<td>
							<input type="text" name="firstname" value="" class="text" id="firstname" size="33" maxlength="50" tabindex="1">
                            <script type="text/javascript">
		    					var firstname = new LiveValidation('firstname');
								firstname.add(Validate.Presence);
								firstname.add(Validate.Char, { onlyInteger: true } );	
		  					</script>
						</td>
					</tr>
					<tr>
						<td>
							Last Name
				    	</td>
						<td>
							<input type="text" name="lastname" value="" class="text" id="lastname" size="33" maxlength="50" tabindex="2">
                            <script type="text/javascript">
		    					var lastname = new LiveValidation('lastname');
		    					lastname.add(Validate.Presence);
								lastname.add(Validate.Char, { onlyInteger: true } );
		  					</script>
						</td>
					</tr>
					<tr>
						<td>
							Date birth
						</td>
						<td>
							<table>
							<tr>
								<td>
                                <input type="hidden" name="date_birth" value="" id="date_birth">
									<select id="date_birth_year" name="date_birth_year" size="1">
										<option value=""></option>
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
										<option value="19100">19100</option>
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
									</select>
								</td>								
								<td>
									<select id="date_birth_month" name="date_birth_month" size="1">
										<option value="00"></option>
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
								</td>
								<td>
									<select id="date_birth_day" name="date_birth_day" size="1">
										<option value=""></option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
										<option value="9">9</option>
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
								</td>
							</tr>
							</table>
						</td>
                  </tr>
                  <tr>
						<td>
							Gender
						</td>
						<td><div class="gender">
							<select id="gender" name="gender" size="1" tabindex="3">
                            	<option value="0">Choose</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select>
                            <script type="text/javascript">
		    					var gender = new LiveValidation('gender');
		    					gender.add(Validate.Inclusion, { within: [ 'Male', 'Female' ], failureMessage: 'You must select an option!' } );
		  					</script> </div>
						</td>
				   </tr>
				   <tr>
						<td>
							Address 1
						</td>
						<td>
							<input type="text" name="add1" value="" class="text" id="add1" size="33" maxlength="100" tabindex="5">
                            <script type="text/javascript">
		    					var add1 = new LiveValidation('add1');
		    					add1.add(Validate.Presence);
		  					</script>
						</td>
					</tr>
                  <tr>
						<td>
							Address 2
						</td>
						<td>
							<input type="text" name="add2" value="" class="text" id="add2" size="33" maxlength="100" tabindex="5">
                            <script type="text/javascript">
		    					var add2 = new LiveValidation('add2');
		    					add2.add(Validate.Presence);
		  					</script>
						</td>
					</tr>
					<tr>
						<td>
							City
						</td>
						<td>
							<input type="text" name="city" value="" class="text" id="city" size="33" maxlength="100" tabindex="6">
							<script type="text/javascript">
		    					var city = new LiveValidation('city');
		    					city.add(Validate.Presence);
								city.add(Validate.Char, { onlyInteger: true } );
		  					</script>
                            
						</td>
					</tr>
					<tr>
						<td>
							State
						</td>
						<td><div class="state">
							<select id="state" name="state" size="1" tabindex="7">
								<option value="0">Choose</option>
								<option value="Johor">Johor</option>
								<option value="Kedah">Kedah</option>
								<option value="Kelantan">Kelantan</option>
								<option value="Kuala Lumpur">Kuala Lumpur</option>
								<option value="Labuan">Labuan</option>
								<option value="Melaka">Melaka</option>
								<option value="Negeri Sembilan">Negeri Sembilan</option>
								<option value="Pahang">Pahang</option>
								<option value="Perak">Perak</option>
								<option value="Perlis">Perlis</option>
								<option value="Pulau Pinang">Pulau Pinang</option>
								<option value="Putrajaya">Putrajaya</option>
								<option value="Sabah">Sabah</option>
								<option value="Selangor">Selangor</option>
								<option value="Sarawak">Sarawak</option>
								<option value="Terengganu">Terengganu</option>
							</select>
                            <script type="text/javascript">
		    					var state = new LiveValidation('state');
		    					state.add(Validate.Inclusion, { within: [ 'Johor', 'Kedah','Kelantan','Kuala Lumpur','Labuan','Melaka','Negeri Sembilan','Pahang','Perak','Perlis','Pulau Pinang','Putrajaya','Sabah','Selangor','Sarawak','Terengganu' ], failureMessage: 'You must select an option!' } );
		  					</script></div>
						</td>
					</tr>
					<tr>
						<td>
							Zip
						</td>
						<td>
							<input type="text" name="zip" value="" class="text" id="zip" size="33" maxlength="100" tabindex="8">
                            <script type="text/javascript">
		    					var zip = new LiveValidation('zip');
		    					zip.add(Validate.Presence);
								zip.add(Validate.Numericality, { onlyInteger: true } );
		  					</script>
						</td>
					</tr>
					<tr>
						<td>
							Country
						</td>
						<td>
							Malaysia
						</td>
					</tr>
					<tr>
						<td>
							Mobile <smallfont>(+60XXXXXXXX)</smallfont>
						</td>
						<td>
							
									<input type="text" name="mobile" value="" class="text" id="mobile" size="33" maxlength="100" tabindex="9">
                                    <script type="text/javascript">
		    							var mobile = new LiveValidation('mobile');
		    							mobile.add(Validate.Presence);
										mobile.add(Validate.Numericality, { onlyInteger: true } );
		  							</script>
						</td>
					</tr>
					</table>
					<input type="submit" name="btnRegister" class="form_button" value="Submit" />                    
				</fieldset>
                </form>
		</div> <!--end div registration-->