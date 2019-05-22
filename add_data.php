
<?php
   $wtitle = filter_input(INPUT_POST, 'wtitle');
   $description = filter_input(INPUT_POST, 'description');
   $department = filter_input(INPUT_POST, 'department');
   $organisation = filter_input(INPUT_POST, 'organisation');
   $venue = filter_input(INPUT_POST, 'venue');
   $date = filter_input(INPUT_POST, 'date');
   $time = filter_input(INPUT_POST, 'time');
   if (!empty($wtitle)){
           if (!empty($description)){
             if (!empty($department)){
               if (!empty($organisation)){
                   if (!empty($venue)){
                       if (!empty($date)){
                         if (!empty($time)){
                            $host = "localhost";
                            $dbusername = "root";
                            $dbpassword = "";
                            $dbname = "workshop";
                            
                            
                            $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
                            
                            if (mysqli_connect_error()){
                              die('Connect Error ('. mysqli_connect_errno() .') '
                                . mysqli_connect_error());
                            }
                            else{
                              $sql = "INSERT INTO workshops
                              values ('$wtitle','$description','$department','$organisation','$venue','$date','$time')";
                              if ($conn->query($sql)){
                                include 'data_success.html';
                              }
                              else{
                                include 'data_error.html';
                                die();
                              }
                              $conn->close();
                            }

                           }
                           else{
                            include 'data_error.html';
                            die();
                          }
                        }
                        else{
                          include 'data_error.html';
                            die();
                          }
                    }
                    else{
                      include 'data_error.html';
                        die();
                      }
                }
                else{
                  include 'data_error.html';
                    die();
                  }
            }
            else{
              include 'data_error.html';
              die();
            }
          }
          else{
            include 'data_error.html';
              die();
            }
          }
          else{
            include 'data_error.html';
              die();
            }

                     
?>