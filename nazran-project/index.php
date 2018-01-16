<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Al-Quran</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
	<script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.js"></script>
</head>
<body>
	<div class="container wrapper">
		<select class="selectpicker" data-live-search="true">
		  <option>Mustard</option>
		  <option>Ketchup</option>
		  <option>Relish</option>
		</select>
  	  	<form class="form-horizontal" role="form">
			<div class="row">

				<div class="col-md-3" role="form">
					<select name="suraa" class="form-control selectpicker" data-live-search="true" id = "suraa" title = "Select City">
					   <option value="Warm">Warm</option>
					   <option value="Cold">Cold</option>
					   <option value="Referral">Referral</option>
					</select>
				</div>

				<div class="col-md-3">
					<select name="ayat-1" class="form-control selectpicker" data-live-search="true" id = "ayat-1" title = "Select City">
					   <option value="Warm">Warm</option>
					   <option value="Cold">Cold</option>
					   <option value="Referral">Referral</option>
					</select>
				</div>

				<div class="col-md-3">
					<select name="sura-b" class="form-control selectpicker" data-live-search="true" id = "sura-b" title = "Select City">
					   <option value="Warm">Warm</option>
					   <option value="Cold">Cold</option>
					   <option value="Referral">Referral</option>
					</select>
				</div>

				<div class="col-md-3">
					<select name="ayat-2" class="form-control selectpicker" data-live-search="true" id = "ayat-2" title = "Select City">
					   <option value="Warm">Warm</option>
					   <option value="Cold">Cold</option>
					   <option value="Referral">Referral</option>
					</select>
				</div>
			</div>

			<div class="row comment-box">
				<div class="col-md-6">
	               <textarea name="comment" class="form-control" placeholder="Comment Box" id="comment"></textarea>
				</div>

				<div class="col-md-6">
	               <textarea name="comment" class="form-control" placeholder="Comment Box" id="comment"></textarea>
				</div>
			</div>

			<div class="row serial-num">
				<div class="col-md-4"></div>

			    <div class="col-md-4">
			        <div class="input-group">
			            <span class="serial-text">Serial Number</span> <input type="text" class="form-control" /> 
			        </div>
			    </div>

				<div class="col-md-4"></div>
			</div>

			<div class="row">
				<label>Comments</label>
	            <textarea name="comment" class="form-control" placeholder="Comment Box" id="comment"></textarea>
			</div>

			<div class="row">
				<label>Notes</label>
	            <textarea name="comment" class="form-control" placeholder="Comment Box" id="comment"></textarea>
			</div>
	 	</form>

	 	<form class="form-inline">
	 	  <div class="form-group">
	 	    <label class="col-md-1 control-label" for="lunchBegins">Lunch (Begins search):</label>
	 	  </div>
	 	  <div class="form-group">
	 	    <!-- <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Please select a lunch ..."> -->
	 	    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Please select a lunch ...">
	 	      <option>Hot Dog, Fries and a Soda</option>
	 	      <option>Burger, Shake and a Smile</option>
	 	      <option>Sugar, Spice and all things nice</option>
	 	      <option>Baby Back Ribs</option>
	 	      <option>A really really long option made to illustrate an issue with the live search in an inline form</option>
	 	    </select>
	 	  </div>
	 	</form>

	 	<select id="done" class="selectpicker" multiple data-done-button="true">
	 	  <option>Apple</option>
	 	  <option>Banana</option>
	 	  <option>Orange</option>
	 	  <option>Pineapple</option>
	 	  <option>Apple2</option>
	 	  <option>Banana2</option>
	 	  <option>Orange2</option>
	 	  <option>Pineapple2</option>
	 	  <option>Apple2</option>
	 	  <option>Banana2</option>
	 	  <option>Orange2</option>
	 	  <option>Pineapple2</option>
	 	</select>
	</div>

	<!-- <script type="text/javascript">
		$(document).ready(function() {
		   $('.selectpicker').selectpicker();
		});
	</script> -->
</body>
</html>