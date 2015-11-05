<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>Smarads</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <meta content="" name="description" />
  <meta content="" name="author" />
  <!-- BEGIN CORE CSS FRAMEWORK -->
  <link href="admin/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen" />
  <link href="admin/assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/animate.min.css" rel="stylesheet" type="text/css" />
  <!-- END CORE CSS FRAMEWORK -->
  <!-- BEGIN CSS TEMPLATE -->
  <link href="admin/assets/css/style.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/responsive.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/custom-icon-set.css" rel="stylesheet" type="text/css" />
  <link href="admin/assets/css/login.css" rel="stylesheet" type="text/css" />
  <link href="chosen/chosen.css" rel="stylesheet" type="text/css" />
  <!-- END CSS TEMPLATE -->
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="error-body no-top lazy" data-original="admin/assets/img/work.jpg" style="background-image: url('admin/assets/img/work.jpg')">
  <div class="container">
    <div class="row login-container animated fadeInUp">
      <div class="col-md-7 col-md-offset-2 tiles white no-padding">
        <div class="p-t-30 p-l-40 p-b-20 xs-p-t-10 xs-p-l-10 xs-p-b-10 p-r-40">
          <h5 class="text-primary pull-right home-link"><a href="{{route('home')}}">Home Page</a></h5>
          @if (count($errors) > 0)
          <div class="alert alert-danger">
            There were some problems with your input.
            <br>
            <br>
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          <h2 class="normal">Sign in to Smartads</h2>
          <p>If you have already registered, submit your login information.
            <br>
          </p>
          <p class="p-b-20">Sign up Now! for Smartads accounts, and start campaigns.</p>
          <button type="button" class="btn btn-primary btn-cons" id="login_toggle">Login</button> or&nbsp;&nbsp;
          <button type="button" class="btn btn-info btn-cons" id="register_toggle"> Create an account</button>
        </div>
        <div class="tiles grey p-t-20 p-b-20 text-black">
          <form id="frm_login" class="animated fadeIn" action="{{route('login_post')}}" method="post" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-6 col-sm-6 ">
                <input name="email" id="login_email" type="text" class="form-control" placeholder="Email / Mobile" autofocus="">
              </div>
              <div class="col-md-6 col-sm-6">
                <input name="password" id="login_password" type="password" class="form-control" placeholder="Password">
              </div>
            </div>
            <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="control-group  col-md-10">
                <div class="checkbox checkbox check-success"> <a href="#">Forget your password?</a>&nbsp;&nbsp;
                  <input type="checkbox" id="remember" value="1" name="remember">
                  <label for="remember">Keep me reminded </label>
                </div>
              </div>
            </div>
            <div class="row p-t-10 m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="control-group col-md-12">
                <button type="submit" class="btn btn-info btn-submit">
                  Submit
                </button>
              </div>
            </div>
          </form>
          <form id="frm_register" class="animated fadeIn" style="display:none" action="{{route('register_post')}}" method="post" role="form">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-12 col-sm-12">
                <div id="testing_icon">
                  <input name="name" id="reg_name" type="text" rel="txtTooltip" title="type the massage" data-toggle="tooltip" class="form-control" placeholder="Full Name">
                  <i class="fa fa-user"></i>
                </div>
              </div>
            </div>
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-12 ">
                <div id="testing_icon">
                  <input name="email" id="reg_email" type="text" rel="txtTooltip" title="type the massage" data-toggle="tooltip" class="form-control" placeholder="Email">
                  <i class="fa fa-envelope"></i>
                </div>
              </div>
            </div>
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-6 col-sm-6">
                <div id="testing_icon">
                  <input name="password" id="reg_password" type="password" rel="txtTooltip" title="type the massage" data-toggle="tooltip" class="form-control" placeholder="Password">
                  <i class="fa fa-key"></i>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div id="testing_icon">
                  <input name="password_confirmation" id="reg_password_confirmation" type="password" rel="txtTooltip" title="type the massage" data-toggle="tooltip" class="form-control" placeholder="Repeat Password">
                  <i class="fa fa-repeat"></i>
                </div>
              </div>
            </div>
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-6 col-sm-6">
                <div id="testing_icon">
                  <input name="mobile" id="reg_mobile" type="tel" rel="txtTooltip" title="type the massage" data-toggle="tooltip" class="form-control" placeholder="Mobile">
                  <i class="fa fa-mobile"></i>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div id="testing_icon">
                  <input name="security_code" id="reg_security_code" type="password"  rel="txtTooltip" title="type the massage" data-toggle="tooltip" class="form-control" placeholder="Security Code" >
                  <i class="fa fa-lock"></i>
                </div>
              </div>
            </div>
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-6 col-sm-6">
                <div>
                  <select name="country" id="list" data-placeholder="Choose a Country..." placeholder="Choose a Country..." class="chosen-select">
                    <option value=""></option>
                    <option value="United States">United States</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
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
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
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
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D&apos;ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curacao">Curacao</option>
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
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
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
                    <option value="Korea, Democratic People&apos;s Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People&apos;s Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
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
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Barthelemy">Saint Barthelemy</option>
                    <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
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
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
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
                    <option value="Timor-leste">Timor-leste</option>
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
              <div class="col-md-6 col-sm-6">
                <div id="testing_icon">
                  <input name="city" id="reg_city" type="text"rel="txtTooltip" title="type the massage" data-toggle="tooltip" class="form-control" placeholder="City">
                  <i class="fa fa-home"></i>
                </div>
              </div>
            </div>
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-12 col-sm-12">
                <div id="testing_icon">
                  <input name="address" id="reg_address" type="text" rel="txtTooltip" title="type the massage" data-toggle="tooltip"  class="form-control" placeholder="Address">
                  <i class="fa fa-map-marker"></i>
                </div>
              </div>
            </div>
            <div class="row form-row m-l-20 m-r-20 xs-m-l-10 xs-m-r-10">
              <div class="col-md-12 col-sm-12">
                <input type="submit" class="btn btn-info btn-submit" value="Submit">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- END CONTAINER -->
  <!-- BEGIN CORE JS FRAMEWORK-->
  <script src="admin/assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
  <script src="admin/assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="admin/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
  <script src="admin/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
  <script src="admin/assets/plugins/jquery-lazyload/jquery.lazyload.min.js" type="text/javascript"></script>
  <script src="admin/assets/js/login_v2.js" type="text/javascript"></script>
  <script src="chosen/chosen.jquery.js" type="text/javascript"></script>

  <!-- BEGIN CORE TEMPLATE JS -->
  <!-- END CORE TEMPLATE JS -->
</body>

</html>