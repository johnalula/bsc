<h2><?php echo "Perspective Select Chart Type "; ?></h2>
<script language="javascript">AC_FL_RunContent = 0;</script>
<script language="javascript"> DetectFlashVer = 0; </script>
<?php echo $this->Html->script(array('AC_RunActiveContent.js'));?>
<script language="JavaScript" type="text/javascript">

var requiredMajorVersion = 10;
var requiredMinorVersion = 0;
var requiredRevision = 45;

</script>
<LINK href='../css/cake.generic.css' rel='stylesheet' type='text/css'>
<BODY bgcolor="#FFFFFF">


<?php echo $this->Form->create('Perspective'); ?>
<select name = "chart_id" id = "chart_id" onChange="this.form.submit()">
  <option value="">Select Graph Type</option>
  <option value="1">Line Graph</option>
  <option value="2">Column</option>
  <option value="3">Pie</option>
  <option value="4">3D Column</option>
  <option value="5">Stacked column</option>
  <option value="6">Floating column</option>
  <!--option value="7">Image column</option-->
  <option value="8">Stacked 3D column</option>
  <option value="9">Parallel 3D column</option>
  <option value="10">3D Pie</option>
  <!--option value="11">Image Pie</option-->
  <option value="12">Donut</option>
  <option value="13">Bar</option>
  <option value="14">Stacked bar</option>
  <option value="15">Floating bar</option>
  <option value="16">Area</option>
  <option value="17">Stacked area</option>
  <option value="18">3D Area</option>
  <option value="19">3D Stacked area</option>
  <option value="20">Candlestick</option>
  <option value="21">Scatter</option>
  <option value="22">Polar</option>
  <!--option value="23">Bubble</option-->
  <option value="24">Mixed</option>
  <option value="25">Composite</option>
  <option value="26">Joined</option>
  <option value="27">Custom</option>
</select><br /><br />
<!--<input type="submit" value="Create Graph">-->
</form>

<script language="JavaScript" type="text/javascript">
<!--
if (AC_FL_RunContent == 0 || DetectFlashVer == 0) {
	alert("This page requires AC_RunActiveContent.js.");
} else {
	var hasRightVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
	if(hasRightVersion) { 
		AC_FL_RunContent(
			'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,45,2',
			'width', '80%',
			'height', '550',
			'scale', 'noscale',
			'salign', 'TL',
			'bgcolor', '#777788',
			'wmode', 'opaque',
			'movie', 'charts',
			'src', 'charts',
			'FlashVars', 'library_path=charts_library&xml_source=sample.xml', 
			'id', 'my_chart',
			'name', 'my_chart',
			'menu', 'true',
			'allowFullScreen', 'true',
			'allowScriptAccess','sameDomain',
			'quality', 'high',
			'align', 'middle',
			'pluginspage', 'http://www.macromedia.com/go/getflashplayer',
			'play', 'true',
			'devicefont', 'false'
			); 
	} else { 
		var alternateContent = 'This content requires the Adobe Flash Player. '
		+ '<u><a href=http://www.macromedia.com/go/getflash/>Get Flash</a></u>.';
		document.write(alternateContent); 
	}
}
// -->
</script>
<noscript>
	<P>This content requires JavaScript.</P>
</noscript>

</BODY>
</HTML>
