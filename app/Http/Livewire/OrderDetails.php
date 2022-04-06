<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Transactions;
use App\Models\OrderDetail;
use App\Models\Product;

class OrderDetails extends Component
{
    public $order_details = [];
   
    
    
    public function mount()
    {
    }

    public function OrdertDetails($orderdetail_id)
    {
       $this->order_details = OrderDetail::where('id', $orderdetail_id)->get(); 
    
    }

    public function render()
    {
        return view('livewire.order-details', ['order_details'=> OrderDetail::all()]);
    }
}
