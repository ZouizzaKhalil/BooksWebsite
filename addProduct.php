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
$sql = "SELECT * FROM all_books where year < 2018";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    $title = $row["title"];
    $image = $row["image"];
    $pages = $row["pages"];
    $category = $row["category"];
    $year = $row["year"];
    $link = $row["link"];

    
    
    if ($category == "Web Development") {
        $type = "headphone";
    }elseif($category == "Database" ) {
        $type = "sportgadget";
    }elseif($category == "AI" ) {
        $type = "dslr";
    }elseif($category == "Cybersecurity" ) {
        $type = "smartphone";
    };;


    echo "  
                                            <div class='col-xl-3 col-lg-4 col-md-6 col-sm-6 u-s-m-b-30 filter__item $type' >
                                            <div class='product-o product-o--hover-on product-o--radius' style='height: 360px;'>
                                              <div class='product-o__wrap'>
                                                <a class='aspect aspect--bg-grey aspect--square u-d-block' href='#'>
                                                  <img class='aspect__img' src='images/product/pdf_books/$image'>
                                                </a>
                                                <div class='product-o__action-wrap'>
                                                  <ul class='product-o__action-list'>
                                                    
                                                    <li>
                                                      <a href='$link' data-modal='modal' data-modal-id='#add-to-cart' data-tooltip='tooltip' data-placement='top' title='Download'><i class='fa fa-download' aria-hidden='true'></i></a>
                                                    </li>
                                                    
                                                  </ul>
                                                </div>
                                              </div>
                                              <span class='product-o__category'>
                                                <a href='#'>$category</a>
                                              </span>
                                              <span class='product-o__name'>
                                                <a href='#'>$title</a>
                                              </span>
                                              
                                              <span class='product-o__price' style='color:#ff4500 ;'>$pages pages<span class='product-o__price' style='color:#d2691e;'>Published in: $year</span></span>
                                            </div>
                                          </div>
                    
                                          
        ";
                           
}
?>
