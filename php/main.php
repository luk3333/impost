<?php include('./session_check.php'); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
<?php include('./head.php'); ?>
<title>Impost</title>
</head>

<body>

<?php include('./nav.php'); ?>

         <div class="find">
         <img src="../img/susbus.png" alt="" class="susbus">
                    <div class="findbox">
                        <span class="header">Śledź swoją przesyłkę</span>
                        <form action="find.php" method="GET" autocomplete="off">
                                <input type="text" name="order_id" placeholder="Wpisz numer przesyłki">
                                <button type="submit">📦</button>
                        </form>
                    </div>


    </div>

    <main>

        <div class="oferty">
            <div class="item">
                <b>Punkty doręczeń paczek</b><br><br>
                <p>Sprawdź punkty na mapie <br>do których możesz wysłać <br>  swoją przesyłkę</p>
                <br>
                <a href="map.php"><button>Sprawdź</button></a>
            </div>
            <div class="item">
                <b>Punkty doręczeń paczek</b><br><br>
                <p>Sprawdź punkty na mapie <br>do których możesz wysłać <br>  swoją przesyłkę</p>
                <br>
                <a href="map.php"><button>Sprawdź</button></a>
            </div>
            <div class="item">
                <b>Punkty doręczeń paczek</b><br><br>
                <p>Sprawdź punkty na mapie <br>do których możesz wysłać <br>  swoją przesyłkę</p>
                <br>
                <a href="map.php"><button>Sprawdź</button></a>
            </div>
        </div>

    </main>

    <?php include('./footer.php'); ?>

    <script src="../js/app.js"></script>

</body>

</html>
