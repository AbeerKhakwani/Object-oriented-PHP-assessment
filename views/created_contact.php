<html>
<head>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

  <title>Address Book</title>
</head>
<body>
  
<div class="container">
  <h2>You have  added this contact</h2>
  <div class="row">   

      <img class="thumbnail" src="{{ Contact1.getimage}}" />
      <h3>{{ Contact1.getname}}</h3>      
       <h3>{{ Contact1.getphone}}</h3>
       <h3>{{ Contact1.getemail}}</h3>
  
  </div>
       <div class="col-xs-6"> 
       
       </div>
      </div>

        <div class="row">
       <div class="col-xs-6">
          <form  action="/create_contact" type="get">
            <div class="form-group">
            <button type="submit" class="btn btn-default">Add new CD's to the store</button>
          </div>
          </form>

          <form id="form_id" action="/delete_contacts" method="post">
               <div class="form-group">
                   <button  class="btn btn-default" type="submit">Clear List</button>
               </div>
          </form>

          <form id="form_id" action="/search" method="get">
                <div class="form-group">
                  <button  class="btn btn-default" type="submit">Search Cd's By artist</button>
                  <div>
          </form>  
           <form id="form_id" action="/" method="get">
                <div class="form-group">
                  <button  class="btn btn-default" type="submit">Home</button>
                  <div>
          </form>  

  </div>  
</div>

</body>
</html>