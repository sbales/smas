<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Audition' hidden='1' order='100'> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <cms:embed 'header.html' />
        <title>Audition - Springfield Mid-America Singers</title>
    </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="body">
            <h1>Auditions</h1>
            <cms:pages masterpage='index.php'>
                <div class="lead">
                    <cms:show audition_desc /> </div>
                <p>
                    <cms:show requirement_info /> </p>
            </cms:pages>
            <br>
            <h3 class="secondary-text">Sign up for an Audition</h3>
            <cms:form method="post">
                <cms:if k_success>
                    <h5>Audition Request was successful.</h5>
                    <cms:each k_success sep='\n'>
                        <cms:show item />
                        <br> </cms:each>
                </cms:if>
                <cms:if k_error>
                    <h5>Failed to submit your request. Please try again</h5>
                    <cms:each k_error>
                        <cms:show item />
                        <br> </cms:each>
                </cms:if> <i>Your Full Name:</i>
                <cms:input type="text" size="10" maxlength="40" name="name" required='1' /> <i>Your email address:</i>
                <cms:input type="text" size="10" name="email" required='1' validator='email' /> <i>Your phone number including area code:</i>
                <cms:input type="text" size="10" maxlength="10" name="phone" required='1' placeholder="Only numbers!" /> <i>Please select your Voice Part:</i>
                <cms:input type="dropdown" name="voice_part" opt_values="Soprano|Mezzo-Soprano|Alto|Tenor|Baritone|Bass" required='1' />
                <cms:input type='captcha' name='audition-captcha' format='i-r-t' />
                <br>
                <cms:input name="submit" type="submit" value="Submit Request" class="button secondary" /> </cms:form>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <cms:embed 'google.html' />

    </html>
    <?php COUCH::invoke(); ?>