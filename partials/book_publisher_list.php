<?php
require '../database/connection.php';

if (isset($_POST['author-select'])) {
    $author_id = $_POST['author-select'];
} else {
    header('Location: index.php');
}

// books list
$book_list = "SELECT * FROM books WHERE author_id = $author_id;";
$result_book_list = $con->query($book_list);

// publishers list
$publisher_list = "SELECT * FROM publishers LEFT JOIN authors_publishers 
    ON publishers.id = authors_publishers.publisher_id 
    WHERE authors_publishers.author_id = $author_id;";
$result_publisher_list = $con->query($publisher_list);

if ($result_book_list->num_rows == 0 || $result_publisher_list->num_rows == 0) {
    die("No s'han trobat les dades.<br> ");
}
?>

<h3>Llista de llibres</h3>

<ul>
    <?php while ($book = $result_book_list->fetch_assoc()) { ?>
        <li>
            <?php echo $book['name']; ?>
        </li>
    <?php } ?>
</ul>


<h3>Llista de editorials</h3>

<ul>
    <?php while ($publisher = $result_publisher_list->fetch_assoc()) { ?>
        <li>
            <?php echo $publisher['name']; ?>
        </li>
    <?php } ?>
</ul>

<?php $con->close(); ?>