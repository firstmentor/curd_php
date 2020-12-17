<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		Name:<input type="text" name="name" >
		<br>
		<br>
		Email:<input type="text" name="name" >
		<br>
		<br>
		D.O.B:<input type="date" name="name" >
		<br>
		<br>
		Username:<input type="text" name="name" >
		<br>
		<br>
		Password:<input type="text" name="name" >
		<br>
		<br>
		Branch:<select name="college">
			<option value="select">Select</option>
			<option value="rjit">CS</option>
			<option value="mpct">IT</option>
			<option value="itm">EC</option>
			<option value="jaincollege">EE</option>
		    </select>
			<br>
			<br>
		College:<select name="college">
			<option value="select">Select</option>
			<option value="rjit">RJIT</option>
			<option value="mpct">mpct</option>
			<option value="itm">itm</option>
			<option value="jaincollege">jain college</option>
		    </select>
			<br>
			<br>

	    Gender:<input type="radio" name="gender" value="male">Male
	           <input type="radio" name="gender" value="female">FeMale
	           <input type="radio" name="gender" value="other">other
               <br>
               <br>

        Education:<input type="checkbox" name="education[]" value="mca">MCA
        <input type="checkbox" name="education[]" value="ca">BE     
        <input type="checkbox" name="education[]" value="ma">MA
        <input type="checkbox" name="education[]" value="bba">BBA

        <br>
        <br>
        File Upload:<input type="file" name="file">

        <br>
        <br>
		<input type="submit" name="a" value="Submit">
		


	</form>

</body>
</html>