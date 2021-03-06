 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Schemes available
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
                if($role == ROLE_HOSPITAL)
                 {
                  ?>
                <thead>
                <tr>
                  <th>Scheme id</th>
                  <th>Scheme</th>
                  <th>Description</th>
                  <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  <?php
                    if(!empty($schemeRecords))
                    {
                        foreach($schemeRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo $record->scheme_id ?></td>
                      <td><?php echo $record->scheme_name ?></td>
                      <td><?php echo $record->description ?></td>
                      <td>
                      <a class="btn btn-sm btn-primary" href="<?php echo base_url(); ?>requestprocess/<?php echo $record->scheme_id; ?>"  title="Approve Button" enabled="true">Request</a></td>
                      
                    </tr>
                    <?php
                        }
                    }
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