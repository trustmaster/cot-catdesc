<?php
/* ====================
Copyright (c) 2008-2009, Vladimir Sibirov.
All rights reserved. Distributed under BSD License.

[BEGIN_SED_EXTPLUGIN]
Code=catdesc
Part=main
File=catdesc
Hooks=standalone
Tags=
Order=
[END_SED_EXTPLUGIN]
==================== */
if (!defined('SED_CODE')) { die('Wrong URL.'); }

$c = sed_import('c', 'G', 'ALP');

sed_block(sed_auth('page', $c, 'A'));

$catd_text = sed_import('catd_text', 'P', 'TXT');

if(!empty($catd_text))
{
	$catd_text = sed_sql_prep($catd_text);
	@sed_sql_query("UPDATE $db_structure SET structure_text = '$catd_text' WHERE structure_code = '$c'");
	$t->assign('CATDESC_NOTE_MSG', $L['plu_changed']);
	$t->parse('MAIN.CATDESC_NOTE');
}

$catd_text = @sed_sql_result(sed_sql_query("SELECT structure_text FROM $db_structure WHERE structure_code = '$c'"), 0, 0);
$t->assign(array(
	'CATDESC_TITLE' => $L['plu_title'],
	'CATDESC_CATURL' => sed_url('list', "c=$c"),
	'CATDESC_ACTION' => sed_url('plug', "e=catdesc&c=$c"),
	'CATDESC_TEXT' => sed_cc($catd_text)
));
?>