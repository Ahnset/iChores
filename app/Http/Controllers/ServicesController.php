<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ServicesModel;
use App\Transactions;

use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreTransactionsRequest;

use Slydepay\Order\Order;
use Slydepay\Order\OrderItem;
use Slydepay\Order\OrderItems;
use Slydepay\Slydepay;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title' => 'iChores | My Services',
            'msg' => 'My Services',
            'active' => 'services',
            'services' => ServicesModel::all()
        ];

        return view('userArea.services.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        if(!ServicesModel::find($id)){
            return redirect(route('services.index'));
        }

        $data = [
            'title' => 'iChores | My Services',
            'msg' => ServicesModel::find($id)->name,
            'active' => 'services',
            'service' => ServicesModel::find($id)
        ];

        return view('userArea.services.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTransactionsRequest $request)
    {
        $data = [
            'user_id' => Auth::user()->id,
            'service_id' => $request->service_id,
            'telephone' => $request->phone,
            'address' => $request->address,
            'payment_method' => $request->payment_method,
            'service_date' => $request->service_date,
        ];


        if($data['payment_method'] == 'electronic')
        {
            session($data);        
            return redirect(route('session.testing'))->with('info', 'You successfully booked a service. We will get in touch with you as sooon as possible.'); ;
        }

        else
        {
            Transactions::create($data);
            return redirect(route('services.logs'));
        }

    }

    public function tester()
    {
        if(!session('telephone'))
        {
            return redirect(route('services.index'));
        }

        $item_code = session('service_id');
        $item_name = ServicesModel::find($item_code)->name;
        $item_price = ServicesModel::find($item_code)->price;

        $user_id = session('user_id');
        $mytime = Carbon::now();
        $newtime = strtotime($mytime);

        $shippingCost = 0; 
        $tax = 0;


        $slydepay = new Slydepay('ichores.app@gmail.com', '1492650845787');

        $orderItems = new OrderItems([
            new OrderItem($item_code, $item_name, $item_price, 1),
        ]);

        

        $order = new Order($user_id . "_" . $newtime, $shippingCost, $tax, "iChores.app | " . $item_name, "No Comment", $orderItems);
        
        try {
        // Make request to Slydepay and get the response object for the redirect url
        $response = $slydepay->processPaymentOrder($order);
        echo $response->redirectUrl();
        } catch (Slydepay\Exception\ProcessPayment $e) {
            echo $e->getMessage();
        }

        return redirect($response->redirectUrl());

        // $telephone = session('phone');
        // $telephone2 = session('phone2');
        // echo($telephone . "<br>" . $telephone2);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function confirm()
    {
        if(!session('telephone'))
        {
            return redirect(route('services.index'));
        }

        if($_GET['status'] == "0")
        {
            $data = [
                'user_id' => session('user_id'),
                'service_id' => session('service_id'),
                'telephone' => session('telephone'),
                'address' => session('address'),
                'payment_method' => session('payment_method'),
                'service_date' => session('service_date'),
                'status' => $_GET['status'],
                'transac_id' => $_GET['transac_id'],
                'pay_token' => $_GET['pay_token'],
                'cust_ref' => $_GET['cust_ref'],
            ];

            Transactions::create($data);

            session()->forget('user_id');
            session()->forget('service_id');
            session()->forget('telephone');
            session()->forget('address');
            session()->forget('payment_method');
            session()->forget('service_date');

            return redirect(route('services.logs'))->with('info', 'You successfully booked a service. We will get in touch with you as sooon as possible.'); 
        }

        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function logs()
    {
        $id = Auth::user()->id;

        $data = [
            'title' => 'iChores | My Services',
            'msg' => 'My Services',
            'active' => 'logs',
            'logs' => DB::select("
                SELECT transactions.id, services.name, transactions.created_at, transactions.service_date, transactions.rate 
                FROM services
                JOIN transactions
                ON services.id = transactions.service_id
                JOIN users
                ON transactions.user_id = users.id
                WHERE transactions.user_id = {$id}
            "),
        ];

        return view('userArea.services.logs', $data);
        // var_dump($data['transactions']);

        // echo($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // echo($request->transaction_id);
        $transaction = Transactions::find($request->transaction_id);
        $transaction->rate = $request->rating;
        $transaction->save();

        return redirect(route('services.logs'))->with('info', 'Service rate successfully updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
}
