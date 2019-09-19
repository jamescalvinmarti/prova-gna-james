<?php require 'database/queries.php' ?>

<h1>Prova GNA</h1>

<form action="partials/book_publisher_list.php" method="POST">
    <label for="author-select">Tria un autor:</label>
    <select name="author-select">
        <?php while ($author = $result_author_list->fetch_assoc()) { ?>
            <option value="<?php echo $author['id'] ?>"><?php echo $author['name'] ?></option>
        <?php } ?>
    </select>

    <input type="submit" value="Veure llistes">
</form>

<h3>Llista de llibres més barats</h3>

<ul>
    <?php while ($book = $result_cheap_book_list->fetch_assoc()) { ?>
        <li>
            <?php $total_price = $book['price'] + ($book['price'] * 0.21) ?>
            <?php echo $book['name'] . ', ' . $total_price . '€'; ?>
        </li>
    <?php } ?>
</ul>

<?php $con->close(); ?>