
<?php include_once('./inc/header.php')?>
 <div class="breadcrumb_section bg_gray page-title-mini">
     <div class="custom-container"><!-- STRART CONTAINER -->
         <div class="row align-items-center">
        	 <div class="col-md-6">
                 <div class="page-title">
            		 <h1>Checkout </h1>
                 </div>
             </div>
             <div class="col-md-6">
                 <ol class="breadcrumb justify-content-md-end">
                     <li class="breadcrumb-item"><a href="#">Home </a></li>
                     <li class="breadcrumb-item"><a href="#">Pages </a></li>
                     <li class="breadcrumb-item active">Checkout </li>
                 </ol>
             </div>
         </div>
     </div><!-- END CONTAINER-->
 </div>

  <!-- START SECTION SHOP -->
  <div class="section section__inner">
	 <div class="custom-container">
         <div class="row">
             <div class="col-lg-6">
            	 <div class="toggle_info">
                	 <span><i class="fas fa-user"></i>Returning customer?  <a href="#loginform" data-toggle="collapse" class="collapsed" aria-expanded="false">Click here to login </a></span>
                 </div>
                 <div class="panel-collapse collapse login_form" id="loginform">
                     <div class="panel-body">
                    	 <p>If you have shopped ____ us before, please enter ____ details below. If you ___ a new customer, please _______ to the Billing &amp; ________ section. </p>
                    	 <form method="post">
                             <div class="form-group">
                                 <input type="text" required="" class="form-control" name="email" placeholder="Username Or Email" />
                             </div>
                             <div class="form-group">
                                 <input class="form-control" required="" type="password" name="password" placeholder="Password" />
                             </div>
                             <div class="login_footer form-group">
                                 <div class="chek-form">
                                     <div class="custome-checkbox">
                                         <input class="form-check-input" type="checkbox" name="checkbox" id="remember" value="" />
                                         <label class="form-check-label" for="remember"><span>Remember me </span></label>
                                     </div>
                                 </div>
                                 <a href="#">Forgot password? </a>
                             </div>
                             <div class="form-group">
                                 <button type="submit" class="btn btn-fill-out btn-block" name="login">Log in </button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
             <div class="col-lg-6">
            	 <div class="toggle_info">
            		 <span><i class="fas fa-tag"></i>Have a coupon?  <a href="#coupon" data-toggle="collapse" class="collapsed" aria-expanded="false">Click here to enter your code </a></span>
                 </div>
                 <div class="panel-collapse collapse coupon_form" id="coupon">
                     <div class="panel-body">
                    	 <p>If you have a ______ code, please apply it _____. </p>
                         <div class="coupon field_form input-group">
                             <input type="text" value="" class="form-control" placeholder="Enter Coupon Code.." />
                             <div class="input-group-append">
                                 <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon </button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
            	 <div class="medium_divider"></div>
            	 <div class="divider center_icon" style="display: none;"><i class="linearicons-credit-card"></i></div>
            	 <div class="medium_divider"></div>
             </div>
         </div>
         <div class="row">
        	 <div class="col-md-6">
            	 <div class="heading_s1">
            		 <h4>Billing Details </h4>
                 </div>
                 <form method="post">
                     <div class="form-group">
                         <input type="text" required="" class="form-control" name="fname" placeholder="First name *" />
                     </div>
                     <div class="form-group">
                         <input type="text" required="" class="form-control" name="lname" placeholder="Last name *" />
                     </div>
                     <div class="form-group">
                         <input class="form-control" required="" type="text" name="cname" placeholder="Company Name" />
                     </div>
                     <div class="form-group">
                         <div class="custom_select">
                             <select class="form-control">
                                 <option value="" />Select an option... 
                                 <option value="AX" />Aland Islands 
                                 <option value="AF" />Afghanistan 
                                 <option value="AL" />Albania 
                                 <option value="DZ" />Algeria 
                                 <option value="AD" />Andorra 
                                 <option value="AO" />Angola 
                                 <option value="AI" />Anguilla 
                                 <option value="AQ" />Antarctica 
                                 <option value="AG" />Antigua and Barbuda 
                                 <option value="AR" />Argentina 
                                 <option value="AM" />Armenia 
                                 <option value="AW" />Aruba 
                                 <option value="AU" />Australia 
                                 <option value="AT" />Austria 
                                 <option value="AZ" />Azerbaijan 
                                 <option value="BS" />Bahamas 
                                 <option value="BH" />Bahrain 
                                 <option value="BD" />Bangladesh 
                                 <option value="BB" />Barbados 
                                 <option value="BY" />Belarus 
                                 <option value="PW" />Belau 
                                 <option value="BE" />Belgium 
                                 <option value="BZ" />Belize 
                                 <option value="BJ" />Benin 
                                 <option value="BM" />Bermuda 
                                 <option value="BT" />Bhutan 
                                 <option value="BO" />Bolivia 
                                 <option value="BQ" />Bonaire, Saint Eustatius and ____ 
                                 <option value="BA" />Bosnia and Herzegovina 
                                 <option value="BW" />Botswana 
                                 <option value="BV" />Bouvet Island 
                                 <option value="BR" />Brazil 
                                 <option value="IO" />British Indian Ocean Territory 
                                 <option value="VG" />British Virgin Islands 
                                 <option value="BN" />Brunei 
                                 <option value="BG" />Bulgaria 
                                 <option value="BF" />Burkina Faso 
                                 <option value="BI" />Burundi 
                                 <option value="KH" />Cambodia 
                                 <option value="CM" />Cameroon 
                                 <option value="CA" />Canada 
                                 <option value="CV" />Cape Verde 
                                 <option value="KY" />Cayman Islands 
                                 <option value="CF" />Central African Republic 
                                 <option value="TD" />Chad 
                                 <option value="CL" />Chile 
                                 <option value="CN" />China 
                                 <option value="CX" />Christmas Island 
                                 <option value="CC" />Cocos (Keeling) Islands 
                                 <option value="CO" />Colombia 
                                 <option value="KM" />Comoros 
                                 <option value="CG" />Congo (Brazzaville) 
                                 <option value="CD" />Congo (Kinshasa) 
                                 <option value="CK" />Cook Islands 
                                 <option value="CR" />Costa Rica 
                                 <option value="HR" />Croatia 
                                 <option value="CU" />Cuba 
                                 <option value="CW" />CuraÇao 
                                 <option value="CY" />Cyprus 
                                 <option value="CZ" />Czech Republic 
                                 <option value="DK" />Denmark 
                                 <option value="DJ" />Djibouti 
                                 <option value="DM" />Dominica 
                                 <option value="DO" />Dominican Republic 
                                 <option value="EC" />Ecuador 
                                 <option value="EG" />Egypt 
                                 <option value="SV" />El Salvador 
                                 <option value="GQ" />Equatorial Guinea 
                                 <option value="ER" />Eritrea 
                                 <option value="EE" />Estonia 
                                 <option value="ET" />Ethiopia 
                                 <option value="FK" />Falkland Islands 
                                 <option value="FO" />Faroe Islands 
                                 <option value="FJ" />Fiji 
                                 <option value="FI" />Finland 
                                 <option value="FR" />France 
                                 <option value="GF" />French Guiana 
                                 <option value="PF" />French Polynesia 
                                 <option value="TF" />French Southern Territories 
                                 <option value="GA" />Gabon 
                                 <option value="GM" />Gambia 
                                 <option value="GE" />Georgia 
                                 <option value="DE" />Germany 
                                 <option value="GH" />Ghana 
                                 <option value="GI" />Gibraltar 
                                 <option value="GR" />Greece 
                                 <option value="GL" />Greenland 
                                 <option value="GD" />Grenada 
                                 <option value="GP" />Guadeloupe 
                                 <option value="GT" />Guatemala 
                                 <option value="GG" />Guernsey 
                                 <option value="GN" />Guinea 
                                 <option value="GW" />Guinea-Bissau 
                                 <option value="GY" />Guyana 
                                 <option value="HT" />Haiti 
                                 <option value="HM" />Heard Island and McDonald _______ 
                                 <option value="HN" />Honduras 
                                 <option value="HK" />Hong Kong 
                                 <option value="HU" />Hungary 
                                 <option value="IS" />Iceland 
                                 <option value="IN" />India 
                                 <option value="ID" />Indonesia 
                                 <option value="IR" />Iran 
                                 <option value="IQ" />Iraq 
                                 <option value="IM" />Isle of Man 
                                 <option value="IL" />Israel 
                                 <option value="IT" />Italy 
                                 <option value="CI" />Ivory Coast 
                                 <option value="JM" />Jamaica 
                                 <option value="JP" />Japan 
                                 <option value="JE" />Jersey 
                                 <option value="JO" />Jordan 
                                 <option value="KZ" />Kazakhstan 
                                 <option value="KE" />Kenya 
                                 <option value="KI" />Kiribati 
                                 <option value="KW" />Kuwait 
                                 <option value="KG" />Kyrgyzstan 
                                 <option value="LA" />Laos 
                                 <option value="LV" />Latvia 
                                 <option value="LB" />Lebanon 
                                 <option value="LS" />Lesotho 
                                 <option value="LR" />Liberia 
                                 <option value="LY" />Libya 
                                 <option value="LI" />Liechtenstein 
                                 <option value="LT" />Lithuania 
                                 <option value="LU" />Luxembourg 
                                 <option value="MO" />Macao S.A.R., China 
                                 <option value="MK" />Macedonia 
                                 <option value="MG" />Madagascar 
                                 <option value="MW" />Malawi 
                                 <option value="MY" />Malaysia 
                                 <option value="MV" />Maldives 
                                 <option value="ML" />Mali 
                                 <option value="MT" />Malta 
                                 <option value="MH" />Marshall Islands 
                                 <option value="MQ" />Martinique 
                                 <option value="MR" />Mauritania 
                                 <option value="MU" />Mauritius 
                                 <option value="YT" />Mayotte 
                                 <option value="MX" />Mexico 
                                 <option value="FM" />Micronesia 
                                 <option value="MD" />Moldova 
                                 <option value="MC" />Monaco 
                                 <option value="MN" />Mongolia 
                                 <option value="ME" />Montenegro 
                                 <option value="MS" />Montserrat 
                                 <option value="MA" />Morocco 
                                 <option value="MZ" />Mozambique 
                                 <option value="MM" />Myanmar 
                                 <option value="NA" />Namibia 
                                 <option value="NR" />Nauru 
                                 <option value="NP" />Nepal 
                                 <option value="NL" />Netherlands 
                                 <option value="AN" />Netherlands Antilles 
                                 <option value="NC" />New Caledonia 
                                 <option value="NZ" />New Zealand 
                                 <option value="NI" />Nicaragua 
                                 <option value="NE" />Niger 
                                 <option value="NG" />Nigeria 
                                 <option value="NU" />Niue 
                                 <option value="NF" />Norfolk Island 
                                 <option value="KP" />North Korea 
                                 <option value="NO" />Norway 
                                 <option value="OM" />Oman 
                                 <option value="PK" />Pakistan 
                                 <option value="PS" />Palestinian Territory 
                                 <option value="PA" />Panama 
                                 <option value="PG" />Papua New Guinea 
                                 <option value="PY" />Paraguay 
                                 <option value="PE" />Peru 
                                 <option value="PH" />Philippines 
                                 <option value="PN" />Pitcairn 
                                 <option value="PL" />Poland 
                                 <option value="PT" />Portugal 
                                 <option value="QA" />Qatar 
                                 <option value="IE" />Republic of Ireland 
                                 <option value="RE" />Reunion 
                                 <option value="RO" />Romania 
                                 <option value="RU" />Russia 
                                 <option value="RW" />Rwanda 
                                 <option value="ST" />São Tomé and Príncipe 
                                 <option value="BL" />Saint Barthélemy 
                                 <option value="SH" />Saint Helena 
                                 <option value="KN" />Saint Kitts and Nevis 
                                 <option value="LC" />Saint Lucia 
                                 <option value="SX" />Saint Martin (Dutch part) 
                                 <option value="MF" />Saint Martin (French part) 
                                 <option value="PM" />Saint Pierre and Miquelon 
                                 <option value="VC" />Saint Vincent and the __________ 
                                 <option value="SM" />San Marino 
                                 <option value="SA" />Saudi Arabia 
                                 <option value="SN" />Senegal 
                                 <option value="RS" />Serbia 
                                 <option value="SC" />Seychelles 
                                 <option value="SL" />Sierra Leone 
                                 <option value="SG" />Singapore 
                                 <option value="SK" />Slovakia 
                                 <option value="SI" />Slovenia 
                                 <option value="SB" />Solomon Islands 
                                 <option value="SO" />Somalia 
                                 <option value="ZA" />South Africa 
                                 <option value="GS" />South Georgia/Sandwich Islands 
                                 <option value="KR" />South Korea 
                                 <option value="SS" />South Sudan 
                                 <option value="ES" />Spain 
                                 <option value="LK" />Sri Lanka 
                                 <option value="SD" />Sudan 
                                 <option value="SR" />Suriname 
                                 <option value="SJ" />Svalbard and Jan Mayen 
                                 <option value="SZ" />Swaziland 
                                 <option value="SE" />Sweden 
                                 <option value="CH" />Switzerland 
                                 <option value="SY" />Syria 
                                 <option value="TW" />Taiwan 
                                 <option value="TJ" />Tajikistan 
                                 <option value="TZ" />Tanzania 
                                 <option value="TH" />Thailand 
                                 <option value="TL" />Timor-Leste 
                                 <option value="TG" />Togo 
                                 <option value="TK" />Tokelau 
                                 <option value="TO" />Tonga 
                                 <option value="TT" />Trinidad and Tobago 
                                 <option value="TN" />Tunisia 
                                 <option value="TR" />Turkey 
                                 <option value="TM" />Turkmenistan 
                                 <option value="TC" />Turks and Caicos Islands 
                                 <option value="TV" />Tuvalu 
                                 <option value="UG" />Uganda 
                                 <option value="UA" />Ukraine 
                                 <option value="AE" />United Arab Emirates 
                                 <option value="GB" />United Kingdom (UK) 
                                 <option value="US" />USA (US) 
                                 <option value="UY" />Uruguay 
                                 <option value="UZ" />Uzbekistan 
                                 <option value="VU" />Vanuatu 
                                 <option value="VA" />Vatican 
                                 <option value="VE" />Venezuela 
                                 <option value="VN" />Vietnam 
                                 <option value="WF" />Wallis and Futuna 
                                 <option value="EH" />Western Sahara 
                                 <option value="WS" />Western Samoa 
                                 <option value="YE" />Yemen 
                                 <option value="ZM" />Zambia 
                                 <option value="ZW" />Zimbabwe 
                             </select>
                         </div>
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" name="billing_address" required="" placeholder="Address *" />
                     </div>
                     <div class="form-group">
                         <input type="text" class="form-control" name="billing_address2" required="" placeholder="Address line2" />
                     </div>
                     <div class="form-group">
                         <input class="form-control" required="" type="text" name="city" placeholder="City / Town *" />
                     </div>
                     <div class="form-group">
                         <input class="form-control" required="" type="text" name="state" placeholder="State / County *" />
                     </div>
                     <div class="form-group">
                         <input class="form-control" required="" type="text" name="zipcode" placeholder="Postcode / ZIP *" />
                     </div>
                     <div class="form-group">
                         <input class="form-control" required="" type="text" name="phone" placeholder="Phone *" />
                     </div>
                     <div class="form-group">
                         <input class="form-control" required="" type="text" name="email" placeholder="Email address *" />
                     </div>
                     <div class="form-group">
                         <div class="chek-form" style="padding-left: 22px;">
                             <div class="custome-checkbox">
                                 <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount" />
                                 <label class="form-check-label label_info" for="createaccount"><span>Create an account? </span></label>
                             </div>
                         </div>
                     </div>
                     <div class="form-group create-account">
                         <input class="form-control" required="" type="password" placeholder="Password" name="password" />
                     </div>
                     <div class="ship_detail">
                    	 <div class="form-group">
                    	 <div class="chek-form" style="padding-left: 22px;">
                             <div class="custome-checkbox">
                                 <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress" />
                                 <label class="form-check-label label_info" for="differentaddress"><span>Ship to a different address? </span></label>
                             </div>
                         </div>
                     </div>
                    	 <div class="different_address">
                         <div class="form-group">
                             <input type="text" required="" class="form-control" name="fname" placeholder="First name *" />
                         </div>
                         <div class="form-group">
                             <input type="text" required="" class="form-control" name="lname" placeholder="Last name *" />
                         </div>
                         <div class="form-group">
                             <input class="form-control" required="" type="text" name="cname" placeholder="Company Name" />
                         </div>
                         <div class="form-group">
                             <div class="custom_select">
                                 <select class="form-control">
                                     <option value="" />Select an option... 
                                     <option value="AX" />Aland Islands 
                                     <option value="AF" />Afghanistan 
                                     <option value="AL" />Albania 
                                     <option value="DZ" />Algeria 
                                     <option value="AD" />Andorra 
                                     <option value="AO" />Angola 
                                     <option value="AI" />Anguilla 
                                     <option value="AQ" />Antarctica 
                                     <option value="AG" />Antigua and Barbuda 
                                     <option value="AR" />Argentina 
                                     <option value="AM" />Armenia 
                                     <option value="AW" />Aruba 
                                     <option value="AU" />Australia 
                                     <option value="AT" />Austria 
                                     <option value="AZ" />Azerbaijan 
                                     <option value="BS" />Bahamas 
                                     <option value="BH" />Bahrain 
                                     <option value="BD" />Bangladesh 
                                     <option value="BB" />Barbados 
                                     <option value="BY" />Belarus 
                                     <option value="PW" />Belau 
                                     <option value="BE" />Belgium 
                                     <option value="BZ" />Belize 
                                     <option value="BJ" />Benin 
                                     <option value="BM" />Bermuda 
                                     <option value="BT" />Bhutan 
                                     <option value="BO" />Bolivia 
                                     <option value="BQ" />Bonaire, Saint Eustatius and ____ 
                                     <option value="BA" />Bosnia and Herzegovina 
                                     <option value="BW" />Botswana 
                                     <option value="BV" />Bouvet Island 
                                     <option value="BR" />Brazil 
                                     <option value="IO" />British Indian Ocean Territory 
                                     <option value="VG" />British Virgin Islands 
                                     <option value="BN" />Brunei 
                                     <option value="BG" />Bulgaria 
                                     <option value="BF" />Burkina Faso 
                                     <option value="BI" />Burundi 
                                     <option value="KH" />Cambodia 
                                     <option value="CM" />Cameroon 
                                     <option value="CA" />Canada 
                                     <option value="CV" />Cape Verde 
                                     <option value="KY" />Cayman Islands 
                                     <option value="CF" />Central African Republic 
                                     <option value="TD" />Chad 
                                     <option value="CL" />Chile 
                                     <option value="CN" />China 
                                     <option value="CX" />Christmas Island 
                                     <option value="CC" />Cocos (Keeling) Islands 
                                     <option value="CO" />Colombia 
                                     <option value="KM" />Comoros 
                                     <option value="CG" />Congo (Brazzaville) 
                                     <option value="CD" />Congo (Kinshasa) 
                                     <option value="CK" />Cook Islands 
                                     <option value="CR" />Costa Rica 
                                     <option value="HR" />Croatia 
                                     <option value="CU" />Cuba 
                                     <option value="CW" />CuraÇao 
                                     <option value="CY" />Cyprus 
                                     <option value="CZ" />Czech Republic 
                                     <option value="DK" />Denmark 
                                     <option value="DJ" />Djibouti 
                                     <option value="DM" />Dominica 
                                     <option value="DO" />Dominican Republic 
                                     <option value="EC" />Ecuador 
                                     <option value="EG" />Egypt 
                                     <option value="SV" />El Salvador 
                                     <option value="GQ" />Equatorial Guinea 
                                     <option value="ER" />Eritrea 
                                     <option value="EE" />Estonia 
                                     <option value="ET" />Ethiopia 
                                     <option value="FK" />Falkland Islands 
                                     <option value="FO" />Faroe Islands 
                                     <option value="FJ" />Fiji 
                                     <option value="FI" />Finland 
                                     <option value="FR" />France 
                                     <option value="GF" />French Guiana 
                                     <option value="PF" />French Polynesia 
                                     <option value="TF" />French Southern Territories 
                                     <option value="GA" />Gabon 
                                     <option value="GM" />Gambia 
                                     <option value="GE" />Georgia 
                                     <option value="DE" />Germany 
                                     <option value="GH" />Ghana 
                                     <option value="GI" />Gibraltar 
                                     <option value="GR" />Greece 
                                     <option value="GL" />Greenland 
                                     <option value="GD" />Grenada 
                                     <option value="GP" />Guadeloupe 
                                     <option value="GT" />Guatemala 
                                     <option value="GG" />Guernsey 
                                     <option value="GN" />Guinea 
                                     <option value="GW" />Guinea-Bissau 
                                     <option value="GY" />Guyana 
                                     <option value="HT" />Haiti 
                                     <option value="HM" />Heard Island and McDonald _______ 
                                     <option value="HN" />Honduras 
                                     <option value="HK" />Hong Kong 
                                     <option value="HU" />Hungary 
                                     <option value="IS" />Iceland 
                                     <option value="IN" />India 
                                     <option value="ID" />Indonesia 
                                     <option value="IR" />Iran 
                                     <option value="IQ" />Iraq 
                                     <option value="IM" />Isle of Man 
                                     <option value="IL" />Israel 
                                     <option value="IT" />Italy 
                                     <option value="CI" />Ivory Coast 
                                     <option value="JM" />Jamaica 
                                     <option value="JP" />Japan 
                                     <option value="JE" />Jersey 
                                     <option value="JO" />Jordan 
                                     <option value="KZ" />Kazakhstan 
                                     <option value="KE" />Kenya 
                                     <option value="KI" />Kiribati 
                                     <option value="KW" />Kuwait 
                                     <option value="KG" />Kyrgyzstan 
                                     <option value="LA" />Laos 
                                     <option value="LV" />Latvia 
                                     <option value="LB" />Lebanon 
                                     <option value="LS" />Lesotho 
                                     <option value="LR" />Liberia 
                                     <option value="LY" />Libya 
                                     <option value="LI" />Liechtenstein 
                                     <option value="LT" />Lithuania 
                                     <option value="LU" />Luxembourg 
                                     <option value="MO" />Macao S.A.R., China 
                                     <option value="MK" />Macedonia 
                                     <option value="MG" />Madagascar 
                                     <option value="MW" />Malawi 
                                     <option value="MY" />Malaysia 
                                     <option value="MV" />Maldives 
                                     <option value="ML" />Mali 
                                     <option value="MT" />Malta 
                                     <option value="MH" />Marshall Islands 
                                     <option value="MQ" />Martinique 
                                     <option value="MR" />Mauritania 
                                     <option value="MU" />Mauritius 
                                     <option value="YT" />Mayotte 
                                     <option value="MX" />Mexico 
                                     <option value="FM" />Micronesia 
                                     <option value="MD" />Moldova 
                                     <option value="MC" />Monaco 
                                     <option value="MN" />Mongolia 
                                     <option value="ME" />Montenegro 
                                     <option value="MS" />Montserrat 
                                     <option value="MA" />Morocco 
                                     <option value="MZ" />Mozambique 
                                     <option value="MM" />Myanmar 
                                     <option value="NA" />Namibia 
                                     <option value="NR" />Nauru 
                                     <option value="NP" />Nepal 
                                     <option value="NL" />Netherlands 
                                     <option value="AN" />Netherlands Antilles 
                                     <option value="NC" />New Caledonia 
                                     <option value="NZ" />New Zealand 
                                     <option value="NI" />Nicaragua 
                                     <option value="NE" />Niger 
                                     <option value="NG" />Nigeria 
                                     <option value="NU" />Niue 
                                     <option value="NF" />Norfolk Island 
                                     <option value="KP" />North Korea 
                                     <option value="NO" />Norway 
                                     <option value="OM" />Oman 
                                     <option value="PK" />Pakistan 
                                     <option value="PS" />Palestinian Territory 
                                     <option value="PA" />Panama 
                                     <option value="PG" />Papua New Guinea 
                                     <option value="PY" />Paraguay 
                                     <option value="PE" />Peru 
                                     <option value="PH" />Philippines 
                                     <option value="PN" />Pitcairn 
                                     <option value="PL" />Poland 
                                     <option value="PT" />Portugal 
                                     <option value="QA" />Qatar 
                                     <option value="IE" />Republic of Ireland 
                                     <option value="RE" />Reunion 
                                     <option value="RO" />Romania 
                                     <option value="RU" />Russia 
                                     <option value="RW" />Rwanda 
                                     <option value="ST" />São Tomé and Príncipe 
                                     <option value="BL" />Saint Barthélemy 
                                     <option value="SH" />Saint Helena 
                                     <option value="KN" />Saint Kitts and Nevis 
                                     <option value="LC" />Saint Lucia 
                                     <option value="SX" />Saint Martin (Dutch part) 
                                     <option value="MF" />Saint Martin (French part) 
                                     <option value="PM" />Saint Pierre and Miquelon 
                                     <option value="VC" />Saint Vincent and the __________ 
                                     <option value="SM" />San Marino 
                                     <option value="SA" />Saudi Arabia 
                                     <option value="SN" />Senegal 
                                     <option value="RS" />Serbia 
                                     <option value="SC" />Seychelles 
                                     <option value="SL" />Sierra Leone 
                                     <option value="SG" />Singapore 
                                     <option value="SK" />Slovakia 
                                     <option value="SI" />Slovenia 
                                     <option value="SB" />Solomon Islands 
                                     <option value="SO" />Somalia 
                                     <option value="ZA" />South Africa 
                                     <option value="GS" />South Georgia/Sandwich Islands 
                                     <option value="KR" />South Korea 
                                     <option value="SS" />South Sudan 
                                     <option value="ES" />Spain 
                                     <option value="LK" />Sri Lanka 
                                     <option value="SD" />Sudan 
                                     <option value="SR" />Suriname 
                                     <option value="SJ" />Svalbard and Jan Mayen 
                                     <option value="SZ" />Swaziland 
                                     <option value="SE" />Sweden 
                                     <option value="CH" />Switzerland 
                                     <option value="SY" />Syria 
                                     <option value="TW" />Taiwan 
                                     <option value="TJ" />Tajikistan 
                                     <option value="TZ" />Tanzania 
                                     <option value="TH" />Thailand 
                                     <option value="TL" />Timor-Leste 
                                     <option value="TG" />Togo 
                                     <option value="TK" />Tokelau 
                                     <option value="TO" />Tonga 
                                     <option value="TT" />Trinidad and Tobago 
                                     <option value="TN" />Tunisia 
                                     <option value="TR" />Turkey 
                                     <option value="TM" />Turkmenistan 
                                     <option value="TC" />Turks and Caicos Islands 
                                     <option value="TV" />Tuvalu 
                                     <option value="UG" />Uganda 
                                     <option value="UA" />Ukraine 
                                     <option value="AE" />United Arab Emirates 
                                     <option value="GB" />United Kingdom (UK) 
                                     <option value="US" />USA (US) 
                                     <option value="UY" />Uruguay 
                                     <option value="UZ" />Uzbekistan 
                                     <option value="VU" />Vanuatu 
                                     <option value="VA" />Vatican 
                                     <option value="VE" />Venezuela 
                                     <option value="VN" />Vietnam 
                                     <option value="WF" />Wallis and Futuna 
                                     <option value="EH" />Western Sahara 
                                     <option value="WS" />Western Samoa 

                                     <option value="YE" />Yemen 
                                     <option value="ZM" />Zambia 
                                     <option value="ZW" />Zimbabwe 
                                 </select>
                             </div>
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control" name="billing_address" required="" placeholder="Address *" />
                         </div>
                         <div class="form-group">
                             <input type="text" class="form-control" name="billing_address2" required="" placeholder="Address line2" />
                         </div>
                         <div class="form-group">
                             <input class="form-control" required="" type="text" name="city" placeholder="City / Town *" />
                         </div>
                         <div class="form-group">
                             <input class="form-control" required="" type="text" name="state" placeholder="State / County *" />
                         </div>
                         <div class="form-group">
                             <input class="form-control" required="" type="text" name="zipcode" placeholder="Postcode / ZIP *" />
                         </div>
                     </div>
                     </div>
                     <div class="heading_s1">
                         <h4>Additional information </h4>
                     </div>
                     <div class="form-group mb-0">
                         <textarea rows="5" class="form-control" placeholder="Order notes"></textarea>
                     </div>
                 </form>
             </div>
             <div class="col-md-6">
                 <div class="order_review">
                     <div class="heading_s1">
                         <h4>Your Orders </h4>
                     </div>
                     <div class="table-responsive order_table">
                         <table class="table">
                             <thead>
                                 <tr>
                                     <th>Product </th>
                                     <th>Total </th>
                                 </tr>
                             </thead>
                             <tbody>
                                 <tr>
                                     <td>Blue Dress For Woman  <span class="product-qty">x 2 </span></td>
                                     <td>$90.00 </td>
                                 </tr>
                                 <tr>
                                     <td>Lether Gray Tuxedo  <span class="product-qty">x 1 </span></td>
                                     <td>$55.00 </td>
                                 </tr>
                                 <tr>
                                     <td>woman full sliv dress  <span class="product-qty">x 3 </span></td>
                                     <td>$204.00 </td>
                                 </tr>
                             </tbody>
                             <tfoot>
                                 <tr>
                                     <th>SubTotal </th>
                                     <td class="product-subtotal">$349.00 </td>
                                 </tr>
                                 <tr>
                                     <th>Shipping </th>
                                     <td>Free Shipping </td>
                                 </tr>
                                 <tr>
                                     <th>Total </th>
                                     <td class="product-subtotal">$349.00 </td>
                                 </tr>
                             </tfoot>
                         </table>
                     </div>
                     <div class="payment_method">
                         <div class="heading_s1">
                             <h4>Payment </h4>
                         </div>
                         <div class="payment_option">
                             <div class="custome-radio">
                                 <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" value="option3" checked="" />
                                 <label class="form-check-label" for="exampleRadios3">Direct Bank Transfer </label>
                             </div>
                             <div class="custome-radio">
                                 <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios4" value="option4" />
                                 <label class="form-check-label" for="exampleRadios4">Check Payment </label>
                                 <p data-method="option4" class="payment-text">
                             </div>
                             <div class="custome-radio">
                                 <input class="form-check-input" type="radio" name="payment_option" id="exampleRadios5" value="option5" />
                                 <label class="form-check-label" for="exampleRadios5">Paypal </label>
                             </div>
                         </div>
                     </div>
                     <a href="#" class="btn btn-fill-out btn-block">Place Order </a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- END SECTION SHOP -->

 <?php include_once('./inc/footer.php')?>