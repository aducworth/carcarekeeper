<?

require_once __DIR__ . '/vendor/autoload.php';
require 'config.php';

$vehical_api = new Aducworth\Edmunds\VehicleApi( $key );

$service_plan = $vehical_api->getMaintenanceSchedule( $_POST['modelyear'] );

//actionHolder] => Array
//        (
//            [0] => stdClass Object
//                (
//                    [id] => 563104
//                    [engineCode] => 4INAG2.4
//                    [transmissionCode] => ALL
//                    [intervalMileage] => 7500
//                    [intervalMonth] => 6
//                    [frequency] => 4
//                    [action] => Rotate
//                    [item] => Wheels & tires
//                    [itemDescription] => A circular frame of hard material that may be solid or partly solid, is capable of  turning on an axle, and holds the rubber cushion that contains compressed air.
//                    [laborUnits] => 0.3
//                    [partUnits] => 0
//                    [driveType] => ALL
//                    [modelYear] => /api/vehicle/modelyearrepository/findbyid?id=100502910
//                )


?>
<h1>Service Plan</h1>

<? if( count( $service_plan->actionHolder ) ): ?>

	<? foreach( $service_plan->actionHolder as $item ): ?>
	
		<p>
			<strong><?=$item->action ?> <?=$item->item ?></strong><br>
			When: At <?=$item->intervalMonth ?> months or <?=number_format( $item->intervalMileage ) ?> miles<br>
			Frequency: <?=$item->frequency ?><br>
			Labor: <?=$item->laborUnits ?><br>
			Parts: <?=$item->partUnits ?><br>
			Description: <?=$item->itemDescription ?><br>
		</p>
	
	<? endforeach; ?>
	
<? else: ?>

	<p>No services plans could be loaded for this vehicle.</p>
	
<? endif; ?>