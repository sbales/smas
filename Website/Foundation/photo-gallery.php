<?php require_once( 'edit/cms.php' ); ?>

<cms:template title='Photo Gallery' order='5' clonable='1' gallery='1'>
    <cms:editable name="gg_image" label="Image" width="500" show_preview='1' preview_height='200' type="image" />
    
    <cms:editable name="gg_thumb" assoc_field="gg_image" label="Image Thumbnail" desc="Thumbnail of image above" width='250' height='250' enforce_max='1' type="thumbnail" /> 
</cms:template>

<?php COUCH::invoke(); ?>