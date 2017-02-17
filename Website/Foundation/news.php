<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='News' hidden='1' order='100'> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <cms:embed 'header.html' />
        <title>Newsfeed - Springfield Mid-America Singers</title>
    </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="body">
            <h1>Newsfeed</h1>
            <cms:pages masterpage='story.php' paginate='1' limit='6'>
                <div class="row newsfeed">
                    <div class="medium-5 column">
                        <p class="news-title">
                            <cms:show k_page_title /> </p>
                        <p class="news-date">
                            <cms:date k_page_date format=' F jS, Y ' /> </p>
                        <p class="news-exerpt">
                            <cms:excerptHTML count='65' ignore='img'>
                                <cms:show news_content /></cms:excerptHTML>
                        </p> <a href="<cms:show k_page_link />" class="button hollow secondary">Read More >></a> </div>
                    <div class="medium-7 column"> <img src="<cms:show news_image />" class="full-width"> </div>
                </div>
            </cms:pages>
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <cms:embed 'google.html' />

    </html>
    <?php COUCH::invoke(); ?>