<?

require_once( 'edmunds.php' );
require_once( 'vehicle.php' );

$vehical_api = new VehicleApi;

$html = '<option>Choose Model</option>';

//print_r( $_POST );

foreach( $vehical_api->getMakes()->makes as $make ) {

	if( $_POST['make'] == $make->niceName ) {
		
		foreach( $make->models as $model ) {
			
			$html .= "<option value='" . $model->niceName . "'>" . $model->name . "</option>";
			
		}
	}
	//print_r( $make );
	
//	$toreturn[] = array( 'id' => $make->niceName, 'name' => $make->name );
//	$html .= "<option value='" . $make->niceName . "'>" . $make->name . "</option>";
	
}

echo( $html );

?>