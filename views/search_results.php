<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

	<title>Searched a contact</title>

</head>
<body>
	<h1>Here are the contacts's that match your results</h1>

	<div class="container">
       
<div class="row">
  <div class="col-xs-6">  


  {%  for contact in search_results %}	

    <img class="thumbnail" src="{{contact.getimage}}" />
                          <h3>{{ contact.getname}}</h3>
                          <p>{{ contact.getphone}}</p>
                          <p>{{ contact.getemail}}</p>

  {%  endfor %}
     
      
  </div>
  <form  action="/" type="post">
  <div class="form-group">
      <button type="submit" class="btn btn-default">Go home to see all CD's</button>
  </form>

</div>

</body>
</html>