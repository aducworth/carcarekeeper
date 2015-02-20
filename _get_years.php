<?

require_once( 'edmunds.php' );
require_once( 'vehicle.php' );

$vehical_api = new VehicleApi;

$html = '<option>Choose Year</option>';

//print_r( $_POST );

foreach( $vehical_api->getMakes()->makes as $make ) {

	if( $_POST['make'] == $make->niceName ) {
		
		foreach( $make->models as $model ) {
		
			if( $_POST['model'] == $model->niceName ) {
			
				foreach( $model->years as $year ) {
					
					$html .= "<option value='" . $year->id . "'>" . $year->year . "</option>";
					
				}
			
			}
			
			
			
		}
	}
	//print_r( $make );
	
//	$toreturn[] = array( 'id' => $make->niceName, 'name' => $make->name );
//	$html .= "<option value='" . $make->niceName . "'>" . $make->name . "</option>";
	
}

echo( $html );

?>