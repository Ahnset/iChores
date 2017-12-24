<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\LandingModel;
use App\Transactions;
use App\Recruits;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function addRecruit()
    {
        $data = [
            "users" => DB::select("SELECT * FROM recruits"),
        ];

        return view('admin.recruits.add', $data);
    }

    public function storeRecruit(Request $request)
    {
        $data = [
            "name" => $request->name,
            "date_of_birth" => $request->date_of_birth,
            "address" => $request->address,
        ];

        Recruits::create($data);
        return redirect(route('admin.recruits'))->with('info', 'You successfully added a recruit!');
    }

    public function deleteRecruit($id)
    {
        Recruits::destroy($id);
        return redirect(route('admin.recruits'))->with('info', 'You successfully deleted a recruit!');
    }


    public function updateRecruit($id)
    {
        $data = [
            "recruit" => Recruits::find($id),
        ];

        return view('admin.recruits.update', $data);
    }

    public function updateStoreRecruit(Request $request)
    {
        $recruit = Recruits::find($request->id);
        
        $recruit->name = $request->name;
        $recruit->date_of_birth = $request->date_of_birth;
        $recruit->address = $request->address;

        $recruit->save();
        return redirect(route('admin.recruits'))->with('info', 'You successfully updated a recruit!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function users()
    {
        $data = [
            "users" => DB::select("SELECT * FROM users WHERE usertype = 'user'"),
        ];

        return view('admin.users.index', $data);
    }

    public function recruits()
    {
        $data = [
            "recruits" => DB::select("SELECT * FROM recruits"),
        ];

        return view('admin.recruits.index', $data);
    }

    public function transactions()
    {
        $data = [
            "transactions" => DB::select("
                SELECT services.name AS 'sname', users.name, transactions.* 
                FROM services
                JOIN transactions
                ON services.id = transactions.service_id
                JOIN users
                ON transactions.user_id = users.id
                ORDER BY created_at DESC
            "),
        ];

        return view('admin.transactions', $data);
    }

    public function updateTransaction($id)
    {
        $transaction = Transactions::find($id);
        $transaction->admin_status = 'dealt with';

        $transaction->save();

        return redirect(route('admin.transactions'))->with('info', 'Request status was successfully modified');
    }


    public function messages()
    {
        $data = [
            "messages" => DB::select("SELECT * FROM messages ORDER BY created_at DESC"),
        ];

        return view('admin.messages', $data);
    }

    public function updateMessages($id)
    {
        $message = LandingModel::find($id);
        $message->status = 'dealt with';

        $message->save();

        return redirect(route('admin.messages'))->with('info', 'Message status was successfully modified');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
