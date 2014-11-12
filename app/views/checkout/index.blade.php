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
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Åland Islands">Åland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Côte d'Ivoire">Côte d'Ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaçao">Curaçao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-Bissau">Guinea-Bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, the former Yugoslav Republic of">Macedonia, the former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Réunion">Réunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Barthélemy">Saint Barthélemy</option>
                    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                    <option value="South Sudan">South Sudan</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-Leste">Timor-Leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                  </select>
                </div>
              </div>

	            <h6 style="margin-top:20px;">Shipping Method</h6>
	            <div class="choose-method">
	              <div class="form-group">
	                <input type="radio" name="shipmethod" class="shipmethod" value="shipmethod-standard" style="display: inline-block;margin-left: 1px;">
                  <h6 style="display: inline-block;width: 262px;padding-left:5px;">Standard (5-15 Business Days)</h6>
                </div>
                <div class="form-group">
                  <input type="radio" name="shipmethod" class="shipmethod" value="shipmethod-express" style="display: inline-block;margin-left: 1px;">
                  <h6 style="display: inline-block;width: 262px;padding-left:5px;">Express (3-7 Business Days)</h6>
                </div>
                <div class="form-group">
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
                } else if($('.shipmethod').val()=="shipmethod-standard") {
                  shippingCost = 6;
                } else {
                  $('input[name="shipmethod"][value="shipmethod-standard"]').prop('checked', true);
                  shippingCost = 6;
                }

            }
			else { 
                var shippingCost = 25;
                if($('.shipmethod').val()!=="shipmethod-international") {
                    $('input[name="shipmethod"][value="shipmethod-international"]').prop('checked', true);
                }
            }

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
        }else if($(this).val()=="shipmethod-standard") {
          shippingCost = 6;
        }else {
          $('input[name="shipmethod"][value="shipmethod-standard"]').prop('checked', true);
          shippingCost = 6;
        }

      }
      else {
        var shippingCost = 25;
        if($(this).val()!=="shipmethod-international") {
            $('input[name="shipmethod"][value="shipmethod-international"]').prop('checked', true);
        }
      }

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

        if($("input[type=radio][name='redemption_type']:checked").val()=="shipping"){

    		if( $(this).val() == "Australia" ) {
              var shippingCost;

              console.log($('.shipmethod').val())

              if($('.shipmethod').val()=="shipmethod-express") {
                shippingCost = 15;
              }else if($('.shipmethod').val()=="shipmethod-standard") {
                shippingCost = 6;
              }else {
                $('input[name="shipmethod"][value="shipmethod-standard"]').prop('checked', true);
                shippingCost = 6;
              }

            }
    		else {
                var shippingCost = 25;
                if($('.shipmethod').val()!=="shipmethod-international") {
                    $('input[name="shipmethod"][value="shipmethod-international"]').prop('checked', true);
                }
            }

    		if($('.actual-discount').length!==0) {
                var actualDiscount = $('.actual-discount').text().replace(/[^0-9\.]/g, '');
            }else
                var actualDiscount = 0;

            newTotalPrice = parseFloat('{{ Cart::total() }}') - parseFloat(actualDiscount) + shippingCost;

    		$totalPrice.text( '$' + newTotalPrice.toFixed(2) );
    		$shippingPrice.text( '$' + shippingCost.toFixed(2) );

        }

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