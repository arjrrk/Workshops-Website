<!DOCTYPE html>
<html lang="en">
<head>
  <title>CS Worskshops</title>
  <script>
      function includeHTML() {
        var z, i, elmnt, file, xhttp;
        /*loop through a collection of all HTML elements:*/
        z = document.getElementsByTagName("*");
        for (i = 0; i < z.length; i++) {
          elmnt = z[i];
          /*search for elements with a certain atrribute:*/
          file = elmnt.getAttribute("w3-include-html");
          if (file) {
            /*make an HTTP request using the attribute value as the file name:*/
            xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
              if (this.readyState == 4) {
                if (this.status == 200) {elmnt.innerHTML = this.responseText;}
                if (this.status == 404) {elmnt.innerHTML = "Page not found.";}
                /*remove the attribute, and call this function once more:*/
                elmnt.removeAttribute("w3-include-html");
                includeHTML();
              }
            }      
            xhttp.open("GET", file, true);
            xhttp.send();
            /*exit the function:*/
            return;
          }
        }
      };
  </script>
  <style>
  /** {
      box-sizing: border-box;
  }*/
  
  input[type=text], select, textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
  }
  
  label {
      padding: 12px 12px 12px 0;
      display: inline-block;
  }
  
  input[type=submit] {
      background-color: rgb(106, 76, 175);
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      float: right;
      margin-top:6px;
  }
  
  input[type=submit]:hover {
      background-color: #6a54e7a4;
  }
  
  .container {
      margin-top:-72%;
      border-radius: 5px;
      background-color: #f2f2f24b;
      padding: 20px;
  }
  
  .col-25 {
      float: left;
      width: 12%;
      margin-top: 6px;
  }
  
  .col-75 {
      float: left;
      width: 86%;
      margin-top: 6px;
  }
  
  .row:after {
      content: "";
      display: table;
      clear: both;
  }
  
  @media screen and (max-width: 600px) {
      .col-25, .col-75, input[type=submit] {
          width: 100%;
          margin-top: 0;
      }
  }
  </style>
</head>

<body style="background-color: lightpink;">      
    <div w3-include-html="base_login.html"></div> 
    <script> includeHTML(); </script>  
    <div class="main">
      <div class="container">
        <form method="post" action="add_data_register.php">
        <div class="row">
            <div class="col-25">
              <label for="name">Full name</label>
            </div>
            <div class="col-75">
              <input type="text" id="name" name="name" placeholder="Enter your name..">
            </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="branch">Branch</label>
          </div>
          <div class="col-75">
            <input type="text" id="branch" name="branch">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="year">Year</label>
          </div>
          <div class="col-75">
            <input type="text" id="year" name="year" placeholder="Enter 1st or 2nd or 3rd or 4th year...">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="college">College</label>
          </div>
          <div class="col-75">
            <input type="text" id="college" name="college">
          </div>
        </div>

        <div class="row">
              <input type="submit" value="Submit">
        </div>
        </form>
      </div>


    </div>
    <style>
        .main{
                margin:0 auto;
                width:1335px;
        }                
    </style>
</body>
</html>
