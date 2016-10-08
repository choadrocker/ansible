<html>
<head>
<link rel="stylesheet" type="text/css" href="real-world.css">
<meta http-equiv="refresh" content="30">
<title>HOT</title>
<?php
$src_dir = './images';
if ( $handle = @opendir( $src_dir ) ) {
	while ( false !== ( $file = @readdir( $handle ) ) ) {
		if ( !( $file == '.' || $file == '..' ) ) {
			$files[] = $file;
		}
	}
	@closedir( $handle );
	$num_files = count ($files);
	$file = $files [ rand ( 0, $num_files - 1 ) ];
	//echo "<body background=\"$src_dir/$file\">\n";
	$bg = "$src_dir/$file";
}
$hex = dechex(rand(0,255)) . dechex(rand(0,255)) . dechex(rand(0,255));
?>
<style type="text/css">
<!--
span.pfob 
{
  font-family: arial,sans-serif;
  font-style: italic;
  font-size: 300px;
  color: #<?php echo($hex);?>;
}
body 
{
  background-image:url('<?php echo($bg);?>');
  background-size: 100% 100%;
  background-repeat: no-repeat;
} 
-->
</style>
</head><body>
<table width="100%" height="100%">
<tr width="100%" height="100%" align="center">
<td width="100%" height="100%" valign="center">
<span class="blink">
<span class="pfob">?????</span>
</span>
</td></tr></table>
</body></html>
