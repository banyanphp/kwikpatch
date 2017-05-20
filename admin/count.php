<script type="text/javascript">

(function () {
    var timeLeft = 5,
        cinterval;

    var timeDec = function (){
        timeLeft--;
        document.getElementById('countdown').innerHTML = timeLeft;
        if(timeLeft === 0){
            clearInterval(cinterval);
        }
    };

    cinterval = setInterval(timeDec, 1000);
})();

</script>

Redirecting in <span id="countdown">5</span>.