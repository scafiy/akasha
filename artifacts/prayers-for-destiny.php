<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Prayers for Destiny - Akasha</title>
    

</head>

<nav class="nav">
    <?php 
        include '../includes/nav.php';
    ?>
</nav>
<link rel="stylesheet" href="../css/navstyle.css">
<link rel="stylesheet" href="../css/artifactpagestyle.css">

<style>
:root {
    --highlighted-color: #3084FE; 
    --topnav-color:#DFE4EC ;
    --search-bar-precolour:#DFE4EC;
}
</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent 80%);">
                    <div class="splash-art">
                        <img src="../images/artifacts/Prayers-for-Destiny/flower.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Prayers for Destiny
 </p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/3-stars.png" alt="">
                                <img class="ghostrarity" src="../images/icons/4-stars.png" alt="">
                            </div>
                            <p class="banner-description">

                            A tiara worn by those tasked with offering sacrifices in ancient times. Because it was submerged in water year in and year out, it possesses remarkable resistance.


                                
                            </p>
                        </div>
                    </div>
                </div>
                
                <?php
                    $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `url` = 'prayers-for-destiny' ") or die(mysqli_error());
                    while($fetch = mysqli_fetch_array($query)){
                ?>

                <div class="information">
                    <div class="forefront">
                        <div class="set-bonus-container">
                            <b>Set Bonus </b>                        
                            <div class="flex">
                                <p><b>1-Piece Set: </b> <?php echo $fetch['twopiece']?></p>
                            </div>

                        </div>
                    </div>
                </div>

                <?php
                    }
                ?>


                

            </div>
        </div>
    </div>

    
<script type="text/javascript">
$(window).on("load", function() {
    $("#prayers-for-destiny-button").addClass("active");
    $("#artifact-dropdown-icon").addClass("active-dropdown-icon");
    $("#artifact-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>

</body>


