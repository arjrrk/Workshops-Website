<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mechanical Worskshops</title>
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
    .container{
      position:relative;
      margin:auto;
      margin-top:-72%;
      border-radius: 5px;
      width:80%;
      background-color:#dabcf6;
      border:10px solid purple;
      padding: 20px;
    }
    .header{
      border-radius:10px;
      border:5px solid black;
      padding:10px;
      background-color: #8B008B;
    }
    .img{
      margin-top:-3%;
      height:100px;
      width:100px;
      float:left;
    }
    .b{
      position:relative;
      margin-top:-10px;
      left:-45%;
    }
    .button{
      border-radius:10px;
      border:2px solid black;
      background-color:lightgreen;
    }
  </style>
</head>

<body style="background-color: lightpink;">      
    <div w3-include-html="base.html"></div> 
    <script> includeHTML(); </script>  
    <div class="main">
    <?php
        include 'connect.php';       
        $query="SELECT * FROM workshops WHERE department='MECH' or department='mech' ORDER BY date ASC";
        $result=mysqli_query($conn,$query);
        ?> <div class='container'><?php
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){ ?>
          <div class='work_c'>
            <div class='header'>    
            <h1 style="color:white"><img src="mech.jpeg" class="img"/>&nbsp&nbsp<?=$row['title']?></h1> 
            </div>
            <div class='content'>
            <h3>Decription : <?=$row['description']?></h3></div>
            <div class='content'>
            <h3>Organisation : <?=$row['organisation']?></h3></div>
            <div class='content'>
            <h3>Venue : <?=$row['venue']?></h3></div>
            <div class='content'>
            <h3>Date : <?=$row['date']?></h3></div>
            <div class='content'>
            <h3>Time : <?=$row['time']?></h3></div>
            <div class='content'>
            <div class="b"><a href="register_w.php"><button class="button">REGISTER</button></a></div>
            
         
          </div><?php
        }?>
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