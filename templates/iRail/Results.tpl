<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html lang="en">
<head>
<title>iRail - {from} to {to}</title>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
<link href="templates/iRail/css/query.css" rel="stylesheet" type="text/css" />
<meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<script type="application/x-javascript">
addEventListener('load', function() { setTimeout(hideAddressBar, 0); }, false)
function hideAddressBar() { window.scrollTo(0, 1); }
</script>
</head>
<body>
              <div data-role="content">

{strike}
<!-- compass image by Yusuke Kamiyamane, Creative Commons (Attribution 3.0 Unported) -->
<table>
<tr>
<td>{i18n_map}: <a href="http://maps.google.be/?saddr={location1}&daddr={location2}" target="_blank"><img border="0" class="icon" src="img/map.png" width="14" height="14" alt="Local Map" title="Click for map" /></a>
</td>
<td>{i18n_date}: {date}
</td>
</tr>
<tr>
<td>{i18n_from}: <b> {from}</b></td>
<td>{i18n_to}: <b> {to}</b></td></tr></table>
<table align="left" cellpadding="0" cellspacing="1" bgcolor="FFFFFF" summary="Train Info">
<tr>
<th>{i18n_time}</th>
<th>{i18n_duration}</th>
<th>{i18n_delay}</th>
<th>{i18n_platform}</th>
<th>{i18n_transfers}</th>
<th>{i18n_transportation}</th>
</tr>

{loop_connections}
    <tr class="color{colorindex}">
        <td>
            {departtime}<br/>{arrivaltime}
        </td>
        <td>
            {duration}
        </td>
        <td class="{delayed}">
            {delay}
        </td>
        <td>
            {platform}
        </td>
        <td>
            {transfers}
        </td>
        <td>
            {trains}
        </td>

</tr>
{/loop_connections}

<tr>
<td colspan="8">
<center>
    <form action="/">
<input type="submit" name="submit" value="{i18n_back}">
</form>
</center>
<br />
</td>
</tr>
</table>
</div>
</body>
</html>
