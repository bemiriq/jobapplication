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
                            <a href="<?=site_url('introcept/introceptview')?>"><i class="fa fa-bar-chart-o fa-fw"></i> Add Applicant</a>
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
                    <h1 class="page-header">Application List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
                <div class="table-responsive">
                  <table class="table table-bordered table-hover table-striped sortable">
                    <thead>
                        <tr>
                           <th>Full Name</th>
                           <th>Gender</th>
                           <th>Phone</th>
                           <th>Email</th>
                           <th>Address</th>
                           <th>Nationality</th>
                           <th>DOB</th>
                           <th>Educational Background</th>
                           <th>Update</th>
                           <th>Delete</th>

                        </tr>
                     </thead>
                     <tbody>
                    <?php
                      // echo "<table class = ' table tablesorter table-bordered table-hover table-striped sortable' style=''>\n\n";
                      $f = fopen("formdata.csv", "r");
                      $trcount = 0; //start the row count as 0
                      while (($line = fgetcsv($f)) !== false) {
                              $trclass = ''; if ($trcount%2==0) { $trclass=' class="dark"'; } //default to nothing, but if it's even apply a class
                              echo "\t\t<tr".$trclass.">\n"; //same as before, but now this also has the variable $class to setup a class if needed
                              $tdcount = 0; //reset to 0 for each inner loop
                              foreach ($line as $cell) {
                                      $tdclass = ''; if ($tdcount%2==0) { $tdclass=' class="dark"'; } //default to nothing, but if it's even apply a class
                                      echo "\t\t\t<td ".$tdclass."style='padding:.4em;'>" . htmlspecialchars($cell) . "</td>"; //same as before, but now this also has the variable $class to setup a class if needed
                                      $tdcount++; //go up one each loop
                              }
                              echo "\r</tr>\n";
                              $trcount++; //go up one each loop
                      }
                      fclose($f);
                      // echo "\n\t</table>\n";
                    ?>
                  </tbody>
                </table>
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