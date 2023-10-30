<?php include('header.php') ?>
<style>
    .form-section {
        margin-bottom: 50px;
        padding-bottom: 60px !important;
    }
</style>
<section class="form-section">
    <div class="row">
    <?php
            if(isset($_SESSION['failed']))
            { 
            ?>
             <div class="alert alert-danger" role="alert" style="text-align: center;">
             <?php 
                echo $_SESSION['failed'];
            }
            ?>
            </div>
        <?php
         unset($_SESSION['failed']);
         ?>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="post" action="db/userInfoSave.php">
                <div class="form-group">
                    <label for="name">Category Name</label>
                    <input type="text" name="name" class="form-control from-control-solid" placeholder="Enter category name">
                </div>
                <div class="form-group">
                    <p><label for="lastname">Status</label></p>
                    <select name="status" class="form-select">
                            <option value="1">Active</option>
                            <option value="2">Deactive</option>
                    </select>
                </div>
                <div class="form-group" style="margin-top: 30px;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</section>
<?php include('footer.php') ?>