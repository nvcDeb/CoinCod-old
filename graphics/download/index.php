<?php
$file = "../../template/template_image/bottom/".$_GET['file']."";	
header( 'Pragma: public' ); // required
header( 'Expires: 0' );
header( 'Cache-Control: must-revalidate, post-check=0, pre-check=0' );
header( 'Cache-Control: private', false ); // required for certain browsers 
header( 'Content-Type: application/png' );

header( 'Content-Disposition: attachment; filename="'. basename($file) . '";' );
header( 'Content-Transfer-Encoding: binary' );
header( 'Content-Length: ' . filesize( $file ) );

readfile( $file );

exit;
?>
