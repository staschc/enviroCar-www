<?
require_once('./assets/includes/authentification.php');
if(!is_logged_in()){
	include('header-start.php');
}else{
	include('header.php');
}
?>

<div class="container">
	<div class="row-fluid">
        <div class="span4">
        	<img src="./assets/img/bootstrap-docs-readme.png" class="img-circle">
          <h2>Main Sponsor 1</h2>
        </div>
        <div class="span4">
        	<img src="./assets/img/bootstrap-docs-readme.png" class="img-circle">
          <h2>Main Sponsor 2</h2>
        </div>
        <div class="span4">
        	<img src="./assets/img/bootstrap-docs-readme.png" class="img-circle">
          <h2>Main Sponsor 3</h2>
        </div>
    </div>
    <br>
	<div class="row-fluid">
        <div class="span3">
        	<img src="./assets/img/bootstrap-docs-readme.png" class="img-circle" style="width:20%">
        	<h3>Sponsor</h3>
        </div>
        <div class="span3">
        	<img src="./assets/img/bootstrap-docs-readme.png" class="img-circle" style="width:20%">
        	<h3>Sponsor</h3>
        </div>
        <div class="span3">
        	<img src="./assets/img/bootstrap-docs-readme.png" class="img-circle" style="width:20%">
        	<h3>Sponsor</h3>
        </div>
        <div class="span3">
        	<img src="./assets/img/bootstrap-docs-readme.png" class="img-circle" style="width:20%">
        	<h3>Sponsor</h3>
        </div>
    </div>

</div>

<?
include('footer.php');
?>