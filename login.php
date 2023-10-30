<?php include('header.php') ?>
<style>
    .form-section {
        margin-bottom: 50px;
        padding-bottom: 60px !important;
    }
</style>
<section class="form-section">
    <div class="row">
    <div class="row">
       
        <?php
            if(isset($_SESSION['success']))
            { 
            ?>
             <div class="alert alert-success" role="alert" style="text-align: center;">
             <?php 
                echo $_SESSION['success'];
            }
            ?>
            </div>
        <?php
            unset($_SESSION['success']);
            
            if(isset($_SESSION['failed'])){ ?>
             <div class="alert alert-danger" role="alert" style="text-align: center;">
             <?php
                    echo $_SESSION['failed'];
            } ?>
            </div>
            <?php  unset($_SESSION['failed']);
         ?>
        
    </div>
    </div>
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <form method="post" action="db/loginProcess.php">
               
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="eamil" name="email" class="form-control" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control"  placeholder="Password">
                </div>
                <div class="form-group" style="margin-top: 30px;">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>
</section>
<?php include('footer.php') ?>