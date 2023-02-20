<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.S.K</title>
    <link rel="icon" href="img/logo.png">
    <link rel="stylesheet" href="stylehome.css">
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
        <h3>JEMI NE SHERBIM TE ATDHEUT</h3>
        <a href="apliko.html"><button class="btn"><label>Apliko</label></button></a>
    </div>
    <div id="content">
        <div id="armatimi">
            <a href="sherbimet.html#armatimi">
            <img src="img/armlogo.png" alt="">
            <h3>Armatimi</h3>
            <p>Per te pasur qasje <br> dhe per ti shikuar <br> armet e F.S.K <br>klikoni ketu
            </p></a>
        </div>
        <div id="automjetet">
            <a href="sherbimet.html#automjetet">
            <img src="img/vehicle.png" alt="">
            <h3>Automjetet</h3>
            <p>Per te pasur qasje <br> dhe per ti shikuar <br> automjetet e F.S.K <br>klikoni ketu
            </p></a>
        </div>
        <div id="stafi">
            <a href="about.html#staff">
            <img src="img/soldier-removebg-preview.png" alt="">
            <h3>Stafi yne</h3>
            <p>Per te pasur qasje <br> dhe per ti shikuar <br> stafin e F.S.K <br>klikoni ketu
            </p></a>
        </div>
       
    </div>
    <hr>
    

    <section class="contact" id="contact">
        <h1>KONTAKTI</h1>
        <div class="kontakti">
        <div class="adresa">            
            <h3>Adresa</h3>
            <p>Kazerma "Adem Jashari",10000,Prishtinë,Republika e Kosovës</p>
        </div>
            <div class="nrtel">
            <h3>NrTelefonit</h3>
            <p>038 5555 842044</p>
            <p>038 5555 842045</p>
            </div>
            <div class="email">
                <h3>Email</h3>
                <p>fsk@fsk-rks.org</p>
                
                </div>   
        </div>       
    </section>
    <br>
    <footer>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d94546.1514972711!2d20.638187196055043!3d42.223693199999985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x135395af6501e1f3%3A0x16dbe7770832c3f4!2sKazerma%20E%20FSK-s%C3%AB!5e0!3m2!1sen!2s!4v1671928300994!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </footer>
    
</body>

</html>