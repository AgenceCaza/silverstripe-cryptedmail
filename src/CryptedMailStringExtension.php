<?php

use SilverStripe\Core\Extension;
use SilverStripe\ORM\FieldType\DBField;

class CryptedMailStringExtension extends Extension {

	public function CryptedMail() {

	  $extradom = "";

	  $email = $this->owner->value;
	  $a1 = explode("@", $email);
	  $username = $a1[0];
	  $domain = $a1[1];

	return DBField::create_field('HTMLVarchar','
		<a href="#" class="cryptedmail"
			 data-name="'.$username.'"
			 data-domain="'.$domain.'"
			 onclick="window.location.href = \'mailto:\' + this.dataset.name + \'@\' + this.dataset.domain; return false;">
		 </a>'
	 );

  	}
	
	
	public function CryptedMailNoTag() {

		$extradom = "";

		$email = $this->owner->value;
		$a1 = explode("@", $email);
		$username = $a1[0];
		$domain = $a1[1];

	return DBField::create_field('HTMLVarchar','
		class="cryptedmailnotag"
			 data-name="'.$username.'"
			 data-domain="'.$domain.'"
			 onclick="window.location.href = \'mailto:\' + this.dataset.name + \'@\' + this.dataset.domain; return false;"'
	 );

	}
	
	

}
