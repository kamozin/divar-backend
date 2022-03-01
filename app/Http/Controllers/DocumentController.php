<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Contract;
use App\Models\Products;
use App\Models\Seller;
use App\Models\Sender;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    protected $buyer;
    protected $contracts;
    protected $senders;
    protected $sellers;
    protected $deliveryTerms;
    protected $products;

    public function __construct (Buyer $buyer, Contract $contract, Seller $seller, Sender $sender, Products $products) {
            $this->buyer=$buyer;
            $this->contracts=$contract;
            $this->sellers=$seller;
            $this->senders=$sender;
            $this->products=$products;
    }


    public function getContractInfo (Request $request) {
         $contract=Contract::with([
             'buyer',
             'seller'
         ])->where('id', $request->id)->first();

         return $this->successResponse($contract);
    }
}
