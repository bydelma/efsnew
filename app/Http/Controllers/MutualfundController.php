<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mutualfund;
use App\Customer;

class MutualfundController extends Controller
{
   public function index()
    {
        //
        $mutualfunds=Mutualfund::all();
        return view('mutualfunds.index',compact('mutualfunds'));
    }

    public function show($id)
    {
        
        $mutualfund = Mutualfund::findOrFail($id);

        return view('mutualfunds.show',compact('mutualfund'));
    }


    public function create()
    {

        $customers = Customer::lists('name','id');
        return view('mutualfunds.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)   
    {

       $mutualfund= new Mutualfund($request->all());
       $mutualfund->save();

              return redirect('mutualfunds');
    }
    public function edit($id)
    {
        $mutualfund=Mutualfund::find($id);
        return view('mutualfunds.edit',compact('mutualfund'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $mutualfund= new Mutualfund($request->all());
        $mutualfund=Mutualfund::find($id);
        $mutualfund->update($request->all());
        return redirect('mutualfunds');
    }

    public function destroy($id)
    {
        Mutualfund::find($id)->delete();
        return redirect('mutualfunds');
    }

}
