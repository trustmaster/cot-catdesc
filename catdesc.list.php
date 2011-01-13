<?php
/* ====================
Copyright (c) 2008-2009, Vladimir Sibirov.
All rights reserved. Distributed under BSD License.

[BEGIN_SED_EXTPLUGIN]
Code=catdesc
Part=list
File=catdesc.list
Hooks=list.tags
Tags=list.tpl:{LIST_TEXT},{LIST_TEXTEDIT}
Order=10
[END_SED_EXTPLUGIN]
==================== */
if (!defined('SED_CODE')) { die('Wrong URL.'); }

$catd_res = @sed_sql_query("SELECT structure_text FROM $db_structure WHERE structure_code = '$c'");
if($catd = @sed_sql_fetchassoc($catd_res))
{
	$t->assign(array(
		'LIST_TEXT' => sed_parse($catd['structure_text'], $cfg['parsebbcodepages'], $cfg['parsesmiliespages'], 1),
		'LIST_TEXTEDIT' => sed_auth('page', $c, 'A') ? '<a href="'.sed_url('plug', 'e=catdesc&c='.$c).'">'.$L['Edit'].' '.$L['Description'].'</a>' : ''
	));
}

?>