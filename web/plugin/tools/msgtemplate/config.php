<?php
defined('_SECURE_') or die('Forbidden');

// insert to left menu array
$menutab_tools = $core_config['menutab']['my_account'];
$menu_config[$menutab_tools][] = array("index.php?app=menu&inc=tools_msgtemplate&op=list", _('Message template'));
?>
