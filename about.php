<section class="content-header">
      <h1><strong style="font-family: Raleway;">
       DASHBOARD</strong>
        <small style="font-family: Raleway;">All Informations   </small>
      </h1>
    
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!--<div class="col-lg-3 col-xs-6">
         
          <div class="small-box bg-aqua">
            <div class="inner">
              <?php 

$condition =array 
                (
                  'order_by'=>'ID desc',
                 
                );

              $news = $db->getRows('mppd_client',$condition);?>



                
               <?php if(!empty($news)): $count = 0; foreach($news as $new): $count++; ?>
                <?php endforeach; else: ?>
                   
                    <?php endif; ?>
              <h3><?php echo $count ?></h3>

              
              <p>Customers</p>
            </div>
            <div class="icon">
              <i class="fa  fa-users"></i>
            </div>
           
          </div>
        </div>
       
        <div class="col-lg-3 col-xs-6">
        
          <div class="small-box bg-green">
            <div class="inner">
               <?php 

$condition =array 
                (
                  'order_by'=>'ID desc',
                 
                );

              $news = $db->getRows('mppd_supplier',$condition);?>



                
               <?php if(!empty($news)): $count = 0; foreach($news as $new): $count++; ?>
                
                  <?php endforeach; else: ?>
                   
                    <?php endif; ?>
              <h3><?php echo $count?></h3>

              
              <p>Suppliers</p>
            </div>
            <div class="icon">
              <i class=" fa fa-users"></i>
            </div>
           
          </div>
        </div>
        
        <div class="col-lg-3 col-xs-6">
        
          <div class="small-box bg-yellow">
            <div class="inner">
               <?php 
 $count = 0;
$condition =array 
                (
                  'order_by'=>'ID desc',
                 
                );

              $news = $db->getRows('mppd_sale',$condition);?>



                
               <?php if(!empty($news)): $count = 0; foreach($news as $new): $count++; ?>
                <?php endforeach; else: ?>
                   
                    <?php endif; ?>
                
              <h3><?php echo $count?></h3>

              

              <p>Sales</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-archive-o"></i>
            </div>
            
          </div>
        </div>
      
        <div class="col-lg-3 col-xs-6">
         
          <div class="small-box bg-red">
            <div class="inner">
               <?php 
              $count = 0;
$condition =array 
                (
                  'order_by'=>'ID desc',
                 
                );

              $news = $db->getRows('mppd_client_order',$condition);?>



                
               <?php if(!empty($news)): $count = 0; foreach($news as $new): $count++; ?>
                
                <?php endforeach; else: ?>
                   
                    <?php endif; ?>
              <h3><?php echo $count?></h3>

              

              <p>Customer Orders</p>
            </div>
            <div class="icon">
              <i class="fa fa-file-archive-o"></i>
            </div>
            
          </div>
        </div>
       
      </div>-->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">


<div class="col-md-12">
          <div class="nav-tabs-custom">
           
            <div class="tab-content">
             <strong> <a style="font-size: 25px ; font-family: Raleway;"" href="">R.InvestSoft <SMALL style="font-family: Raleway;">  "Refugees Investment Software"</SMALL> </a> </strong> 
           </BR>
         </BR>
                <!-- Post -->
            
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                 
                  <!-- /.user-block -->
                  <p  style="font-size: 18px; font-family: Raleway;">
                  <strong>Refugees Investment Software</strong>, R.InvestSoft, Is a platform aiming to link REFUGEES, Banks, Donators by collecting the business ideas of REFUGEES, analysing and selecting.Our target is to let REFUGEES to feel better included socio-economic life of the Community.
                  </p>
                  <h3 style="font-size: 18px; font-family: Raleway;">Problems Faced by the REFUGEES in Community</h3>
                  <ul>
                    
                    <li style="font-family: Raleway;">
                      
                      Being a burden or a danger on the host Community
                    </li>
                    <li style="font-family: Raleway;">
                      No access to investments/ Bank's loans
                    </li>
                    <li style="font-family: Raleway;">
                      Difficulty on managing incomes 
                    </li>
                    <li style="font-family: Raleway;">
                      No access on Bank account
                    </li>
                    <li style="font-family: Raleway;">
                      Lack of business Trainings
                    </li>

                  </ul>

                 
                </div>
                <!-- /.post -->

                <!-- Post -->
               
                <!-- /.post -->
             
              <!-- /.tab-pane -->
             
              <!-- /.tab-pane -->

              
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->