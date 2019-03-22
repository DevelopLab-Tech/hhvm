<?php
require "connect.inc";

$link = ldap_connect_and_bind($host, $port, $user, $passwd, $protocol_version);

// Too few parameters
var_dump(ldap_mod_add());
var_dump(ldap_mod_add($link));
var_dump(ldap_mod_add($link, "$base"));

// Too many parameters
var_dump(ldap_mod_add($link, "$base", array(), "Additional data"));

// DN not found
var_dump(ldap_mod_add($link, "dc=my-domain,$base", array()));

// Invalid DN
var_dump(ldap_mod_add($link, "weirdAttribute=val", array()));

$entry = array(
	"objectClass"	=> array(
		"top",
		"dcObject",
		"organization"),
	"dc"			=> "my-domain",
	"o"				=> "my-domain",
);

ldap_add($link, "dc=my-domain,$base", $entry);

$entry2 = $entry;
$entry2["dc"] = "Wrong Domain";

var_dump(ldap_mod_add($link, "dc=my-domain,$base", $entry2));

$entry2 = $entry;
$entry2["weirdAttribute"] = "weirdVal";

var_dump(ldap_mod_add($link, "dc=my-domain,$base", $entry2));
echo "===DONE===\n";
<?php
require "connect.inc";

$link = ldap_connect_and_bind($host, $port, $user, $passwd, $protocol_version);

ldap_delete($link, "dc=my-domain,$base");
