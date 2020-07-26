<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Serif">
<style>
body {
    margin: 0px;
    background-color: #2C2F33;
}
p {
  text-align: center;
  font-size: 120px;
  padding: 0px;
  font-family: Serif;
  color: #FFFFFF;

}
.container {
    background-color: #23272A;
    margin: auto;
    width: 70%;
    margin-top: 100px;
    border-radius: 200px;
}

.title {
    text-align: center;
    font-size: 42px;
    font-family: Serif;
    color: #FFFFFF;
}
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #23272A;
   color: white;
   text-align: center;
   padding: 0px;
   font-family: Serif;
}
img {
    height: 120px;
    width: 120px;
}




</style>

</head>
<body>
<h1 class="title"><b><?php echo $_GET['name']?></b></h1>
<div class="container">
    <p id="demo"><img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/dae67631234507.564a1d230a290.gif" alt=""></p>
</div>

<div class="footer">
    <h3>© BitBiz.nl</h3>
</div>

<script>

<?php
if (empty($_GET['type'])) { echo "It's Empty!!!"; }
if (empty($_GET['name'])) { echo "It's Empty!!!"; }
if (empty($_GET['time'])) { echo "It's Empty!!!"; }


?>
var countDownDate = new Date("<?php echo $_GET['time']?>").getTime();

var x = setInterval(function() {

  
  var now = new Date().getTime();
    

  var distance = countDownDate - now;

  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  if (distance < 0) {
    clearInterval(x);
    $default = "Countdown ended"
    $countdown = "Countdown ended"
    $giveaway = "Giveaway ended"
    $newyear = "Happy 2021"
    $xmas = "Merry Xmas <br><img src='https://f.jwwb.nl/public/5/a/7/angie-feestdagen/re8msg/Tree.png'>"

    document.getElementById("demo").innerHTML = $<?php echo $_GET['type']?>;
  }
}, 1000);
</script>

</body>

</html>

<!-- URL: https://bitbiz.nl/countdown/countdown.php?type=countdown&name=Test Timer&time=Jul 26, 2020 15:11:00--!>
