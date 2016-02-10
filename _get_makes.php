<?

require_once __DIR__ . '/vendor/autoload.php';
require 'config.php';

$vehical_api = new Aducworth\Edmunds\VehicleApi( $key );

$html = '<option>Choose Make</option>';

foreach( $vehical_api->getMakes()->makes as $make ) {
	
	$toreturn[] = array( 'id' => $make->niceName, 'name' => $make->name );
	$html .= "<option value='" . $make->niceName . "'>" . $make->name . "</option>";
	
}

echo( $html );

?>