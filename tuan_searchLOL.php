<?php 
$title = "Search Item";
$style1 = "style1.css";
$game1 = "Search item";
$logo = "pic/LOL Logo clear background.png";
include('header.php');
?>
<div class="container" style="margin-top: 100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-header" >
                        <h4>Check the item at here </h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">

                                <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
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
                                    <th>Item</th>
                                    <th>Role</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    include('tuan_LOLdb.php');

                                    if(isset($_GET['search']))
                                    {
                                        $filtervalues = $_GET['search'];
                                        $query = "SELECT * FROM lolmeta WHERE CONCAT(item,price,role,description) LIKE '%$filtervalues%' ";
                                        $query_run = mysqli_query($conn, $query);

                                        if($query_run !== false && mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
                                                <tr>
                                                <td><a href='tuan_LOLupdate.php?id=<?= $items['item'] ?>'><?= $items['item'] ?></a></td>
                                                    <td><?= $items['role']; ?></td>
                                                    <td><?= $items['price']; ?></td>
                                                    <td><?= nl2br($items['description']) ?></td>
                                                </tr>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td colspan="4">No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>