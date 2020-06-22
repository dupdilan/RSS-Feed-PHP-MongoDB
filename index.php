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
   <h1 >Web Application Project </h1>
   <h3>Assessment-1</h3>
   <br />
   
   <div class="btn-group" role="group" aria-label="Basic example">

  <button type="button" class="btn btn-primary" onclick="location.href = 'rssread.php';">View RSS Reader Using PHP</button>
  <button type="button" class="btn btn-secondary" onclick="getDataFromDb()">View RSS Feed data Getting from mongoDB Using Ajax</button>
  <button type="button" class="btn btn-primary" onclick="location.href = 'addnew.php';">Add New Entity to MongoDB</button>
  <button type="button" class="btn btn-secondary" onclick="location.href = 'filterData.php';">Filter data </button>
  <button type="button" class="btn btn-primary" onclick="location.href = 'xmlGenerator.php';">Export New XML File </button>
      </div>

      
      <div id="outputData">

        </div>
   
  </div>

  <script>
      function getDataFromDb() {
            // alert("cliekd");
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("outputData").innerHTML = this.responseText;
                }
            };
            xhttp.open("GET", "getDataFromDB.php", true);
            xhttp.send();
        }
  </script>

  
 </body>
</html>
