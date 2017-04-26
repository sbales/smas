<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Video Gallery' order='4'>
        <cms:editable type='textarea' name='video1' label='YouTube Video 1' no_xss_check='1' height='100' />
        <cms:editable type='textarea' name='video2' label='YouTube Video 2' no_xss_check='1' height='100' /> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <cms:embed 'header.html' />
        <title>Gallery - Springfield Mid-America Singers</title>
        <link href="//cdn.rawgit.com/noelboss/featherlight/1.5.0/release/featherlight.min.css" type="text/css" rel="stylesheet" /> </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="body">
            <h1>Gallery</h1>
            <br>
            <h3>Video</h3>
            <div class="row">
                <div class="medium-6 column">
                    <cms:show video1 /> </div>
                <div class="medium-6 column">
                    <cms:show video2 /> </div>
            </div>
            <br>
            <h3>Audio</h3>
            <div class="row columns">
                <iframe width="100%" height="500px" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/275745017&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
            </div>
            <br>
            <h3>Photos</h3>
            <div class="row columns">
                <cms:pages masterpage="photo-gallery.php" startcount='1'> <a href="<cms:show gg_image />" data-featherlight="image"><img class="gallery-image" src="<cms:show gg_thumb />" title="<cms:show k_page_title />" /></a> </cms:pages>
            </div>
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="//cdn.rawgit.com/noelboss/featherlight/1.5.0/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>

    </html>
    <?php COUCH::invoke(); ?>