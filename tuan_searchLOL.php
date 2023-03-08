<?php
$title = "Search Item";
$style1 = "style1.css";
$style2 = "tuan_LOLsearch.css";
$game1 = "Search item";
$logo = "pic/LOL Logo clear background.png";
include('header.php');
?>
<!-- Create a container for the search form and search results -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-header">
                    <h4>Search for an item (Click item name to modiify the item information)</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-7">
                            <form action="" method="GET">
                                <div class="input-group mb-3">

                                    <!-- It has a name attribute set to "search" which is used to identify it on the server side.-->
                                    <input type="text" name="search"
                                        value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>"
                                        class="form-control" placeholder="Enter item name "><!-- The value attribute is set
                                    using a ternary operator. If the 'search' key is set in the $_GET superglobal array,
                                    its value is used, otherwise it is set to an empty string.-->
                                    <button type="submit" class="btn btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mt-4">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <!-- Create column headers for the search results table -->
                                <th>Item</th>
                                <th>Role</th>
                                <th>Price</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include('tuan_LOLdb.php');
                            // Retrieve the search term submitted via GET method and sanitize it
                            $filtervalues = isset($_GET['search']) ? $_GET['search'] : '';
                            //Defines a SQL query string that searches the 'tuan_database' table for any records 
                            //that match the search input in any of the fields 'item', 'role', 'price', or 'description'. 
                            //The '%' wildcard characters are used to match any combination of characters before and after the search input.
                            $query = "SELECT * FROM tuan_database WHERE item LIKE '%$filtervalues%' OR role LIKE '%$filtervalues%' OR price LIKE '%$filtervalues%'";
                            $query_run = mysqli_query($conn, $query);

                            if ($query_run && mysqli_num_rows($query_run) > 0) {
                                foreach ($query_run as $items) {
                                    ?>
                                    <tr>
                                        <td><a href='tuan_LOLupdate.php?id=<?= $items['id'] ?>'><?= $items['item'] ?></a></td>

                                        <td>
                                            <?= $items['role'] ?>
                                        </td>
                                        <td>
                                            <?= $items['price'] ?>
                                        </td>
                                        
                                        <td>
                                            <?= nl2br($items['description']) ?> 
                                        </td>
                                    </tr>
                                    <?php
                                }
                             //nl2br() is a PHP function that converts all newline characters in a string to HTML line breaks (<br>).
                            } else {
                                ?>
                                <tr>
                                    <td colspan="5">No Record Found</td> 
                                </tr>
                                <?php
                            }
                            // It will span across five columns and displays the message "No Record Found" in the cell. 
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>