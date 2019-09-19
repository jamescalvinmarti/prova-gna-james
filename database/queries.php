<?php

require 'database/connection.php';

// Author list

$author_list = "SELECT id,name FROM authors;";
$result_author_list = $con->query($author_list);

if ($result_author_list->num_rows == 0) {
    die("No s'ha trobat cap autor.<br> ");
}

// list of books that cost less than 15.00

$cheap_book_list = "SELECT name,price FROM books WHERE price < 15.00 ORDER BY price;";
$result_cheap_book_list = $con->query($cheap_book_list);

if ($result_cheap_book_list->num_rows == 0) {
    die("No s'ha trobat cap llibre.<br> ");
}

$con->close();
