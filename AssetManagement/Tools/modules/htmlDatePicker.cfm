<!DOCTYPE HTML>

<html>
<head>
	<meta charset="utf-8">
	<title>htmlDatePicker Test Page (CFML)</title>
	<script src="htmlDatePicker.js" type="text/javascript"></script>
	<link href="htmlDatePicker.css" rel="stylesheet">
</head>

<body>
<cfif IsDefined("form.SelectedDate")>
	<p>You selected the date: <cfoutput>#form.SelectedDate# (#DateFormat(form.SelectedDate,"mmmm dd, yyyy")#)</cfoutput></p>
</cfif>
<form action="datepicker.cfm" method="post" name="frmMain" id="frmMain">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	Please select a date: 
	<script type="text/javascript"><!--
		var today = new Date();
		
		DisablePast = false;
		range_start = new Date(today.getFullYear(),today.getMonth(),8);
		range_end = new Date(today.getFullYear(),today.getMonth(),5);
	--></script>
	<input type="text" placeholder="Click me!" name="SelectedDate" id="SelectedDate" readonly onClick="GetDate(this);">
	<br>
	<input type="submit">
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</form>
</body>
</html>
