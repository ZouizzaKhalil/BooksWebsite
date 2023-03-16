<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "pdf_books";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// PHP code goes here
$sql = "SELECT * FROM all_books where year > 2017";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $title = $row["title"];
    $image = $row["image"];
    $pages = $row["pages"];
    $category = $row["category"];
    $year = $row["year"];
    $link = $row["link"];




    echo "            
    

    <div class='u-s-m-b-30'>
    <div class='product-o product-o--hover-on' style='height: 360px;'>
        <div class='product-o__wrap'>

            <a class='aspect aspect--bg-grey aspect--square u-d-block' href='#'>

                <img class='aspect__img' src='images/product/pdf_books/$image' alt=''></a>
            <div class='product-o__action-wrap'>
                <ul class='product-o__action-list'>
                    <li>

                        <a href='$link' data-tooltip='tooltip' data-placement='top' title='Download'><i class='fa fa-download' aria-hidden='true'></i></a>
                    </li>
                </ul>
            </div>
        </div>

        <span class='product-o__category'>

            <a href='#'>$category</a></span>

        <span class='product-o__name'>

            <a href='#' >$title</a></span>
        <div class='product-o__rating gl-rating-style'></div>

        <span class='product-o__price' style='color:#ff4500 ;'>$pages pages

            <span class='product-o__discount'></span></span>
    </div>
</div>
                                          
                                            
   ";
}

?>