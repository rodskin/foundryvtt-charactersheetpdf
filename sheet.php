<?php
require_once('classes/setLocales.php');
$setLocales = new setLocales();
/*if (isset($_FILES['character_json']) && $_FILES['character_json']['tmp_name'] != '') {
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
	
	$character = json_decode($json_character);
	peinr_r($character);
	echo '</pre>';
} else {
	header('Location: index.php?locale=' . $_POST['select_lang']);
}*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $locale; ?>" lang="<?php echo $locale; ?>">
    <head>
        <meta charset="UTF-8">
		<link
            rel="stylesheet"
            type="text/css"
            media="all"
            href="styles/main.css"
            data-key="main" />
    </head>

    <body>
		<div id="sheets_wrapper">
			<div class="sheet" id="sheet_1">
				<img src="img/character_sheet_1.jpg" />
				
				<!-- INFOS -->
				<div class="is_absolute" id="character_name"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_name"><?php echo _('Character name'); ?></div>
				<div class="is_absolute" id="character_class_level"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_class_level"><?php echo _('Class & Level'); ?></div>
				<div class="is_absolute" id="character_background"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_background"><?php echo _('Background'); ?></div>
				<div class="is_absolute" id="character_player_name"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_player_name"><?php echo _('Player name'); ?></div>
				<div class="is_absolute" id="character_race"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_race"><?php echo _('Race'); ?></div>
				<div class="is_absolute" id="character_alignment"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_class_alignment"><?php echo _('Alignment'); ?></div>
				<div class="is_absolute" id="character_experience_points"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_experience_points"><?php echo _('Experience points'); ?></div>
				
				<!-- Caracteristics -->
				<div class="is_absolute" id="character_strength"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_strength"><?php echo _('Strength'); ?></div>
				
				<div class="is_absolute" id="character_dexterity"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_dexterity"><?php echo _('Dexterity'); ?></div>
				<div class="is_absolute is_label" id="bonus_dexterity"><?php echo $character['name']; ?></div>
				
				<div class="is_absolute" id="character_consitution"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_constitution"><?php echo _('Constitution'); ?></div>
				<div class="is_absolute is_label" id="bonus_constitution"><?php echo $character['name']; ?></div>
				
				<div class="is_absolute" id="character_intelligence"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_intelligence"><?php echo _('Intelligence'); ?></div>
				<div class="is_absolute is_label" id="bonus_intelligence"><?php echo $character['name']; ?></div>
				
				<div class="is_absolute" id="character_wisdom"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_wisdom"><?php echo _('Wisdom'); ?></div>
				<div class="is_absolute is_label" id="bonus_wisdom"><?php echo $character['name']; ?></div>
				
				<div class="is_absolute" id="character_charisma"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_charisma"><?php echo _('Charisma'); ?></div>
				<div class="is_absolute is_label" id="bonus_charisma"><?php echo $character['name']; ?></div>
				
				<!-- bonus -->
				<div class="is_absolute" id="character_inspiration"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_inspiration"><?php echo _('Inspiration'); ?></div>
				<div class="is_absolute" id="character_inspiration"><?php echo $character['name']; ?></div>
				<div class="is_absolute is_label" id="label_inspiration"><?php echo _('Proficiency bonus'); ?></div>
				
				<!-- carac bonus and saves -->
				
			</div>
			<div class="sheet" id="sheet_2">
				<img src="img/character_sheet_2.jpg" />
			</div>
			<div class="sheet" id="sheet_3">
				<img src="img/character_sheet_3.jpg" />
			</div>
		</div>
	</body>
</html>