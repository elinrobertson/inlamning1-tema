<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <div>
        <input type="text" value="<?php echo '' ?> "name="s" id="s"/>
        <input type="submit" id="searchsubmit" value="<?php echo esc_attr_x('Sök', 'submit button'); ?>"/>
    </div>
</form>
