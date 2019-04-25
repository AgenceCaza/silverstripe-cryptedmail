<?php

use SilverStripe\Core\Extension;
use SilverStripe\ORM\FieldType\DBField;

class CryptedMailStringExtension extends Extension {

	public function CryptedMail() {

	  $email = $this->owner->value;
	  $part = explode("@", $email);
	  $username = $part[0];
	  $domain = $part[1];

	  return DBField::create_field('HTMLVarchar','
		<a href="#" class="cryptedmail"
			 data-name="'.$username.'"
			 data-domain="'.$domain.'"
			 onclick="window.location.href = \'mailto:\' + this.dataset.name + \'@\' + this.dataset.domain; return false;">
		 </a>'
	   );

  	}
	
	
	public function CryptedMailNoTag() {

		$email = $this->owner->value;
		$part = explode("@", $email);
		$username = $part[0];
		$domain = $part[1];

	  return DBField::create_field('HTMLVarchar','
		class="cryptedmailnotag"
			 data-name="'.$username.'"
			 data-domain="'.$domain.'"
			 onclick="window.location.href = \'mailto:\' + this.dataset.name + \'@\' + this.dataset.domain; return false;"'
	   );

	}
	
	

}
