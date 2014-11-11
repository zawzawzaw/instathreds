@section('content')
<!-- CONTENT -->
<section class="content checkout">
  <div class="container">
    <h6 class="section-title"><i class="fa fa-lock"></i>SECURE CHECKOUT</h6>
	<ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    {{ Form::open(array('url'=>'checkout/confirmorder', 'class'=>'form-checkout')) }}
    <div class="row">
      
      <!-- left column  -->
      <div class="eight column">
      	
        <div class="panel shipping">
          <div class="heading">
            <h6>SHIPPING OR COLLECTION</h6>
            @if(!Auth::check())
            <p>
            	<a href="#login-modal" class="login-link" data-id="login">Login</a> or 
            	<a href="#login-modal" class="signup-link" data-id="signup">create an account</a> for faster checkout
            </p>  
            @endif
          </div>

          <!-- left column -->
          <div class="left">
            <h6>Contact Details</h6>
            <div class="form-group">
              <input type="text" name="contact_first_name" class="text form-control" value="@if($user){{ $user->username }}@endif" placeholder="First Name">
            </div>
            <div class="form-group">
              <input type="text" name="contact_last_name" class="text form-control" placeholder="Last Name">
            </div>
            <div class="form-group">
              <input type="text" name="contact_email" class="text form-control" value="@if($user){{ $user->email }}@endif" placeholder="Email">
            </div>
            <div class="form-group">
              <input type="text" name="contact_phone" class="text form-control" placeholder="Phone">
            </div>
            <div class="form-group">
              <input type="checkbox" name="newsletter" id="newsletter" class="css-checkbox lrg" checked="checked"/>
              <label for="newsletter" class="css-label lrg">Receive Instathreds email updates</label>
            </div>
          </div>
          <!-- end of left column -->

          <!-- right column -->
          <div class="right" style="min-height: 270px;">
            <input type="radio" name="redemption_type" class="redemption_type" checked="checked" value="collection" style="display: inline-block;margin-left: 1px;"><h6 style="display: inline-block;width: 262px;padding-left: 10px;">I wish to collect my order from</h6>
            
            <div class="collect">
            	<a href="" class="store-loc storeloc-link"><i class="fa fa-info-circle"></i>Store Location</a>
	            <div class="choose-store">
	              <ul>
                  <li>
                    <input type="radio" name="store_location" checked="checked" value="Robina Store" style="display: inline-block;margin-left: 1px;">
                    <p style="display: inline-block;width:auto;padding-left:5px;">Robina Store</p>
                  </li>  
                  <li>
                    <input type="radio" name="store_location" value="Carindale Store" style="display: inline-block;margin-left: 1px;">
                    <p style="display: inline-block;width:auto;padding-left:5px;">Carindale Store</p>
                  </li>
                  <li>
                    <input type="radio" name="store_location" value="Garden City" style="display: inline-block;margin-left: 1px;">
                    <p style="display: inline-block;width:auto;padding-left:5px;">Garden City</p>
                  </li>
	            </div>
            </div>

            <input type="radio" name="redemption_type" class="redemption_type" value="shipping" style="display: inline-block;margin-left: 1px;"><h6 style="display: inline-block;width: 262px;padding-left: 10px;">Ship to this address</h6>
            <div class="ship">
	            <div class="form-group">
	              <input name="address_1" type="text" class="text form-control" placeholder="Address Line 1">
	            </div>
	            <div class="form-group">
	              <input name="address_2" type="text" class="text form-control" placeholder="Address Line 2(optional)">
	            </div>
	            <div class="form-group">
	              <input name="city" type="text" class="text form-control" placeholder="City or Suburb">
	            </div>
	            <div class="form-group">
                <input name="state" type="text" class="text form-control" placeholder="State, Region or Province">
	            </div>
	            <div class="form-group">
	              <input type="text" name="post_zip_code" class="text form-control" placeholder="Zip or Post Code">
	            </div>
              <div class="form-group">
                <div class="select-style">
                  <select name="country" id="country-select">
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Åland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia, Plurinational State of</option>
                    <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo</option>
                    <option value="CD">Congo, the Democratic Republic of the</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="CI">Côte d'Ivoire</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CW">Curaçao</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and McDonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People's Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao People's Democratic Republic</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MO">Macao</option>
                    <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova, Republic of</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Réunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint Barthélemy</option>
                    <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint Martin (French part)</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and the Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SX">Sint Maarten (Dutch part)</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic</option>
                    <option value="TW">Taiwan, Province of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania, United Republic of</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela, Bolivarian Republic of</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VG">Virgin Islands, British</option>
                    <option value="VI">Virgin Islands, U.S.</option>
                    <option value="WF">Wallis and Futuna</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                </div>
              </div>

	            <h6 style="margin-top:20px;">Shipping Method</h6>
	            <div class="choose-method">
	              <div class="form-group">
	                <input type="radio" name="shipmethod" class="shipmethod" value="shipmethod-standard" checked="checked" style="display: inline-block;margin-left: 1px;">
                  <h6 style="display: inline-block;width: 262px;padding-left:5px;">Standard (5-15 Business Days)</h6>
                </div>
                <div>
                  <input type="radio" name="shipmethod" class="shipmethod" value="shipmethod-express" style="display: inline-block;margin-left: 1px;">
                  <h6 style="display: inline-block;width: 262px;padding-left:5px;">Express (3-7 Business Days)</h6>
                </div>
                <div>
                  <input type="radio" name="shipmethod" value="shipmethod-international" style="display: inline-block;margin-left: 1px;">
                  <h6 style="display: inline-block;width: 262px;padding-left:5px;">International</h6>
                </div>

	            </div>

            </div>
          </div>
          <!-- end of right column -->

          <!-- <div class="separator-line"></div>-->

          <div style="text-align:center;margin-bottom:20px;">
            <!-- <a href="" class="btn btn-primary continuepayment" >CONTINUE PAYMENT</a> -->
            <!--
            {{ Form::submit('CONTINUE PAYMENT', array('class'=>'btn btn-primary continuepayment'))}}
            -->
		  	<!--<script
			    src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
			    data-key="{{ Config::get('stripe.stripe.public') }}"
			    data-amount="{{ Cart::total() }}"
			    data-name="Cart Item(s)"
			    data-description="{{ Cart::count() }} item(s)  (${{ Cart::total() }})"
			    data-image="">
		  	</script>-->
          </div>
        </div>

        <div class="panel payment">
          <div class="heading">
            <h6>ENTER YOUR PAYMENT DETAILS</h6>
          </div>          
            <div class="creditcard-form">  
              <fieldset id="cc_fields">
                <div class="cc-card-number-wrap">
                  <label for="card_number">
                    Card Number<span class="cc-required-indicator">*</span>
                  </label>
                  <input type="text" name="number" autocomplete="off" class="card-number form-control" placeholder="Card number">
                </div>

                <div class="cc-card-cvv-wrap">
                  <label for="card_number">
                    CVV<span class="cc-required-indicator">*</span>
                  </label>
                  <input type="text" name="cvc" size="4" autocomplete="off" class="card-number form-control" placeholder="Security Code">
                </div>

                <div class="cc-card-name-wrap">
                  <label for="card_number">
                    Name on the card<span class="cc-required-indicator">*</span>
                  </label>
                  <input type="text" name="card_name" autocomplete="off" class="card-number form-control" placeholder="Card Name">
                </div>

                <div class="cc-card-expiration-wrap">
                  <label for="card_exp_month">
                    Expiration(MM/YY)<span class="cc-required-indicator">*</span>
                  </label>
                  <div class="select-style">
                    <select id="card_exp_month" name="exp_month" class="card-expiry-month">
                    	<option value="1">01</option><option value="2">02</option><option value="3">03</option><option value="4">04</option><option value="5">05</option><option value="6">06</option><option value="7">07</option><option value="8">08</option><option value="9">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>     
                    </select>
                  </div>
                  <span class="exp-divider"> / </span>
                  <div class="select-style">
                    <select id="card_exp_year" name="exp_year" class="card-expiry-year">
                    	<option value="2014">14</option><option value="2015">15</option><option value="2016">16</option><option value="2017">17</option><option value="2018">18</option><option value="2019">19</option><option value="2020">20</option><option value="2021">21</option><option value="2022">22</option><option value="2023">23</option><option value="2024">24</option>      
                    </select>
                  </div>
                </div>

              </fieldset>

              <div class="separator-line"></div>
              <div class="purchase-wrap">
                <p class="lead">
                  This is a one-time payment. Let's do this!  
                </p>  
              	{{ Form::submit('PURCHASE NOW', array('class'=>'btn btn-primary purchase'))}}
                <p class="secure-payment"><i class="fa fa-lock"></i> Super-secure 128-bit SSL encrypted payment.</p>
                <div class="payment-logos">
          Secure credit card payments by {{ HTML::image('images/stripe.png', '', array('class' => 'stripe-logo')) }}
          </div>
              </div>
            </div>


            

          
        </div>

      </div>
      <!-- end of left column  -->
      
      <!-- right column  -->
      <div class="four column">
        <!-- order summary -->
        <div class="panel ordersummary">
          <div class="heading">
            <h6>ORDER SUMMARY</h6>
          </div>
          <div class="panel-inside">
            <table class="table-order">
            	@if(Cart::count() > 0)
		          	@foreach($cart as $row)
						<tr>
		                	<td>
		                		<a href="{{ URL::to('product', array(Product::slug($row->name), $row->id)) }}">
                          @if($row->options->image!='')
		                			 <img src="{{ $row->options->image }}" style="width:30px;">
                          @else
                           <img src="{{ $row->options->back_image }}" style="width:30px;">
                          @endif
		                		</a>
		                	</td>
		                	<td>
		                		<a href="{{ URL::to('product', array(Product::slug($row->name), $row->id)) }}">{{ $row->name }}<br>({{ $row->qty }}) {{ $row->name }}, {{ $row->options->size }}</a>
		                	</td>
		                	<td><p>${{ $row->price }}</p></td>
		              	</tr>
	            	@endforeach
            	@endif
              
              <!-- <tr>
                <td><a href=""><img src="images/image-placeholder1.png" style="width:30px;"></a></td>
                <td>
                <a href="">Space Scorpion<br>
                (1) Mens T-Shirt, XL, Arctic Bl...</a>
                </td>
                <td>$33.00</td>
              </tr>
              <tr>
                <td><a href=""><img src="images/image-placeholder1.png" style="width:30px;"></a></td>
                <td>
                <a href="">Space Scorpion<br>
                (1) Mens T-Shirt, XL, Arctic Bl...</a>
                </td>
                <td>$33.00</td>
              </tr> -->
            </table>
            <div class="separator-line"></div>
            <div class="total">
              <table>
                <tbody>
                  <tr>
                    <td>
                      <p>Subtotal:</p>    
                    </td>
                    <td>
                    @if(Cart::count() > 0)
                      <p>${{ number_format((float)Cart::total(), 2, '.', '') }}</p>    
                    @endif
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <p>Shipping:</p>    
                    </td>
                    <td>
                      <p class="shipping-price">$0.00</p>    
                    </td>
                  </tr>  
                </tbody>
                <tfoot>
                  <tr>
                    <td>Total:</td>
                    @if(Cart::count() > 0)
                    	<td class="total-price">AUD ${{ number_format((float)Cart::total(), 2, '.', '') }}</td>  
                    @endif
                  </tr>
                </tfoot>
              </table>  
            </div>
          </div>
        </div>
        <!-- end of order summary -->
        
        <!-- coupon -->
        <div class="panel coupon">
          <div id="coupon">
            <h6>Enter your gift, coupon or store code</h6>
            <input type="text" name="promo_code" class="text promo_code coupon-input" value="{{ $promo_code }}" placeholder="ENTER CODE">
            <a href="javascript:void(0);" class="btn btn-primary apply-promo">APPLY</a>
          </div>  
        </div>
        <!-- end of coupon -->
        

      </div>
      <!-- end of right column  -->
      
    </div>  
    {{ Form::close() }}
    
  </div>
</section>

<!-- STORE LOCATION MODAL -->
    <div class="modal fade" id="store-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            
            <div class="wrap">
              <h3 style="text-align:center;">STORE LOCATIONS</h3>
              <div class="separator-line"></div>
              <table>
                <tr>
                  <td>
                    <h6>ROBINA</h6>
                    <p>Robina Town Centre<br>
                    Robina Town Centre Drive<br>
                    (off Robina Parkway)<br>
                    Robina QLD 4230</p>  
                  </td>
                  <td></td>
                  <td>
                    <h6>CARINDALE</h6>
                    <p>Westfield Carindale<br>
                    1151 Creek Road<br>
                    Carindale QLD 4152</p>  
                  </td>
                  <td></td>
                  <td>
                    <h6>WESTFIELD GARDEN CITY</h6>
                    <p>Cnr Logan & Kessels Rd<br>
                    Upper Mt Gravatt QLD 4122</p>  
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                    Mon: 9am – 5.30pm<br>
                    Tues: 9am – 5.30pm<br>
                    Wed: 9am – 5.30pm<br>
                    Thurs: 9am – 9pm<br>
                    Fri: 9am – 5.30pm<br>
                    Sat: 9am – 5.30pm<br>
                    Sun: 10am – 4pm</p>  
                  </td>
                  <td></td>
                  <td>
                    <p>
                      Mon: 9am – 5.30pm<br>
                      Tues: 9am – 5.30pm<br>
                      Wed: 9am – 5.30pm<br>
                      Thurs: 9am – 9pm<br>
                      Fri: 9am – 5.30pm<br>
                      Sat: 9am – 5pm<br>
                      Sun: 10am – 5pm
                    </p>
                  </td>
                  <td></td>
                  <td>
                    <p>
                      Mon: 9am – 5.30pm<br>
                      Tues: 9am – 5.30pm<br>
                      Wed: 9am – 5.30pm<br>
                      Thurs: 9am – 9pm<br>
                      Fri: 9am – 5.30pm<br>
                      Sat: 9am – 5pm<br>
                      Sun: 10am – 5pm
                    </p>
                  </td>
                </tr>
                <tr>
                  <td colspan="5">
                    <p>
                      e. <a href="mailto:info@instathreds.co">info@instathreds.co</a><br>
                      p. 1300 469 453
                    </p>  
                  </td>
                </tr>
              </table>

              
            </div>

          </div>
        </div>
      </div>
    </div>



{{ HTML::script('js/vendor/jquery-2.1.1.js') }}
<script>
$(document).ready(function(e){
  var makeRequest = function(Data, URL, Method) {

      var request = $.ajax({
        url: URL,
        type: Method,
        data: Data,
          dataType: "JSON",
          cache: false,
        success: function(response) {
            // if success remove current item
            // console.log(response);
        },
            error: function( error ){
                // Log any error.
                console.log( "ERROR:", error );
            }
    });

    return request;
  };

	$(".login-link").on("click",function(){
		$('#login-modal').modal('show')
		var id = $(this).attr("data-id");
		$('#login-tab a:first').tab('show');	
	});

	$(".signup-link").on("click",function(){
		console.log('hi')
		$('#login-modal').modal('show')
		var id = $(this).attr("data-id");
		$('#login-tab a:last').tab('show');	
	});	

  /////////
  /////////

	var $totalPrice = $('.total-price');
	var $shippingPrice = $('.shipping-price');

	$("input[type=radio][name='redemption_type']").on('change', function(e){
		if(this.value=='collection') {
			$('.ship').slideUp();
			$('.collect').slideDown();

      if($('.actual-discount').length!==0) {
        var actualDiscount = $('.actual-discount').text().replace(/[^0-9\.]/g, '');
      }else
        var actualDiscount = 0;

      var totalPrice = parseFloat('{{ Cart::total() }}') - parseFloat(actualDiscount);

			$totalPrice.text( '$' + totalPrice.toFixed(2) );
      $shippingPrice.text( '$' + 0 );
		}else {

      $('input[name="address_1"]').val('{{ $paymentdetails->address or '' }}');
      $('input[name="address_2"]').val('{{ $paymentdetails->address_2 or '' }}');
      $('input[name="city"]').val('{{ $paymentdetails->city or '' }}');
      $('input[name="post_zip_code"]').val('{{ $paymentdetails->post_zip_code or '' }}');
      $('input[name="state"]').val('{{ $paymentdetails->state or '' }}');
      $('select[name^="country"] option[value="{{ $paymentdetails->country or '' }}"]').attr("selected","selected");

			$('.ship').slideDown();
			$('.collect').slideUp();

			if($("#country-select").val() == "Australia") {
        var shippingCost;

        if($('.shipmethod').val()=="shipmethod-express") {
          shippingCost = 15;
        }else {
          shippingCost = 6;
        }

      }
			else var shippingCost = 25;

      if($('.actual-discount').length!==0) {
        var actualDiscount = $('.actual-discount').text().replace(/[^0-9\.]/g, '');
      }else
        var actualDiscount = 0;

      console.log(actualDiscount);

			newTotalPrice = parseFloat('{{ Cart::total() }}') - parseFloat(actualDiscount) + shippingCost;

			$totalPrice.text( '$' + newTotalPrice.toFixed(2) );
			$shippingPrice.text( '$' + shippingCost.toFixed(2) );
		}
	});

  $('.shipmethod').on('change', function(e){

    if($("input[type=radio][name='redemption_type']:checked").val()=="shipping"){

      if($("#country-select").val() == "Australia") {
        var shippingCost;

        if($(this).val()=="shipmethod-express") {
          shippingCost = 15;
        }else {
          shippingCost = 6;
        }

      }
      else var shippingCost = 25;

      if($('.actual-discount').length!==0) {
        var actualDiscount = $('.actual-discount').text().replace(/[^0-9\.]/g, '');
      }else
        var actualDiscount = 0;

      newTotalPrice = parseFloat('{{ Cart::total() }}') - parseFloat(actualDiscount) + shippingCost;

      $totalPrice.text( '$' + newTotalPrice.toFixed(2) );
      $shippingPrice.text( '$' + shippingCost.toFixed(2) );
    }
    
  });

	$('#country-select').on('change', function(e){

		if( $(this).val() == "Australia" ) {
      var shippingCost;

      if($(this).val()=="shipmethod-express") {
        shippingCost = 15;
      }else {
        shippingCost = 6;
      }

    }
		else var shippingCost = 25;

		if($('.actual-discount').length!==0) {
        var actualDiscount = $('.actual-discount').text().replace(/[^0-9\.]/g, '');
      }else
        var actualDiscount = 0;

      newTotalPrice = parseFloat('{{ Cart::total() }}') - parseFloat(actualDiscount) + shippingCost;

		$totalPrice.text( '$' + newTotalPrice.toFixed(2) );
		$shippingPrice.text( '$' + shippingCost.toFixed(2) );

	});

  $(".storeloc-link").on("click",function(e){
    e.preventDefault();
    $('#store-modal').modal('show')
  });

  $('.promo_code').keypress(function(e){
      var key = e.which;
      if(key == 13)
      {
          $('.apply-promo').trigger('click');
          return false;
      }
  });

  $('.apply-promo').on('click', function(e){
    var promoCode = $('.promo_code').val();
    var checkpromoJSON = {};

    checkpromoJSON.promo_code = promoCode;

    request = makeRequest(checkpromoJSON, "/checkout/checkpromocode", "POST");

    request.done(function(){
      var result = jQuery.parseJSON(request.responseText);

      var cartTotal = '{{ Cart::total() }}';
      var shippingPrice = $shippingPrice.text().replace(/[^0-9\.]/g, '');

      if(result.discount_type=="%") {
        var ActualDiscountValue = parseFloat(cartTotal) * (result.amount/100);

        if($('.actual-discount').length === 0) {
          $('.total table').children('tbody').append('<tr><td><p>Discount:</p></td><td><p class="actual-discount">- $'+ActualDiscountValue.toFixed(2)+'</p></td></tr>');
        }else {
          $('.actual-discount').text('- $'+ActualDiscountValue.toFixed(2));
        }

        var totalPrice = parseFloat(cartTotal) + parseFloat(shippingPrice) - parseFloat(ActualDiscountValue);
        
        $totalPrice.text('$'+ totalPrice.toFixed(2));

      } else {
        var ActualDiscountValue = parseFloat(result.amount);

        if($('.actual-discount').length === 0) {
          $('.total table').children('tbody').append('<tr><td><p>Discount:</p></td><td><p class="actual-discount">- $'+ActualDiscountValue.toFixed(2)+'</p></td></tr>');
        }else {
          $('.actual-discount').text('- $'+ActualDiscountValue.toFixed(2));
        }

        var totalPrice = parseFloat(cartTotal) + parseFloat(shippingPrice) - parseFloat(ActualDiscountValue);

        $totalPrice.text('$'+ totalPrice.toFixed(2));

      }

      if($('#msg').length === 0) {
        $('#coupon').append('<p id="msg">Promo code has successfully applied</p>').css('color','black').fadeIn('slow');
      }else {
        $('#msg').text('Promo code has successfully applied').css('color','black').fadeIn('slow');
      }

      setTimeout(function() {
        $('#msg').fadeOut('slow');
      }, 5000 );         

    });

    request.error(function(){
      var result = jQuery.parseJSON(request.responseText);

      if($('.actual-discount').length !== 0) {
        $('.total table').find('tbody').children('tr').last().remove();
      }
      $totalPrice.text('${{ Cart::total() }}');

      if($('#msg').length === 0) {
        $('#coupon').append('<p id="msg">'+result.message+'</p>').css('color','red').fadeIn('slow');
      }else {
        $('#msg').text(result.message).css('color','red').fadeIn('slow');
      }

      setTimeout(function() {
       $('#msg').fadeOut('slow');
      }, 5000 );
    });

  });

  <?php if(!empty($promo_code)): ?>
    $('.apply-promo').trigger('click');
  <?php endif; ?>
});

  
</script>
@endsection