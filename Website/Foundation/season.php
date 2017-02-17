<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Season' order='3'>
        <cms:editable type='text' name='concert_season' label='Concert Season Year' desc='Please list as XXXX-XXXX' />
        <cms:editable type='image' name='season_advert' label='Concert Season Advertisement' show_preview='1' preview_width='200' quality='100' />
        <cms:editable name='fall_concert' label='Fall Concert Details' type='group' />
        <cms:editable type='text' name='concert_name1' label='Name' group='fall_concert' />
        <cms:editable name="concert_day1" label="Day" opt_values='Monday|Tuesday|Wednesday|Thursday|Friday|Saturday|Sunday' type='radio' group='fall_concert' />
        <cms:editable name="concert_month1" label="Month" opt_values='January|February|March|April|May|June|July|August|September|October|November|December' type='dropdown' group='fall_concert' />
        <cms:editable name="concert_date1" label="Date" opt_values='1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31' type='dropdown' group='fall_concert' />
        <cms:editable type='text' name='concert_time1' label='Time' desc='Please list the time as X:XXpm, including the am or pm' group='fall_concert' />
        <cms:editable type='text' name='concert_location1' label='Location' group='fall_concert' />
        <cms:editable type='text' name='concert_info1' label='Extra Information' group='fall_concert' />
        <cms:editable type='text' name='concert_cost1' label='Cost' group='fall_concert' />
        <cms:editable name='holiday_concert' label='Holiday Concert Details' type='group' />
        <cms:editable type='text' name='concert_name2' label='Name' group='holiday_concert' />
        <cms:editable name="concert_day2" label="Day" opt_values='Monday|Tuesday|Wednesday|Thursday|Friday|Saturday|Sunday' type='radio' group='holiday_concert' />
        <cms:editable name="concert_month2" label="Month" opt_values='January|February|March|April|May|June|July|August|September|October|November|December' type='dropdown' group='holiday_concert' />
        <cms:editable name="concert_date2" label="Date" opt_values='1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31' type='dropdown' group='holiday_concert' />
        <cms:editable type='text' name='concert_time2' label='Time' desc='Please list the time as X:XXpm, including the am or pm' group='holiday_concert' />
        <cms:editable type='text' name='concert_location2' label='Location' group='holiday_concert' />
        <cms:editable type='text' name='concert_info2' label='Extra Information' group='holiday_concert' />
        <cms:editable type='text' name='concert_cost2' label='Cost' group='holiday_concert' />
        <cms:editable name='winter_concert' label='Winter Concert Details' type='group' />
        <cms:editable type='text' name='concert_name3' label='Name' group='winter_concert' />
        <cms:editable name="concert_day3" label="Day" opt_values='Monday|Tuesday|Wednesday|Thursday|Friday|Saturday|Sunday' type='radio' group='winter_concert' />
        <cms:editable name="concert_month3" label="Month" opt_values='January|February|March|April|May|June|July|August|September|October|November|December' type='dropdown' group='winter_concert' />
        <cms:editable name="concert_date3" label="Date" opt_values='1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31' type='dropdown' group='winter_concert' />
        <cms:editable type='text' name='concert_time3' label='Time' desc='Please list the time as X:XXpm, including the am or pm' group='winter_concert' />
        <cms:editable type='text' name='concert_location3' label='Location' group='winter_concert' />
        <cms:editable type='text' name='concert_info3' label='Extra Information' group='winter_concert' />
        <cms:editable type='text' name='concert_cost3' label='Cost' group='winter_concert' />
        <cms:editable name='spring_concert' label='Spring Concert Details' type='group' />
        <cms:editable type='text' name='concert_name4' label='Name' group='spring_concert' />
        <cms:editable name="concert_day4" label="Day" opt_values='Monday|Tuesday|Wednesday|Thursday|Friday|Saturday|Sunday' type='radio' group='spring_concert' />
        <cms:editable name="concert_month4" label="Month" opt_values='January|February|March|April|May|June|July|August|September|October|November|December' type='dropdown' group='spring_concert' />
        <cms:editable name="concert_date4" label="Date" opt_values='1|2|3|4|5|6|7|8|9|10|11|12|13|14|15|16|17|18|19|20|21|22|23|24|25|26|27|28|29|30|31' type='dropdown' group='spring_concert' />
        <cms:editable type='text' name='concert_time4' label='Time' desc='Please list the time as X:XXpm, including the am or pm' group='spring_concert' />
        <cms:editable type='text' name='concert_location4' label='Location' group='spring_concert' />
        <cms:editable type='text' name='concert_info4' label='Extra Information' group='spring_concert' />
        <cms:editable type='text' name='concert_cost4' label='Cost' group='spring_concert' /> </cms:template>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <cms:embed 'header.html' />
        <title>Season - Springfield Mid-America Singers</title>
    </head>

    <body>
        <cms:embed 'nav-bar.html' />
        <div class="body">
            <h1>Concert Season</h1>
            <h3 class="subheader text-center"><cms:show concert_season /></h3> <img class="full-width" src="<cms:show season_advert />">
            <div class="row season-details">
                <div class="column large-3">
                    <p class="date">
                        <cms:show concert_day1 />
                        <cms:show concert_month1 />
                        <cms:show concert_date1 />
                        <cms:show concert_time1 /> </p>
                    <p class="concert-name">
                        <cms:show concert_name1 /> </p>
                    <p class="info">
                        <cms:show concert_info1 /> </p>
                    <p class="location">
                        <cms:show concert_location1 /> </p>
                    <p class="cost">
                        <cms:show concert_cost1 /> </p>
                </div>
                <div class="column large-3">
                    <p class="date">
                        <cms:show concert_day2 />
                        <cms:show concert_month2 />
                        <cms:show concert_date2 />
                        <cms:show concert_time2 /> </p>
                    <p class="concert-name">
                        <cms:show concert_name2 /> </p>
                    <p class="info">
                        <cms:show concert_info2 /> </p>
                    <p class="location">
                        <cms:show concert_location2 /> </p>
                    <p class="cost">
                        <cms:show concert_cost2 /> </p>
                </div>
                <div class="column large-3">
                    <p class="date">
                        <cms:show concert_day3 />
                        <cms:show concert_month3 />
                        <cms:show concert_date3 />
                        <cms:show concert_time3 /> </p>
                    <p class="concert-name">
                        <cms:show concert_name3 /> </p>
                    <p class="info">
                        <cms:show concert_info3 /> </p>
                    <p class="location">
                        <cms:show concert_location3 /> </p>
                    <p class="cost">
                        <cms:show concert_cost3 /> </p>
                </div>
                <div class="column large-3">
                    <p class="date">
                        <cms:show concert_day4 />
                        <cms:show concert_month4 />
                        <cms:show concert_date4 />
                        <cms:show concert_time4 /> </p>
                    <p class="concert-name">
                        <cms:show concert_name4 /> </p>
                    <p class="info">
                        <cms:show concert_info4 /> </p>
                    <p class="location">
                        <cms:show concert_location4 /> </p>
                    <p class="cost">
                        <cms:show concert_cost4 /> </p>
                </div>
            </div>
            <h2><a href="<cms:link masterpage='audition.php' />">Auditions</a></h2>
            <cms:pages masterpage='index.php'>
                <cms:if audition_btn=='yes'>
                    <p class="lead">Auditions season is currently open. <a href="<cms:link masterpage='audition.php' />">Click Here to apply for an audition time slot.</a> </p>
                    <cms:else />
                    <p class="lead">Are you new to the Springfield area and want to join? Currently Audition season is closed but private, mid-season, auditions can be made by contacting the Artistic Director, Tom Matrone, directly. <a href="mailto:contact@smasingers.org?subject=Mid-Season%Auditions">Click here to send him an email.</a></p>
                </cms:if>
                <p>
                    <cms:show requirement_info /> </p>
            </cms:pages>
            <cms:embed 'secondary-content.html' />
            <cms:embed 'sponsors.html' /> </div>
        <cms:embed 'footer.html' /> </body>
    <cms:embed 'google.html' />

    </html>
    <?php COUCH::invoke(); ?>