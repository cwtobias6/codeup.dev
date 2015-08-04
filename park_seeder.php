<?php

define("DB_HOST", '127.0.0.1');
define("DB_NAME", 'parks_db');
define("DB_USER", 'parks_user');
define("DB_PASSWORD", 'password');

require_once "db_connect.php";

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


$dbc->exec('TRUNCATE national_parks');


$parks = [

['name' => 'Acadia', 'location' =>'Maine' , 'date_established' => '1919', 'area_in_acres' => '47389','description' => 'Covering most of Mount Desert Island and other coastal islands, Acadia features the tallest mountain on the Atlantic coast of the United States, granite peaks, ocean shoreline, woodlands, and lakes. There are freshwater, estuary, forest, and intertidal habitats.'],
['name' => 'Arches', 'location' =>'Utah' , 'date_established' => '1929', 'area_in_acres' => '9000','description' => 'This site features more than 2,000 natural sandstone arches, including the famous Delicate Arch. In a desert climate, millions of years of erosion have led to these structures, and the arid ground has life-sustaining soil crust and potholes, which serve as natural water-collecting basins. Other geologic formations are stone columns, spires, fins, and towers.'],
['name' => 'Big Bend', 'location' =>'Texas' , 'date_established' => '1928', 'area_in_acres' => '801163','description' => 'Named for the prominent bend in the Rio Grande along the US–Mexico border, this park encompasses a large and remote part of the Chihuahuan Desert. Its main attraction is backcountry recreation in the arid Chisos Mountains and in canyons along the river. A wide variety of Cretaceous and Tertiary fossils as well as cultural artifacts of Native Americans also exist within its borders.'],
['name' => 'Channel Islands', 'location' =>'California' , 'date_established' => '1980', 'area_in_acres' => '249561','description' => 'Five of the eight Channel Islands are protected, and half of the park\'s area is underwater. The islands have a unique Mediterranean ecosystem originally settled by the Chumash people. They are home to over 2,000 species of land plants and animals, and 145 are unique to them, including the island fox. Professional ferry services offer transportation to the islands from the mainland.'],
['name' => 'Crater Lake', 'location' =>'Oregon' , 'date_established' => '1902', 'area_in_acres' => '183224','description' => 'Crater Lake lies in the caldera of an ancient volcano called Mount Mazama that collapsed 7,700 years ago. It is the deepest lake in the United States and is famous for its vivid blue color and water clarity. There are two more recent volcanic islands in the lake, and, with no inlets or outlets, all water comes through precipitation.'],
['name' => 'Glacier', 'location' =>'Montana' , 'date_established' => '1910', 'area_in_acres' => '1013572','description' => 'The U.S. half of Waterton-Glacier International Peace Park, this park hosts 26 glaciers and 130 named lakes beneath a stunning canopy of Rocky Mountain peaks. There are historic hotels and a landmark road in this region of rapidly receding glaciers. The local mountains, formed by an overthrust, expose the world\'s best-preserved sedimentary fossils from the Proterozoic era.'],
['name' => 'Mount Rainier', 'location' =>'Washington' , 'date_established' => '1899', 'area_in_acres' => '235625','description' => 'Mount Rainier, an active stratovolcano, is the most prominent peak in the Cascades, and is covered by 26 named glaciers including Carbon Glacier and Emmons Glacier, the largest in the continental United States. The mountain is popular for climbing, and more than half of the park is covered by subalpine and alpine forests. Paradise on the south slope is one of the snowiest places in the world, and the Longmire visitor center is the start of the Wonderland Trail, which encircles the mountain.'],
['name' => 'Redwood', 'location' =>'California' , 'date_established' => '1968', 'area_in_acres' => '112512','description' => 'This park and the co-managed state parks protect almost half of all remaining Coastal Redwoods, the tallest trees on Earth. There are three large river systems in this very seismically active area, and 37 miles (60 km) of protected coastline reveal tide pools and seastacks. The prairie, estuary, coast, river, and forest ecosystems contain a huge variety of animal and plant species.'],
['name' => 'Rocky Mountain', 'location' =>'Colorado' , 'date_established' => '1915', 'area_in_acres' => '265828','description' => 'Bisected north to south by the Continental Divide, this portion of the Rockies has ecosystems varying from over 150 riparian lakes to montane and subalpine forests to treeless alpine tundra. Wildlife including mule deer, bighorn sheep, black bears, and cougars inhabit its igneous mountains and glacier valleys. Longs Peak, a classic Colorado fourteener, and the scenic Bear Lake are popular destinations, as well as the famous Trail Ridge Road, which reaches an elevation of more than 12,000 feet (3,700 m).'],
['name' => 'Yosemite', 'location' =>'California' , 'date_established' => '1890', 'area_in_acres' => '761266','description' => 'Among the earliest candidates for National Park status, Yosemite features towering granite cliffs, dramatic waterfalls, and old-growth forests at a unique intersection of geology and hydrology. Half Dome and El Capitan rise from the park\'s centerpiece, the glacier-carved Yosemite Valley, and from its vertical walls drop Yosemite Falls, North America\'s tallest waterfall. Three Giant Sequoia groves, along with a pristine wilderness in the heart of the Sierra Nevada, are home to an abundance of rare plant and animal species.']

];

$stmt = $dbc->prepare('INSERT INTO national_parks(name,location,date_established,area_in_acres,description) VALUES (:name,:location,:date_established,:area_in_acres,:description)');

foreach ($parks as $park) {
	$stmt->bindValue(':name',$park['name'],PDO::PARAM_STR);
    $stmt->bindValue(':location', $park['location'],PDO::PARAM_STR);
    $stmt->bindValue(':date_established', $park['date_established'],PDO::PARAM_INT);
    $stmt->bindValue(':area_in_acres', $park['area_in_acres'],PDO::PARAM_STR);
    $stmt->bindValue(':description', $park['description'],PDO::PARAM_STR);

    $stmt->execute();

	echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;

}



?>