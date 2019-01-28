<?php

use SilverStripe\View\Parsers\ShortcodeParser;

ShortcodeParser::get('default')->register('CryptedMail',
  function($arguments, $address, $parser, $shortcode) {

	$extradom = "";

	$email = $arguments['value'];
  $a1 = explode("@", $email);
  $username = $a1[0];
	$dom = explode(".", $a1[1]);

	if (isset($dom[2])) {
		$dom2 = $dom[2];

		if (isset($dom2)) {
			$extradom = ".".$dom2;
		}

	}

  return '
    <a href="#" class="cryptedmail"
       data-name="'.$username.'"
       data-domain="'.$dom[0].'"
       data-tld="'.$dom[1].$extradom.'"
       onclick="window.location.href = \'mailto:\' + this.dataset.name + \'@\' + this.dataset.domain + \'.\' + this.dataset.tld; return false;">
     </a>';
});
