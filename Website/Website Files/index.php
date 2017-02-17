<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Website Info' order='1'>
        <cms:editable type='group' name='website_home' label='Website Home Page' />
            <cms:editable name='main_content' type='nicedit' label='Website Opening Text' group='website_home' />
            <cms:editable name='bckgrd_image' type='image' label='Homepage Background Image' desc='Large images work best, and must be edited to create a gradient to black background color.' show_preview='1' preview_width='150' group='website_home' />
            <cms:editable name='advert_image' type='image' label='Upcoming Event Image' desc='Use the facebook banner for the next concert or audition here.' show_preview='1' preview_width='150' group='website_home' />
            <cms:editable name='advert_link' type='text' label='Advert Link' group='website_home' />
        <cms:editable type='group' name='advertising' label='About Advertising' />
            <cms:editable name='advertising_button' label='Advertising Button' desc='Choose hidden if the advertising season is currently closed for the year.' opt_values='visible | hidden' type='radio' group='advertising' />
        <cms:editable type='group' name='auditions' label='About Auditions' />
        <cms:editable type='group' name='scholarships' label='Scholarships' />
         </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Page Information-->
        <title>Springfield Mid-America Singers</title>
        <meta name="description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances.">
        <meta name="author" content="Stevie Bales">
        <meta name="keywords" content="Springfield, Missouri, Singers, Singing, Mid-America, Choir, Choral,">
        <!--Social Media Information-->
        <meta property="og:title" content="Springfield Mid-America Singers" />
        <meta property="og:description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances." />
        <meta property="article:author" content="Springfield Mid-America Singers" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<cms:show k_site_link />" />
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
            <header>
                <cms:embed 'nav-bar.html' />
                <div class="jumbotron homepage-jumbotron" style="background-image: url(<cms:show bckgrd_image />);">
                    <div class="container"> <img src="images/main-image.svg" class="big-logo hidden-xs" alt="Springfield Mid-America Singers Logo" />
                        <p class="homepage-cta"><a class="btn btn-lg btn-primary CTA-BTN" role="button" type="button" href="<cms:link masterpage='about.php' />">Learn more &raquo;</a></p>
                        <div class="row">
                            <p class="bold-body hidden-xs">
                                <cms:show main_content /> </p>
                        </div> <a class="btn advertising-btn btn-success btn-sm <cms:show advertising_button />" href="mailto:advertising@smasingers.org" target="_blank">For Online Advertising Click Here</a> </div>
                </div>
            </header>
            <!-- Main jumbotron for a primary marketing message or call to action -->
            <div class="container clear-background">
                <div class="row">
                    <a href="<cms:show advert_link />"> <img src="<cms:show advert_image />" class="img-responsive text-center" alt="advertising image"> </a> </div>
            </div>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <script src="<cms:show k_site_link />js/bootstrap.min.js"></script>
    <script src="<cms:show k_site_link />js/jquery-3.1.1.min.js"></script>
    <cms:embed 'google.html' />

    </html>
    <?php COUCH::invoke(); ?>