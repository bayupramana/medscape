<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/header.css'); ?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/register.css'); ?>">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url('assets/css/global.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <div id="ms-prof-reg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="registration-left">
                                    <div id="reg_headerbox">
                                        <h1>Get unlimited access on Medscape. Create your FREE account today!</h1>
                                        <div class="reg-info">
                                            <p>All fields require unsless specified</p>
                                            <p class="source-reg">Source Registration</p>
                                        </div>
                                        <form id="registerForm" name="RegisterForm" method="post" action="<?php echo base_url(); ?>medscape/register">
                                            <div id="reg_about" class="form-section profeg-section">
                                                <div class="reg_sections_name">
                                                    About You
                                                </div>
                                                <div id="sec_country" class="reg_subsec">
                                                    <div class="formlabel">
                                                        Country of Practice
                                                    </div>
                                                    <div class="formfield">
                                                        <div class="fixed_select">
                                                            <select tabindex="1" name="country" id="country" onchange="regChange(this);countryChange(this);" onblur="regBlur(this);" onfocus="regFocus(this);">
                                                                <option value="">- Select Country -</option>
                                                                <option value="us">United States</option>
                                                                <option value="af">Afghanistan</option>
                                                                <option value="ax">Åland Islands</option>
                                                                <option value="al">Albania</option>
                                                                <option value="dz">Algeria</option>
                                                                <option value="as">American Samoa</option>
                                                                <option value="ad">Andorra</option>
                                                                <option value="ao">Angola</option>
                                                                <option value="ai">Anguilla</option>
                                                                <option value="aq">Antarctica</option>
                                                                <option value="ag">Antigua & Barbuda</option>
                                                                <option value="ar">Argentina</option>
                                                                <option value="am">Armenia</option>
                                                                <option value="bq">Bonaire, Sint Eustatius and Saba</option>
                                                                <option value="aw">Aruba</option>
                                                                <option value="ac">Ascension Islands</option>
                                                                <option value="au">Australia</option>
                                                                <option value="at">Austria</option>
                                                                <option value="az">Azerbaijan</option>
                                                                <option value="bs">Bahamas</option>
                                                                <option value="bh">Bahrain</option>
                                                                <option value="bd">Bangladesh</option>
                                                                <option value="bb">Barbados</option>
                                                                <option value="by">Belarus</option>
                                                                <option value="be">Belgium</option>
                                                                <option value="bz">Belize</option>
                                                                <option value="bj">Benin</option>
                                                                <option value="bm">Bermuda</option>
                                                                <option value="bt">Bhutan</option>
                                                                <option value="bo">Bolivia</option>
                                                                <option value="ba">Bosnia & Herzegovina</option>
                                                                <option value="bw">Botswana</option>
                                                                <option value="bv">Bouvet Island</option>
                                                                <option value="io">Br. Indian Ocean Terr.</option>
                                                                <option value="br">Brazil</option>
                                                                <option value="bn">Brunei Darussalam</option>
                                                                <option value="bg">Bulgaria</option>
                                                                <option value="bf">Burkina Faso</option>
                                                                <option value="bi">Burundi</option>
                                                                <option value="kh">Cambodia</option>
                                                                <option value="cm">Cameroon</option>
                                                                <option value="ca">Canada</option>
                                                                <option value="ic">Canary Islands</option>
                                                                <option value="cv">Cape Verde</option>
                                                                <option value="ky">Cayman Islands</option>
                                                                <option value="cf">Central African Republic</option>
                                                                <option value="td">Chad</option>
                                                                <option value="cl">Chile</option>
                                                                <option value="cn">China</option>
                                                                <option value="cx">Christmas Island</option>
                                                                <option value="cc">Cocos (Keeling) Islands</option>
                                                                <option value="co">Colombia</option>
                                                                <option value="km">Comoros</option>
                                                                <option value="cg">Congo</option>
                                                                <option value="cd">Congo (DRC)</option>
                                                                <option value="ck">Cook Islands</option>
                                                                <option value="cr">Costa Rica</option>
                                                                <option value="hr">Croatia</option>
                                                                <option value="cu">Cuba</option>
                                                                <option value="cw">Curacao</option>
                                                                <option value="cy">Cyprus</option>
                                                                <option value="cz">Czech Republic</option>
                                                                <option value="dk">Denmark</option>
                                                                <option value="dj">Djibouti</option>
                                                                <option value="dm">Dominica</option>
                                                                <option value="do">Dominican Republic</option>
                                                                <option value="ec">Ecuador</option>
                                                                <option value="eg">Egypt</option>
                                                                <option value="sv">El Salvador</option>
                                                                <option value="gq">Equatorial Guinea</option>
                                                                <option value="er">Eritrea</option>
                                                                <option value="ee">Estonia</option>
                                                                <option value="et">Ethiopia</option>
                                                                <option value="fk">Falkland Islands (Malvinas)</option>
                                                                <option value="fo">Faroe Islands</option>
                                                                <option value="fj">Fiji</option>
                                                                <option value="fi">Finland</option>
                                                                <option value="fr">France</option>
                                                                <option value="gf">French Guiana</option>
                                                                <option value="pf">French Polynesia</option>
                                                                <option value="tf">French Southern Territories</option>
                                                                <option value="ga">Gabon</option>
                                                                <option value="gm">Gambia</option>
                                                                <option value="ge">Georgia</option>
                                                                <option value="de">Germany</option>
                                                                <option value="gh">Ghana</option>
                                                                <option value="gi">Gibraltar</option>
                                                                <option value="gr">Greece</option>
                                                                <option value="gl">Greenland</option>
                                                                <option value="gd">Grenada</option>
                                                                <option value="gp">Guadeloupe</option>
                                                                <option value="gu">Guam</option>
                                                                <option value="gt">Guatemala</option>
                                                                <option value="gg">Guernsey</option>
                                                                <option value="gn">Guinea</option>
                                                                <option value="gw">Guinea-Bissau</option>
                                                                <option value="gy">Guyana</option>
                                                                <option value="bl">Saint Barthelemy</option>
                                                                <option value="mf">Saint Martin (French part)</option>
                                                                <option value="ht">Haiti</option>
                                                                <option value="hm">Heard & McDonald Islands</option>
                                                                <option value="va">Holy See (Vatican City State)</option>
                                                                <option value="hn">Honduras</option>
                                                                <option value="hk">Hong Kong</option>
                                                                <option value="sx">Sint Maarten (Dutch part)</option>
                                                                <option value="hu">Hungary</option>
                                                                <option value="is">Iceland</option>
                                                                <option value="ss">South Sudan</option>
                                                                <option value="in">India</option>
                                                                <option value="id">Indonesia</option>
                                                                <option value="ir">Iran</option>
                                                                <option value="iq">Iraq</option>
                                                                <option value="ie">Ireland</option>
                                                                <option value="im">Isle Of Man</option>
                                                                <option value="il">Israel</option>
                                                                <option value="it">Italy</option>
                                                                <option value="ci">Ivory Coast</option>
                                                                <option value="jm">Jamaica</option>
                                                                <option value="jp">Japan</option>
                                                                <option value="je">Jersey</option>
                                                                <option value="jo">Jordan</option>
                                                                <option value="kz">Kazakhstan</option>
                                                                <option value="ke">Kenya</option>
                                                                <option value="ki">Kiribati</option>
                                                                <option value="kp">Korea (DPRK)</option>
                                                                <option value="kr">Korea, Republic of</option>
                                                                <option value="kw">Kuwait</option>
                                                                <option value="kg">Kyrgyzstan</option>
                                                                <option value="la">Laos</option>
                                                                <option value="lv">Latvia</option>
                                                                <option value="lb">Lebanon</option>
                                                                <option value="ls">Lesotho</option>
                                                                <option value="lr">Liberia</option>
                                                                <option value="ly">Libya</option>
                                                                <option value="li">Liechtenstein</option>
                                                                <option value="lt">Lithuania</option>
                                                                <option value="lu">Luxembourg</option>
                                                                <option value="mo">Macao</option>
                                                                <option value="mk">Macedonia</option>
                                                                <option value="mg">Madagascar</option>
                                                                <option value="mw">Malawi</option>
                                                                <option value="my">Malaysia</option>
                                                                <option value="mv">Maldives</option>
                                                                <option value="ml">Mali</option>
                                                                <option value="mt">Malta</option>
                                                                <option value="mh">Marshall Islands</option>
                                                                <option value="mq">Martinique</option>
                                                                <option value="mr">Mauritania</option>
                                                                <option value="mu">Mauritius</option>
                                                                <option value="yt">Mayotte</option>
                                                                <option value="mx">Mexico</option>
                                                                <option value="fm">Micronesia</option>
                                                                <option value="md">Moldova, Republic Of</option>
                                                                <option value="mc">Monaco</option>
                                                                <option value="mn">Mongolia</option>
                                                                <option value="me">Montenegro</option>
                                                                <option value="ms">Montserrat</option>
                                                                <option value="ma">Morocco</option>
                                                                <option value="mz">Mozambique</option>
                                                                <option value="mm">Myanmar</option>
                                                                <option value="na">Namibia</option>
                                                                <option value="nr">Nauru</option>
                                                                <option value="np">Nepal</option>
                                                                <option value="nl">Netherlands</option>
                                                                <option value="an">Netherlands Antilles</option>
                                                                <option value="nc">New Caledonia</option>
                                                                <option value="nz">New Zealand</option>
                                                                <option value="ni">Nicaragua</option>
                                                                <option value="ne">Niger</option>
                                                                <option value="ng">Nigeria</option>
                                                                <option value="nu">Niue</option>
                                                                <option value="nf">Norfolk Island</option>
                                                                <option value="mp">Northern Mariana Islands</option>
                                                                <option value="no">Norway</option>
                                                                <option value="om">Oman</option>
                                                                <option value="pk">Pakistan</option>
                                                                <option value="pw">Palau</option>
                                                                <option value="ps">Palestine</option>
                                                                <option value="pa">Panama</option>
                                                                <option value="pg">Papua New Guinea</option>
                                                                <option value="py">Paraguay</option>
                                                                <option value="pe">Peru</option>
                                                                <option value="ph">Philippines</option>
                                                                <option value="pn">Pitcairn</option>
                                                                <option value="pl">Poland</option>
                                                                <option value="pt">Portugal</option>
                                                                <option value="pr">Puerto Rico</option>
                                                                <option value="qa">Qatar</option>
                                                                <option value="re">Reunion</option>
                                                                <option value="ro">Romania</option>
                                                                <option value="ru">Russian Federation</option>
                                                                <option value="rw">Rwanda</option>
                                                                <option value="gs">S. Georgia & S. Sandwich</option>
                                                                <option value="ws">Samoa</option>
                                                                <option value="sm">San Marino</option>
                                                                <option value="st">Sao Tome & Principe</option>
                                                                <option value="sa">Saudi Arabia</option>
                                                                <option value="sn">Senegal</option>
                                                                <option value="rs">Serbia</option>
                                                                <option value="sc">Seychelles</option>
                                                                <option value="sl">Sierra Leone</option>
                                                                <option value="sg">Singapore</option>
                                                                <option value="sk">Slovakia</option>
                                                                <option value="si">Slovenia</option>
                                                                <option value="sb">Solomon Islands</option>
                                                                <option value="so">Somalia</option>
                                                                <option value="za">South Africa</option>
                                                                <option value="es">Spain</option>
                                                                <option value="lk">Sri Lanka</option>
                                                                <option value="sh">St. Helena</option>
                                                                <option value="kn">St. Kitts & Nevis</option>
                                                                <option value="lc">St. Lucia</option>
                                                                <option value="pm">St. Pierre & Miquelon</option>
                                                                <option value="vc">St. Vincent & Grenadines</option>
                                                                <option value="sd">Sudan</option>
                                                                <option value="sr">Suriname</option>
                                                                <option value="sj">Svalbard & Jan Mayen</option>
                                                                <option value="sz">Swaziland</option>
                                                                <option value="se">Sweden</option>
                                                                <option value="ch">Switzerland</option>
                                                                <option value="sy">Syrian Arab Republic</option>
                                                                <option value="tw">Taiwan</option>
                                                                <option value="tj">Tajikistan</option>
                                                                <option value="tz">Tanzania</option>
                                                                <option value="th">Thailand</option>
                                                                <option value="tl">Timor-Leste</option>
                                                                <option value="tg">Togo</option>
                                                                <option value="tk">Tokelau</option>
                                                                <option value="to">Tonga</option>
                                                                <option value="tt">Trinidad & Tobago</option>
                                                                <option value="tn">Tunisia</option>
                                                                <option value="tr">Turkey</option>
                                                                <option value="tm">Turkmenistan</option>
                                                                <option value="tc">Turks & Caicos Islands</option>
                                                                <option value="tv">Tuvalu</option>
                                                                <option value="um">U.S. Minor Islands</option>
                                                                <option value="ug">Uganda</option>
                                                                <option value="ua">Ukraine</option>
                                                                <option value="ae">United Arab Emirates</option>
                                                                <option value="gb">United Kingdom</option>
                                                                <option value="uy">Uruguay</option>
                                                                <option value="uz">Uzbekistan</option>
                                                                <option value="vu">Vanuatu</option>
                                                                <option value="ve">Venezuela</option>
                                                                <option value="vn">Viet Nam</option>
                                                                <option value="vg">Virgin Islands, British</option>
                                                                <option value="vi">Virgin Islands, U.S.</option>
                                                                <option value="wf">Wallis & Futuna</option>
                                                                <option value="eh">Western Sahara</option>
                                                                <option value="ye">Yemen</option>
                                                                <option value="zm">Zambia</option>
                                                                <option value="zw">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="formhint"></div>
                                                    <div class="spacer">&nbsp;</div>
                                                </div>
                                                <div class="spacer">&nbsp;</div>
                                                <div id="sec_regfnamefield" class="reg_subsec">
                                                    <div class="formlabel">
                                                        FirstName
                                                        <?php echo form_error('firstName', '<small><font color="red">', '</font></small>'); ?>
                                                    </div>
                                                    <div class="formfield">
                                                        <input type="text" name="firstName" id="firstName" placeholder="FisrtName">
                                                        <!-- <input id="regfnamefield" placeholder="Firstrname" type="text" name="firstName" value=""> -->
                                                    </div>
                                                    <div class="formhint"></div>
                                                    <div class="spacer">&nbsp;</div>
                                                </div>
                                                <div id="sec_reglnamefield" class="reg_subsec">
                                                    <div class="formlabel">
                                                        Last Name
                                                        <?php echo form_error('lastName', '<small><font color="red">', '</font></small>'); ?>
                                                    </div>
                                                    <div class="formfield">
                                                        <input name="lastName" id="reglnamefield" value="" maxlength="35" onfocus="regFocus(this);" onblur="regBlur(this);" onchange="regChange(this);" autocorrect="off">
                                                    </div>
                                                    <div class="formhint"></div>
                                                    <div class="spacer">&nbsp;</div>
                                                </div>
                                                <div id="sec_regzipractice" class="reg_subsec">
                                                    <div class="formlabel">
                                                        Work Zip Code/Postal Code
                                                        <?php echo form_error('zipCode', '<small><font color="red">', '</font></small>'); ?>
                                                    </div>
                                                    <div class="formfield">
                                                        <input name="zipCode" id="regzippractice" value="" onfocus="regFocus(this);" onblur="regBlur(this);" onchange="regChange(this);" maxlength="35" autocorrect="off">
                                                    </div>
                                                    <div class="formhint"></div>
                                                    <div class="spacer">&nbsp;</div>
                                                </div>
                                                <div class="formhint"></div>
                                                <div class="spacer">&nbsp;</div>
                                            </div>
                                            <!-- <div class="spacer">&nbsp;</div> -->
                                            <div id="reg_account" class="form-section profeg-section">
                                                <div class="reg_sections_name">
                                                    Your Medscape Account
                                                </div>
                                                <div class="reg_sec_intro"></div>
                                                <div id="sec_regemailaddress" class="reg_subsec">
                                                    <div class="formlabel">Email <?php echo form_error('emailAddress', '<small><font color="red">', '</font></small>'); ?></div>
                                                    <div class="formfield">
                                                        <input id="regemailaddress" type="text" autocorrect="off" onfocus="regFocus(this);" onblur="regBlur(this);" onchange="regChange(this);" value="" maxlength="50" name="emailAddress">
                                                    </div>
                                                    <div class="formhint"></div>
                                                    <div class="spacer">&nbsp;</div>
                                                </div>
                                                <!-- <div class="spacer">&nbsp;</div> -->
                                                <div id="sec_regpassword" class="reg_subsec">
                                                    <div class="formlabel">Password <?php echo form_error('password', '<small><font color="red">', '</font></small>'); ?></div>
                                                    <div class="formfield">
                                                        <div class="password-wrapper">
                                                            <input class="password" id="regpassword" onfocus="regFocus(this);" onblur="regBlur(this);" onchange="regChange(this);" type="password" name="password" maxlength="35" value="" autocorrect="off">
                                                            <button class="js-togglePassword toggle-password" type="button">
                                                                Show</button>
                                                            <span id="hideText">Hide</span>
                                                        </div>
                                                    </div>
                                                    <div class="formhint"></div>
                                                    <div class="spacer">&nbsp;</div>
                                                </div>
                                                <div id="sec_regpasswordconfirm">
                                                    <div class="formlabel">
                                                        Confirm Password
                                                        <?php echo form_error('confirmPassword', '<small><font color="red">', '</font></small>'); ?>
                                                    </div>
                                                    <div class="formfield">
                                                        <input id="regpasswordconfirm" onfocus="regFocus(this);" onblur="regBlur(this);" onchange="regChange(this);" type="password" name="confirmPassword" maxlength="35" value="" autocorrect="off">
                                                    </div>
                                                    <div class="formhint"></div>
                                                    <div class="spacer">&nbsp;</div>
                                                </div>
                                                <div class="spacer">&nbsp;</div>
                                            </div>
                                            <div id="reg_profession" class="form_section profreg-section">
                                                <div class="reg_sections_name">
                                                    Your Professional Profile
                                                </div>
                                                <div id="sec_profession" class="reg_subsec">
                                                    <div class="formlabel">
                                                        Profession
                                                    </div>
                                                    <div class="formfield reg_red">
                                                        <div class="fixed_select">
                                                            <select id="profession" name="profession" onfocus="regFocus(this);" onblur="regBlur(this);" onchange="regChange(this);">
                                                                <option value="">- Select Profession -</option>
                                                                <option value="10">Physician</option>
                                                                <option value="12">Nurse/Advanced Practice Nurse</option>
                                                                <option value="11">Physician Assistant</option>
                                                                <option value="8">Pharmacist</option>
                                                                <option value="16">Medical Student</option>
                                                                <option value="13">Health Business/Administration</option>
                                                                <option value="19">Media/Press</option>
                                                                <option value="17">Non-Professional</option>
                                                                <option value="22">Optometrist</option>
                                                                <option value="23">Psychologist</option>
                                                                <option value="20">Dentist/Oral Health Professional</option>
                                                                <option value="15">Other Healthcare Provider</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="formhint">
                                                        <span class="redtext">Selecting a profession is required.</span>
                                                    </div>
                                                    <div class="spacer">&nbsp;</div>
                                                </div>
                                                <div class="spacer">&nbsp;</div>
                                            </div>
                                            <div id="reg_submit" class="form_section profreg-section">
                                                <div class="reg_sections_name">
                                                    Submit Registration
                                                </div>
                                                <div id="sec_submit" class="reg_subsec">
                                                    <div class="formfield_checkbox" id="remembermecheckboxdiv">
                                                        <input align="middle" type="checkbox" name="remember" id="remembermecheck" value="on" checked="checked"> <label for="remembermecheck">Remember my username and password on this computer</label></div>
                                                    <div class="formfield_checkbox" id="termsofusecheckboxdiv">
                                                        <label for="termofuses">
                                                            <input align="middle" type="checkbox" name="termsofuses" id="termsofuses" tabindex="30" value="on">
                                                            <div id="termsofusecheckboxdiv_us">
                                                                I agree to Medscape's <a href="" target="Figure" onclick="resizeWin('Figure',400,520)">Terms of Use</a> and <a href="" target="Figure" onclick="resizeWin('Figure',400,520)">Privacy Policy</a>.
                                                            </div>
                                                        </label>
                                                    </div>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-md-3">

                                                            </div>
                                                            <div class="col-md-6">
                                                                <button type="submit" class="btn btn-secondary btn-lg">Submit</button>

                                                            </div>
                                                            <div class="col-md-3">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="formhint">
                                                        Review your information. Please supply complete and valid registration information before submitting. All information is required to register.
                                                    </div>
                                                    <div class="spacer">&nbsp;</div>
                                                </div>
                                            </div>
                                        </form>
                                        <div class="needsupport">
                                            <a href="" target="Figure" onclick="resizeWin('Figure',400,520)">Contact Medscape Member Support</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3">

                                        </div>
                                        <div class="col-md-6">
                                            <div id="about-section-reg">
                                                <div class="about-section-reg">
                                                    <h2>Stay informed on the latest medical news</h2>
                                                    <p>Read unlimited articles, expert perspectives, FDA announcements, conference news and practice guidelines across 30+ specialties.</p>
                                                </div>
                                                <div class="about-section-ref">
                                                    <h2>Find acurate answer at the point-of-care</h2>
                                                    <p>Access the latest evidence-based diagnosis and treatment information, and search over 10,000 drugs, diseases, and procedures.</p>
                                                </div>
                                                <div class="about-section-edu">
                                                    <h2>Easily meet continuing education requirements</h2>
                                                    <p>Take free accredited courses to fulfill professional development and licensure requirements across 1,000+ clinical topics.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>