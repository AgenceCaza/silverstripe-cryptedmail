<?php

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class CryptedMailRequirementExtension extends Extension {

	public function onBeforeInit() {

		Requirements::CSS('intwebg/silverstripe-cryptedmail:client/cryptedmail.css');

	}
}
