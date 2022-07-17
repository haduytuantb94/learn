<?php 

$categories = [

    [
        'id'=> 1,
        'name'=> 'Furniture',
        'subCategory' => [
	        ['id'=> 1,'name'=> 'Bed'],
	        ['id'=> 2,'name'=> 'Benches'],
	        ['id'=> 3,'name'=> 'Cabinets'],
	        ['id'=> 4,'name'=> 'Chairs vs Stools'],
	        ['id'=> 5,'name'=> 'Consoles vs Desks'],
	        ['id'=> 6,'name'=> 'Sofas'],
	        ['id'=> 7,'name'=> 'Tables']
        ]
    ],

    [
        'id'=> 2,
        'name'=> 'Lighting',
        'subCategory' => [
	        ['id'=> 1,'name'=> 'Ceiling'],
	        ['id'=> 2,'name'=> 'Floor'],
	        ['id'=> 3,'name'=> 'Table'],
	        ['id'=> 4,'name'=> 'Wall']
        ]
    ],

    [
        'id'=> 3,
        'name'=> 'Accessories',
        'subCategory' => [
	        ['id'=> 1,'name'=> 'Mirrors'],
	        ['id'=> 2,'name'=> 'Outdors & Patio'],
	        ['id'=> 3,'name'=> 'Glass'],
        ]
    ]
];

$category_id = isset($_GET['id']) ? $_GET['id'] : "";
$newArr = [];
if(!empty($category_id)) {
    foreach ($categories as $value) {
    if($value['id'] == $category_id) {
        $newArr = $value;
        echo json_encode($newArr);
        break;
       }
    }
} else {
	$newArr['error'] = 'have some errors';
	echo json_encode($newArr);
	exit();
}

?>