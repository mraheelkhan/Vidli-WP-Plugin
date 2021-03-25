<div class="wrap">
    <h1> Vidli Plugin Dashboard</h1>
    <?php settings_errors(); ?>

    <form method="POST" action="options.php">
        <?php
            settings_fields('vidli_options_group');
            do_settings_sections('vidli_plugin');
            submit_button();
        ?>
    </form>
</div>
