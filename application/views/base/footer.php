
<script src="<?php echo base_url('resource/js/jquery-1.11.1.js'); ?>"></script>
<script src="<?php echo base_url('resource/js/scriptjs.js'); ?>"></script>
<!-- js ckeditor must online if not can't load js -->
<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js" ></script>
<!--<script src="<?php echo base_url('resource/js/ckeditor.js'); ?>" ></script>-->

<script type="text/javascript">
    if (typeof CKEDITOR=='undefined'){
        document.write('CKEditor not found');
    } else{
        var editor = CKEDITOR.replace( 'editor' );
        CKFinder.setupCKEditor( editor, '' ) ;
    }
</script>
<script src="<?php echo base_url('resource/js/bootstrap.js'); ?>"></script>
</body>
</html>