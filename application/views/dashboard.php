<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small></small>
      </h1>
    </section>
    
    <section class="content">
        <?php
        if($role == ROLE_ADMIN)
            {
            ?>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
                <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $numberOfSchemes ?></h3>
                  <p>Schemes</p>
                </div>
                <div class="icon">
                  <i class="fa fa-stethoscope"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px"></sup></h3>
                  <p>Beneficiaries</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $numberOfUsers ?></h3>
                  <p>Users</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $numberOfHospitals ?></h3>
                  <p>Hospitals</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
          <?php
        }
        if($role == ROLE_HOSPITAL)
            {
          ?>
          <div class="row">
          <div class="col-lg-3 col-xs-6">
              <!-- small box -->
                <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $numberOfSchemes ?></h3>
                  <p>Schemes</p>
                </div>
                <div class="icon">
                  <i class="fa fa-stethoscope"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>53<sup style="font-size: 20px"></sup></h3>
                  <p>Beneficiaries</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
          </div>

          <?php
        }
        ?>
        <?php
        if($role == ROLE_STATE_ADMIN || $role == ROLE_DISTRICT_ADMIN)
            {
            ?>
        <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
                <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $numberOfSchemes ?></h3>
                  <p>Schemes</p>
                </div>
                <div class="icon">
                  <i class="fa fa-stethoscope"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $numberOfPrograms ?><sup style="font-size: 20px"></sup></h3>
                  <p>Programs</p>
                </div>
                <div class="icon">
                  <i class="fa fa-hospital-o"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col --><?php echo $numberOfSchemes ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>44</h3>
                  <p>Beneficiaries</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users" size=""></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div>
          <?php
        }
        ?>
    </section>
</div>