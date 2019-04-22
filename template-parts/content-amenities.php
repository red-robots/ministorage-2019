<div class="features-amenities clear">
    <?php  
    $args = array(
        'posts_per_page'   => -1,
        'post_type'        => 'location',
        'post_status'      => 'publish',
        );
    $locations = get_posts($args);
    $headings = array(
            "Storage Location",
            "Indoor Storage Available?",
            "Climate Controlled Storage?",
            "Office/ Warehouse Space Available?",
            "Truck, RV, and/or Motorcycle Parking?",
            "24/7 Access?",
            "Packing Supplies Available?",
            "Uhaul/ Moving Truck Rentals Available?",
            "Online Payment Option Available?",
            "Manager Lives On Site?"
        );
    ?>

    <?php if($locations) { ?>
    <div class="location-selections">
        <div class="locationLinksDiv" style="display:none">
        <?php $n=1; foreach ($locations as $loc) { ?>
            <a class="locationLink link_location<?php echo $n; ?>" href="#location<?php echo $n; ?>"><?php echo $loc->post_title; ?></a>
        <?php $n++; } ?>
        </div>
        <select id="location_selections">
            <option value="">Select Location...</option>
            <?php $n=1; foreach ($locations as $loc) { ?>
                <option value="location<?php echo $n; ?>"><?php echo $loc->post_title; ?></option>
            <?php $n++; } ?>
        </select>
    </div>
    <div class="table-wrapper clear desktop-view">
        <table data-role="table" id="amenities-table" data-mode="reflow" class="ui-responsive table table-style amenities">
            <thead>
                <tr>
                    <?php $h=1; foreach ($headings as $label) { 
                        $priority = ($h==1) ? "persist":$h; ?>
                        <th data-priority="<?php echo $priority?>" class="hcol<?php echo $h?>"><?php echo $label ?></th>
                    <?php $h++; } ?>
                </tr>
            </thead>
            <tbody>
                <?php $ctr=1; foreach ($locations as $row) { 
                    $pid = $row->ID;
                    $location_name = $row->post_title;
                    $location_link = get_permalink($pid);
                    $indoor_storage = get_field('indoor_storage',$pid);
                    $climate_controlled_storage = get_field('climate_controlled_storage',$pid);
                    $office_warehouse_space_available = get_field('office_warehouse_space_available',$pid);
                    $truck_rv_motorcycle_parking = get_field('truck_rv_motorcycle_parking',$pid);
                    $access247 = get_field('access',$pid);
                    $packing_supplies_available = get_field('packing_supplies_available',$pid);
                    $truck_rentals = get_field('truck_rentals',$pid);
                    $online_reservations = get_field('online_reservations',$pid);
                    $online_payment = get_field('online_payment',$pid);
                    $manager_lives = get_field('other_amenities',$pid);
                    $contents = array(
                            $location_name,
                            $indoor_storage,
                            $climate_controlled_storage,
                            $office_warehouse_space_available,
                            $truck_rv_motorcycle_parking,
                            $access247,
                            $packing_supplies_available,
                            $truck_rentals,
                            $online_payment,
                            $manager_lives
                        );
                    $rowClass = ( $ctr % 2 ) ? 'odd':'even';
                    ?>
                    <tr id="location<?php echo $ctr?>" class="row-<?php echo $ctr?> <?php echo $rowClass ?>">
                    <?php $col=1; foreach ($headings as $k=>$colname) {
                        $is_available = ( isset($contents[$k]) && $contents[$k] ) ? true : false; ?>
                        <td class="bcol<?php echo $col?>">
                            <b class="ui-table-cell-label"><?php echo $colname ?></b>
                            <?php if($col==1) { ?>  
                                <a href="<?php echo $location_link; ?>"><?php echo $contents[$k]; ?></a>
                            <?php } else { ?>
                                <?php if ( $is_available ) { ?>
                                    <span class="stat-icon check"><i class="fas fa-check"></i></span>
                                <?php } else { ?>
                                    <span class="stat-icon ex"><i class="fas fa-times"></i></span>
                                <?php } ?>
                            <?php } ?>
                        </td>
                    <?php $col++; } ?>
                    </tr>
                <?php $ctr++; } ?>
                
            </tbody>
        </table>
    </div>
    <?php } ?>
</div>