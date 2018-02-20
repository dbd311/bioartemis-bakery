<ul class="nav navbar-nav">
    <li><a class="navbar-brand" href="/"><img class="logo" src="{{ asset('/web/images/small-logo.png') }}" alt="Bioartemis"></a></li>
    <li><a href="/dashboard">Accueil</a></li>        
    <li><a href="/dashboard/espace-client/mes-commandes">Mes commandes</a></li>    
    <li><a href="/dashboard/espace-client/mon-panier">Mon panier
            <?php
            $items = Cart::getContent();

            $n = sizeof($items);
            if ($n == 1) {
                echo '(' . $n . ' article)';
            } else if ($n > 1) {
                echo '(' . $n . ' articles)';
            }
            ?>
        </a></li>
</ul>
