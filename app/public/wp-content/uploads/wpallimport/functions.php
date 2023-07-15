<?php
function getPublishDate( $date ) {
	$date = explode(".", $date)[0];

	$date = DateTime::createFromFormat( 'Y-m-d\TG:i:s', $date )->modify('-4 hours');
	if( $date ) {
		return $date->format( "m/d/Y" );
	} else {
		return date('m/d/Y', time());
	}
}

function getLastUpdatedDate( $date ) {
	$last_updated_date = DateTime::createFromFormat( 'Y-m-d\TG:i:s\Z', $date )->modify('-4 hours');
	if( $last_updated_date ) {
		return $last_updated_date->format( "m/d/Y g:i a" );
	} else {
		return $date;
	}
}

?>