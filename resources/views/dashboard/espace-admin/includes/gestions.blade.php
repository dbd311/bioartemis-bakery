<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script>

    jQuery(document).ready(function () {
        jQuery('.tabs .tab-links a').on('click', function (e) {
            var currentAttrValue = jQuery(this).attr('href');

            // Show/Hide Tabs
            jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

            // Change/remove current tab to active
            jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

            e.preventDefault();
        });
    });
</script>


<div class="tabs">
    <ul class="tab-links">              
        <li><a href="#tab1" class="tab-links-a">Gestion de pains</a></li>        
        <li><a href="#tab2" class="tab-links-a">Gestion de clients</a></li>
        <li><a href="#tab3" class="tab-links-a">Gestion de commandes</a></li>        
    </ul>

    <div class="tab-content">

        <!-- div id="tab1" class="tab active" --> <!-- general -->			
        <!-- /div --> <!-- end tab 1: general -->

        <div id="tab1" class="tab active"> <!-- tab 1 : gestion de pains -->
            <div><a href="/dashboard/espace-admin/nos-pains">Consulter les pains</a></div>
            <div><a href="/dashboard/espace-admin/ajouter-pain">Ajouter un nouveau pain</a></div>
        </div> <!-- end tab 1 : gestion de pains -->

        <div id="tab2" class="tab"> <!-- tab 2: gestion de clients -->
            @include('dashboard.nos-clients.main')
        </div> <!-- end tab 2 : gestion de clients -->

        <div id="tab3" class="tab"> <!-- tab 3: gestion de commandes -->
            @include('dashboard.nos-commandes.main')
        </div> <!-- end tab 3 : gestion de commandes -->

    </div> <!-- end div tab content -->	
</div> <!-- end div tabs -->
