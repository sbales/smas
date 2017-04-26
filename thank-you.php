<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Thank You' hidden='1' order='100'> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <cms:embed 'header.html' />
        <title>Contact - Springfield Mid-America Singers</title>
    </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="body">
            <h1>Contact Us</h1>
            <cms:pages masterpage='index.php'>
                <div class="text-center"> <a class="small" href="<cms:link masterpage='advertising.php' />"><small>Advertising</small></a> | <a class="small" href="<cms:show audition_link />"><small>Auditions</small></a> | <a class="small" href="<cms:show scholarship_link />"><small>Scholarships</small></a> </div>
            </cms:pages>
            <h3 class="yellow">Message Sent</h3>
            <p class="lead">Thank you for your message.
                <br>Someone will be in touch with you shortly.</p><br><br>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>

    </html>
    <?php COUCH::invoke(); ?>