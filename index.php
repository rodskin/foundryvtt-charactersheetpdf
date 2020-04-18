<?php
require_once('classes/setLocales.php');
$setLocales = new setLocales();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $locale; ?>" lang="<?php echo $locale; ?>">
    <head>
        <meta charset="UTF-8">
		
        <title><?php echo _("FoundryVTT Module Maker"); ?></title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript"  src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"  data-key="jquery" ></script>
    </head>

    <body>
        <h1><?php echo _("Welcome to the Foundry Virtual Tabletop Character Export to pdf"); ?></h1>
		<form action="sheet.php" method="post" enctype="multipart/form-data">
			<div>
				<?php echo _('Select language'); ?>
				<select name="select_lang" id="select_lang">
					<?php foreach ($setLocales->locales_available as $lang_id => $lang) { ?>
						<option value="<?php echo $lang_id; ?>"<?php if ($lang_id == $_GET['locale']) { echo ' selected="selected"'; } ?>><?php echo $lang_id; ?></option>
					<?php } ?>
				</select>
			</div>
			<input type="file" name="character_json" calue="" />
			
			<input type="submit" value="<?php echo _('Convert'); ?>" />
		</form>
	</body>
</html>