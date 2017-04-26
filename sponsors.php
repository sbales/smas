<?php require_once( 'edit/cms.php' ); ?>

<cms:template title='Sponsors' order='8'>
    <cms:editable name='banner' type='message'>
        <h3>All Company Logos should be uploaded at 200px by 600px.</h3>
    </cms:editable>
    <cms:editable type='group' name='community_partner' label='Community Partner' />
        <cms:editable type='image' name='community_image' label='Image' show_preview='1' preview_width='200' quality='100' group='community_partner' />
        <cms:editable type='text' name='community_link' label='Website Link' group='community_partner' />
    <cms:editable type='group' name='grant_funding' label='Grant Funding' />
        <cms:editable type='image' name='grant_image1' label='Image 1' show_preview='1' preview_width='200' quality='100' group='grant_funding' />
        <cms:editable type='text' name='grant_link1' label='Website Link 1' group='grant_funding' />
        <cms:editable type='image' name='grant_image2' label='Image 2' show_preview='1' preview_width='200' quality='100' group='grant_funding' />
        <cms:editable type='text' name='grant_link2' label='Website Link 2' group='grant_funding' />
    <cms:editable type='group' name='local_sponsors' label='Local Sponsors' />
    <cms:editable name="local_display" label="Display Local Sponsors" opt_values='hide | show' type='radio' group='local_sponsors' />
    <cms:repeatable name='local_businesses' label='Local Sponsors' group='local_sponsors' >
          <cms:editable type='image' name='local_image' label='Image' show_preview='1' preview_width='200' quality='100'  />
          <cms:editable type='text' name='local_link' label='Website Link'  />
          <cms:editable type='text' name='local_date' label='Date Added'  />
    </cms:repeatable>
</cms:template>

<?php COUCH::invoke(); ?>