<?php
    session_start();
    include('../includes/dbconn.php');
    include('../includes/check-login.php');
    check_login();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Hostel Management System</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

    
</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <?php include 'includes/navigation.php'?>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <?php include 'includes/sidebar.php'?>
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">


                    <div class="col-7 align-self-center">
                    <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Full Details</h4>
                        <div class="d-flex align-items-center">
                            <!-- <nav aria-label="breadcrumb">
                                
                            </nav> -->
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!--Table Column -->
                
                <div class="card">
                 
                 <div class="card-body">
                 
                    <div class="row">
                    
                    <div class="table-responsive">
                                  <table id="zctb" class="table table-striped table-bordered no-wrap">

                                      <tbody>

                                      <?php	
                                      
                                      $id=$_GET['id'];
                                        $ret="SELECT * from registration where id=?";
                                        $stmt= $mysqli->prepare($ret) ;
                                    $stmt->bind_param('i',$id);
                                    $stmt->execute() ;//ok
                                    $res=$stmt->get_result();
                                    //$cnt=1;
                                    while($row=$res->fetch_object())
                                    {
                                              ?>
                                        

                                          <tr>
                                              <td colspan="3"><b>Date & Time of Registration: <?php echo $row->postingDate;?></b></td>
                                              
                                          </tr>

                                          <tr>
                                          <td><b>Registration Number :</b></td>
                                          <td><?php echo $row->regno;?></td>
                                          <td><b>Full Name :</b></td>
                                          <td><?php echo $row->firstName;?> <?php echo $row->middleName;?> <?php echo $row->lastName;?></td>
                                          <td><b>Email Address:</b></td>
                                          <td><?php echo $row->emailid;?></td>
                                          </tr>


                                          <tr>
                                          <td><b>Contact Number :</b></td>
                                          <td><?php echo $row->contactno;?></td>
                                          <td><b>Gender :</b></td>
                                          <td><?php echo $row->gender;?></td>
                                          <td><b>Selected Course :</b></td>
                                          <td><?php echo $row->course;?></td>
                                          </tr>


                                          <tr>
                                          <td><b>Emergency Contact No. :</b></td>
                                          <td><?php echo $row->egycontactno;?></td>
                                          <td><b>Guardian Name :</b></td>
                                          <td><?php echo $row->guardianName;?></td>
                                          <td><b>Guardian Relation :</b></td>
                                          <td><?php echo $row->guardianRelation;?></td>
                                          </tr>

                                          <tr>
                                          <td><b>Guardian Contact No. :</b></td>
                                          <td colspan="6"><?php echo $row->guardianContactno;?></td>
                                          </tr>

                                          <tr>
                                          <td><b>Current Address:</b></td>
                                          <td colspan="2">
                                          <?php echo $row->corresAddress;?><br />
                                          <?php echo $row->corresCIty;?>, <?php echo $row->corresPincode;?><br />
                                          <?php echo $row->corresState;?>


                                          </td>
                                          <td><b>Permanent Address:</b></td>
                                          <td colspan="2">
                                          <?php echo $row->pmntAddress;?><br />
                                          <?php echo $row->pmntCity;?>, <?php echo $row->pmntPincode;?><br />	

                                          </td>
                                          </tr>

                                          <tr>

                                          <td><b>Room no :</b></td>
                                          <td><?php echo $row->roomno;?></td>

                                          <td><b>Starting Date :</b></td>
                                          <td><?php echo $row->stayfrom;?></td>

                                          <td><b>Seater :</b></td>
                                          <td><?php echo $row->seater;?></td>


                                          </tr>

                                          <tr>

                                          <td><b>Duration:</b></td>
                                          <td><?php echo $dr=$row->duration;?> Months</td>

                                          <td><b>Food Status:</b></td>
                                          <td>
                                          <?php if($row->foodstatus==0){
                                          echo "Not Required";
                                          } else {
                                          echo "Required";
                                          }
                                          ;?> </td>

                                          <td><b>Fees Per Month :</b></td>
                                          <td>$<?php echo $fpm=$row->feespm;?></td>

                                          

                                          </tr>

                                          <tr>
                                          <td colspan="6"><b>Total Fees (<?php echo ($dr).' months'?>) : 
                                          <?php if($row->foodstatus==1){ 
                                          $fd=211; 
                                          echo '$'.(($fd+$fpm)*$dr);
                                          } else {
                                          echo '$'.$dr*$fpm;
                                          }
                                          ?></b></td>
                                          </tr>


                                          


                                          <?php } ?>

                                      </tbody>
                                  </table>
                                 
                              </div>
                    
                    
                    </div>
                 
                 
                 </div>
               
               
               </div>

              <!-- Table column end -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include '../includes/footer.php' ?>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>

</body>

</html>