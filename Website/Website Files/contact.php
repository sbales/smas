<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Contact'>
        <cms:editable name='audition_menu' label='Auditions' desc='Choose disable if the auditon season is currently closed for the year.' opt_values='enabled|disabled' type='radio' />
        <cms:editable name='advertising_menu' label='Advertising' desc='Choose disable if the advertising season is currently closed for the year.' opt_values='enabled|disabled' type='radio' />
        <cms:editable name='scholarship_menu' label='Scholarships' desc='Choose disable if the scholarship season is currently closed for the year.' opt_values='enabled|disabled' type='radio' /> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Page Information-->
        <title>Contact Us - Springfield Mid-America Singers</title>
        <meta name="description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances.">
        <meta name="author" content="Springfield Mid-America Singers">
        <meta name="keywords" content="Springfield, Missouri, Singers, Singing, Mid-America, Choir, Choral,">
        <!--Social Media Information-->
        <meta property="og:title" content="Contact Us" />
        <meta property="og:site_name" content="Springfield Mid-America Singers" />
        <meta property="og:description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances." />
        <meta property="article:author" content="Springfield Mid-America Singers" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<cms:link masterpage='contact.php' />" />
        <meta property="og:image" content="<cms:show k_site_link />images/stacked-staff_Black.png" />
        <!--Favicons-->
        <link rel="apple-touch-icon" sizes="180x180" href="<cms:show k_site_link />favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="<cms:show k_site_link />favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<cms:show k_site_link />favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<cms:show k_site_link />favicon/manifest.json">
        <link rel="mask-icon" href="<cms:show k_site_link />;favicon/safari-pinned-tab.svg" color="#000000">
        <link rel="shortcut icon" href="<cms:show k_site_link />favicon/favicon.ico">
        <meta name="msapplication-config" content="<cms:show k_site_link />favicon/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <!--stylesheets-->
        <link href="<cms:show k_site_link />css/style.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet"> </head>

    <body>
        <div class="page-wrap">
            <cms:embed 'nav-bar.html' />
            <div class="container main-content" data-pg-name="Main Content">
                <h1 class="h1-pagetitle">Contact Us</h1>
                <div class="container second-navbar">
                    <div class="btn-group"> <a class="btn btn-link contact-link btn-sm <cms:show audition_menu />" href="<cms:link masterpage='auditions.php' />">Auditions</a> <a class="btn contact-link btn-link btn-sm <cms:show advertising_menu />" href="<cms:link masterpage='advertising.php' />" target="_self">Advertising</a> <a class="btn btn-link contact-link btn-sm <cms:show scholarship_menu />" href="<cms:link masterpage='scholarship.php' />">Scholarships</a> </div>
                </div>
                <h3 class="h3-smallheading">Send us a Message</h3>
                <form action="https://my.bluehost.com/bluemail" enctype="multipart/form-data" method="POST">
                    <input type="hidden" name="sendtoemail" value="contact@smasingers.org" />
                    <input type="hidden" name="subject" value="You have a new message from the SMASingers website." />
                    <input type="hidden" name="mailfrom" />
                    <input type="hidden" name="redirect" value="http://www.smasingers.org">
                    <div class="col-lg-6 col-md-6 col-sm-6 form-column-left">
                        <input type="text" class="form-control" name="Name:" id="name" placeholder="Your Name" /> </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 form-column-right">
                        <input type="email" class="form-control" name="Email:" placeholder="Your Email" required> </div>
                    <textarea class="form-control" name="Message:" rows="3" placeholder="Your Message" required></textarea>
                    <input type="submit" value="Send" class="btn btn-primary form-btn"> </form>
            </div>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <script src="<cms:show k_site_link />js/bootstrap.min.js"></script>
    <script src="<cms:show k_site_link />js/jquery-3.1.1.min.js"></script>
    <cms:embed 'google.html' />

    </html>
    <?php COUCH::invoke(); ?>