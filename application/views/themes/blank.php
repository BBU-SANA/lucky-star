<!DOCTYPE html>
<html lang="en">
<head>
  <title><?php echo $title; ?></title>
<?php
		 foreach($js as $file){
				echo "\n\t\t"; 
				?><script src="<?php echo $file; ?>"></script><?php
		 } echo "\n\t"; 
?>	
<?php
		
		 foreach($css as $file){ 
		 	echo "\n\t\t"; 
			?><link rel="stylesheet" href="<?php echo $file; ?>" type="text/css" /><?php
		 } echo "\n\t"; 
?>
<?php
		if(!empty($meta)) 
			foreach($meta as $name=>$content){
				echo "\n\t\t"; 
				?><meta name="<?php echo $name; ?>" content="<?php echo is_array($content) ? implode(", ", $content) : $content; ?>" /><?php
		 }
	?>

	<!--Morris Chart CSS -->
    <link rel="stylesheet" href="<?=base_url();?>public/assets/plugins/morris/morris.css">

    <link href="<?=base_url();?>public/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>public/assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>public/assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>public/assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>public/assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="<?=base_url();?>public/assets/css/responsive.css" rel="stylesheet" type="text/css" />

    <script src="<?=base_url();?>public/assets/js/modernizr.min.js"></script>

  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-69506598-1', 'auto');
          ga('send', 'pageview');
    </script>

</head>
<body>

<?php echo $output;?>

</body>

  <!-- jQuery  -->
  <script src="<?=base_url();?>/public/assets/js/jquery.min.js"></script>
  <script src="<?=base_url();?>/public/assets/js/bootstrap.min.js"></script>
  <script src="<?=base_url();?>/public/assets/js/detect.js"></script>
  <script src="<?=base_url();?>/public/assets/js/fastclick.js"></script>
  <script src="<?=base_url();?>/public/assets/js/jquery.slimscroll.js"></script>
  <script src="<?=base_url();?>/public/assets/js/jquery.blockUI.js"></script>
  <script src="<?=base_url();?>/public/assets/js/waves.js"></script>
  <script src="<?=base_url();?>/public/assets/js/wow.min.js"></script>
  <script src="<?=base_url();?>/public/assets/js/jquery.nicescroll.js"></script>
  <script src="<?=base_url();?>/public/assets/js/jquery.scrollTo.min.js"></script>

  <script src="<?=base_url();?>/public/assets/js/jquery.core.js"></script>
  <script src="<?=base_url();?>/public/assets/js/jquery.app.js"></script>

</html>