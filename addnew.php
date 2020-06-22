<!DOCTYPE html>
<html>
 <head>
  <title>Web Application Project</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div align="center" class="container">

  <br />
   <h1 >Add New Entity to MongoDB </h1>
<form action="addnewHandle.php" method="post">
  <div class="form-group">
    <label for="#">title</label>
    <input type="text" class="form-control" id="title" name="title"  placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label for="#">description</label>
    <textarea   class="form-control" id="description" name="description"  placeholder="Enter description"></textarea >
  </div>
  <div class="form-group">
    <label for="#">link</label>
    <input type="text" class="form-control" id="link" name="link"  placeholder="Enter link">
  </div>
  <div class="form-group">
    <label for="#">category</label>
    <input type="text" class="form-control" id="category" name="category"  placeholder="Enter link">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>
   
   </div>
  </body>
 </html>
 