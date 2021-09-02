<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <link rel="stylesheet" href="./css/mystyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<?php 
    $countries = array("Argentina"=>"ar", "Australia"=>"au", "Belgium"=>"be", "Brazil"=>"br", "Canada"=>"ca", "Switzerland"=>"ch", "China"=>"cn", "Colombia"=>"co", "Cuba"=>"cu", "Germany"=>"de", "Egypt"=>"eg", "France"=>"fr", "United Kingdom"=>"gb", "Greece"=>"gr", "Hong Kong"=>"hk", "Hungary"=>"hu", "Indonesia"=>"id", "Ireland"=>"ie", "Israel"=>"il", "India"=>"in", "Italy"=>"it", "Japan"=>"jp", "Korea"=>"kr", "Latvia"=>"lv", "Morocco"=>"ma", "Maxico"=>"mx", "Malaysia"=>"my", "Nigeria"=>"ng", "Netherlands"=>"nl", "Norway"=>"no", "New Zealand"=>"nz", "Philippines"=>"ph", "Poland"=>"pl", "Portugal"=>"pt", "Romania"=>"ro", "Russia"=>"ru", "Saudi Arabia"=>"sa", "Sweden"=>"se", "Singapore"=>"sg", "Thailand"=>"th", "Turkey"=>"tr", "Taiwan"=>"tw", "Ukraine"=>"ua", "United States"=>"us", "South Africa"=>"za");
        // https://newsapi.org/docs/endpoints/sources
        // http://www.1728.org/countries.htm
    ksort($countries);
    $category = "general";
    $countryName = "India";
    $country = "in";
    if(isset($_GET['category'])){
        $category = $_GET['category'];
    }
    if(isset($_GET['country'])){
        $country = $countries[$_GET['country']];
        $countryName = $_GET['country'];
    }

   

?>

<nav class="navbar navbar-dark bg-dark navbar-expand-sm fixed-top">
    <div class="container-fluid">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="align-items-center">
            <h3><span class="heading text-white">LIVE NEWS </span></h3>
        </div>
        <div class="nav-item dropdown bg-dark">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $countryName; ?>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" id="countryDropDown">
              <?php foreach ($countries as $key => $value) { ?>
              <a class="dropdown-item" value="<?php echo $value; ?>" href="<?php echo"index.php?category=".$category."&country=".$key; ?>" ><?php echo $key; ?></a>
              <?php } ?>
            </div>
        </div>
        <!-- <a class="navbar-brand mr-auto" href="#">   <img src="img/logo.jpg" height="30" width="41">   </a> -->
        <div class="collapse navbar-collapse" id="Navbar">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item" id="general"> <a class="nav-link" href="index.php?category=general"> <span class="fa fa-home fa-lg" id="general"></span> General</a> </li>
                <li class="nav-item" id="business"> <a class="nav-link" href="index.php?category=business"> <span class="fa fa-globe fa-lg"></span> Business </a> </li>
                <li class="nav-item" id="entertainment"> <a class="nav-link" href="index.php?category=entertainment"> <span class="fa fa-music fa-lg"></span> Entertainment</a> </li>
                <li class="nav-item" id="health"> <a class="nav-link" href="index.php?category=health"> <span class="fa fa-heartbeat fa-lg"></span> Health</a> </li>
                <li class="nav-item" id="science"> <a class="nav-link" href="index.php?category=science"> <span class="fa fa-flask fa-lg"></span> Science</a> </li>
                <li class="nav-item" id="sports"> <a class="nav-link" href="index.php?category=sports"> <span class="fa fa-gamepad fa-lg"></span> Sports</a> </li>
                <li class="nav-item" id="technology"> <a class="nav-link" href="index.php?category=technology"> <span class="fa fa-tv fa-lg"></span> Technology</a> </li>
            </ul>
           
            <span class="navbar-text">
                <a href="aboutus.php"> <span class="fa fa-info"></span> About Us</a>
            </span>
        </div>
    </div> 
</nav>

</body>
    
<script type="text/javascript">
    var category = "<?php echo $category; ?>";
    var element = document.getElementById(category);
    element.classList.add("active");
</script>
</html>
