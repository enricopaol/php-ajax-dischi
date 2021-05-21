<?php 
    include __DIR__ . '/../database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
</head>
<body>
    
    <div id="root">
        <!-- HEADER -->
        <header>
            <div class="logo">
                <img src="../img/download.png" alt="logo-spotify">
            </div>

            <div class="filter">
                <label for="filter-genre">Filtra per genere:</label>
                <select 
                    name="filter-genre" 
                    id="filter-genre"
                    
                    >
                    <option value="" selected>All</option>
                    <option value="Rock">Rock</option>
                    <option value="Pop">Pop</option>
                    <option value="Jazz">Jazz</option>
                    <option value="Metal">Metal</option>
                    
                </select>
            </div>
        </header>

        <!-- MAIN -->
        <main>

            <div class="albums-container">

                
                <div class="filtered-albums">

                    <!-- Single CD -->
                    <?php foreach($database as $cd) { ?>
                        <div class="single-album-container">                        
                            <div class="single-album">
                                <img src="<?php echo $cd['poster']?>" alt="<?php echo $cd['title']?>">
                                <div class="album-title"><?php echo $cd['title']?></div>
                                <div class="album-author"><?php echo $cd['author']?></div>
                                <div class="album-year"><?php echo $cd['year']?></div>
                            </div>
                        </div>
                    <?php } ?>
                    
                </div>
                                
                
            </div>
        </main>
    </div>

    
</body>
</html>