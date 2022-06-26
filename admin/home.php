<h1>Welcome to <?php echo $_settings->info('name') ?></h1>
<hr class="border-primary">
<style>
    #website-cover{
        width:100%;
        height:30em;
        object-fit:cover;
        object-position:center center;
    }
</style>
 <div class="row">
    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="info-box bg-gradient-light shadow">

            <div class="info-box-content">
            <span class="info-box-text">Total Categories</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `category_list` where delete_flag= 0 and `status` = 1 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-teal elevation-1"><i class="fas fa-file-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Active Policies</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `policy_list` where `status` = 1 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-maroon elevation-1"><i class="fas fa-file-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Inctive Policies</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `policy_list` where `status` = 2 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-primary elevation-1"><i class="fas fa-user-tie"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Clients</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `client_list` ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-teal elevation-1"><i class="fas fa-car"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Insured Vehicle</span>
            <span class="info-box-number text-right">
                <?php 
                    echo $conn->query("SELECT * FROM `insurance_list` where `status` = 1 and date(expiration_date) > '".(date("Y-m-d"))."' ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>

    <div class="col-12 col-sm-12 col-md-6 col-lg-6">
        <div class="info-box bg-gradient-light shadow">
            <span class="info-box-icon bg-gradient-maroon elevation-1"><i class="fas fa-file-alt"></i></span>

            <div class="info-box-content">
            <span class="info-box-text">Inctive Categories</span>
            <span class="info-box-number text-right">
            <?php 
                    echo $conn->query("SELECT * FROM `category_list` where delete_flag= 0 and `status` = 0 ")->num_rows;
                ?>
            </span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
</div>
<hr>

