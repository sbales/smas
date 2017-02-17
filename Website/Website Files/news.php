<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Newsfeed'> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Page Information-->
        <title>Newsfeed - Springfield Mid-America Singers</title>
        <meta name="description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances.">
        <meta name="author" content="Springfield Mid-America Singers">
        <meta name="keywords" content="Springfield, Missouri, Singers, Singing, Mid-America, Choir, Choral,">
        <!--Social Media Information-->
        <meta property="og:title" content="Newsfeed" />
        <meta property="og:site_name" content="Springfield Mid-America Singers" />
        <meta property="og:description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances." />
        <meta property="article:author" content="Springfield Mid-America Singers" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<cms:link masterpage='news.php' />" />
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
        <div class="page-wrap" data-pg-name="Page Wrap">
            <cms:embed 'nav-bar.html' />
            <div class="container main-content" data-pg-name="Main Content">
                <h1 class="h1-pagetitle">Current News</h1>
                <cms:pages masterpage='story.php' paginate='1' limit='6'>
                    <div class="row article-spoiler">
                        <div class="col-md-4">
                            <h2 class="h2-articletitle"><cms:show k_page_title /></h2>
                            <h4><cms:date k_page_date format=' F jS, Y ' /></h4>
                            <p class="bold-body">
                                <cms:excerptHTML count='55' ignore='img'>
                                    <cms:show article_text /></cms:excerptHTML>
                                <br> </p> <a href="<cms:show k_page_link />" class="news-link">Read More &gt;&gt;</a> </div>
                        <div class="col-md-8"> <img src="<cms:show article_image />" class="img-responsive" /> </div>
                    </div>
                </cms:pages>
            </div>
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <!-- Bootstrap core JavaScript -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="<cms:show k_site_link />js/bootstrap.min.js"></script>
    <script src="<cms:show k_site_link />js/jquery-3.1.1.min.js"></script>
    <script src="<cms:show k_site_link />js/photo-gallery.js"></script>
    <cms:embed 'google.html' />

    </html>
    <?php COUCH::invoke(); ?>