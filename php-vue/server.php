<?php     
    include __DIR__ . "/../database.php";

    header('Content-Type: application/json'); 
    
    if(isset($_GET['genre']) && $_GET['genre'] != '') {       
        
        $filteredDatabase = [];

        foreach($database as $item) {
            if(strtolower($item['genre']) == strtolower($_GET['genre'])) {
                $filteredDatabase[] = $item;
            }
        }

        echo json_encode($filteredDatabase);
        
    } else {
        echo json_encode($database);
    }

    
?>
