<?php
require_once('classes/setLocales.php');
$setLocales = new setLocales();
if (isset($_FILES['character_json']) && $_FILES['character_json']['tmp_name'] != '') {
	$uploaddir = '/tmp/';
	$uploadfile = $uploaddir . basename($_FILES['character_json']['name']);

	echo '<pre>';
	if (move_uploaded_file($_FILES['character_json']['tmp_name'], $uploadfile)) {
		echo _("Valid file, it has been downloaded with success. Here are more infos:\n");
	} else {
		echo _("Potential attack by file download. Here are more infors :\n");
	}

	echo _('Here are some debug infos :');
	print_r($_FILES);
	// Ouverture en lecture seule
	$json_character = file_get_contents($uploadfile);
	
	print_r(json_decode($json_character));
	echo '</pre>';
} else {
	header('Location: index.php?locale=' . $_POST['select_lang']);
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $locale; ?>" lang="<?php echo $locale; ?>">
    <head>
        <meta charset="UTF-8">
    </head>

    <body>
        <div id="sheet_1"></div>
        <div id="sheet_2"></div>
        <div id="sheet_3"></div>
	</body>
</html>