<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form Validation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- The validation rules for the form above are as follows:
	Field 	Validation Rules
	Name 	Required. + Must only contain letters and whitespace
	E-mail 	Required. + Must contain a valid email address (with @ and .)
	Website 	Optional. If present, it must contain a valid URL
	Comment 	Optional. Multi-line input field (textarea)
	Gender 	Required. Must select one -->

	<!-- The name, email, and website fields are text input elements, and the comment field is a textarea -->
	<div>
	<form class = "form" action="">
		Name: <input type="text" name="name"> <br>
		E-mail: <input type="text" name="email"> <br>
		Website: <input type="text" name="website"> <br>
		Comment: <textarea name="comment" rows="5" cols="40"></textarea>
	</form>
	</div>
	</body>
</html>