<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Introcept Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=base_url('public/bower_components/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=base_url('public/bower_components/metisMenu/dist/metisMenu.min.css')?>" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?=base_url('public/dist/css/timeline.css')?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=base_url('public/dist/css/sb-admin-2.css')?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=base_url('public/bower_components/morrisjs/morris.css')?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=base_url('public/bower_components/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               	<a class="navbar-brand" href="<?=base_url('index.php/introcept')?>">Introcept Application Form</a>
            </div>
            <!-- /.navbar-header -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Add Applicant</a>
                        </li>

                        <li>
                            <a href="<?=site_url('introcept/viewlist')?>"><i class="fa fa-table fa-fw"></i> Applicant List </a>
                        </li>
    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


    <!-- from here begins the div for the form -->

    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Application Form</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                
                <form class="form-horizontal" action="" method="post">
                	<?php echo validation_errors(); ?>  
         			<?php echo form_open('form'); ?> 

                <div class="form-group">
                    <label for="name" style="color:#3fa9f5;" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" value="<?php echo set_value('name'); ?>" name="name" id="name" placeholder="Enter your full name">
                    </div>
                </div>

                <!-- gender must be used as dropdown or checkbox -->
                <div class="form-group">
                    <label for="gender" style="color:#3fa9f5;" class="col-sm-3 control-label">Gender</label>
                    <div class="col-sm-8">
                        
						  <label class="radio-inline"><input type="radio" name="gender" value="male" checked/>Male</label>
						
						  <label class="radio-inline"><input type="radio" name="gender" value="female"/>Female</label>
					
						  <label class="radio-inline"><input type="radio" name="gender" value="other"/>Other</label>
						
                    </div>
                </div>

                <div class="form-group">
                    <label for="phone" style="color:#3fa9f5;" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-8">
                        <input type="text" value="<?php echo set_value('phone'); ?>" class="form-control" name="phone" id="phone" placeholder="Enter your phone number">
                    </div>
                </div>

                <div class="form-group">
                    <label for="email" style="color:#3fa9f5;" class="col-sm-3 control-label">Email-Id</label>
                    <div class="col-sm-8">
                        <input type="email" value="<?php echo set_value('email'); ?>" class="form-control" name="email" id="email" placeholder="Enter your valid email-id">
                    </div>
                </div>

                <div class="form-group">
                    <label for="address" style="color:#3fa9f5;" class="col-sm-3 control-label">Address</label>
                    <div class="col-sm-8">
                        <input type="address" value="<?php echo set_value('address'); ?>" class="form-control" name="address" id="address" placeholder="Enter your current address">
                    </div>
                </div>

                <!-- this also must be dropdown used -->
                <div class="form-group">
                    <label for="nationality" style="color:#3fa9f5;" class="col-sm-3 control-label">Nationality</label>
                    <div class="col-sm-8">
                        <select name="nationality" value="<?php echo set_value('nationality'); ?>" class="form-control" >
						  <option value="afghan">Afghan</option>
						  <option value="albanian">Albanian</option>
						  <option value="algerian">Algerian</option>
						  <option value="american">American</option>
						  <option value="andorran">Andorran</option>
						  <option value="angolan">Angolan</option>
						  <option value="antiguans">Antiguans</option>
						  <option value="argentinean">Argentinean</option>
						  <option value="armenian">Armenian</option>
						  <option value="australian">Australian</option>
						  <option value="austrian">Austrian</option>
						  <option value="azerbaijani">Azerbaijani</option>
						  <option value="bahamian">Bahamian</option>
						  <option value="bahraini">Bahraini</option>
						  <option value="bangladeshi">Bangladeshi</option>
						  <option value="barbadian">Barbadian</option>
						  <option value="barbudans">Barbudans</option>
						  <option value="batswana">Batswana</option>
						  <option value="belarusian">Belarusian</option>
						  <option value="belgian">Belgian</option>
						  <option value="belizean">Belizean</option>
						  <option value="beninese">Beninese</option>
						  <option value="bhutanese">Bhutanese</option>
						  <option value="bolivian">Bolivian</option>
						  <option value="bosnian">Bosnian</option>
						  <option value="brazilian">Brazilian</option>
						  <option value="british">British</option>
						  <option value="bruneian">Bruneian</option>
						  <option value="bulgarian">Bulgarian</option>
						  <option value="burkinabe">Burkinabe</option>
						  <option value="burmese">Burmese</option>
						  <option value="burundian">Burundian</option>
						  <option value="cambodian">Cambodian</option>
						  <option value="cameroonian">Cameroonian</option>
						  <option value="canadian">Canadian</option>
						  <option value="cape verdean">Cape Verdean</option>
						  <option value="central african">Central African</option>
						  <option value="chadian">Chadian</option>
						  <option value="chilean">Chilean</option>
						  <option value="chinese">Chinese</option>
						  <option value="colombian">Colombian</option>
						  <option value="comoran">Comoran</option>
						  <option value="congolese">Congolese</option>
						  <option value="costa rican">Costa Rican</option>
						  <option value="croatian">Croatian</option>
						  <option value="cuban">Cuban</option>
						  <option value="cypriot">Cypriot</option>
						  <option value="czech">Czech</option>
						  <option value="danish">Danish</option>
						  <option value="djibouti">Djibouti</option>
						  <option value="dominican">Dominican</option>
						  <option value="dutch">Dutch</option>
						  <option value="east timorese">East Timorese</option>
						  <option value="ecuadorean">Ecuadorean</option>
						  <option value="egyptian">Egyptian</option>
						  <option value="emirian">Emirian</option>
						  <option value="equatorial guinean">Equatorial Guinean</option>
						  <option value="eritrean">Eritrean</option>
						  <option value="estonian">Estonian</option>
						  <option value="ethiopian">Ethiopian</option>
						  <option value="fijian">Fijian</option>
						  <option value="filipino">Filipino</option>
						  <option value="finnish">Finnish</option>
						  <option value="french">French</option>
						  <option value="gabonese">Gabonese</option>
						  <option value="gambian">Gambian</option>
						  <option value="georgian">Georgian</option>
						  <option value="german">German</option>
						  <option value="ghanaian">Ghanaian</option>
						  <option value="greek">Greek</option>
						  <option value="grenadian">Grenadian</option>
						  <option value="guatemalan">Guatemalan</option>
						  <option value="guinea-bissauan">Guinea-Bissauan</option>
						  <option value="guinean">Guinean</option>
						  <option value="guyanese">Guyanese</option>
						  <option value="haitian">Haitian</option>
						  <option value="herzegovinian">Herzegovinian</option>
						  <option value="honduran">Honduran</option>
						  <option value="hungarian">Hungarian</option>
						  <option value="icelander">Icelander</option>
						  <option value="indian">Indian</option>
						  <option value="indonesian">Indonesian</option>
						  <option value="iranian">Iranian</option>
						  <option value="iraqi">Iraqi</option>
						  <option value="irish">Irish</option>
						  <option value="israeli">Israeli</option>
						  <option value="italian">Italian</option>
						  <option value="ivorian">Ivorian</option>
						  <option value="jamaican">Jamaican</option>
						  <option value="japanese">Japanese</option>
						  <option value="jordanian">Jordanian</option>
						  <option value="kazakhstani">Kazakhstani</option>
						  <option value="kenyan">Kenyan</option>
						  <option value="kittian and nevisian">Kittian and Nevisian</option>
						  <option value="kuwaiti">Kuwaiti</option>
						  <option value="kyrgyz">Kyrgyz</option>
						  <option value="laotian">Laotian</option>
						  <option value="latvian">Latvian</option>
						  <option value="lebanese">Lebanese</option>
						  <option value="liberian">Liberian</option>
						  <option value="libyan">Libyan</option>
						  <option value="liechtensteiner">Liechtensteiner</option>
						  <option value="lithuanian">Lithuanian</option>
						  <option value="luxembourger">Luxembourger</option>
						  <option value="macedonian">Macedonian</option>
						  <option value="malagasy">Malagasy</option>
						  <option value="malawian">Malawian</option>
						  <option value="malaysian">Malaysian</option>
						  <option value="maldivan">Maldivan</option>
						  <option value="malian">Malian</option>
						  <option value="maltese">Maltese</option>
						  <option value="marshallese">Marshallese</option>
						  <option value="mauritanian">Mauritanian</option>
						  <option value="mauritian">Mauritian</option>
						  <option value="mexican">Mexican</option>
						  <option value="micronesian">Micronesian</option>
						  <option value="moldovan">Moldovan</option>
						  <option value="monacan">Monacan</option>
						  <option value="mongolian">Mongolian</option>
						  <option value="moroccan">Moroccan</option>
						  <option value="mosotho">Mosotho</option>
						  <option value="motswana">Motswana</option>
						  <option value="mozambican">Mozambican</option>
						  <option value="namibian">Namibian</option>
						  <option value="nauruan">Nauruan</option>
						  <option value="nepalese">Nepalese</option>
						  <option value="new zealander">New Zealander</option>
						  <option value="ni-vanuatu">Ni-Vanuatu</option>
						  <option value="nicaraguan">Nicaraguan</option>
						  <option value="nigerien">Nigerien</option>
						  <option value="north korean">North Korean</option>
						  <option value="northern irish">Northern Irish</option>
						  <option value="norwegian">Norwegian</option>
						  <option value="omani">Omani</option>
						  <option value="pakistani">Pakistani</option>
						  <option value="palauan">Palauan</option>
						  <option value="panamanian">Panamanian</option>
						  <option value="papua new guinean">Papua New Guinean</option>
						  <option value="paraguayan">Paraguayan</option>
						  <option value="peruvian">Peruvian</option>
						  <option value="polish">Polish</option>
						  <option value="portuguese">Portuguese</option>
						  <option value="qatari">Qatari</option>
						  <option value="romanian">Romanian</option>
						  <option value="russian">Russian</option>
						  <option value="rwandan">Rwandan</option>
						  <option value="saint lucian">Saint Lucian</option>
						  <option value="salvadoran">Salvadoran</option>
						  <option value="samoan">Samoan</option>
						  <option value="san marinese">San Marinese</option>
						  <option value="sao tomean">Sao Tomean</option>
						  <option value="saudi">Saudi</option>
						  <option value="scottish">Scottish</option>
						  <option value="senegalese">Senegalese</option>
						  <option value="serbian">Serbian</option>
						  <option value="seychellois">Seychellois</option>
						  <option value="sierra leonean">Sierra Leonean</option>
						  <option value="singaporean">Singaporean</option>
						  <option value="slovakian">Slovakian</option>
						  <option value="slovenian">Slovenian</option>
						  <option value="solomon islander">Solomon Islander</option>
						  <option value="somali">Somali</option>
						  <option value="south african">South African</option>
						  <option value="south korean">South Korean</option>
						  <option value="spanish">Spanish</option>
						  <option value="sri lankan">Sri Lankan</option>
						  <option value="sudanese">Sudanese</option>
						  <option value="surinamer">Surinamer</option>
						  <option value="swazi">Swazi</option>
						  <option value="swedish">Swedish</option>
						  <option value="swiss">Swiss</option>
						  <option value="syrian">Syrian</option>
						  <option value="taiwanese">Taiwanese</option>
						  <option value="tajik">Tajik</option>
						  <option value="tanzanian">Tanzanian</option>
						  <option value="thai">Thai</option>
						  <option value="togolese">Togolese</option>
						  <option value="tongan">Tongan</option>
						  <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
						  <option value="tunisian">Tunisian</option>
						  <option value="turkish">Turkish</option>
						  <option value="tuvaluan">Tuvaluan</option>
						  <option value="ugandan">Ugandan</option>
						  <option value="ukrainian">Ukrainian</option>
						  <option value="uruguayan">Uruguayan</option>
						  <option value="uzbekistani">Uzbekistani</option>
						  <option value="venezuelan">Venezuelan</option>
						  <option value="vietnamese">Vietnamese</option>
						  <option value="welsh">Welsh</option>
						  <option value="yemenite">Yemenite</option>
						  <option value="zambian">Zambian</option>
						  <option value="zimbabwean">Zimbabwean</option>
						</select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="dob" style="color:#3fa9f5;" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" value="<?php echo set_value('name'); ?>" name="dob" id="dob">
                    </div>
                </div>

                <!-- this must be in message bos -->
                <div class="form-group">
                    <label for="education" style="color:#3fa9f5;" class="col-sm-3 control-label">Education</label>
                    <div class="col-sm-8">
                        <textarea rows="5" type="education" class="form-control" name="education" id="education" value="<?php echo set_value('education'); ?>" placeholder="Describe your education background in short form"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-6 col-sm-5">
                        <input type="submit" style="color:white; background:#3fa9f5;" name="applicant_submit" id="applicant_submit" class="btn btn-default"></input>
                    	<button type="reset" name="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>

            </form>

                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- end of the form div -->


    <script src="<?=base_url('public/bower_components/jquery/dist/jquery.min.js')?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=base_url('public/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?=base_url('public/bower_components/metisMenu/dist/metisMenu.min.js')?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?=base_url('public/bower_components/raphael/raphael-min.js')?>"></script>


    <!-- Custom Theme JavaScript -->
    <script src="<?=base_url('public/dist/js/sb-admin-2.js')?>"></script>