<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='About' order='2'>
        <cms:editable type='textarea' name='mission_statement' label='Mission Statement' height='100' />
        <cms:editable type='text' name='conductor' label='Current Conductor' desc='List their name here.' />
        <cms:editable type='richtext' name='conductor_intro' label='Conductor Introduction' toolbar='custom' custom_toolbar='bold, italic, underline, -, subscript, superscript, cut, copy, paste, pastetext, pastefromword, -, link, unlink, -, removeformat,' />
        <cms:editable type='image' name='conductor_image' label='Conductor Image' show_preview='1' preview_width='200' quality='100' /> 
    <cms:editable type='group' name='contact_info' label='Contact Information' />
        <cms:editable type='text' name='address' label='Address' group='contact_info' />
        <cms:editable type='text' name='city' label='City' group='contact_info' />
        <cms:editable type='text' name='state' label='State' group='contact_info' />
        <cms:editable type='text' name='zip_code' label='Zip Code' group='contact_info' />
        <cms:editable type='text' name='phone_number' label='Phone Number' group='contact_info' />
</cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Page Information-->
        <title>About Us - Springfield Mid-America Singers</title>
        <meta name="description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances.">
        <meta name="author" content="Springfield Mid-America Singers">
        <meta name="keywords" content="Springfield, Missouri, Singers, Singing, Mid-America, Choir, Choral,">
        <!--Social Media Information-->
        <meta property="og:title" content="Springfield Mid-America Singers" />
        <meta property="og:description" content="Since its beginning in 1966, Springfield Mid-America Singers has been one of the region's premier choral organizations. The group has become nationally recognized for its ambitions and versatile programming and outstanding performances." />
        <meta property="article:author" content="Springfield Mid-America Singers" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="images/stacked-staff_Black.png" />
        <!--Favicons-->
        <link rel="apple-touch-icon" sizes="180x180" href="/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" href="/favicons/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="/favicons/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="/favicons/manifest.json">
        <link rel="mask-icon" href="/favicons/safari-pinned-tab.svg" color="#000000">
        <link rel="shortcut icon" href="/favicons/favicon.ico">
        <meta name="msapplication-config" content="/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">
        <!--stylesheets-->
        <link href="<cms:show k_site_link />css/stylesheet.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<cms:show k_site_link />css/font-awesome.min.css">
        <script src="https://use.typekit.net/bos8pjb.js"></script>
        <script>
            try {
                Typekit.load({
                    async: true
                });
            }
            catch (e) {}
        </script>
    </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="body">
            <h1>About Us</h1>
            <br>
            <br>
            <h3>Misson Statement</h3>
            <p class="lead">
                <cms:show mission_statement />
            </p>
            <div class="conductor-intro">
                <h2>Our Conductor - <cms:show conductor /></h2> <img class="float-right half-width left-small-padding bottom-small-padding hide-for-small-only" src="<cms:show conductor_image />">
                <cms:show conductor_intro /> </div>
            <br> <a class="button primary large expanded" href="<cms:link masterpage='season.php' />">View our Upcoming Concert Season</a>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>

    </html>
    <?php COUCH::invoke(); ?>