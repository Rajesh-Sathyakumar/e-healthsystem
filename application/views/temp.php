 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Empanelment requests to be approved
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <?php
                if(!empty($hospitalsInAScheme))
                {
                  ?>
                <thead>
                <tr>
                  <th>Scheme</th>
                  <th>Beneficiaries</th>
                 
                </tr>
                </thead>
                <tbody>
                  <?php
                        foreach($hospitalsInAScheme as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record->scheme_name ?></td>
                      <td><?php echo $record->empHospitals ?></td>
                    </tr>
                    <?php
                  }
              }
              else
              {
                  ?>
                  <div class="alert alert-info">
                    <strong>No new requests</strong>
                  </div>

                  <?php
              }
              ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>