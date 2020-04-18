<?php
/*
xgettext --add-comments *.php foundryExportSheet.pot
msgmerge --update locale/fr/LC_MESSAGES/foundryExportSheet.po foundryExportSheet.pot

... translate new / changed texts in foundryExportSheet.po ...

msgfmt locale/fr/LC_MESSAGES/foundryExportSheet.po --output-file=locale/fr/LC_MESSAGES/foundryExportSheet.mo
*/
class setLocales {
	public $locales_available = array(
		'en' => 'en_US.utf8',
		'fr' => 'fr_FR.utf8',
		'it' => 'it_UT.utf8',
		'es' => 'es_ES.utf8'
	);
	
	public $chosenLocale = 'en_US.utf8';
	
	public function __construct()
	{

		// set locale from url string
		if (isset($_GET['locale']) && array_key_exists($_GET['locale'], $this->locales_available)) {
			$this->chosenLocale = $this->locales_available[$_GET['locale']];
		}
		if (isset($_POST['select_lang']) && array_key_exists($_POST['select_lang'], $this->locales_available)) {
			$this->chosenLocale = $this->locales_available[$_POST['select_lang']];
		}

		// set lang env
		putenv('LANGUAGE=' . $this->chosenLocale);

		//set locale:
		setlocale(LC_ALL, $this->chosenLocale);

		// my understanding for this, is name of my translation files for application ?
		$domain = 'foundryExportSheet';

		bindtextdomain($domain, dirname(dirname(__FILE__)) . "/locale");
		bind_textdomain_codeset($domain, 'UTF-8');
		textdomain($domain);
	}
}