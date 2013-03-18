
<div id="left-nav">
	<a href="../account/index.php" class="visible-phone"><i class="icon icon-home"></i> MiEdaqua</a>
	<ul>
		<li> <a href="../account/index.php"><i class="icon icon-home"></i> <span>MiEdaqua</span><span class="label">{update}</span></a></li>
		<li><a href="../account/shopping.php"><i class="icon-shopping-cart"></i> <span>Shopping</span> <span class="label">{update}</span></a></li>
		<li><a href="../account/sales.php"><i class="icon icon-th-list"></i> <span>Sales</span><span class="label">{update}</span></a></li>
		<li><a href="../account/binary.php"><i class="icon icon-pencil"></i> <span>Binary</span><span class="label">{update}</span></a></li>
		<li><a href="../account/unilevel.php"><i class="icon icon-th"></i> <span>Uni-Level</span><span class="label">{update}</span></a></li>
		<li><a href="#"><i class="icon icon-tint"></i> <span>Pool</span><span class="label">{update}</span></a></li>
		<li class="submenu">
			<a href="#"><i class="icon icon-file"></i> <span>Reports</span> <span class="label">{update}</span></a>
			<ul>
				<li><a href="#">Charts</a></li>
				<li><a href="#">Report List</a></li>
				<li><a href="#">Invoices</a></li>
			</ul>
		</li>
		<li>
			<a href="../account/balance.php"><i class="icon icon-signal"></i> <span>Balance</span><span class="label">{update}</span></a>
		</li>
	</ul>
</div><!-- /END/ .left-nav -->


<div id="content">
	<div id="content-header">
		<h1>Profile | <small> <?php echo $_SESSION['user_name'];?></small></h1>
	</div>
	<div id="follow-up">
		<a href="../account/index.php" title="Go to MiEdaqua" class="tooltip-bottom"><i class="icon-home"></i> MiEdaqua</a>
		<a href="../account/profile.php" class="current">Profile </a>
	</div>
	<div class="alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<p class=<?=(isset($_SESSION["class"])? ($_SESSION["class"]) : (""))?>><?=(isset($_SESSION["msg"])? ($_SESSION["msg"]) : (""))?></p>
		<p class="hidden"><strong>Dev-Instructions</strong> => display msgs div. Remove class .hidden and add class .alert-erros  for errors, .alert-sucess for sucess and .alert-info for info msgs.</p>
	</div>
<!-- ################################################################################################### -->
	<div class="container-fluid">
<div class="row-fluid">
			<div class="span12">
				<div class="row-fluid">
					<div class="span6">
						<div class="frame-box">
							<div class="frame-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Personal Information</h5>
							</div><!-- /END/ .frame-title -->
							<div class="frame-content nopadding">
								<!--Start-Form-->
								<form>
									<table class="table table-hover">
						              <tbody>
						                <tr>
						                  <td><strong>Name:</strong></td>
						                  <td><?php echo $user['name'];?></td>
						                </tr>
						                <tr>
						                  <td><strong>Middle Name:</strong></td>
						                  <td><?php echo $user['surname1'];?></td>
						                </tr>
						                <tr>
						                  <td><strong>Last Name:</strong></td>
						                  <td><?php echo $user['surname2'];?></td>
						                </tr>
						                <tr>
						                  <td><strong>Date of Birth:</strong></td>
						                  <td><?php echo $user['surname2'];?></td>
						                </tr>
						                <tr>
						                  <td><strong>Email:</strong></td>
						                  <td><?php echo $user['email'];?></td>
						                </tr>
						                <tr>
						                  <td><strong>Telephone:</strong></td>
						                  <td><input type="text" name="phonenumber" id="phonenumber" value="<?php echo $user['homephone'];?>" /></td>
						                </tr>
					                	<tr>
						                  <td><strong>Id Proof type:</strong></td>
						                  <td><?php echo $user['idtype'];?></td>
						                </tr>
					                	<tr>
						                  <td><strong>Document No:</strong></td>
						                  <td>Archivado</td>
						                </tr>
					                	<tr>
						                  <td><strong>Document Uploaded:</strong></td>
						                  <td><input type="file" /></td>
						                </tr>
						                <tr>
					                		<!-- Button to trigger personal-information -->	
											<th colspan="2">							
												<a href="#personal-information" role="button" class="btn" data-toggle="modal">Submit</a>		
											</th>
										</tr>
						              </tbody>
						            </table>
									<!-- Modal personal-information -->
									<div id="personal-information" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-1" aria-hidden="true">
									  <div class="modal-header">
									    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
									    <h3 id="modal-label-1">Personal Information</h3>
									  </div>
									  <div class="modal-body">
									    <p>Are you sure you want to save the changes?</p>
									  </div>
									  <div class="modal-footer">
									    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

									    <button class="btn btn-primary">Save changes</button>
									  </div>
									</div>
									<!-- /END/ #personal-information -->
				            	</form>
				            	<!-- /END/ form -->
							</div><!-- /END/ .frame-content -->
						</div><!-- /END/ .frame-box -->
					</div><!-- /END/ .fspan6 -->

					<div class="span6">
						<div class="frame-box">
							<div class="frame-title">
							    <ul class="nav nav-tabs">
							        <li class="active"><a data-toggle="tab" href="#tab1">Billing</a></li>
							        <li><a data-toggle="tab" href="#tab2">Delivery</a></li>
							    </ul>
							</div><!-- /END/ .frame-title -->
							<div class="frame-content tab-content nopadding">
							    <div id="tab1" class="tab-pane active">
							    	<form>
										<table class="table table-hover">
										<tbody>
										<tr>
										<td><strong>Address line 1</strong></td>
										<td><input type="text" name="baddress1" id="address1" value="<?php echo $user['baddress1'];?>" /></td>
										</tr>
										<tr>
										<td><strong>Address line 2</strong></td>
										<td><input type="text" name="baddress2" id=baddress2" value="<?php echo $user['baddress2'];?>" /></td>
										</tr>
										<tr>
										<td><strong>Town or City</strong></td>
										<td><input type="text" name="bcity" id="city" value="<?php echo $user['bcity'];?>" /></td>
										</tr>
										<tr>
										<td><strong>Postal Code</strong></td>
										<td><input type="text" name="bpostcode" id="postcode" value="<?php echo $user['bpostalcode'];?>" /></td>
										</tr>
										<tr>
										<td><strong>Country</strong></td>
										<td>
											<div class="input">
									           <select name="bcountry" style="width:200px;" id="country">
									           	<option value="Afghanistan">Afghanistan</option><option value="Aland Islands">Aland Islands</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua And Barbuda">Antigua And Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas">Bahamas</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia And Herzegovina">Bosnia And Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="Brunei Darussalam">Brunei Darussalam</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo">Congo</option><option value="Congo, Democratic Republic">Congo, Democratic Republic</option><option value="Cook Islands">Cook Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote D'Ivoire">Cote D'Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option selected="selected" value="España">España</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern Territories">French Southern Territories</option><option value="Gabon">Gabon</option><option value="Gambia">Gambia</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island & Mcdonald Islands">Heard Island & Mcdonald Islands</option><option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran, Islamic Republic Of">Iran, Islamic Republic Of</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle Of Man">Isle Of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea">Korea</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macao">Macao</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Myanmar">Myanmar</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">sPhilippine</option><option value="Pitcairn">Pitcairn</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russian Federation">Russian Federation</option><option value="Rwanda">Rwanda</option><option value="Saint Barthelemy">Saint Barthelemy</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts And Nevis">Saint Kitts And Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Martin">Saint Martin</option><option value="Saint Pierre And Miquelon">Saint Pierre And Miquelon</option><option value="Saint Vincent And Grenadines">Saint Vincent And Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome And Principe">Sao Tome And Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia And Sandwich Isl.">South Georgia And Sandwich Isl.</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard And Jan Mayen">Svalbard And Jan Mayen</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syrian Arab Republic">Syrian Arab Republic</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad And Tobago">Trinidad And Tobago</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks And Caicos Islands">Turks And Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States" >United States</option><option value="United States Outlying Islands">United States Outlying Islands</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Viet Nam">Viet Nam</option><option value="Virgin Islands, British">Virgin Islands, British</option><option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option><option value="Wallis And Futuna">Wallis And Futuna</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
									            </select>	
								            </div>
										</td>
										</tr>
										<tr>
										<td><strong>County</strong></td>
										<td><input type="text" style="width:200px;" name="bcounty" id="state" value="<?php echo $user['bcounty'];?>" /></td>
										</tr>
						                <tr>
					                		<!-- Button to trigger billing-address -->	
											<th colspan="2">							
												<a href="#billing-address" role="button" class="btn" data-toggle="modal">Submit</a>		
											</th>
										</tr>
										</tbody>
										</table> 
										<!-- Modal billing-address -->
										<div id="billing-address" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-2" aria-hidden="true">
										  <div class="modal-header">
										    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										    <h3 id="modal-label-2">Billing Address</h3>
										  </div>
										  <div class="modal-body">
										    <p>Are you sure you want to save the changes?</p>
										  </div>
										  <div class="modal-footer">
										    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

										    <button class="btn btn-primary">Save changes</button>
										  </div>
										</div>
										<!-- /END/ #billing-address -->
									</form>
							    </div><!-- /END/ #tab1 -->
								
								
							    <div id="tab2" class="tab-pane">
							    	<form>
										<table class="table table-hover">
										<tbody>
										<tr>
										<td><strong>Address line 1</strong></td>
										<td><input type="text" name="daddress1" id="d_address1" value="<?php echo $user['daddress1'];?>" /></td>
										</tr>
										<tr>
										<td><strong>Address line 2</strong></td>
										<td><input type="text" name="daddress2" id="d_address2" value="<?php echo $user['daddress2'];?>" /></td>
										</tr>
										<tr>
										<td><strong>Town or City</strong></td>
										<td><input type="text" name="dcity" id="d_city" value="<?php echo $user['dcity'];?>" /></td>
										</tr>
										<tr>
										<td><strong>Postal Code</strong></td>
										<td><input type="text" name="dpostcode" id="d_postcode" value="<?php echo $user['dpostalcode'];?>" /></td>
										</tr>
										<tr>
										<td><strong>Country</strong></td>
										<td><select name="dcountry" style="width:200px;" id="d_country"><option selected="selected" value="España">España</option>
					           			 </select>	</td>
										</tr>
										<tr>
										<td><strong>County</strong></td>
										<td><input type="text" name="dcounty" id="d_state" value="<?php echo $user['dcounty'];?>" /></td>
										</tr>
						                <tr>
					                		<!-- Button to trigger delivery-address -->	
											<th colspan="2">							
												<a href="#delivery-address" role="button" class="btn" data-toggle="modal">Submit</a>		
											</th>
										</tr>
										</tbody>
										</table> 
										<!-- Modal delivery-address -->
										<div id="delivery-address" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-label-3" aria-hidden="true">
										  <div class="modal-header">
										    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										    <h3 id="modal-label-3">Delivery Address</h3>
										  </div>
										  <div class="modal-body">
										    <p>Are you sure you want to save the changes?</p>
										  </div>
										  <div class="modal-footer">
										    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>

										    <button class="btn btn-primary">Save changes</button>
										  </div>
										</div>
										<!-- /END/ #delivery-address -->
									</form>
							    </div><!-- /END/ #tab2 -->
							</div>  <!-- /END/ .tab-content -->                          
						</div><!-- /END/ .frame-box -->
					</div><!-- /End/ .span6 -->
				</div> <!-- /End/ .row-fluid -->
			</div><!-- /End/ .span12 -->
		</div><!-- /End/ .row-fluid -->

	</div><!-- /End/ .container-fluid -->
</div><!-- /End/ #content -->


<div class="footer">
	<div class="container">
		This is the footer
	</div>
</div>
<!-- SCRIPTS -->
<script type="text/javascript" src="../lib/jsPlugins/jquery-ui-1.9.0.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/bootstrap.min.js"></script>
<script type="text/javascript" src="../lib/jsPlugins/jquery.uniform.js"></script>
<script type="text/javascript" src="../js/account/miedaqua.js"></script>
<script type="text/javascript" src="../js/common/region.js"></script>



</body>
</html>

