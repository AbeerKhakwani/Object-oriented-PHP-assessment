<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
	<title>Form Enter new Cd</title>
</head>
<body>
<div class="container">
	<h2>Enter a New Contact</h2>
<form  action="/entered" method="post">
  <div class="form-group">
    <label for="image">Enter Image</label>
    <input type="text" name="image" class="form-control" id="image" placeholder="Enter Image">
  </div>
  <div class="form-group">
    <label for="name">Enter name</label>
    <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label for="phone">Enter phone</label>
    <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter phone">
  </div>
   <div class="form-group">
    <label for="email">Enter email</label>
    <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
</form></div>







</body>
</html>