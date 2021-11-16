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
                <td><a href='index.php?action=comments-list&post_id=<?php echo $row['id']; ?>'>Voir</a></td>
            </tr>
        <?php
            }
        ?>
        </tr>
    </tbody>
</table>