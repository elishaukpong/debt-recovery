<?php
namespace App\Repository\Eloquent;

use App\Models\Debtor;
use App\Repository\BaseRepository;

class DebtorRepository extends BaseRepository
{

    public function __construct(private Debtor $debtor)
    {
        $this->debtor = $debtor;
    }

    public function create(array $data): bool
    {
        $data["user_id"] = auth()->user()->id;

        if(!$this->debtor->create($data) ){
            return false;
        }

        return true;
    }

    public function getAll(){
        if(! $debtor = $this->debtor->where("user_id", auth()->user()->id)->get()){
            return false;
        }

        return $debtor;
    }

    public function edit(array $data): bool
    {
        $data["user_id"] = auth()->user()->id;

        if(!$this->debtor->update($data) ){
            return false;
        }

        return true;
    }
}
