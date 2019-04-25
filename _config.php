<?php

use SilverStripe\View\Parsers\ShortcodeParser;

ShortcodeParser::get('default')->register('CryptedMail',
  function($arguments, $address, $parser, $shortcode) {

	$email = $arguments['value'];
  	$part = explode("@", $email);
	$username = $part[0];
	$domain = $part[1];

  return '
    <a href="#" class="cryptedmail"
       data-name="'.$username.'"
       data-domain="'.$domain.'"
       onclick="window.location.href = \'mailto:\' + this.dataset.name + \'@\' + this.dataset.domain; return false;">
     </a>';
});
