<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Newsfeed' order='6' clonable='1'>
        <cms:editable type='image' name='news_image' label='Story Image' show_preview='1' preview_width='200' quality='100' />
        <cms:editable type='richtext' name='news_content' label='News Story' toolbar='custom' custom_toolbar='bold, italic, underline, -, subscript, superscript, cut, copy, paste, pastetext, pastefromword, -, link, unlink, -, removeformat,' /> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <cms:embed 'header.html' />
        <title>
            <cms:show k_page_title /> - Springfield Mid-America Singers</title>
    </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="body">
            <h1 class="text-left"><cms:show k_page_title /> </h1>
            <h3 class="subheader"><cms:date k_page_date format='F jS, Y'/></h3> <img class="full-width" src="<cms:show news_image />">
            <p>
                <cms:show news_content /> </p>
            <br>
            <ul class="breadcrumbs">
                <li><a href="<cms:link masterpage='index.php' />">Home</a></li>
                <li><a href="<cms:link masterpage='news.php' />">News</a></li>
                <li>
                    <a class="disabled" href="<cms:show k_page_link />">
                        <cms:show k_page_title /> </a>
                </li>
            </ul>
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>

    </html>
    <?php COUCH::invoke(); ?>