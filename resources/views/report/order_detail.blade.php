<div class="row" style="text-align: center">
    @forelse ($order_detail as $product)
    
    
    
    <div class="col-md-12">
        <div class="form-group">
            <label for="">رقم المنتج</label>
            <input type="text" class="form-control" value=" {{ $product->id }}" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">اسم المنتج</label>
            
            <input type="text" class="form-control" value=" {{ $product->order_id }}" readonly>
        </div>
    </div>


    <div class="col-md-12">
        <div class="form-group">
            <label for="">كمية المنتج</label>
            
            <input type="text" class="form-control" value=" {{ $product->quantity_id }}" readonly>
        </div>
    </div>

 
   
    @empty
        
    @endforelse
</div>

<style>
    input:read-only{
        background: #fff !important;
        text-align: center

    }

    textarea:read-only{
        background: #fff !important;
        text-align: center
    }
</style>