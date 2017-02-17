<?php require_once( 'edit/cms.php' ); ?>
<cms:template title='Photo Gallery' clonable='1' gallery='1'>
    <cms:editable type='image' name='gg_image' label='Photo' show_preview='1' preview_width='150' />
    <cms:editable type='thumbnail' name='gg_thumb' label='Photo' assoc_field='gg_image' width='300' height='300' enforce_max='1' />
</cms:template>
<?php COUCH::invoke(); ?>