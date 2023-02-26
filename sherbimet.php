<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.S.K</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="css/stylesherbimet.css">
</head>
<body>
    
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <a href="home.php"><img src="img/logo.png" alt="logo"></a>
            </div>

            <?php 
                include('navbar/navbar.php')
            ?>
        </div>
        <div class="content">
            <section class="parakalimet">
                <h2>Parakalimet e FSK</h2>
                <div class="slider">
                    <div class="slides">
                      <!--radio buttons start-->
                      <input type="radio" name="radio-btn" id="radio1">
                      <input type="radio" name="radio-btn" id="radio2">
                      <input type="radio" name="radio-btn" id="radio3">
                      <input type="radio" name="radio-btn" id="radio4">
                      <!--radio buttons end-->
                      <!--slide images start-->
                      <div class="slide first">
                        <img src="img/garda.png" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/fsk.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/slider.jpg" alt="">
                      </div>
                      <div class="slide">
                        <img src="img/parakalim.jpg" alt="">
                      </div>
                      <!--slide images end-->
                      <!--automatic navigation start-->
                      <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                      </div>
                      <!--automatic navigation end-->
                    </div>
                    <!--manual navigation start-->
                    <div class="navigation-manual">
                      <label for="radio1" class="manual-btn"></label>
                      <label for="radio2" class="manual-btn"></label>
                      <label for="radio3" class="manual-btn"></label>
                      <label for="radio4" class="manual-btn"></label>
                    </div>
                    <!--manual navigation end-->
                  </div>
                  <!--image slider end-->
                  <script type="text/javascript">
                        var counter = 1;
                         setInterval(function(){
                         document.getElementById('radio' + counter).checked = true;
                         counter++;
                         if(counter > 4){
                            counter = 1;
                        }
                    }, 5000);
    </script>
            </section>
            <section class="armatimi" id="armatimi">
            <h2>Armatimi i F.S.K</h2>
            <br>
            <table border="1">
                <tr>
                    <th colspan="5"><b>Armatimi</b></th>

                    
                </tr>
                <tr>
                    <th>Fotografia</th>
                    <th>Emri</th>
                    <th>Kalibri</th>
                    <th>Shenime</th>
                </tr>
              
                  <?php

                  $sql2= "SELECT * FROM produktet ";
      
                  $res2= mysqli_query($conn, $sql2);
      
                  $count2= mysqli_num_rows($res2);
      
                  if($count2>0){
      
                    while($row=mysqli_fetch_assoc($res2)){
                        $fotografia = $row['Fotografia'];
                        $emri = $row['Emri'];
                        $kalibri = $row['Kalibri'];
                        $shenime = $row['Shenime'];
                        
                        ?>
      
                              
                                  <?php
                                      if($fotografia==""){
                                          echo "<div class='error'>Image not Availible";
                                      }
                                      else{
                                        ?>
                                          
      
                                        <?php
                                      }
      
                                ?>
                                <td><img src="<?php echo SITEURL; ?>img/armt/<?php echo $fotografia;?> " ></td>
                                <td><?php echo $emri; ?></td>
                                <td><?php echo $kalibri; ?></p></td>
                                <td><?php echo $shenime; ?></p></td>
                </tr>
            
                        <?php
                    }

                        }else{
                            echo "<div class='error'>Product not available</div>";
                        }

                        ?>                
            </table>
            </section>
            <br>
            <section class="automjetet" id="automjetet">
        
            
            <h2>Automjetet e F.S.K</h2>
            <br>
            <table border="1">
                <tr>
                    <th colspan="4"><b>Autoblindat</b></th>

                    
                </tr>
                <tr>
                    <th>Fotografia</th>
                    <th>Emri</th>
                    <th>Numri</th>
                    <th>Shenime</th>
                </tr>
                <tr>
                    <td><img src="img/humvee-.png" alt=""></td>
                    <td>Humvee HMMWV</td> 
                    <td></td>
                    <td>Autoblind</td>
                    </tr>
                <tr>
                    <td><img src="img/cobra__1_-.png" alt=""></td>
                    <td> Otokar Cobra</td> 
                    <td></td>
                    <td>Autoblind</td>
                    </tr>
                    <tr>
                    <td><img src="img/unimog.png" alt=""></td>
                    <td> Tactical Mercedes</td> 
                    <td></td>
                    <td>Transportues</td>
                    </tr>

            </table>
            </section>
        </div>
    </div>
</body>

</html>