<?php require_once( 'edit/cms.php' ); ?>
    <cms:template title='Sponsors'>
        <cms:editable name='big_sponsors' label='Grant Funding & Community Partner' type='group' />
        <cms:editable name='community_partner' type='image' label='Community Partner Logo' show_preview='1' preview_width='150' group='big_sponsors' />
        <cms:editable name='community_link' type='text' label='Community Partner Link' desc='Please list the link to their website without the "http://"' group='big_sponsors' />
        <cms:editable name='grant_funding1' type='image' label='Grant Funding Logo 1' show_preview='1' preview_width='150' group='big_sponsors' />
        <cms:editable name='grant1_link' type='text' label='Grant Funding Link 1' desc='Please list the link to their website without the "http://"' group='big_sponsors' />
        <cms:editable name='grant_funding2' type='image' label='Grant Funding Logo 2' show_preview='1' preview_width='150' group='big_sponsors' />
        <cms:editable name='grant2_link' type='text' label='Grant Funding Link 2' desc='Please list the link to their website without the "http://"' group='big_sponsors' />
        
        <cms:repeatable name='online_ads' label='Online Advertising'>
            <cms:editable type='image' name='ad_logo' label='Sponsor Logo' show_preview='1' preview_width='150' />
            <cms:editable type='text' name='ad_link' label='Sponsor Link' />
        </cms:repeatable>
    </cms:template>
    <?php COUCH::invoke(); ?>