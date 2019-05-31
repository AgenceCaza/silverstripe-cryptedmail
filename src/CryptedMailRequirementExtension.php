<?php

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class CryptedMailRequirementExtension extends Extension {

	public function onBeforeInit() {

		Requirements::CSS('agencecaza/silverstripe-cryptedmail:client/cryptedmail.css');

	}
}
