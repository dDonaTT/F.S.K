<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.S.K</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="stylesherbimet.css">
</head>
<body>
    
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <a href="home.html"><img src="img/logo.png" alt="logo"></a>
            </div>

            <?php 
                include('navbar/navbar.php');
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
                    <th colspan="5"><b>Pistoletat</b></th>

                    
                </tr>
                <tr>
                    <th>Fotografia</th>
                    <th>Emri</th>
                    <th>Kalibri</th>
                    <th>Shenime</th>
                </tr>
                <tr>
                    
                    <td><img src="img/glock.png" alt=""></td>
                    <td>Glock-17</td>   
                    <td>9x19mm</td>
                    <td>armë anësore</td>
                </tr>
                <tr>
                    <td><img src="img/m17-ms-right-1.png" alt=""></td>
                    <td>Sig Sauer M17</td>
                    <td>9x19mm</td>
                    <td>armë anësore</td>


                </tr>
                <tr>
                    
                    <td><img src="img/FN_Five_Seven.png" alt=""></td>
                    <td>FN FiveSeven</td>
                    <td>5.7x28mm</td>
                    <td>armë anësore</td>

                </tr>
              <tr>                   
                    <th colspan="5"><b>Armet e Gjata</b></th>  </tr> 
                    <tr>
                        <th>Fotografia</th>
                        <th>Emri</th>
                        <th>Kalibri</th>
                        <th>Shenime</th>
                    </tr>
                    <tr>
                    <td><img src="img/Gewehr_G36_noBG.png" alt=""></td>
                    <td>Hecklet & Koch G36</td> 
                    <td>5.56x45mm</td>
                    <td>armë e distancave te shkurta</td>
                    </tr>
                    <tr>
                    <td><img src="img/M5_Carbine.png" alt=""></td>
                    <td>M5 Colt Carabine</td> 
                    <td>5.56x45mm</td>
                    <td>armë e distancave mesatare</td>
                    </tr> 
                    <tr>
                    <td><img src="img/mpt_76-.png" alt=""></td>
                    <td>MPT-76</td> 
                    <td>7.62x51mm</td>
                    <td>armë e distancave te largta</td>
                    </tr> 
                    <tr>                   
                        <th colspan="5"><b>Snajperët</b></th>  </tr> 
                        <tr>
                            <th>Fotografia</th>
                            <th>Emri</th>
                            <th>Kalibri</th>
                            <th>Shenime</th>
                        </tr>
                    <td><img src="img/Barrett-M82A1.png" alt=""></td>
                    <td>Barrett M82</td> 
                    <td>.50 BMG ose 12.7x99mm</td>
                    <td>armë e distancave te largta</td>
                    </tr> <td><img src="img/SR-25_pic02-.png" alt=""></td>
                    <td>SR-25</td> 
                    <td>7.62x51mm</td>
                    <td>armë e distancave te largta</td>
                    <tr>                   
                        <th colspan="5"><b>AntiTanket Miltalerët dhe Minahedhësit</b></th>  </tr> 
                        <tr>
                            <th>Fotografia</th>
                            <th>Emri</th>
                            <th>Kalibri</th>
                            <th>Shenime</th>
                        </tr>
                        <tr>
                    <td><img src="img/javelin-.png" alt=""></td>
                    <td>FGM-148 Javelin</td> 
                    <td>Predha 127mm</td>
                    <td>Sistem Anti-Tankë i avancuar</td>
                        </tr>
                        <tr>
                    <td><img src="img/mortar.png" alt=""></td>
                    <td>Mortar M8</td> 
                    <td>Predha 81mm</td>
                    <td>Minahedhës</td>
                        </tr>
                    <tr>
                    <td><img src="img/PEO_Browning_M2.png" alt=""></td>
                    <td>Browning M2</td> 
                    <td>.50 BMG</td>
                    <td>Mitraler</td>
                    </tr>                
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