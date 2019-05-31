<h1>agencecaza/silverstripe-cryptedmail</h1>
<p>Protect email address against robot &amp; spammer</p>

<h2>Requirements</h2>
<ul><li>SilverStripe ^4.2.x</li></ul>

<h2>Installation</h2>
<pre>composer require intwebg/silverstripe-cryptedmail dev-master</pre>
<h2>Usage</h2>
In template
<code>$Email.CryptedMail</code>

In HTMLEditorField
<code>[CryptedMail value='user@domain.tld']</code>
