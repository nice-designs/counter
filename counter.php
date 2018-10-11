<?php
$now = time();

global $args;


$endDate = $args[0] . ' ' . $args[1] . ', ' . $args[2] . ' ' . $args[3];

if (strtotime($endDate) > $now) { ?>

    <style>
        #section-two, #counter{
            display: block;
        }
    </style>
    <script>
        $(".new-footer-style").addClass('padding-bottom-190');
        var php_date="<?php echo $args[0] . ' ' . $args[1] . ', ' . $args[2] . ' ' . $args[3]?>";
        // Set the date we're counting down to
        var countDownDate = new Date(php_date).getTime();

        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="demo"
            var clock = document.getElementById('clockdiv');
            var daysSpan = clock.querySelector('.days');
            var hoursSpan = clock.querySelector('.hours');
            var minutesSpan = clock.querySelector('.minutes');
            var secondsSpan = clock.querySelector('.seconds');

            daysSpan.innerHTML = days.toString();
            hoursSpan.innerHTML = ('0' + hours).slice(-2);
            minutesSpan.innerHTML = ('0' + minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + seconds).slice(-2);
        }, 1000);
    </script>
<?php } else { ?>
    <style>
        #section-two{
            display: block;
        }
        #counter, #reserve {
            display: none;
        }

        .width-50 {
            width: 50%;
            margin: 0 auto !important;
            float: none !important;
        }

        .width-50-nav-tabs{
            margin: 0 auto 40px;
            float: none !important;
        }

        #section-two #agenda.col-md-6{
            width: 100%;
        }

        @media (min-width: 992px) {
            .width-50-nav-tabs{
                width: 50%;
            }
        }

        @media (max-width: 991px) {
            .width-50 {
                width: 100%;
            }
        }
    </style>
    <script>
        $(".new-footer-style").addClass('padding-bottom-60');
    </script>
<?php } ?>


