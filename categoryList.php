<?php include('header.php') ?>
<style>
    .form-section {
        margin-bottom: 50px;
        padding-bottom: 60px !important;
    }
</style>
<section class="form-section">
    <div class="container">
        <div class="row">
            <?php
            if (isset($_SESSION['success'])) {
            ?>
                <div class="alert alert-success" role="alert" style="text-align: center;">
                <?php
                echo $_SESSION['success'];
            }
            unset($_SESSION['success']);
                ?>
                </div>

        </div>
        <div class="row">
            <div class="col-sm-12">
                  <h4>All Category list</h4>
            </div>
            <div class="col-md-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <?php
                      $sql = 'SELECT * FROM category order by name';
                      $query = mysqli_query($link, $sql);
                    ?>
                   
                    <tbody>
                  <?php while ($category = mysqli_fetch_array($query)) { ?>
                        <tr>
                            <td><?php echo $category['id']  ?></td>
                            <td><?php echo $category['name']  ?></td>
                            <td><?php if($category['status'] == 1){ echo "Active";}else{ echo "Deactive";}  ?></td>
                            <td><a href="#" class="btn btn-small btn-primary">Edit</a></td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
    </div>
</section>
<?php include('footer.php') ?>