<?php require_once('header.php');

if(!session_check()){
	header("location: index.php");
	exit();
}
?>

<div class="container">
	<div class="row">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
			<?php if(isset( $_GET['msg']) ) { ?>
			<div class="col-xs-12 alert-danger alert">
				<?php echo $_GET['msg']; ?>
			</div>
			<?php } ?>
			<?php if(isset( $_GET['success']) ) { ?>
			<div class="col-xs-12 alert-success alert">
				Information saved successfully.
			</div>
			<?php } ?>
			<form method="POST" action="<?php echo $config['url'];?>core/create.php" enctype="multipart/form-data">
				<div class="col-xs-12 box title">
					<label for="title">Heading</label>
					<input type="text" name="title" placeholder="Heading" required="required" class="form-control">
				</div>
				<div class="col-xs-12 box date">
					<div class="row">
						<div class="col-xs-12">
							<label>Date Time ( YYYY/MM/DD hh:mm:ss )</label>
						</div>
						<div class="col-xs-12 col-sm-2">
							<input type="text" name="year" placeholder="YYYY" class="form-control">
						</div>
						<div class="col-xs-12 col-sm-2">
							<input type="text" name="month" placeholder="MM" class="form-control">
						</div>
						<div class="col-xs-12 col-sm-2">
							<input type="text" name="day" placeholder="DD" class="form-control">
						</div>
						<div class="col-xs-12 col-sm-2">
							<input type="text" name="hour" placeholder="hh" class="form-control">
						</div>
						<div class="col-xs-12 col-sm-2">
							<input type="text" name="minute" placeholder="mm" class="form-control">
						</div>
						<div class="col-xs-12 col-sm-2">
							<input type="text" name="second" placeholder="ss" class="form-control">
						</div>
					</div>
				</div>
				<div class="col-xs-12 box option">
					<label for="option">Options</label>
					<p>
						<input type="radio" name="option" value="down" checked="checked"><span>Count Down</span>
						<input type="radio" name="option" value="up" ><span>Count Up</span>
					</p>
				</div>
				<div class="col-xs-12 box background">
					<label for="background">Background Image</label>
					<input type="file" name="background" class="filestyle" data-icon="false">
				</div>
				<div class="col-xs-12 box">
					<input type="submit" name="submit" value="Save" class="btn btn-success save">
				</div>
			</form>
		</div>
	</div>
</div>

<?php require_once('footer.php') ?>