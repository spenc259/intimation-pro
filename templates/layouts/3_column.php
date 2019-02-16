<section class="<?php echo $row['row_class']; ?>">
<div class="container">
    <div class="row bucket mb-4">
        <?php foreach ( $row['pick_a_module'] as $module ) : ?>
            <div class="col-4">
                <?php include( locate_template( 'templates/modules/' . $module['acf_fc_layout'] . '.php' ) ); ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>
</section>