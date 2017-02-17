<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Home' order='1'>
        <cms:editable type='image' name='bkgd_image' label='Background Image' show_preview='1' preview_width='200' quality='100' width='1500' />
        <cms:editable type='textarea' name='lead_content' label='Opening Statement' height='100' />
        <cms:editable type='image' name='home_advert' label='Current Advertisement' show_preview='1' preview_width='200' quality='100' />
        <cms:editable type='text' name='link_advert' label='Advertisement Link' />
        <cms:editable type='group' name='advertising' label='Advertising Information' />
        <cms:editable name="advertising_btn" label="Currently accepting advertising contracts?" opt_values='yes|no' type='radio' group='advertising' />
        <cms:editable name="print_ads" label="Are you accepting contracts for print ads?" desc='Select hide if ONLY the digital option is available.' opt_values='yes|no' type='radio' group='advertising' />
        <cms:editable type='group' name='auditions' label='Audition Information' />
        <cms:editable name="audition_btn" label="Is it audition season?" opt_values='yes|no' type='radio' group='auditions' />
        <cms:editable type='textarea' name='requirement_info' label='Requirement Information' desc='Use this space to desribe the requirements for joining and maintaining membership with Springfield Mid-America Singers.' group='auditions' height='100' />
        <cms:editable type='richtext' name='audition_desc' label='Audition Information' toolbar='custom' custom_toolbar='bold, italic, underline, -, subscript, superscript, cut, copy, paste, pastetext, pastefromword, -, link, unlink, -, removeformat,' desc='Use this space to list out the audition season information. Include times and spaces for auditions, as well who to contact. This information will be displayed on the Auditions page.' group='auditions' />
        <cms:editable type='group' name='scholarship' label='Scholarship Information' />
        <cms:editable name="scholarship_btn" label="Are you currently accepting scholarship applications?" opt_values='yes|no' type='radio' group='scholarship' />
        <cms:editable type='text' name='scholarship_link' label='Scholarship Page Link' group='scholarship' /> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <cms:embed 'header.html' />
        <title>Springfield Mid-America Singers</title>
    </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="jumbotron bg-image" style="background: url('<cms:show bkgd_image />') no-repeat center;background-size: cover;">
            <div class="home-message text-center position-relative-top"> <img src="<cms:show k_site_link />images/logo-large.svg" class="hide-for-small-only main-logo top-index" alt="Springfield Mid-America Singers Logo">
                <br><a class="button primary large caps position-relative-top" href="<cms:link masterpage='about.php' />">Learn More >></a>
                <p class="lead open-statement">
                    <cms:show lead_content /> </p>
                <cms:if advertising_btn=='yes'> <a class="button alert padding-top position-relative-top" href="<cms:link masterpage='advertising.php' />">Advertise with Us</a>
                    <cms:else /> </cms:if>
                <cms:if audition_btn=='yes'> <a class="button secondary padding-top position-relative-top" href="<cms:link masterpage='audition.php' />">Join Us</a>
                    <cms:else /> </cms:if>
                <cms:if scholarship_btn=='yes'> <a class="<cms:show scholarship_btn /> button success padding-top position-relative-top" href="<cms:show scholarship_link />">Apply for our Scholarship</a>
                    <cms:else /> </cms:if>
            </div>
        </div>
        <div class="body">
            <div class="home-advertisement"><a href="<cms:show link_advert />" target="_blank"><img class="full-width" src="<cms:show home_advert />"></a></div>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <cms:embed 'google.html' />

    </html>
    <?php COUCH::invoke(); ?>