@extends('layouts.default')
@section('content')
@include('includes.slider')

<!-- ********** start-service ********** -->
<div  class="sevice" id="service">
    <div class="wrap">
        <div class="service-grids">
            <div class="images_1_of_4">                        
                <h3>Pain bio</h3>
                <p>Tous mes pains biologiques sont à base de farine bio, d’eau pure dynamisée, de pur levain et de sel de Camargue ou de Guérande. Aucun additif n’est ajouté. Ils sont tous façonnés à la main.</p>
                <div><a href="painbio"><input class="btn btn-primary" type="button" value="Plus d'informations ..."></a></div>
            </div>
            <div class="images_1_of_4">                        
                <h3>Mes spécialités</h3>
                <p>Le Pain Bio-Artémis vous propose 7 gammes de produits : Pains Bio (classiques au blé, spéciaux et bien-être), Pâtisseries, Produits du Traiteur, Produits de fêtes, ainsi que les produits du rayon Épicerie.</p>
                <div><a href="nos-pains"><input class="btn btn-primary" type="button" value="Plus d'informations ..."></a></div>
            </div>                    
            <div class="images_1_of_4">                        
                <h3>Où trouver mon pain bio</h3>
                <p>Si vous vous intéressez à déguster du pain bio, veuillez me téléphoner au (+33) (0)9 51 95 60 45 ou (+33) (0)6 05 48 11 50. Le siège mère se trouve au 4 La Grande Rue 55400 Rouvres-En-Woëvre.</p>
                <div><a href="points-de-vente"><input class="btn btn-primary" type="button" value="Plus d'informations ..."></a></div>
            </div>
            <div class="images_1_of_4">                        
                <h3>Actualités</h3>
                <p>Découvrez nos produits et notre savoir-faire lors des Salons et Foires pendant toute l’année. Suivez également nos actualités sur les réseaux sociaux.</p>
                
                <div class="social_2 social_3">	
                    <ul>	
                        <li class="facebook"><a href="https://www.facebook.com/bioartemis/"><span> </span></a></li>
                        <li class="twitter"><a href="#"><span> </span></a></li>
                        <li class="google"><a href="https://plus.google.com/106677314776553203814/about?hl=fr"><span> </span></a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
    <!-- ********** end-service ********** -->

    <!-- ********** start-portfolio ********** -->
    <div class="portfolio_main" id ="portfolio">
        <div class="wrap">
            <div class="heading_h">
                <h1>Fournil Bioartemis</h1>
            </div>
            <!-- start-mfp -->
            <div id="small-dialog1" class="mfp-hide">
                <div class="pop_up">
                    <img src="web/images/pop1.jpg" alt="Petite histoire du pain bio Bioartemis" title="Ostéopathie et Adultes"/>
                    <h2>Petite histoire</h2>
                    <p>Située dans une jolie commune à Rouvres-en-Woëvre dans le département de la Meuse en région Lorraine et à 30 kms de Metz, la boulangerie Bio-Artémis a été crée en Juillet 2000. Elle propose toute une gamme de pains biologiques au levain pur, c’est à dire sans la moindre adjonction de levures de boulanger.</p>
                    <p class="pop_p">Je souhaite vous faire découvrir, au travers d’un feu de bois, d’un geste de la main, d’un lieu dans la montagne... une volonté de réaliser et d’assumer des choix, une histoire en devenir et surtout une envie de vous faire partager le bon goût du pain 100% bio.</p>
                </div>

            </div>
            <div id="small-dialog2" class="mfp-hide">
                <div class="pop_up2">
                    <img src="web/images/pop2.jpg" alt="Pain bio au levain à l'ancienne de la Lorraine" title="pain bio au levain pur"/>
                    <h2>Pain bio de la Lorraine</h2>
                    <p>Nos pains bio sont à base de levain pur et constitués uniquement des 3 ingrédients naturels que sont l'eau, la farine bio et le sel et comme l'écrivait M. Malouin en 1767 : "le pain est une production de l'art d'autant plus belle, qu'elle est plus simple", je pense que cette phrase est encore vraie aujourd'hui, si ce n'est encore davantage, c'est donc pourquoi nous n'utilisons absolument aucun additif dans nos fabrications.</p>
                    <p>Les pains bio ne sont pas notre seule fabrication, vous pourrez également trouver les produits biologiques, tous certifiés Agriculture Biologique et fabriqués chez nous.</p>
                </div>
            </div>
            <div id="small-dialog3" class="mfp-hide">
                <div class="pop_up3">
                    <img src="web/images/pop3.jpg" alt="Une bonne pâte pour un bon pain" title="pain bio"/>
                    <h2>Une bonne pâte pour un pain délicieux</h2>
                    <p>Un pain de qualité biologique contient toujours au moins 95% d'ingrédients d'origine agricole biologique. Les additifs de fabrication de synthése sont interdits. Notre production est certifiée"bio" par un organisme indépendant agrée, qui délivre un certificat permettant d'appliquer le logo AB à nos produits.</p>
                    <p>Le pain de campagne, fabriqué à partir d'une farine traditionnelle de type 65, est source de fibres et de phosphore.</p>
                </div>
            </div>
            <div id="small-dialog4" class="mfp-hide">
                <div class="pop_up4">
                    <img src="web/images/pop4.jpg" alt="Ostéopathie et Enfants" title="Ostéopathie et Enfants"/>
                    <h2>Panier de pain bio</h2>
                    <p>Pour toute commande de panier de pain, Bioartemis vous garantit une livraison des produits biologiques locaux sur place ou à votre domicile.<p>                    
                </div>
            </div>
            <div id="small-dialog5" class="mfp-hide">
                <div class="pop_up5">
                    <img src="web/images/pop5.jpg" alt="Ostéopathie et Nourrissons" title="Ostéopathie et Nourrissons"/>
                    <h2> Le meilleur pain Bio de toute la région</h2>
                    <p>Magasin et fournil local, production locale le tout en mode biologique; Certification par Ecocert; livraison de magasins, fermes. Présence sur marchés du terroir et fêtes locales..</p>
                </div>
            </div>
            <div id="small-dialog6" class="mfp-hide">
                <div class="pop_up6">
                    <img src="web/images/pop6.jpg" alt="Ostéopathie et Handicap" title="Ostéopathie et Handicap" />
                    <h2>Bioartemis - pain artisanal 100 % bio</h2>
                    <p>Le fournil Bioartemis est issu d'une longue histoire faite de rencontres et du besoin de vivre l'écologie de manière concrète. Ce fournil est né de la force de deux femmes désireuses pour l'une de donner de son temps à la réalisation d'un rêve, pour l'autre d'amorcer un métier la mettant au contact de la Terre nourricière et des Hommes et femmes qui la font (re)vivre. .</p>                    
                </div>
            </div>				 
            <!-- end-mfp -->	
        </div>
        <!-- start-content -->
        <div class="gallery">
            <div class="container">
                <div id="gallerylist">
                    <div class="gallerylist-wrapper">				
                        <a class="popup-with-zoom-anim" href="#small-dialog1">
                            <img src="web/images/gd1.jpg" alt="Ostéopathie et Adultes" title="Ostéopathie et Adultes" />
                        </a>
                    </div>
                    <div class="gallerylist-wrapper">				
                        <a class="popup-with-zoom-anim" href="#small-dialog2">
                            <img src="web/images/gd2.jpg"  alt="Ostéopathie et Sportifs" title="Ostéopathie et Sportifs"/>
                        </a>
                    </div>
                    <div class="gallerylist-wrapper">				
                        <a class="popup-with-zoom-anim" href="#small-dialog3">
                            <img src="web/images/gd3.jpg"  alt="Ostéopathie et Femmes Enceintes" title="Ostéopathie et Femmes Enceintes"/>

                        </a>
                    </div>
                    <div class="clear"></div>
                </div>		
                <div id="gallerylist1">
                    <div class="gallerylist-wrapper">				
                        <a class="popup-with-zoom-anim" href="#small-dialog4">
                            <img src="web/images/gd4.jpg" alt="Ostéopathie et Enfants" title="Ostéopathie et Enfants"/>
                        </a>
                    </div>
                    <div class="gallerylist-wrapper">				
                        <a class="popup-with-zoom-anim" href="#small-dialog5">
                            <img src="web/images/gd5.jpg"  alt="Ostéopathie et Nourissons" title="Ostéopathie et Nourissons"/>

                        </a>
                    </div>
                    <div class="gallerylist-wrapper">				
                        <a class="popup-with-zoom-anim" href="#small-dialog6">
                            <img src="web/images/gd6.jpg"  alt="Ostéopathie et Handicap" title="Ostéopathie et Handicap"/>
                        </a>
                    </div>
                    <div class="clear"> </div>
                    <!-- div class="button_1"><span><a href="#">See all works</a></span></div -->
                </div>																													            </div>
            <!-- end container -->
            <script src="web/js/jquery.magnific-popup.js" type="text/javascript"></script>
            <script>
                $(document).ready(function () {
                    $('.popup-with-zoom-anim').magnificPopup({
                        type: 'inline',
                        fixedContentPos: false,
                        fixedBgPos: true,
                        overflowY: 'auto',
                        closeBtnInside: true,
                        preloader: false,
                        midClick: true,
                        removalDelay: 300,
                        mainClass: 'my-mfp-zoom-in'
                    });
                });
            </script>

        </div>
    </div>
</div>
<!-- ********** end-portfolio ********** -->

<!-- ********** start-team ********** -->
<div class="section" >
    <div class="wrap">
        <div class="heading_h">
            <h3><a id="votre-boulangere">DESCRIPTIF PATRONNE ET EQUIPE</a></h3>
        </div>
        <p class="float-right-img"><img src="web/images/painbio/bioartemis.jpg" alt="Pain bio artemis" title="Le pain bio en Lorraine"></p>
        <div class="snippet">

            <div>

                <p>Le fournil Bioartémis est le résultat de l'envie de retrouver des aliments simples et bons à la santé.

                    Au départ, l'envie est de permettre de passer de la terre à l'assiette. L'aventure démarre en 2010 avec

                    juste l'art du pain.</p>

                <p>Autodidacte, la boulangère crée ses propres levains­chefs, sans levure de boulanger. Il faudra 6 mois de

                    patience avant d'obtenir une levain tonique.</p>

                <p>Il faudra 5 ans avant d'obtenir des pains moelleux, experiences aidant var aucun soutien, même théorique,

                    n'ont permis une progrssion plus rapide.</p>

                Aujourd'hui Artemis est forte d'un savoir­faire en constante amélioration ( travail sans gluten aussi ) et

                s'entoure de trois personnes salariées motivées par la jeunesse d'une entreprise rurale et dynamique.
            </div>
        </div>
    </div>
</div>
<!-- ********** end-team ********** -->

@include('includes.points-de-vente')
@stop