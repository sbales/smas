<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='About Us' order='2'>
        <cms:editable name='mission_statement' type='textarea' label='Mission Statement' />
        <cms:editable name='conductor_group' label='Conductor/Artistic Director' type='group' />
            <cms:editable name='conductor' type='text' label='Conductor' group='conductor_group' />
            <cms:editable name='conductor_desc' type='nicedit' label='About the Conductor' group='conductor_group' />
            <cms:editable name='conductor_image' type='image' lable='Conductor Image' show_preview='1' preview_width='150' group='conductor_group' /> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Page Information-->
        <title>About Us - Springfield Mid-America Singers</title>
        <meta name="description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances.">
        <meta name="author" content="Stevie Bales">
        <meta name="keywords" content="Springfield, Missouri, Singers, Singing, Mid-America, Choir, Choral,">
        <!--Social Media Information-->
        <meta property="og:title" content="About Us" />
        <meta property="og:site_name" content="Springfield Mid-America Singers" />
        <meta property="og:description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances." />
        <meta property="article:author" content="Springfield Mid-America Singers" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<cms:link masterpage='about.php' />" />
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
            <div class="container main-content">
                <h1 class="h1-pagetitle" style="">About Us</h1>
                <h3 class="h3-secondary">Mission Statement</h3>
                <p class="bold-body">
                    <cms:show mission_statement /> </p>
                <h2 class="h2-secondary small-top-margin">Our Conductor - <cms:show conductor /></h2> <img src="<cms:show conductor_image />" class="pull-right img-responsive half-size-image">
                <p class="content-text med-bottom-margin">
                    <cms:show conductor_desc /> </p>
                <br> <a type="button" class="btn btn-primary med-margin hidden-xs center CTA-BTN btn-block half-size small-text btn-sm" style="" href="<cms:link masterpage='season.php' />">View our Upcoming Concert Season</a> </div>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <script src="<cms:show k_site_link />js/bootstrap.min.js"></script>
    <script src="<cms:show k_site_link />js/jquery-3.1.1.min.js"></script>
    <cms:embed 'google.html' />

    </html>
    <?php COUCH::invoke(); ?>