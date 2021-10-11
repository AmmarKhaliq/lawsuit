<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/toplinks.php'); ?>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:300);


        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        .left {
            float: left;
        }

        .right {
            float: right;
        }

        .monthname {
            width: 18em;
        }

        .pointer {
            cursor: pointer;
            user-select: none;
        }



        .header {
            border-bottom: 1px solid #ddd;
            padding: .5em;
            margin-bottom: .5em;
        }

        .group:after {
            content: "";
            display: table;
            clear: both;
        }

        .calendar p {
            line-height: 1.5em;
            margin: 0;
            color: #444;
        }

        .calendar {
            background: #fff;
            color: #777;
            padding: 0;
            max-width: 20em;
            min-height: 15em;
            margin: .5em auto;
        }

        .calendar li {
            float: left;
            width: calc(100% / 7);
            text-align: center;
            padding: 0.5em 0;
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 500;

        }

        .calendar li.empty {
            pointer-events: none;
        }

        .calendar li:hover {
            color: #ebeef4;
        }

        .calendar li.active,
        .calendar li.active:hover {
            background-color: #ebeef4;
            color: #000000;
            border-radius: 50px;
        }

        .calendar li:nth-child(-n+7) {
            color: #c4cad2;
            text-transform: uppercase;
        }

        .dats-li::before {
            color: #0a56e4;
            content: '';
            display: inline-block;
            width: 15px;
            height: 15px;
            -moz-border-radius: 7.5px;
            -webkit-border-radius: 7.5px;
            border-radius: 7.5px;
            background-color: #69b6d5;
        }

        .center {
            text-align: center;
        }
    </style>

</head>

<body>
    <?php include('includes/navigation.php'); ?>



    <div class="main-bg-div-all">

        <div class="row mb-3 mt-4">
            <div class="col-12">
                <div class="d-flex flex-column flex-md-row justify-content-end">

                <a href="<?php echo base_url() . 'site/yourfirm'; ?>" class="mr-5 text-decoration-none">
                    <button class="btn new-add-book">Firm Schedule</button>
                </a>

                    <a href="#/" class="text-decoration-none mr-2">
                        <button class="btn button-ls-finance btn-width">View</button>
                    </a>
                    <a href="#/" class="text-decoration-none mr-2">
                        <button class="btn button-ls-finance btn-width ">Options</button>
                    </a>
                    <a href="#/" class="text-decoration-none mr-2">
                        <button class="btn button-ls-finance btn-width ">stylesheets</button>
                    </a>

                    <a href="#/" class="text-decoration-none mr-2">
                        <button class="btn button-ls-finance btn-width ">info</button>
                    </a>

                    <a href="#/" class="text-decoration-none mr-2">
                        <button class="btn button-ls-finance btn-width ">save as image</button>
                    </a>
                </div>

            </div>
        </div>

        <div class="row">

            <?php for($i=0; $i <= 8; $i++) { ?>
            <div class="col-12 col-md-4">
                <div class="calendar rounded">
                    <div class="group header d-none">
                        <p class="left pointer minusmonth">&laquo;</p>
                        <!-- <p class="left monthname center pointer"></p> -->
                        <p class="right pointer addmonth">&raquo;</p>
                    </div>
                    <ul class="group pt-3 ">
                        <li>Mo</li>
                        <li>Tu</li>
                        <li>We</li>
                        <li>Th</li>
                        <li>Fr</li>
                        <li>Sa</li>
                        <li>Su</li>
                    </ul>
                </div>
            </div>
            <?php } ?>

        </div>



    </div>











    <?php include('includes/bottom_links.php'); ?>

    <script>
        var themonth = 1;
        renderCal(themonth);

        $('.minusmonth').click(function () {
            themonth += -1;
            renderCal(themonth);
        });

        $('.addmonth').click(function () {
            themonth += 1;
            renderCal(themonth);
        });

        function renderCal(themonth) {
            $('.calendar li').remove();
            $('.calendar ul').append('<li>Mo</li><li>Tu</li><li>We</li><li>Th</li><li>Fr</li><li>Sa</li> <li>Su</li>');
            var d = new Date(),
                currentMonth = d.getMonth() + themonth, // get this month
                days = numDays(currentMonth, d.getYear()), // get number of days in the month
                fDay = firstDay(currentMonth, d.getYear()) - 1, // find what day of the week the 1st lands on
                months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']; // month names

            $('.calendar p.monthname').text(months[currentMonth - 1]); // add month name to calendar

            for (var i = 0; i < fDay - 1; i++) { // place the first day of the month in the correct position
                $('<li class="empty">&nbsp;</li>').appendTo('.calendar ul');
            }

            for (var i = 1; i <= days; i++) { // write out the days
                $('<li class="dates-li">' + i + '</li>').appendTo('.calendar ul');
            }

            function firstDay(month, year) {
                return new Date(year, month, 1).getDay();
            }

            function numDays(month, year) {
                return new Date(year, month, 0).getDate();
            }

            $('.calendar li').click(function () {
                $('.calendar li').removeClass('active');
                $(this).addClass('active');
            });
        }
    </script>



</body>

</html>