<?php $actova1 = '';
$actova2 = '';
$actova3 = '';
$actova4 = '';
$actova5 = '';
$actova6 = '';
$actova7 = '';
$actova8 = '';
$actova9qs = 'active';
$actova10 = ''; ?>
<?php require_once('../../con-cot/conn_sqli.php'); ?>
<?php require_once('../../lib/basic-functions.php'); ?>
<?php require_once('../../library.php'); ?>
<?php require_once('../../select-library.php'); ?>
<?php $bassic->checkLogedINAdmin('login');

if (isset($_GET['delete']) && !empty($_GET['delete'])) {
 $passportIn = $cal->selectFrmDB($portfolio_tb, 'image', 'id', $_GET['delete']);
 if (query_sql("DELETE FROM $portfolio_tb WHERE `id`='" . $_GET['delete'] . "' LIMIT 1")) {
  $bassic->unlinkFile($passportIn, '../../photo/');
  $msg = 'Delete process was successful!';
  header("location:portfolio-view?done=" . $msg);
 } else {
  $msg = 'Info Faild to delete!';
  header("location:portfolio-view?done=" . $msg);
 }
}
?>
<?php if (isset($_GET['done']) && !empty($_GET['done'])) {
 $msg = $_GET['done'];
} ?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Portfolio View |';
require_once('head.php') ?>

<body>
 <!-- container section start -->
 <section id="container" class="" style="margin-bottom:100px;">
  <?php require_once('header.php') ?>
  <?php require_once('sidebar.php') ?>
  <!--main content start-->
  <section id="main-content">
   <section class="wrapper">
    <!--overview start-->
    <div class="row">
     <div class="col-lg-12">
      <h3 class="page-header"><i class="fa fa-laptop"></i> Portfolio</h3>
      <ol class="breadcrumb">
       <li><i class="fa fa-home"></i><a href="../host-admin/">Home</a></li>
       <li><i class="fa fa-laptop"></i> portfolio View</li>
       <li><i class="fa fa-laptop"></i><a href="portfolio"> Post Portfolio</a></li>
      </ol>
     </div>
    </div>

    <?php if (!empty($msg)) { ?>
     <div class="row">
      <div id="go" class=" col-lg-12">
       <div id="go" class="alert alert-warning" style="text-align: center; color:#FFF;"><?php print @$msg; ?> <i id="remove" class="fa fa-remove pull-right"></i></div>
      </div>
     </div>
    <?php } ?>

    <div class="row">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <?php $select->allPortfolio(); ?>
     </div>
    </div><!--/.row-->




   </section>

   <!--main content end-->
  </section>
  <!-- container section start -->
 </section>



 <!-- javascripts -->
 <?php require_once('jsfiles.php') ?>
 <!-- charts scripts -->
</body>

</html>