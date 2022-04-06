
<div>
  <div class="container-fluid">
      <div class="col-lg-12">
          <div class="row">
            <div class="col-md-8">
            <div class="card">
                  
                      <div class="card-body">
                         @include('report.index')
                          
                      </div>
                  
              </div>
            </div>
            <div class="col-md-4">
            <div class="card">
                  <div class="card-header">
                    <h4>تفاصيل المنتج</h4>
                  </div>
                      <div class="card-body">
                         @include('report.order_detail')
                      </div>
                  {{-- @include('products.product_preview') --}}
              </div>
            </div>
          </div>
      </div>
  </div>
</div>