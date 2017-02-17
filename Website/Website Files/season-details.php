<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Concert Season Details'>
        <cms:editable type='group' name='concert_1' label='Fall Concert' />
        <cms:editable type='group' name='concert_2' label='Holiday Concert' />
        <cms:editable type='group' name='concert_3' label='Winter Concert' />
        <cms:editable type='group' name='concert_4' label='Spring Concert' />
        
        <cms:editable name='season_year' type='text' label='Season Year' desc='Please follow this format: XXXX - XXXX' />
        
        <cms:editable name='concert_name1' type='text' label='Fall Concert Title' group='concert_1'  />
        <cms:editable name='concert_day1' label='Day' opt_values='Sunday | Monday | Tuesday | Wednesday | Thursday | Friday | Saturday' type='dropdown' group='concert_1'  />
        <cms:editable name='concert_month1' label='Month' opt_values='January | February | March | April | May | June | July | August | September | October | Novemeber | December' type='dropdown'  group='concert_1' />
        <cms:editable name='concert_date1' label='Date' separator=',' opt_values='1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31' type='dropdown'   group='concert_1' />
        <cms:editable name='concert_time1' type='text' label='Time' desc='Please use the following format: X:XX'  group='concert_1' />
        <cms:editable name='concert_ampm1' label='AM or PM' opt_values='AM|PM' type='radio' group='concert_1' />
        <cms:editable name='concert_desc1' type='text' label='Concert Descriptoin' desc='This field is not required, so only list a description if you have one.' group='concert_1'  />
        <cms:editable name='concert_location1' type='text' label='Concert Location' group='concert_1'  />
        
        <cms:editable name='concert_name2' type='text' label='Holiday Concert Title' group='concert_2'  />
        <cms:editable name='concert_day2' label='Day' opt_values='Sunday | Monday | Tuesday | Wednesday | Thursday | Friday | Saturday' type='dropdown' group='concert_2'  />
        <cms:editable name='concert_month2' label='Month' opt_values='January | February | March | April | May | June | July | August | September | October | Novemeber | December' type='dropdown' group='concert_2' />
        <cms:editable name='concert_date2' label='Date' separator=',' opt_values='1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31' type='dropdown'  group='concert_2' />
        <cms:editable name='concert_time2' type='text' label='Time' desc='Please use the following format: X:XX' group='concert_2' />
        <cms:editable name='concert_ampm2' label='AM or PM' opt_values='AM|PM' type='radio' group='concert_2' />
        <cms:editable name='concert_desc2' type='text' label='Concert Description' desc='This field is not required, so only list a description if you have one.'   group='concert_2' />
        <cms:editable name='concert_location2' type='text' label='Concert Location' group='concert_2' />
        
        <cms:editable name='concert_name3' type='text' label='Winter Concert Title' group='concert_3' />
        <cms:editable name='concert_day3' label='Day' opt_values='Sunday | Monday | Tuesday | Wednesday | Thursday | Friday | Saturday' type='dropdown' group='concert_3' />
        <cms:editable name='concert_month3' label='Month' opt_values='January | February | March | April | May | June | July | August | September | October | Novemeber | December' type='dropdown' group='concert_3' />
        <cms:editable name='concert_date3' label='Date' separator=',' opt_values='1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31' type='dropdown'  group='concert_3' />
        <cms:editable name='concert_time3' type='text' label='Time' desc='Please use the following format: X:XX' group='concert_3' />
        <cms:editable name='concert_ampm3' label='AM or PM' opt_values='AM|PM' type='radio' group='concert_3' />
        <cms:editable name='concert_desc3' type='text' label='Concert Description' desc='This field is not required, so only list a description if you have one.'   group='concert_3' />
        <cms:editable name='concert_location3' type='text' label='Concert Location' group='concert_3' />
        
        <cms:editable name='concert_name4' type='text' label='Spring Concert Title' group='concert_4' />
        <cms:editable name='concert_day4' label='Day' opt_values='Sunday | Monday | Tuesday | Wednesday | Thursday | Friday | Saturday' type='dropdown' group='concert_4' />
        <cms:editable name='concert_month4' label='Month' opt_values='January | February | March | April | May | June | July | August | September | October | Novemeber | December' type='dropdown' group='concert_4' />
        <cms:editable name='concert_date4' label='Date' separator=',' opt_values='1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31' type='dropdown'  group='concert_4' />
        <cms:editable name='concert_time4' type='text' label='Time' desc='Please use the following format: X:XX' group='concert_4' />
        <cms:editable name='concert_ampm4' label='AM or PM' opt_values='AM|PM' type='radio' group='concert_4' />
        <cms:editable name='concert_desc4' type='text' label='Concert Description' desc='This field is not required, so only list a description if you have one.'   group='concert_4' />
        <cms:editable name='concert_location4' type='text' label='Concert Location' group='concert_4' />
        </cms:template>
        <?php COUCH::invoke(); ?>