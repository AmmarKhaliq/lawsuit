<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/'; ?>css/cases.css">
    <style>
        body {
            background-color: rgb(0, 0, 0, 0.3);
        }

        .input-ls {
            background: aliceblue;
        }

        .button-same-font {
            font-size: 0.8rem;
        }

        a:hover {
            text-decoration: none;
            color: #ffffff;
        }

        #stopwatchArea {
            text-align: center;
            background: aliceblue;
            padding: 1rem;
            border-radius: 5px;
        }

        #buttons {
            text-align: center;
        }

        .watch-buttons {
            height: 30px;
            width: 30px;
            background: #bfdbff;
            color: white;
            text-align: center;
            font-family: 'Quicksand', sans-serif;
            position: static;
            margin: 1rem 0.5rem;
            border-radius: 5px;
            /* -webkit-border-radius: 50%; */
            -moz-border-radius: 5px;
            font-size: 14px;
            border: none;
            outline: none;
        }

        .bigNumber {
            font-size: 30px;
        }

        .smallNumber {
            font-size: 30px;
        }
    </style>
</head>

<body>
    <?php include('includes/navigation.php'); ?>



    <div class="main-bg-div-al">
        <div class="row vh-100 align-items-center justify-content-center">
            <div class="col-12 col-md-4">
                <div class="bg-white p-2 rounded">
                    <div class="row p-3 justify-content-center">
                        <div class="col-12">

                            <div id="stopwatchArea">
                                <b>
                                    <span class="bigNumber">
                                        <span id="hour" class="box">00</span>
                                        <span>:</span>
                                        <span id="minute" class="box">00</span>
                                        <span>:</span>
                                        <span id="second" class="box">00</span>
                                        <span class="smallNumber d-none box" id="centisecond">00</span>
                                </b>

                                <p class="text-capitalize timer-not  m-0">timer not started</p>
                                <p class="text-capitalize timer-yes m-0">timer started</p>
                                <p class="text-capitalize timer-pause m-0">timer paused</p>
                                <p class="text-capitalize timer-stoped m-0">timer stoped</p>
                                <p class="text-capitalize timer-reset m-0">timer reseted</p>



                            </div>
                            <!--buttons-->
                            <div class="d-flex justify-content-center">
                                <button class="watch-buttons" title="play" onclick="play()" id="playButton">
                                    <i class="fa fa-play" aria-hidden="true"></i>
                                </button>
                                <button class="watch-buttons" title="pause" onclick="pause()" disabled="true"
                                    id="pauseButton">
                                    <i class="fa fa-pause" aria-hidden="true"></i>
                                </button>
                                <button class="watch-buttons" title="stop" onclick="stop()" disabled="true"
                                    id="stopButton">
                                    <i class="fa fa-stop" aria-hidden="true"></i>
                                </button>
                                <button class="watch-buttons" title="reset" onclick="reset()" disabled="true"
                                    id="resetbutton">
                                    <i class="fa fa-ban" aria-hidden="true"></i>
                                </button>
                            </div>



                            <div class="form-group">
                                <label class="label-ls" for="exampleFormControlSelect1">client name:</label>
                                <select class="form-control input-ls" id="exampleFormControlSelect1">
                                    <option>Select Client</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="label-ls" for="exampleFormControlSelect1">assigned to:(staff)</label>
                                <select class="form-control input-ls" id="exampleFormControlSelect1">
                                    <option>Select Staff</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="label-ls" for="client">hourly rate:</label>
                                <input type="text" class="form-control input-ls" id="h-rate" placeholder="$0.00">
                            </div>

                            <div class="row justify-ontent-between">
                                <div class="col-6">
                                    <a href="#/">
                                        <button class="btn button-same-font form-buttons btn-block mr-0"
                                            type="button">cancel</button>
                                    </a>
                                </div>
                                <div class="col-6">
                                    <a href="#/">
                                        <button class="btn button-same-font save-now-button btn-block"
                                            type="button">apply
                                            charges</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>

        <!-- <img src="<?php echo base_url() . 'assets/'; ?>images/stop.png" class="img-fluid" alt=""> -->



    </div>



    <?php include('includes/bottom_links.php'); ?>

    <script>
        var numberSecond, numberCentisecond, numberMinute, numberHour,
            intervalCentiSecond, intervalSecond, intervalMinute, intervalHour;

        var playButton, pauseButton, stopButton, resetbutton,
            centisecondText, secondText, minuteText, hourText;

        playButton = document.getElementById("playButton");
        pauseButton = document.getElementById("pauseButton");
        stopButton = document.getElementById("stopButton");
        resetbutton = document.getElementById("resetbutton");

        centisecondText = document.getElementById("centisecond");
        secondText = document.getElementById("second");
        minuteText = document.getElementById("minute");
        hourText = document.getElementById("hour");

        $('.timer-yes').hide();
        function play() {

            playButton.disabled = true;
            pauseButton.disabled = false;
            stopButton.disabled = false;
            resetbutton.disabled = false;

            intervalCentiSecond = setInterval(centisecond, 10)
            intervalSecond = setInterval(second, 1000);
            intervalMinute = setInterval(minute, 60000);
            intervalHour = setInterval(hour, 3600000);
            $('.timer-not').hide();
            $('.timer-yes').show();
            $('.timer-pause').hide();
            $('.timer-reset').hide();
            $('.timer-stoped').hide();


        }
        $('.timer-pause').hide();
        function pause() {

            playButton.disabled = false;
            pauseButton.disabled = true;
            stopButton.disabled = false;
            resetbutton.disabled = false;

            clearInterval(intervalCentiSecond);
            clearInterval(intervalSecond);
            clearInterval(intervalMinute);
            clearInterval(intervalHour);
            $('.timer-pause').show();
            $('.timer-not').hide();
            $('.timer-yes').hide();
            $('.timer-reset').hide();
        }
        $('.timer-stoped').hide();
        function stop() {

            playButton.disabled = false;
            pauseButton.disabled = true;
            stopButton.disabled = true;
            resetbutton.disabled = false;

            hourText.innerHTML = "00";
            minuteText.innerHTML = "00";
            secondText.innerHTML = "00";
            centisecondText.innerHTML = "00";

            numberHour = 0;
            numberMinute = 0;
            numberSecond = 0;
            numberCentisecond = 0;

            clearInterval(intervalCentiSecond);
            clearInterval(intervalSecond);
            clearInterval(intervalMinute);
            clearInterval(intervalHour);
            $('.timer-stoped').show();
            $('.timer-pause').hide();
            $('.timer-not').hide();
            $('.timer-yes').hide();
            $('.timer-reset').hide();

        }


        $('.timer-reset').hide();
        function reset() {

            playButton.disabled = false;
            pauseButton.disabled = false;
            stopButton.disabled = true;
            resetbutton.disabled = true;

            hourText.innerHTML = "00";
            minuteText.innerHTML = "00";
            secondText.innerHTML = "00";
            centisecondText.innerHTML = "00";

            numberHour = 0;
            numberMinute = 0;
            numberSecond = 0;
            numberCentisecond = 0;

            clearInterval(intervalCentiSecond);
            clearInterval(intervalSecond);
            clearInterval(intervalMinute);
            clearInterval(intervalHour);
            $('.timer-reset').show();
            $('.timer-stoped').hide();
            $('.timer-pause').hide();
            $('.timer-not').hide();
            $('.timer-yes').hide();

        }

        numberHour = 0;

        function hour() {
            numberHour++;
            if (numberHour.toString().length == 1) { numberHour = "0" + numberHour; }
            else if (parseInt(numberHour) > 59) { numberMinute = "00"; }
            hourText.innerHTML = numberHour;
        }

        numberMinute = 0;

        function minute() {
            numberMinute++;
            if (numberMinute.toString().length == 1) { numberMinute = "0" + numberMinute; }
            else if (parseInt(numberMinute) > 59) { numberMinute = "00"; }
            minuteText.innerHTML = numberMinute;
        }

        numberSecond = 0;

        function second() {
            numberSecond++;
            if (numberSecond.toString().length == 1) { numberSecond = "0" + numberSecond; }
            else if (parseInt(numberSecond) > 59) { numberSecond = "00"; }
            secondText.innerHTML = numberSecond;
        }

        numberCentisecond = 0;

        function centisecond() {
            numberCentisecond++;
            if (numberCentisecond.toString().length == 1) { numberCentisecond = "0" + numberCentisecond; }
            else if (numberCentisecond.toString().length == 3) { numberCentisecond = "00"; }
            centisecondText.innerHTML = numberCentisecond;
        }
    </script>

</body>

</html>