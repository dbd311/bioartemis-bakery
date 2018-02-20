<?php
$curPage = basename($_SERVER['PHP_SELF']);
//echo $curPage;
?>
<!-- sidebar nav -->
<!-- start header -->
<div class="header_bg">
    <div class="wrap">       
        <div id="content">
            <header id="topnav">
                <nav>
                    <ul>
                        <li <?php
                        if ($curPage == 'index.php') {
                            echo 'class="active"';
                        } else
                           
                            ?>><a href="/">Accueil</a></li>
                        <li <?php
                        if ($curPage == 'painbio') {
                            echo 'class="active"';
                        } else
                           
                            ?>><a href="/painbio">Pain bio</a></li>
                        <li <?php
                        if ($curPage == 'nos-pains') {
                            echo 'class="active"';
                        } else
                           
                            ?>><a href="/nos-pains">Nos pains</a></li>
                        <li <?php
                        if ($curPage == 'acheter') {
                            echo 'class="active"';
                        } else
                           
                            ?>><a href="/acheter">Acheter</a></li>
                        <li <?php
                        if ($curPage == 'photos-et-videos') {
                            echo 'class="active"';
                        } else
                           
                            ?>><a href="/photos-et-videos">Photos et vidéos</a></li>                               
                        <li <?php
                        if ($curPage == 'points-de-vente') {
                            echo 'class="active"';
                        } else
                           
                            ?>><a href="/points-de-vente">Points de vente</a>                            
                        </li>                               
                        <li <?php
                        if ($curPage == 'contact') {
                            echo 'class="active"';
                        }
                        ?>><a href="/contact">Contact</a></li>
                        <div class="clear"> </div>
                    </ul>


                </nav>
                <div class="logo"><a href="/"><img src="{{ asset('web/images/logo.png') }}"></a></div>
                <a href="#" id="navbtn">Nav Menu</a>
                <div class="clear"> </div>
            </header><!-- @end #topnav -->
            <script type="text/javascript"  src="web/js/menu.js"></script>
        </div>
    </div>
</div> <!-- end header -->
