<head>
<?php 
    session_start();
        include '../includes/head.php';
?>
<title>Ocean-Hued Clam - Akasha</title>
    

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
    --highlighted-color:#B09EF0 ; 
    --topnav-color:#E6E4EB ;
    --search-bar-precolour:#E6E4EB;
}
</style>

<body>
    <div class="container">
        <div class="overlay"></div>
        <div class="maincontent">
            <div class="content-container">
                <div class="banner" style="background-image: linear-gradient(to left, var(--highlighted-color), transparent 80%);">
                    <div class="splash-art">
                        <img src="../images/artifacts/Ocean-Hued-Clam/flower.png">
                    </div>
                    <div class="banner-detail-container">
                        <div class="banner-details">
                            <p class="banner-title">Ocean-Hued Clam </p>
                            <div class="banner-icons">
                                <img class="rarity" src="../images/icons/4-stars.png" alt="">
                                <img class="ghostrarity" src="../images/icons/5-stars.png" alt="">
                            </div>
                            <p class="banner-description">A soft flower that has taken on the many shades of the capricious ocean. It shines with wondrous colors under the moon's silver light.


                                
                            </p>
                        </div>
                    </div>
                </div>
                
                <?php
                    $query = mysqli_query($conn, "SELECT * FROM `artifacts` WHERE `url` = 'ocean-hued-clam' ") or die(mysqli_error());
                    while($fetch = mysqli_fetch_array($query)){
                ?>

                <div class="information">
                    <div class="forefront">
                        <div class="set-bonus-container">
                            <b>Set Bonus </b>                        
                            <div class="flex">
                                <p><b>2-Piece Set: </b> <?php echo $fetch['twopiece']?></p>
                            </div>
                            <div class="flex">
                                <p><b>4-Piece Set:</b> <?php echo $fetch['fourpiece']?></p>
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
    $("#ocean-hued-clam-button").addClass("active");
    $("#artifact-dropdown-icon").addClass("active-dropdown-icon");
    $("#artifact-dropdown-content").addClass("active-dropdown-content");
 });
</script>
<script type="text/javascript" src="../js/waves.min.js"></script>
<script type="text/javascript" src="../js/swiper.min.js"></script>
<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/uniscript.js"></script>

</body>


