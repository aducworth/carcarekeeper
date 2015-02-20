<?

require_once( 'edmunds.php' );
require_once( 'vehicle.php' );

$vehical_api = new VehicleApi;

$html = '<option>Choose Make</option>';

foreach( $vehical_api->getMakes()->makes as $make ) {
	
	$toreturn[] = array( 'id' => $make->niceName, 'name' => $make->name );
	$html .= "<option value='" . $make->niceName . "'>" . $make->name . "</option>";
	
}

echo( $html );

?>