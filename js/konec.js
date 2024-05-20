var secondsLeft = 10;
function redirTimer() {
    setInterval(function () {
        if (secondsLeft == 0) {
            location.href = "index.php";
        }
        else {
            document.getElementById("time").innerHTML = --secondsLeft;
        }
    }, 1000);


}

document.addEventListener('DOMContentLoaded', function() {
    function checkWinnerAndFireworks() {
        $('#fireworks').fireworks({
            sound: false,
            width: '100%',
            height: '100%',
        });
    }


    checkWinnerAndFireworks();
});

