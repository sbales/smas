<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Contract Recieved' hidden='1' order='100'> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <cms:embed 'header.html' />
        <title>Advertising - Springfield Mid-America Singers</title>
    </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="body">
            <h1>Advertising Contract</h1>
            <br>
            <p class="lead">Your Contract has been recieved!</p>
            <p>If any additional information is needed we will be in touch.
                <br><b>If you have any questions or concerns please <a href="mailto:advertising@smasingers.org">email our advertising coordinator.</a></b></p>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    
        <?php COUCH::invoke(); ?>