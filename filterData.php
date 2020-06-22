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
   <h1 >Filter Data from MongoDB using Ajax </h1>
<!-- <form action="filterHandle.php" method="post"> -->
  <div class="form-group">
    <label for="#">Input Category</label>
    <input type="text" class="form-control" id="category" name="category"  placeholder="Enter Category">
  </div>
  
  <button  class="btn btn-primary" onclick="getDataFromDb()">Submit</button>
<!-- </form> -->

<div id="outputData">

        </div>
   
</div>
   
   </div>
   <script>
      function getDataFromDb() {
        var data = document.getElementById('category').value;
            // alert(data);
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("outputData").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "filterHandle.php?q="+ data, true);
            xhttp.send();
        }
  </script>


  </body>
 </html>
 