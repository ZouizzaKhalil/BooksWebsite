
<?php
$username = "root";
$password = "";
$database = new PDO("mysql:host=localhost; dbname=pdf_books;", $username, $password);

if (isset($_GET['btn-search'])) {
    $SEARCH = $database->prepare("SELECT * FROM all_books WHERE title LIKE :value 
OR category LIKE :value OR language LIKE :value");

    $SEARCH_VALUE = "%" . $_GET['search'] . "%";

    $SEARCH->bindParam("value", $SEARCH_VALUE);
    $SEARCH->execute();

    foreach ($SEARCH as $data) {

        $title = $data["title"];
        $image = $data["image"];
        $pages = $data["pages"];
        $category = $data["category"];
        $year = $data["year"];
        $link = $data["link"];
        $description = $data["description"];

        echo "            
    

    <div class='col-lg-3 col-md-4 col-sm-6'>
    <div class='product-m'>
        <div class='product-m__thumb'>

        <a class='aspect aspect--bg-grey aspect--square u-d-block'>

                <img class='aspect__img' src='images/product/pdf_books/$image' alt=''></a>
           
            <div class='product-m__add-cart'>

                <a class='btn--e-brand' data-modal='modal' data-modal-id='#add-to-cart' href='$link'>Download</a>
            </div>
        </div>
        <div class='product-m__content'>
            <div class='product-m__category'>

                <a href='shop-side-version-2.html'>$category</a>
            </div>
            <div class='product-m__name'>

                <a href='product-detail.html'>$title</a>
            </div>
            
            <div class='product-m__price' style='color:#ff4500 ;'>$pages pages</div>
            <div class='product-m__hover'>
                <div class='product-m__preview-description'>

                    <span>$description</span>
                   
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
  
    
 ";
    }
}
?>


