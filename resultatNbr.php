
<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=pdf_books;", $username, $password);

if (isset($_GET['btn-search'])) {
    $value = '%'.$_GET['search'].'%';
    $SEARCH = $database->prepare("SELECT COUNT(*) FROM all_books WHERE title LIKE :value 
    OR category LIKE :value OR language LIKE :value");
    $SEARCH->bindValue(':value', $value);
    $SEARCH->execute();

    $result = $SEARCH->fetchColumn();

    echo '<span>' . $result . '</span>';
}
?>



