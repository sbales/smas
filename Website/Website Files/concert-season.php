<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Season' order='3'>
        <cms:editable name='concert_advertisement' type='image' label='Season Theme Banner' show_preview='1' preview_width='150' desc='This banner should stay the same throughout the year. Use the season theme Facebook banner.' />
        <cms:editable name='audition_info' type='textarea' label='Audition Information' />
        <cms:editable name='audition_button' label='Audition Button' desc='Choose hidden if the advertisement image is NOT for auditions.' opt_values='visible | hidden' type='radio' /> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Page Information-->
        <title>Concert Season - Springfield Mid-America Singers</title>
        <meta name="description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances.">
        <meta name="author" content="Stevie Bales">
        <meta name="keywords" content="Springfield, Missouri, Singers, Singing, Mid-America, Choir, Choral,">
        <!--Social Media Information-->
        <meta property="og:title" content="Concert Season" />
        <meta property="og:site_name" content="Springfield Mid-America Singers" />
        <meta property="og:description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances." />
        <meta property="article:author" content="Springfield Mid-America Singers" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<cms:link masterpage='season.php' />" />
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
                <cms:pages masterpage='season-details.php'>
                    <h1 class="h1-pagetitle no-margin">Concert Season</h1> <small class="page-subtitle"><cms:show season_year /></small>
                    <img src="<cms:show concert_advertisement />" class="img-responsive" />
                    <div class="row season-row" data-pg-name="Season">
                        <div class="col-md-3 concert-column">
                            <h5 class="h5-date small-margin med-margin"><cms:show concert_day1 /> <cms:show concert_month1 /> <cms:show concert_date1 /> <cms:show concert_time1 /> <cms:show concert_ampm1 /></h5>
                            <h5 class="h5-showtitle small-margin"><cms:show concert_name1 /></h5>
                            <h6 class="small-margin h6-showsubtitle"><cms:show concert_desc1 /></h6>
                            <h5 class="h5-location small-margin"><cms:show concert_location1 /></h5>
                            <h5 class="h5-admission small-margin">Free Admission</h5> <img src="images/show%20poster.jpg" class="img-responsive med-margin hidden-xs hidden-sm hidden" /> </div>
                        <div class="col-md-3 concert-column" data-pg-name="Holiday Concert">
                            <h5 class="h5-date small-margin med-margin"><cms:show concert_day2 /> <cms:show concert_month2 /> <cms:show concert_date2 /> <cms:show concert_time2 /> <cms:show concert_ampm2 /></h5>
                            <h5 class="h5-showtitle small-margin"><cms:show concert_name2 /></h5>
                            <h6 class="h6-showsubtitle small-margin"><cms:show concert_desc2 /></h6>
                            <h5 class="h5-location small-margin"><cms:show concert_location2 /></h5>
                            <h5 class="h5-admission small-margin">Free Admission</h5> <img src="images/show%20poster.jpg" class="img-responsive med-margin hidden-sm hidden-xs hidden" /> </div>
                        <div class="col-md-3 concert-column" data-pg-name="Winter Concert">
                            <h5 class="h5-date small-margin med-margin"><cms:show concert_day3 /> <cms:show concert_month3 /> <cms:show concert_date3 /> <cms:show concert_time3 /> <cms:show concert_ampm3 /></h5>
                            <h5 class="h5-showtitle small-margin"><cms:show concert_name3 /></h5>
                            <h6 class="h6-showsubtitle small-margin"><cms:show concert_desc3 /></h6>
                            <h5 class="h5-location small-margin"><cms:show concert_location3 /><br></h5>
                            <h5 class="h5-admission small-margin">Free Admission</h5> <img src="images/show%20poster.jpg" class="img-responsive med-margin hidden-sm hidden-xs hidden" /> </div>
                        <div class="col-md-3 concert-column" data-pg-name="Spring Concert">
                            <h5 class="h5-date small-margin med-margin"><cms:show concert_day4 /> <cms:show concert_month4 /> <cms:show concert_date4 /> <cms:show concert_time4 /> <cms:show concert_ampm4 /></h5>
                            <h5 class="h5-showtitle small-margin"><cms:show concert_name4 /></h5>
                            <h6 class="h6-showsubtitle small-margin hidden"><cms:show concert_desc4 /></h6>
                            <h5 class="h5-location small-margin"><cms:show concert_location4 /></h5>
                            <h5 class="h5-admission small-margin">Free Admission</h5> <img src="images/show%20poster.jpg" class="img-responsive med-margin hidden-sm hidden-xs hidden" /> </div>
                    </div>
                </cms:pages>
                <div class="row audition-row">
                    <h2>Auditions</h2>
                    <p class="content-text"><b>Are you new to the Springfield area and want to join? Currently Audition season is closed but private, mid-season, auditions can be made by contacting the Artistic Director, Tom Matrone, directly. <i><a href="mailto:tommatrone@gmail.com" target="_blank">Click here to send him an email.</a></i></b>
                        <br>
                        <cms:show audition_info /> </p>
                    <div class="col-md-3"> </div>
                    <div class="col-md-6">
                        <button type="button" class="btn btn-block btn-lg btn-default CTA-BTN med-full-margin golden <cms:show audition_button />" href="<cms:link masterpage='audtions.php' />">Sign-Up</button>
                    </div>
                    <div class="col-md-3" data-pg-name="Place Holder"> </div>
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