<?php

namespace App\Http\Controllers;

use App\Http\Requests\DebtorRequest;
use App\Models\Debtor;
use App\Repository\Eloquent\DebtorRepository;

class DebtorController extends Controller
{
    public function __construct(private DebtorRepository $debtorRepository)
    {
        $this->debtorRepository = $debtorRepository;
    }

    public function displayForm(){
        return view("debtor-form");
    }

    public function create(DebtorRequest $request){

        if(! $this->debtorRepository->create($request->validated()) ){
            return redirect()->back()->withErrors("Debtor was not created");
        }

        return redirect()->route("debtors")->with('message', "Debtor Successfully Created");
    }

    public function index(){
        if(! $this->debtorRepository->index()){
            return redirect()->route("debtors")->withErrors("Unable to Get Debtors");
        }

        return view("debtors", ["debtors" => $this->debtorRepository->index()]);
    }

    public function editForm(int $debtorId){
        if(!  $this->debtorRepository->getId($debtorId)){
            return redirect()->route("debtors")->withErrors("Unable to Get Debtor");
        }
        return view("debtor-edit-form", ["debtor" => $this->debtorRepository->getId($debtorId)]);
    }

    public function edit(DebtorRequest $request, int $debtorId){

        if(! $this->debtorRepository->edit($request->validated(), $debtorId) ){
            return redirect()->back()->withErrors("Debtor was not updated");
        }

        return redirect()->route("debtors")->with('message', "Debtor Successfully Updated");
    }

    public function delete(int $debtorId){

        $this->debtorRepository->delete($debtorId);

        return redirect()->route("debtors")->with('message', "Debtor Deleted Successfully");
    }

}
