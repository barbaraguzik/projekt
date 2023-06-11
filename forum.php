<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Hafciarstwo">
    <meta name="keywords" content="haftowanie, hafciarstwo">
    <meta name="author" content="Barbara Guzik">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haftowanie</title>
    <link rel="icon" type="image/x-icon" href="grafiki/ikona.png">
    <link rel="stylesheet" media="screen and (min-width: 1200px)" href="style.css">
    <link rel="stylesheet" media="screen and (min-width: 992px) and (max-width: 1199px)" href="stylelaptop.css">
    <link rel="stylesheet" media="screen and (min-width: 600px) and (max-width: 991px)" href="styletablet.css">
    <link rel="stylesheet" media="screen and (max-width: 599px)" href="styletelefon.css">
    <script src="skrypty/datagodzina.js"></script>
    <script src="skrypty/menu.js"></script>
</head>
<body>
    <header>
        <div id="zakladka1">
            <div id="caloscmenu">
            <img class="menuklik" onclick="rozwin()" src="grafiki/menu.png" alt="menu rozwijane">
            <div id="divmenu">
                <table>
                    <tr><td><a href="poczatek.html">Od czego zacząć?</a></td></tr>
                    <tr><td><a href="sciegi.html">Podstawowe ściegi</a></td></tr>
                    <tr><td><a href="wzory.html">Wzory</a></td></tr>
                    <tr><td><a href="galeria.html">Galeria</a></td></tr>
                    <tr><td><a href="koszt.html">Koszt projektu</a></td></tr>
                    <tr id="forum"><td><a href="forum.php">Forum</a></td></tr>
                </table>
            </div>
        </div>
        </div>
        <div id="zakladka2"><a href="index.html">Hafciarstwo</a></div>
        <div id="zakladka3"><a href="forum.php">Forum</a></div>
        <div id="zakladka4"><p id="data"></p></div>
    </header>
    <main>
        <div id="tytul">
            <h1>Witaj na naszym forum!</h1>
            <p>Podziel się swoimi przemyśleniami, zapytaj o poradę lub poznaj nowe osoby, które łączy wspólna pasja - haftowanie!</p>
            <form method="post">
                <input type="text" name="login" placeholder=" Podaj pseudonim"><br><br>

                <textarea id="kom" name="komentarz" rows="6" cols="40" maxlength="300" placeholder=" Dodaj wpis!"></textarea><br>

                <input type="submit" value="Wyślij" class="przycisk">
            <?php
            error_reporting(0);
                $login=$_POST['login'];
                $komentarz=$_POST['komentarz'];
                
                $serwer=new mysqli("localhost","root","");
                mysqli_select_db($serwer,"komentarze");

             

                if(empty($_POST['login']) && empty($_POST['komentarz'])){
                    echo "<br><br><span style='color: red;'>Wprowadź login i komentarz!</span><br>";
                }

                $sprawdzenie="select login, komentarz from komentarze where login='$login' and komentarz='$komentarz'";
                $sprawdzenie2=mysqli_query($serwer,$sprawdzenie);

                    if(mysqli_num_rows($sprawdzenie2)==0){
                        if(!empty($_POST['login']) && !empty($_POST['komentarz']) ){
                        $wstaw="INSERT INTO komentarze(login,komentarz)VALUES('$login','$komentarz')";
                    mysqli_query($serwer,$wstaw);}
                }   
                
                $wyniki="select * from komentarze";
                $wynik=mysqli_query($serwer,$wyniki);
                
                if(mysqli_num_rows($wynik)!=0){
                    while($wiersz=mysqli_fetch_array($wynik,MYSQLI_ASSOC)){
                        $wiersze[]=$wiersz;
                    }
                foreach($wiersze as $wiersz){
                    echo "<div class='login'><br><b>",$wiersz['login'],"</b> napisał/a:<br><br>";
                    echo $wiersz['komentarz'],"</div><br><hr><br>";
                }}else{
                    echo "<br><b>Napisz pierwszy komentarz!</b>";
                }

                $serwer->close();
            ?>
            </form>
        </div>
        <div id="komentarze">
        
        </div>
    </main>

   
</body>
</html>