<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title><?php echo ($title);?></title>
    <link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/jquery-ui/css/smoothness/jquery-ui-1.8.15.custom.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/harvesthq-chosen/chosen.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/elfinder/css/elfinder.full.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/fancybox/jquery.fancybox-1.3.4.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/file-uploader/fileuploader.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/timepicker-addon/jquery-ui-timepicker-addon.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>http://fonts.googleapis.com/css?family=Open+Sans" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" media="all" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/lib/datatables/css/table_jui.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/head.load.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-latest.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/slides.min.jquery.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/global.css">
</head>
<body>

<?php $this->load->view('layouts/header') ?>
<?php $this->load->view('layouts/mainbody') ?>
<?php $this->load->view('layouts/sidebar') ?>
<?php $this->load->view('layouts/footer') ?>

<script type="text/javascript">

    head.js("<?php echo base_url();?>assets/js/jquery-1.6.2.min.js");
    head.js("<?php echo base_url();?>assets/lib/jquery-ui/jquery-ui-1.8.15.custom.min.js");
    head.js("<?php echo base_url();?>assets/lib/fusion-charts/FusionCharts.js");
    head.js("<?php echo base_url();?>assets/js/jquery.microaccordion.js");
    head.js("<?php echo base_url();?>assets/js/jquery.tools.min.js");
    head.js("<?php echo base_url();?>assets/js/jquery.stickyPanel.js");
    head.js("<?php echo base_url();?>assets/js/jquery.text-overflow.min.js");
    head.js("<?php echo base_url();?>assets/js/xbreadcrumbs.js");
    head.js("<?php echo base_url();?>assets/js/lagu.js");
    head.js("<?php echo base_url();?>assets/lib/harvesthq-chosen/chosen.jquery.min.js");
    head.js("<?php echo base_url();?>assets/lib/fancybox/jquery.easing-1.3.pack.js");
    head.js("<?php echo base_url();?>assets/lib/fancybox/jquery.fancybox-1.3.4.pack.js");
    head.js("<?php echo base_url();?>assets/lib/file-uploader/fileuploader.js");
    head.js("<?php echo base_url();?>assets/lib/tiny-mce/jquery.tinymce.js");
    head.js("<?php echo base_url();?>assets/lib/jquery-validation/jquery.validate.js");
    head.js("<?php echo base_url();?>assets/lib/styled-checkboxes/iphone-style-checkboxes.js");
    head.js("<?php echo base_url();?>assets/lib/jquery-raty/jquery.raty.min.js");
    head.js("<?php echo base_url();?>assets/lib/timepicker-addon/jquery-ui-timepicker-addon.js");
    head.js("<?php echo base_url();?>assets/js/login.js");
    head.js("<?php echo base_url();?>assets/lib/datatables/jquery.dataTables.min.js");
    head.js("<?php echo base_url();?>assets/lib/datatables/dataTables.plugins.js");

    head.ready(function(){
        lga_fusionCharts.chart_k();
       // lga_fusionCharts.chart_a();
        lga_textTruncate.init();
        lga_sortable.init();
        lga_tips.init();
        lga_clearForm.init();
    })
</script>
</body>
</html>