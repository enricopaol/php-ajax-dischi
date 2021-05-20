<?php     
    include __DIR__ . "/database.php";

    header('Content-Type: application/json'); 
    
    if(strtolower(isset($_GET['genre'])) && strtolower($_GET['genre']) != '') {       
        
        $filteredDatabase = [];

        foreach($database as $item) {
            if($item['genre'] == $_GET['genre']) {
                $filteredDatabase[] = $item;
            }
        }

        echo json_encode($filteredDatabase);
        
    } else {
        echo json_encode($database);
    }

    
?>