@extends('dashboard.espace-admin.layouts.default')

@section('title')
<title>Back-office | Nos pains</title>
@stop

@section('main-content')

<script src="{{ asset('/js/jquery-1.9.1.min') }}"></script>
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
        <li class="active"><a href="#tab1" class="tab-links-a">Consulter les pains</a></li>        
        <li><a href="#tab2" class="tab-links-a">Ajouter un nouveau pain</a></li>        
    </ul>


    <div class="tab-content">
        <div id="tab1" class="tab active"> <!-- tab 1 : gestion de pains -->

            @include('includes.nos-pains')
        </div> <!-- end tab 1 : gestion de pains -->

        <div id="tab2" class="tab"> <!-- tab 2: ajout d'un nouveau pain-->
            @include('dashboard.espace-admin.includes.ajout-pain')
        </div> <!-- end tab 2 : ajout d'un nouveau pain -->
    </div> <!-- end div tab content -->	
</div> <!-- end div tabs -->
@stop