<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Gallery'>
        <cms:editable name='video1' label='Video 1 Youtube ID' type='text' desc='Find and place ONLY the Youtube ID here' />
        <cms:editable name='video2' label='Video 2 Youtube ID' type='text' desc='Find and place ONLY the Youtube ID here' />
        <cms:editable name='soundcloud_group' label='Soundcloud Embed' type='group' desc='Place soundcloud embed code here. Make height property = 350'/>
        <cms:editable name='soundcloud' type='textarea' group='soundcloud_group' no_xss_check='1' ></cms:editable>
    </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Page Information-->
        <title>Media Gallery - Springfield Mid-America Singers</title>
        <meta name="description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances.">
        <meta name="author" content="Stevie Bales">
        <meta name="keywords" content="Springfield, Missouri, Singers, Singing, Mid-America, Choir, Choral,">
        <!--Social Media Information-->
        <meta property="og:title" content="Media Gallery" />
        <meta property="og:site_name" content="Springfield Mid-America Singers" />
        <meta property="og:description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances." />
        <meta property="article:author" content="Springfield Mid-America Singers" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<cms:link masterpage='gallery.php' />" />
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
        <div class="page-wrap current-page">
            <cms:embed 'nav-bar.html' />
            <div class="container main-content">
                <h1 class="h1-pagetitle">Gallery</h1>
                <div>
                    <h3 class="h3-secondary">Video</h3>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 youtube-column">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<cms:show video1 />" frameborder="0" allowfullscreen></iframe>
                        </div>
                        <div class="col-md-6 col-lg-6 youtube-column">
                            <iframe width="100%" height="315" src="https://www.youtube.com/embed/<cms:show video2 />" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
                <div data-pg-name="Audio">
                    <h3 class="h3-secondary">Audio</h3>
                    <cms:show soundcloud />
                </div>
                <div data-pg-name="Photos">
                    <h3 class="h3-secondary">Photos</h3>
                    <ul class="row list-unstyled">
                        <cms:pages masterpage="photo-gallery.php">
                            <li class="no-padding col-lg-1 col-md-1 col-sm-2 col-xs-3"> <img class="img-responsive" href="<cms:show gg_image />" src="<cms:show gg_thumb />"> </li>
                        </cms:pages>
                    </ul>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <script src="<cms:show k_site_link />js/bootstrap.min.js"></script>
    <script src="<cms:show k_site_link />js/jquery-3.1.1.min.js"></script>
    <script src="<cms:show k_site_link />js/photo-gallery.js"></script>
    <cms:embed 'google.html' />

    </html>
    <?php COUCH::invoke(); ?>