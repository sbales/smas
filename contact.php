<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Contact' hidden='1' order='100'> </cms:template>
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
                <div class="text-center">
                    <cms:if advertising_btn=='yes'> <a class="small" href="<cms:link masterpage='advertising.php' />"><small>Advertising</small></a> |
                        <cms:else /><a class="small muted" href="<cms:link masterpage='advertising.php' />"><small>Advertising</small></a> | </cms:if>
                    <cms:if audition_btn=='yes'> <a class="small" href="<cms:link masterpage='audition.php' />"><small>Auditions</small></a> |
                        <cms:else /><a class="small muted" href="<cms:show audition_link />"><small>Auditions</small></a> | </cms:if>
                    <cms:if scholarship_btn=='yes'> <a class="small" href="<cms:show scholarship_link />"><small>Scholarships</small></a>
                        <cms:else /><a class="small muted" href="<cms:show scholarship_link />"><small>Scholarships</small></a></cms:if>
                </div>
            </cms:pages>
            <cms:pages masterpage='about.php'>
                <div class="row">
                    <div class="small-8 columns text-left">
                        <p>Address:</p>
                        <small><cms:show address /><br><cms:show city />, <cms:show state /> <cms:show zip_code /></small>
                    </div>
                    <div class="small-4 columns text-right">
                        <p> Phone:</p>
                        <small>
                            <cms:show phone_number /> </small>
                    </div>
                </div><br>
            </cms:pages>
            <h3 class="secondary-text">Send us a Message</h3>
            <form action="https://my.bluehost.com/bluemail" enctype="multipart/form-data" method="POST">
                <input type="hidden" name="sendtoemail" value="contact@smasingers.org" />
                <input type="hidden" name="subject" value="You have a new message from the SMASingers website." />
                <input type="hidden" name="mailfrom" />
                <input type="hidden" name="redirect" value="<cms:link masterpage='thank-you.php' />">
                <div class="row">
                    <div class="medium-6 columns">
                        <input type="text" class="form-control" name="Name:" id="name" placeholder="Your Name" /> </div>
                    <div class="medium-6 columns">
                        <input type="email" class="form-control" name="Email:" placeholder="Your Email" required> </div>
                </div>
                <div class="row columns">
                    <textarea class="form-control" name="Message:" rows="3" placeholder="Your Message" required></textarea>
                    <input type="submit" value="Send" class="button secondary"> </div>
            </form>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>

    </html>
    <?php COUCH::invoke(); ?>