<html>
    <head>
        <title>
            Yes 2 Healthy Life
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" href="dbms.css">
    </head>
    <body>
            <nav class="navbar">
                    <ul>
                           <li><a href="dbms1.php">Home</a></li>
                           <li><a class="active" href="dbms.php">BMI Calculator</a></li>
                            <li><a href="dbms4.php">Two Foods</a></li>
                            <div class="navright">
                               
                                <?php
                    $host="localhost";
                    $username="root";
                    $password="";
                    $conn=mysqli_connect($host,$username,$password,"y2hl");
                    if(!$conn)
                    echo "Connection Unsuccessful";
                    $sql=mysqli_query($conn,"select flag from temp where id = 1");
                    $name=mysqli_fetch_array($sql,MYSQLI_ASSOC);
                    if($name["flag"]==0)
                    {
                        echo "<li><a href=\"dbms2.html\"><i class=\"fas fa-user\"></i> Login</a></li>";
                    echo "<li><a href=\"dbms3.html\"><i class=\"fas fa-user-plus\"></i> Signup</a></li>";

                    }
                    else
                    {
                        $sql1=mysqli_query($conn,"select username from temp where id = 1");
                        $name1=mysqli_fetch_array($sql1,MYSQLI_ASSOC);
                        echo "<li> <a href=\"user.php\" >".$name1["username"]."</a></li>";
                        echo "<li> <a href = \"facts2.php\">logout</a></li>";
                    }
                    ?>
                            </div>
                          </ul>
                          
            </nav>
              <div id="fpage" class="jumbotron">
                  <h1 class="bmi center">BMI Calculator</h1>
                  <br>
                  <form method="POST" action="bmi.php" class="form2 center">
                      <label for="uname"><strong>Username :</strong></label>
                      <input type="text" id="uname" name="uname" class="myform" style="width:500px" placeholder="Enter your username"><br>
                      &emsp;&ensp;<label for="height"><strong>Height :&emsp;&ensp;</strong></label>
                      <input type="text" id="height" name="height"  class="myform" style="width:500px" placeholder="Enter your height" required> Cm<br>
                      &emsp;&ensp;<label for="weight"><strong>Weight :&emsp;&ensp;</strong></label>
                      <input type="text" id="weight" name="weight" class="myform" style="width:500px" id="weight1" placeholder="Enter your weight" required> Kg<br>
                      <input type="button" id="btn" value="Calculate" onclick="calcbmi()"> &emsp;&ensp; 
                      <input type="submit" id="btn1" value="Save">
                      
                  </form>
                  <span id="p1"></span>
                  
              </div>
              <div class="grid-2 bminfo">
              <div>
              <h4 class="color">Check your BMI here:</h4>
              <img src="images/bmi.jpg" id="image" width="800">
              </div>
              <div>
                  <h4 class="color">What is BMI?</h4>
               <p class="color">The body mass index (BMI) or Quetelet index is a value derived from the mass (weight) and height of an individual. The BMI is defined as the body mass divided by the square of the body height, and is universally expressed in units of kg/m<sup>2</sup>.
The BMI is an attempt to quantify the amount of tissue mass (muscle, fat, and bone) in an individual, and then categorize that person as underweight, normal weight, overweight, or obese based on that value.</p>
              </div>
              </div>
              
              <section class="about bg-light">
        <div class="container">
            <div class="grid-2">
                <div class="center">
                    <i class="fas fa-laptop-code fa-10x">
                    </i>
                </div>
                <div class="about1">
                    <h2>About Us</h2>
                    <p>We are a non profit organisation which works to create awareness among people about health and healthy food habits.</p>

                </div>
            </div>
        </div>
    </section>
        <script src="dbms.js"></script>
            </body>

</html>