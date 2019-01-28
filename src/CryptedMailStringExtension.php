<?php

use SilverStripe\Core\Extension;
use SilverStripe\ORM\FieldType\DBField;

class CryptedMailStringExtension extends Extension {

	public function CryptedMail() {

	  $extradom = "";

	  $email = $this->owner->value;
	  $a1 = explode("@", $email);
	  $username = $a1[0];
	  $dom = explode(".", $a1[1]);

	  if (isset($dom[2])) {
	      $extradom = ".".$dom[2];
	  }

	return DBField::create_field('HTMLVarchar','
		<a href="#" class="cryptedmail"
			 data-name="'.$username.'"
			 data-domain="'.$dom[0].'"
			 data-tld="'.$dom[1].$extradom.'"
			 onclick="window.location.href = \'mailto:\' + this.dataset.name + \'@\' + this.dataset.domain + \'.\' + this.dataset.tld; return false;">
		 </a>'
	 );

  }

}
