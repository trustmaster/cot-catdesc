<?php
/* ====================
Copyright (c) 2008-2009, Vladimir Sibirov.
All rights reserved. Distributed under BSD License.

[BEGIN_SED_EXTPLUGIN]
Code=catdesc
Name=Category descriptions
Description=Add complete description articles to categories
Version=0.2
Date=2009-jan-30
Author=Trustmaster
Copyright=(c) Vladimir Sibirov 2008-2009
Notes=
SQL=
Auth_guests=R
Lock_guests=W12345A
Auth_members=R
Lock_members=W12345A
[END_SED_EXTPLUGIN]
==================== */
if ( !defined('SED_CODE') ) { die("Wrong URL."); }

if($action == 'install')
{
	$sql = sed_sql_query("SHOW COLUMNS FROM $db_structure WHERE Field = 'structure_text'");
	if(sed_sql_numrows($sql) == 0)
	{
		sed_sql_query("ALTER TABLE $db_structure ADD structure_text TEXT");
	}
}
?>