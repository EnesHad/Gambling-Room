<?php
        session_start();

        $_SESSION["p1Score"];
        $_SESSION["p2Score"];
        $_SESSION["p3Score"];
        $_SESSION["p1"];
        $_SESSION["p2"];
        $_SESSION["p3"];
        $_SESSION["stevKoc"];
        $_SESSION["stevMet"];
        $_SESSION["stevVrz"];
        $max=$_SESSION["p1Score"];

        for($x=0;$x<3;$x++){
            if($max<$_SESSION["p2Score"])
                $max=$_SESSION["p2Score"];
            else if($max<$_SESSION["p3Score"]){
                $max=$_SESSION["p3Score"];
            }
        }
?>
<!DOCTYPE html>
<html lang="sl">
	<head>
        <title>Dice Game</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="slike/vijola.png">
        <script src="js/konec.js"></script>
	</head>
	<body onload="redirTimer()">
    <div class="main">
        <h1>Winner</h1>
        <div id="center">
            <form name="Obrazec" id="obrazec" method="post" autocomplete="off" action="igra.php">
                <div id="zmagovalec">
                    <?php
                        
                        if($max==$_SESSION["p1Score"] && $max==$_SESSION["p2Score"]){echo 'Draw between player '.$_SESSION["p1"].' and player '.$_SESSION["p2"];}
                        elseif($max==$_SESSION["p1Score"] && $max==$_SESSION["p3Score"]){echo 'Draw between player '.$_SESSION["p1"].' and player'.$_SESSION["p3"];}
                        elseif($max==$_SESSION["p3Score"] && $max==$_SESSION["p2Score"]){echo 'Draw between player '.$_SESSION["p3"].' and player'.$_SESSION["p2"];}
                        elseif($max==$_SESSION["p1Score"]){echo 'Congratulations player '.$_SESSION["p1"].' you won!';}
                        elseif($max==$_SESSION["p2Score"]){echo 'Congratulations player '.$_SESSION["p2"].' you won!';}
                        elseif($max==$_SESSION["p3Score"]){echo 'Congratulations player '.$_SESSION["p3"].' you won!';}
                        else{
                            echo 'ERROR NO WINERS';
                        }
                    ?>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p1"];  ?></br>
                    <?php echo $_SESSION["p1Score"];  ?></br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p2"];  ?></br>
                    <?php echo $_SESSION["p2Score"];  ?></br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p3"];  ?></br>
                    <?php echo $_SESSION["p3Score"];  ?></br>
                </div>
                <div class="spodi" id="spodi">You will be redirected in <span id="time">10</span> seconds.</div>
            </form>
        </div>
        </div>
	</body>
</html>