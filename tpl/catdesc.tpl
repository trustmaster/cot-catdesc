<!-- BEGIN: MAIN -->
<div id="main">

<h1>{CATDESC_TITLE}</h1>

<!-- BEGIN: CATDESC_NOTE -->
<div class="error">
	{CATDESC_NOTE_MSG}
</div>
<!-- END: CATDESC_NOTE -->

<a href="{CATDESC_CATURL}">{PHP.L.Category}</a><br />
<form name="catdescform" id="catdescform" action="{CATDESC_ACTION}" method="POST">
<textarea name="catd_text" class="editor" rows="24" cols="50">{CATDESC_TEXT}</textarea>
<input type="submit" value="{PHP.L.Submit}" />
</form>

</div>
<!-- END: MAIN -->