<?php

namespace App\Http\Controllers;

use App\Http\Requests\DebtorRequest;
use App\Models\Debtor;
use App\Repository\Eloquent\DebtorRepository;
use Illuminate\Http\Request;

class DebtorController extends Controller
{
    public function __construct(private DebtorRepository $debtorRepository)
    {
        $this->debtorRepository = $debtorRepository;
    }

    public function form(){
        return view("debtor-form");
    }

    public function create(DebtorRequest $request){

        if(! $this->debtorRepository->create($request->validated()) ){
            return redirect()->back()->withErrors("Debtor was not created");
        }

        // return redirect()->back()->with('message', "Debtor Successfully Created");
        return redirect()->route("debtors")->with('message', "Debtor Successfully Created");
    }

    public function getAll(){
        if(! $this->debtorRepository->getAll()){
            return redirect()->route("debtors")->withErrors("Unable to Get Debtors");
        }

        return view("debtors", ["debtors" => $this->debtorRepository->getAll()]);
    }

    public function editForm(){
        return view("debtor-edit-form");
    }

    public function edit(Request $request){
        if(! $this->debtorRepository->edit($request->validated()) ){
            return redirect()->back()->withErrors("Debtor was not created");
        }
        return redirect()->route("debtors")->with('message', "Debtor Successfully Created");
    }
}
