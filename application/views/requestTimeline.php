 <div class="content-wrapper">
    <section class="content">

<ul class="timeline timeline-inverse">
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          <!-- 10 Feb. 2014 -->
                          <?php echo $empanelrequest->created_at; ?>
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                       <span class="time"><i class="fa fa-clock-o"></i> <?php 
                       $timestamp = strtotime($empanelrequest->created_at);

                       echo date("h:i:s",$timestamp); ?>

                      </span>

                      <h3 class="timeline-header"><a href="#">District Admin </a>received your request</h3>

                      <div class="timeline-body">
                        Your details and profile verfication is on process
                      </div>
<!--                       <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div> -->
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                  <?php
                    if($empanelrequest->districtAdmin_status == 'approved')
                    {
                      ?>
                    <i class="glyphicon glyphicon-ok bg-aqua"></i>
                    <?php
                  }
                    elseif($empanelrequest->districtAdmin_status == 'pending')
                    {
                  ?>
                   <i class="glyphicon glyphicon-remove bg-red"></i>
                   <?php
                 }
                   ?>
                    <div class="timeline-item">
<!--                       <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

 -->
                <span class="time"><i class="fa fa-clock-o"></i> <?php 
                       $timestamp = strtotime($empanelrequest->districtAdmin_updatedAt);

                       echo date("h:i:s",$timestamp); ?>

              </span>
                      <h3 class="timeline-header no-border"><a href="#">Status</a> <?php echo $empanelrequest->districtAdmin_status; ?>
                      </h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> <?php 
                       $timestamp = strtotime($empanelrequest->districtAdmin_updatedAt);

                       echo date("h:i:s",$timestamp); ?>

              </span>

                      <h3 class="timeline-header"><a href="#">DistrictAdmin</a> commented for your scheme empanelment request</h3>

                      <div class="timeline-body">
                        <!-- Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood! -->
                        <?php echo $empanelrequest->districtAdmin_comments; ?>
                      </div>
                     
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline time label -->
                  <li class="time-label">
                        <span class="bg-red">
                          <!-- 10 Feb. 2014 -->
                          <?php echo $empanelrequest->created_at; ?>
                        </span>
                  </li>
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-envelope bg-blue"></i>

                    <div class="timeline-item">
                       <span class="time"><i class="fa fa-clock-o"></i> <?php 
                       $timestamp = strtotime($empanelrequest->created_at);

                       echo date("h:i:s",$timestamp); ?>

                      </span>

                      <h3 class="timeline-header"><a href="#">State Admin </a>received your request</h3>

                      <div class="timeline-body">
                        Your details and profile verfication is on process
                      </div>
<!--                       <div class="timeline-footer">
                        <a class="btn btn-primary btn-xs">Read more</a>
                        <a class="btn btn-danger btn-xs">Delete</a>
                      </div> -->
                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <?php
                    if($empanelrequest->stateAdmin_status == 'approved')
                    {
                      ?>
                    <i class="glyphicon glyphicon-ok bg-aqua"></i>
                    <?php
                  }
                    elseif($empanelrequest->stateAdmin_status == 'pending')
                    {
                  ?>
                   <i class="glyphicon glyphicon-remove bg-red"></i>
                   <?php
                 }
                   ?>


                    <div class="timeline-item">
<!--                       <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

 -->
                <span class="time"><i class="fa fa-clock-o"></i> <?php 
                       $timestamp = strtotime($empanelrequest->stateAdmin_updatedAt);

                       echo date("h:i:s",$timestamp); ?>

              </span>
                      <h3 class="timeline-header no-border"><a href="#">Status</a> <?php echo $empanelrequest->stateAdmin_status; ?>
                      </h3>

                    </div>
                  </li>
                  <!-- END timeline item -->
                  <!-- timeline item -->
                  <li>
                    <i class="fa fa-comments bg-yellow"></i>

                    <div class="timeline-item">
                      <span class="time"><i class="fa fa-clock-o"></i> <?php 
                       $timestamp = strtotime($empanelrequest->stateAdmin_updatedAt);

                       echo date("h:i:s",$timestamp); ?>

              </span>

                      <h3 class="timeline-header"><a href="#">StateAdmin</a> commented for your scheme empanelment request</h3>

                      <div class="timeline-body">
                        <!-- Take me to your leader!
                        Switzerland is small and neutral!
                        We are more like Germany, ambitious and misunderstood! -->
                        <?php echo $empanelrequest->stateAdmin_comments; ?>
                      </div>
                     
                    </div>
                  </li>
                 
                </ul>
                  </section>
  </div>