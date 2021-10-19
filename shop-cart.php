<?php include_once('./inc/header.php')?>
 <!-- START SECTION BREADCRUMB -->
 <div class="breadcrumb_section bg_gray page-title-mini">
     <div class="custom-container"><!-- STRART CONTAINER -->
         <div class="row align-items-center">
        	 <div class="col-md-6">
                 <div class="page-title">
            		 <h1>Shopping Cart </h1>
                 </div>
             </div>
             <div class="col-md-6">
                 <ol class="breadcrumb justify-content-md-end">
                     <li class="breadcrumb-item"><a href="#">Home </a></li>
                     <li class="breadcrumb-item"><a href="#">Pages </a></li>
                     <li class="breadcrumb-item active">Shopping Cart </li>
                 </ol>
             </div>
         </div>
     </div><!-- END CONTAINER-->
 </div>



  <!-- START SECTION SHOP -->
  <div class="section section__inner">
	 <div class="custom-container">
         <div class="row">
             <div class="col-12">
                 <div class="table-responsive shop_cart_table">
                	 <table class="table">
                    	 <thead>
                        	 <tr>
                            	 <th class="product-thumbnail"> Images </th>
                                 <th class="product-name">Product </th>
                                 <th class="product-price">Price </th>
                                 <th class="product-quantity">Quantity </th>
                                 <th class="product-subtotal">Total </th>
                                 <th class="product-remove">Remove </th>
                             </tr>
                         </thead>
                         <tbody>
                        	 <tr>
                            	 <td class="product-thumbnail"><a href="#"><img src="assets/images/product_img1.jpg" alt="product1" /></a></td>
                                 <td class="product-name" data-title="Product"><a href="#">Blue Dress For Woman </a></td>
                                 <td class="product-price" data-title="Price">$45.00 </td>
                                 <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                 <input type="button" value="-" class="minus" />
                                 <input type="text" name="quantity" value="2" title="Qty" class="qty" size="4" />
                                 <input type="button" value="+" class="plus" />
                               </div></td>
                              	 <td class="product-subtotal" data-title="Total">$90.00 </td>
                                 <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                             </tr>
                             <tr>
                            	 <td class="product-thumbnail"><a href="#"><img src="assets/images/product_img2.jpg" alt="product2" /></a></td>
                                 <td class="product-name" data-title="Product"><a href="#">Lether Gray Tuxedo </a></td>
                                 <td class="product-price" data-title="Price">$55.00 </td>
                                 <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                 <input type="button" value="-" class="minus" />
                                 <input type="text" name="quantity" value="1" title="Qty" class="qty" size="4" />
                                 <input type="button" value="+" class="plus" />
                               </div></td>
                              	 <td class="product-subtotal" data-title="Total">$55.00 </td>
                                 <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                             </tr>
                             <tr>
                            	 <td class="product-thumbnail"><a href="#"><img src="assets/images/product_img3.jpg" alt="product3" /></a></td>
                                 <td class="product-name" data-title="Product"><a href="#">woman full sliv dress </a></td>
                                 <td class="product-price" data-title="Price">$68.00 </td>
                                 <td class="product-quantity" data-title="Quantity"><div class="quantity">
                                 <input type="button" value="-" class="minus" />
                                 <input type="text" name="quantity" value="3" title="Qty" class="qty" size="4" />
                                 <input type="button" value="+" class="plus" />
                               </div></td>
                              	 <td class="product-subtotal" data-title="Total">$204.00 </td>
                                 <td class="product-remove" data-title="Remove"><a href="#"><i class="ti-close"></i></a></td>
                             </tr>
                         </tbody>
                         <tfoot>
                        	 <tr>
                            	 <td colspan="6" class="px-0">
                                	 <div class="row no-gutters align-items-center">

                                    	 <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                                             <div class="coupon field_form input-group">
                                                 <input type="text" value="" class="form-control form-control-sm" placeholder="Enter Coupon Code.." />
                                                 <div class="input-group-append">
                                                	 <button class="btn btn-fill-out btn-sm" type="submit">Apply Coupon </button>
                                                 </div>
                                             </div>
                                    	 </div>
                                         <div class="col-lg-8 col-md-6 text-left text-md-right">
                                             <button class="btn btn-line-fill btn-sm" type="submit">Update Cart </button>
                                         </div>
                                     </div>
                                 </td>
                             </tr>
                         </tfoot>
                     </table>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-12">
            	 <div class="medium_divider"></div>
            	 <div class="divider center_icon d-none"><i class="ti-shopping-cart-full"></i></div>
            	 <div class="medium_divider"></div>
             </div>
         </div>
         <div class="row">
        	 <div class="col-md-6">
            	 <div class="heading_s1 mb-3">
            		 <h6>Calculate Shipping </h6>
                 </div>
                 <form class="field_form shipping_calculator">
                     <div class="form-row">
                         <div class="form-group col-lg-12">
                             <div class="custom_select">
                                 <select class="form-control">
                                     <option value="" />Choose a option... 
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
                     </div>
                     <div class="form-row">
                         <div class="form-group col-lg-6">
                             <input required="required" placeholder="State / Country" class="form-control" name="name" type="text" />
                         </div>
                         <div class="form-group col-lg-6">
                             <input required="required" placeholder="PostCode / ZIP" class="form-control" name="name" type="text" />
                         </div>
                     </div>
                     <div class="form-row">
                         <div class="form-group col-lg-12">
                             <button class="btn btn-fill-line" type="submit">Update Totals </button>
                         </div>
                     </div>
                 </form>
             </div>
             <div class="col-md-6">
            	 <div class="border p-3 p-md-4">
                     <div class="heading_s1 mb-3">
                         <h6>Cart Totals </h6>
                     </div>
                     <div class="table-responsive">
                         <table class="table">
                             <tbody>
                                 <tr>
                                     <td class="cart_total_label">Cart Subtotal </td>
                                     <td class="cart_total_amount">$349.00 </td>
                                 </tr>
                                 <tr>
                                     <td class="cart_total_label">Shipping </td>
                                     <td class="cart_total_amount">Free Shipping </td>
                                 </tr>
                                 <tr>
                                     <td class="cart_total_label">Total </td>
                                     <td class="cart_total_amount"><strong>$349.00 </strong></td>
                                 </tr>
                             </tbody>
                         </table>
                     </div>
                     <a href="#" class="btn btn-fill-out">Proceed To CheckOut </a>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- END SECTION SHOP -->

<?php include_once('./inc/footer.php')?>