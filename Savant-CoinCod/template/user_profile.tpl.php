<?php
	include_once 'functions.php';
	require $this->template_path.'config.php';

	if(isset($_POST["btnSave"])){
		$res = updateUser($_SESSION['user_id'], $_POST['emails'], $_POST["username"], $_POST["firstname"], $_POST["lastname"], $_POST["year"], $_POST["month"], $_POST["day"], $_POST["gender"], $_POST["add1"], $_POST["add2"], $_POST["city"], $_POST["state"], $_POST["zip"], $_POST["mobile"]);
	if ($res == 99) {
		$error = "Your personal information was updated. We hope you have an enjoyable auction experience with us.";
	} elseif ($res == 98) {//Errors during Update
		$error = "<div style='color:red;'>Email for updated personal information failed to be sent</div>";
	}
	}
	
	$email = $_SESSION['email'];
	$user_data = getUserRecords($email);		
	$id=$user_data["id"];
	$username = $user_data["username"];
	$token = $user_data["token"];
	$fname = $user_data["fname"];
	$lname = $user_data["lname"];
	$dob = $user_data["dob"];
	list($year, $months, $day) = explode('-', substr($dob, 0, 10));
	if($months == 00)	{ $month = '';	}
	if($months == 01)	{ $month = 'January';	}
	if($months == 02)	{ $month = 'February';	}
	if($months == 03)	{ $month = 'March';	}
	if($months == 04)	{ $month = 'April';	}
	if($months == 05)	{ $month = 'May';	}
	if($months == 06)	{ $month = 'June';	}
	if($months == 07)	{ $month = 'July';	}
	if($months == 08)	{ $month = 'August';	}
	if($months == 09)	{ $month = 'September';	}
	if($months == 10)	{ $month = 'October';	}
	if($months == 11)	{ $month = 'November';	}
	if($months == 12)	{ $month = 'December';	}
	$gender = $user_data["gender"];
	$add1 = $user_data["add1"];
	$add2 = $user_data["add2"];
	$city = $user_data["city"];
	$state = $user_data["state"];
	$zip = $user_data["zip"];
	$country = $user_data["country"];
	$mobile = $user_data["mobile"];
?>
<?php echo $error; ?>
<form action="" enctype="multipart/form-data" name="myForm" id="myForm" method="post">
    <br/><fieldset width="700">
		<legend><font size="5"><strong>ID and Password</strong></legend>
			<table width="650" cellpadding="0" cellspacing="10">
                <tr>
					<td width="20%">
						User ID
					</td>
					<td width="80%">
						<?php echo $id; ?>
                        <input type="hidden" name="userid" id="userid" value="<?php echo $id; ?>"/>
					</td>
				</tr>
				
				<tr>
					<td width="20%">
						Username
					</td>
					<td width="80%">
						<input type="text" name="username" value="<?php echo $username; ?>" class="text" id="username" size="33" maxlength="50" tabindex="10">
					</td>
				</tr>
                    
                <tr>
					<td width="25%">
						Email
					</td>
					<td width="75%">
                       	<?php echo $email; ?>
						<input type="hidden" name="emails" value="<?php echo $email; ?>" id="emails">
					</td>
				</tr>

                <tr>
					<td width="25%">
						Token
					</td>
					<td width="75%">
						<table cellpadding="0" cellspacing="0" border="0">
						<tr>
							<td>
                               	<?php echo $token; ?>
								<input type="hidden" name="token" value="<?php echo $token; ?>" id="token">
							</td>
						</tr>
						</table>
					</td>
				</tr>								
			</table>
		</fieldset>
        <br/>
		<fieldset>
			<legend><font size="5"><strong>Personal Information</strong></legend>
				<table width="640" cellpadding="0" cellspacing="10">
					<tr>
						<td width="20%">
							First Name
				    	</td>
						<td width="80%">
							<input type="text" name="firstname" value="<?php echo $fname; ?>" class="text" id="firstname" size="33" maxlength="50" tabindex="1">
						</td>
					</tr>
					<tr>
						<td width="25%">
							Last Name
				    	</td>
						<td width="75%">
							<input type="text" name="lastname" value="<?php echo $lname; ?>" class="text" id="lastname" size="33" maxlength="50" tabindex="2">
						</td>
					</tr>
					<tr>
						<td width="25%">
							Date birth
						</td>
						<td width="75%">
							<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td>
                                <input type="hidden" name="date_birth" value="" id="date_birth">
									<select id="date_birth_year" name="year" size="1">
										<option value="<?php echo $year;?>"><?php echo $year;?></option>
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
									</select>
								</td>								
								<td>
									<select id="date_birth_month" name="month" size="1">
										<option value="<?php echo $month;?>"><?php echo $month;?></option>
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
									<select id="date_birth_day" name="day" size="1">
										<option value="<?php echo $day;?>"><?php echo $day;?></option>
										<option value="01">1</option>
										<option value="02">2</option>
										<option value="03">3</option>
										<option value="04">4</option>
										<option value="05">5</option>
										<option value="06">6</option>
										<option value="07">7</option>
										<option value="08">8</option>
										<option value="09">9</option>
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
						<td width="25%">
							Gender
						</td>
						<td width="75%">
							<select id="gender" name="gender" size="1" tabindex="3">
                            	<option value="<?php echo $gender;?>"><?php echo $gender;?></option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
							</select> 
						</td>
				   </tr>
				   <tr>
						<td width="25%">
							Address 1
						</td>
						<td width="75%">
							<input type="text" name="add1" value="<?php echo $add1; ?>" class="text" id="add1" size="33" maxlength="100" tabindex="5">
						</td>
					</tr>
                  <tr>
						<td width="25%">
							Address 2
						</td>
						<td width="75%">
							<input type="text" name="add2" value="<?php echo $add2; ?>" class="text" id="add2" size="33" maxlength="100" tabindex="5">
						</td>
					</tr>
					<tr>
						<td width="25%">
							City
						</td>
						<td width="75%">
						<input type="text" name="city" value="<?php echo $city; ?>" class="text" id="city" size="33" maxlength="100" tabindex="6" />                            
						</td>
					</tr>
					<tr>
						<td width="25%">
							State
						</td>
						<td width="75%">
							<select id="state" name="state" size="1" tabindex="7">
								<option value="<?php echo $state;?>"><?php echo $state;?></option>
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
						</td>
					</tr>
					<tr>
						<td width="25%">
							Zip
						</td>
						<td width="75%">
							<input type="text" name="zip" value="<?php echo $zip; ?>" class="text" id="zip" size="33" maxlength="100" tabindex="8">
						</td>
					</tr>
					<tr>
						<td width="25%">
							Country
						</td>
						<td width="75%">
							Malaysia
						</td>
					</tr>
					<tr>
						<td width="25%">
							Mobile <smallfont>(+60XXXXXXXX)</smallfont>
						</td>
						<td width="75%">
							<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td>
									<input type="text" name="mobile" value="<?php echo $mobile; ?>" class="text" id="mobile" size="33" maxlength="100" tabindex="9">
								</td>
							</tr>
							</table>
						</td>
					</tr>
                   
					</table>
					
					<input type="submit" name="btnSave" class="form_button" value="Save" />                    
				</fieldset>
                </form>