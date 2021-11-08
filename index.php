<?php

include_once "models/database.php";
$pdo = initDatabse();
$posts = $pdo->query('SELECT * from posts');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Liste des posts</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Actif ?</th>
            <th scope="col">Crée le</th>
            <th scope="col">Comentaires</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($posts as $row) {
            ?>
                <tr>
                    <th scope="row"><?php echo $row['id']; ?></th>
                    <td><?php echo $row['title']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['active']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td><a href='commentaire.php?post=<?php echo $row['id']; ?>'>Voir</a></td>
                </tr>
            <?php
                }
            ?>
            </tr>
        </tbody>
    </table>    
</body>
</html>