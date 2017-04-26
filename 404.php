<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='404' hidden='1' order='100'> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <cms:embed 'header.html' />
        <title>Springfield Mid-America Singers</title>
    </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="body">
            <h1>404 ERROR</h1>
            <br>
            <br>
            <p class="lead"> We aren't sure where that is. Perhaps that's been put into storage .... </p>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>

    </html>
    <?php COUCH::invoke(); ?>