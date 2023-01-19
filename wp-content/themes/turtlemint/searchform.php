<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="search-btn-left">
        <input type="search" class="search-field search-input-box" maxlength="30" value=""  name="s" placeholder="What are you looking for" />
    </div>
    <div class="search-btn-right">
        <input type="submit" class="search-submit search-btn-box" value="" />
        <style>.search-btn-right>input[type="submit"] { 
            background-image:url(<?php bloginfo('stylesheet_directory'); ?>/tm-assets/img/search.png);
            background-repeat: no-repeat;
            background-position: center; }</style>
    </div>
</form>