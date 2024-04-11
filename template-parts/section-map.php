<section class="section-map">
    <?php
        $mapMarkers = '[';
        $mapMarkers .= '{"coords": [55.026324, 82.917016], "type": "main", "iconSize": [80, 120], "iconOffset": [-40, 120], "iconUrl": "'.  esc_url(get_template_directory_uri()) . '/assets/images/map-marker.webp", "infoWindowText": "г. Новосибирск, ул. Советская, д.23, оф.403"}';
        $mapMarkers .= ']';
    ?>

    <div
        class="map" 
        data-map-marker='<?php echo $mapMarkers; ?>'
        data-map-center="<?php echo '[55.026324, 82.918516]'; ?>" 
        data-map-zoom="16"
    ></div>
</section>