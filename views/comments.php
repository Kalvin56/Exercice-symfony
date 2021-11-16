<a href="index.php">retour</a>
<h1>Commentaires pour le post <?php echo $postId; ?></h1>
<table class="table">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Description</th>
        <th scope="col">Crée le</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach($comments as $row) {
        ?>
            <tr>
                <th scope="row"><?php echo $row['id']; ?></th>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
            </tr>
        <?php
            }
        ?>
        </tr>
    </tbody>
</table>