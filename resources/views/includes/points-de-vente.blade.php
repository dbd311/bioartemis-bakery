<div id="points_de_vente" style="display: none">
    <?php
    $locations = DB::select("SELECT * from selling_points");
    foreach ($locations as $loc) {
        echo "$loc->name|$loc->latitude|$loc->longitude::";
    }
    ?>
</div>


<div id="map_canvas"></div>

<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDDQ72RwwTH6EvseEATe9Fsc7RdkSyETj8&amp;sensor=false">
</script>
<script type="text/javascript">
    function initialize() {
        var latitude = 49.5;
        var longitude = 6.35;
        centre = new google.maps.LatLng(latitude, longitude);
        zoom = 8;

        // Carte centrée
        var myMapOptions = {
            zoom: zoom,
            center: centre,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            mapTypeControlStyle: google.maps.MapTypeControlStyle.DROPDOWN_MENU
        };

        // Création de la carte
        var myMap = new google.maps.Map(
                document.getElementById('map_canvas'),
                myMapOptions
                );

        // Création du Marker
        var image = new google.maps.MarkerImage("web/images/icons/marker.png", null, null, null, new google.maps.Size(25, 40));

        var liste = $('#points_de_vente').html().split('::');

        var i = 0;
        while (i < (liste.length - 1)) {
            liste[i] = liste[i].split('|');
            //alert(liste[i]);
            i++;
        }

        var infowindow = new google.maps.InfoWindow();

        var marker, i;
        var googleMapURI = "https://www.google.fr/maps/place/";
        for (i = 0; i < liste.length; i++) {
            marker = new google.maps.Marker({
                position: new google.maps.LatLng(liste[i][1], liste[i][2]),
                map: myMap,
                optimized: false,
                flat: true,
                icon: image
            });

            google.maps.event.addListener(marker, 'click', (function (marker, i) {
                return function () {
                    infowindow.setContent('<div style="text-align:center"><div style="color: #49b8e6"><b><a style="color: #35c9f1">' + liste[i][0] + '</a></b></div><div><a href="' + googleMapURI + getAddress(liste[i]) + '">Itinéraire</a></div></div>');
                    infowindow.open(myMap, marker);
                }
            })(marker, i));
        }


        // Affichage de la fenêtre au click sur le marker
        google.maps.event.addListener(marker, 'click', function () {
            myInfoWindow.open(myMap, marker);
        });
    }

    /**
     * 
     * @param {type} addr array of elements related to the address of a selling point
     * @returns {getAddress.addr|String}
     */
    function getAddress(addr) {
        var str = "";
        /** if (addr[0] !== null){
         str += "+" + addr[0]; // selling point name
         }*/

        if (addr[1] !== null) {
            str = addr[1]; // latitude
        }
        if (addr[2] !== null) {
            str += "+" + addr[2]; // longitude
        }


        return str;
    }
    initialize();
</script>