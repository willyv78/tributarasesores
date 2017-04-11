<?php
		global $shortCodeData;

		require_once('../../../../../wp-load.php');
		
		require_once('../../include.php');
		require_once('../../shortcode_list.php');
		
		$Validation=new TLThemeValidation();
		
		$ShortCodeManager=new TLThemeShortCodeManager();
		$ShortCodeManager->setShortCodeData($shortCodeData);
		
		$shortcode="''";
		if(array_key_exists('shortcode',$_GET))
		{
			if($Validation->isNotEmpty($_GET['shortcode']))
				$shortcode=$ShortCodeManager->parseShortcode(rawurldecode(base64_decode($_GET['shortcode'])));
		}
?>
		<html>

			<head>
				<title></title>
				<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
				<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" type="text/css" media="all"/>
				<link rel="stylesheet" href="<?php echo THEME_URL_STYLE.'colorpicker.css'; ?>" type="text/css" media="all"/>
				<link rel="stylesheet" href="<?php echo THEME_URL_STYLE.'dropkick.css'; ?>" type="text/css" media="all"/>
				<link rel="stylesheet" href="<?php echo THEME_URL_STYLE.'jquery.themeOption.css'; ?>" type="text/css" media="all"/>
				<link rel="stylesheet" href="<?php echo THEME_URL_STYLE.'jquery.themeOption.overwrite.css'; ?>" type="text/css" media="all"/>
				<link rel="stylesheet" href="<?php echo THEME_URL_STYLE.'shortcode-manager.css'; ?>" type="text/css" media="all"/>
<?php 
		if(is_rtl()) 
		{ 
?>
				<link rel="stylesheet" href="<?php echo THEME_URL_STYLE.'jquery.themeOption.rtl.css'; ?>" type="text/css" media="all"/>	
<?php	
		} 
?>
				<script type="text/javascript" src="<?php echo includes_url('/js/jquery/jquery.js'); ?>"></script>
				<script type="text/javascript" src="<?php echo includes_url('/js/jquery/ui/jquery.ui.core.min.js'); ?>"></script>
				<script type="text/javascript" src="<?php echo includes_url('/js/jquery/ui/jquery.ui.widget.min.js'); ?>"></script>
				<script type="text/javascript" src="<?php echo includes_url('/js/jquery/ui/jquery.ui.mouse.min.js'); ?>"></script>
				<script type="text/javascript" src="<?php echo includes_url('/js/jquery/ui/jquery.ui.position.min.js'); ?>"></script>
				<script type="text/javascript" src="<?php echo includes_url('/js/jquery/ui/jquery.ui.sortable.min.js'); ?>"></script>
				<script type="text/javascript" src="<?php echo includes_url('/js/jquery/ui/jquery.ui.menu.min.js'); ?>"></script>
				<script type="text/javascript" src="<?php echo includes_url('/js/jquery/ui/jquery.ui.button.min.js'); ?>"></script>
				<script type="text/javascript" src="<?php echo includes_url('/js/jquery/ui/jquery.ui.slider.min.js'); ?>"></script>
				<script type="text/javascript" src="<?php echo includes_url('/js/jquery/ui/jquery.ui.autocomplete.min.js'); ?>"></script>
				<script type="text/javascript" src="<?php echo THEME_URL_SCRIPT.'jquery.dropkick.min.js'; ?>"></script>
				<script type="text/javascript" src="<?php echo THEME_URL_SCRIPT.'colorpicker.js'; ?>"></script>
				<script type="text/javascript" src="<?php echo THEME_URL_SCRIPT.'shortCodeManager.class.js'; ?>"></script>
				<script type="text/javascript" src="<?php echo THEME_URL_SCRIPT.'jquery.infieldlabel.min.js'; ?>"></script>
				<script type="text/javascript" src="<?php echo THEME_URL_SCRIPT.'jquery.themeOptionElement.js'; ?>"></script>
				<script type="text/javascript">
					var ajaxurl='<?php echo admin_url('admin-ajax.php'); ?>';
				</script>
				
			</head>

			<body>
				
				<form>

					<div class="shortcode-manager to to-clear-fix">

						<div class="shortcode-manager-header to-clear-fix">
							<?php echo $ShortCodeManager->createManagerSelectShortCodeList(); ?>
						</div>

						<div class="shortcode-manager-content to-clear-fix">
							<div class="to-clear-fix">
								<?php echo $ShortCodeManager->createManagerPanel(); ?>
							</div>
						</div>

						<div class="shortcode-manager-footer to-clear-fix">
							<input type="button" name="shortcode-manager-create-shortcode" id="shortcode-manager-create-shortcode" class="to-button" value="<?php TLThemeTranslator::esc_attr_e('Create shortcode'); ?>"/>
						</div>

					</div>
					
				</form>
				
				<script type="text/javascript">
				
					jQuery(document).ready(function($) 
					{
						var shortCodeManager=new TLThemeShortCodeManager('<?php echo THEME_CONTEXT; ?>',<?php echo $shortcode; ?>);
						shortCodeManager.create();
					});
			
				</script>

			</body>

		</html>