<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <?php echo e($tranc->links('pagination::bootstrap-4')); ?> 
<div class="row" style="text-align: center">
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card">
        <div style="text-align: center" class="card-header text-white">
            <h4>تقارير العمليات </h4> 
            
           </div>
            <div class="card-body">
               
                <table class="table table-bordered table-left">
                    <thead>
                      
                    <tr>
                        <th>#</th>
                        <th>رقم الطلب</th>
                        <th>مبلغ الشراء</th>
                        <th>طريقة الدفع</th>
                        
                       
                      
                        
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $__currentLoopData = $tranc; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $tran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key+1); ?></td>
                        
                        <td style="color: #337ab7;"><?php echo e($tran->order_id); ?></td>
                        <td><?php echo e($tran->transac_amount); ?></td>
                        <td style="font-size: 15px"><?php echo e($tran->payment_method); ?></td>
                       
                  
                    
                        
                        <td>
                         
                        </td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                    </tr>

                    
                   
                   
                     

                   
                   
                     
                </tbody>
                
                </table>
              
            </div>
    

</div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card">
        <div style="text-align: center" class="card-header text-white">
            <h4> العملاء </h4> 
            
           </div>
            <div class="card-body">
               
                <table class="table table-bordered table-left">
                    <thead>
                      
                    <tr>
                        <th>#</th>
                        <th>رقم المنتج</th>
                        <th>الكمية</th>
                        <th>اسم العميل</th>
                       
                       
                      
                        
                    </tr>
                </thead>
                <tbody>
                    
                    <?php $__currentLoopData = $order_detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $orderd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    <td><?php echo e($key+1); ?></td>
                    
                    <td style="color: #337ab7;"><?php echo e($orderd->product); ?></td>
                    <td><?php echo e($orderd->quantity_id); ?></td>
                    <td style="font-size: 15px"><?php echo e($orderd->order->name); ?></td>
                    
                   
                
                
                    
                    
                
<td>

</td>
                
               
              
                        
                    </tr>

                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                     

                   
                   
                     
                </tbody>
                
                </table>
              
            </div>
    

</div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card">
        <div style="text-align: center" class="card-header text-white">
            <h4>الفواتير </h4> 
            
           </div>
            <div class="card-body">
               
                <div id="invoice-POS">
                    <div id="printed_content">
                  
                        <center id="top">
                      
                          <div class="logo"> Taqnyati</div>
                          <div class="info"></div>
                          <h2>Pos Invo</h2>
                          <?php $__currentLoopData = $order_receipt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $last): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td> رقم الطلب</td>
                                  <td><?php echo e($last->order_id); ?></td>
                              </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </center>
                      </div>
                      
                      <div class="mid">
                        <div class="info">
                          <h2>contact Us</h2>
                          <p>
                            address : afif
                          </p>
                          <p>email : hamad0912@gmail.com</p>
                          <p>phone : +966534367472</p>
                        </div>
                      
                      </div>
                      <!-- End od Recipt Mid -->
                      <div class="bot">
                          <div id="table">
                              <table>
                                  <tr class="tabletitle">
                                      <td class="itme"><h2>العناصر</h2></td>
                                      <td class="Hours"><h2>الكمية</h2></td>
                                      <td class="Rate"><h2>السعر</h2></td>
                                      <td class="Rate"><h2>الخصم</h2></td>
                                      <td class="Rate"><h2>المجموع</h2></td>
                                  </tr> 
                                  <?php $__currentLoopData = $order_receipt; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $receipt): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      
                                  
                                  <tr class="service">
                                      <td class="tableitem"><p class="itemtext"><?php echo e($receipt->product); ?></p></td>
                                  <td class="tableitem"><p class="itemtext"><?php echo e($receipt->quantity_id); ?></p></td>
                                  <td class="tableitem"><p class="itemtext"><?php echo e(number_format($receipt->unitprice, 2)); ?></p></td>
                                  <td class="tableitem"> <p class="itemtext"><?php echo e($receipt->discount ? ' ' : '0'); ?></p> </td>
                                  <td class="tableitem"> <p class="itemtext"><?php echo e(number_format($receipt->amount, 2)); ?></p> </td>
                                  </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  <tr class="tabletitle">
                                      <td></td>
                                      <td></td>
                                      
                                      <td class="Rate"><p class="itemtext"> <?php echo e(number_format($order_receipt->sum('amount') * 15 /100, 2)); ?></p></td>
                                      <td>الضريبة</td>
                                      <td></td>
                                  </tr>
                  
                                  <tr class="tabletitle">
                                    <td></td>
                                    <td></td>
                                    
                                    <td class="PAyment"> <?php echo e(number_format($order_receipt->sum('amount'), 2)); ?>  </td>
                                    <td class="Rate">الاجمالي</td>
                                    <td></td>
                                </tr>
                              </table>
                              <div class="legalcopy">
                                  <p class="legal"><strong> ** شكرا  **</strong><br>
                                    السلع الخاضعة للضريبة  
                                </p>
                              </div>
                              <div class="serial-number">
                                Serial :  <span class="serial">
                                      1235898633888
                                  </span>
                                 <br> <span> 24/12/2022 &nbsp; &nbsp; 00:45</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  
            </div>
            
            <style>
              #invoice-POS{
                  box-shadow: 0 0 1in -0.25in rgb(0, 0, 0.5);
                  padding: 2mm;
                  margin: 0 auto;
                  width: 70mm;
                  background: #fff;
              }
            
              #invoice-POS ::selection {
                  background: #005b77;
                  color: #fff;
              }
              
              #invoice-POS ::-moz-selection{
                  background: #005b77;
                  color: #fff;
              }
            
              #invoice-POS h1{
                  font-size: 1.5em;
                  color: #222;
              }
              #invoice-POS h2{
                  font-size: 0.6em;
                  
              }
            
              #invoice-POS h3{
                  font-size: 1.2em;
                  font-weight: 300;
                  line-height: 2em;
              }
              
              #invoice-POS p{
                  font-size: 0.8em;
                  line-height: 1.2em;
                  color: #666;
              }
            
              #invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot{
                  border-bottom: 1px solid #eee;
              } 
            
              #invoice-POS #top{
                  min-height: 100px;
              }
            
               #invoice-POS #mind{
                  min-height: 80px;
              }
            
              #invoice-POS #bot{
                  min-height: 50px;
              }
            
              #invoice-POS #top .logo{
                  height: 60px;
                  width: 60px;
                  background-image: url() no-repeat;
                  background-size: 60px 60px;
                  border-radius: 50px;
              }
            
              #invoice-POS .info{
                  display: block;
                  margin-left: 0;
                  text-align: center;      
              }
            
              #invoice-POS .title{
                  float: right;
              }
              #invoice-POS .title{
                  text-align: right;
              }
            
              #invoice-POS table{
                  width: 100%;
                  border-collapse: collapse;
              }
            
              #invoice-POS .tabletitle{
                  font-size: 0,5em;
                  background: #eee;
              }
            
              #invoice-POS .service {
                  border-bottom: 1px solid #eee;
            
              }
              
              #invoice-POS .item{
                  width: 24mm;
              }
              #invoice-POS .itemtext{
                  font-size: 0.6em;
              }
            
              #invoice-POS .legalcopy{
                  margin-top: 5mm;
                  text-align: center;
              }
              
              .serial-number{
                  margin-top: 5mm;
                  margin-bottom: 2mm;
                  text-align: center;
                  font-size: 12px;
              }
            
              .serial{
                  font-size: 10px !important;
              }
            
              
            
            </style>
              
            </div>
    

</div>
</div>
</div>
</div>
      
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadotb/Sites/invo/resources/views/report/index.blade.php ENDPATH**/ ?>