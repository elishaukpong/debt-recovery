<?php
namespace App\Repository\Eloquent;

use App\Models\Debtor;
use App\Models\User;
use App\Repository\BaseRepository;

class DebtorRepository extends BaseRepository
{

    public function __construct(private Debtor $debtor, private User $user)
    {
        $this->debtor = $debtor;
        $this->user = $user;
    }

    public function create(array $data): Debtor
    {
        return $this->debtor->create(array_merge(["user_id" => auth()->id()], $data));
    }

    public function index(): object{
        if(! $debtors = $this->debtor->where("user_id", auth()->id())->get()){
            return false;
        }

        return $debtors;
    }

    public function getId(int $id) : Debtor{
       return $this->debtor->find($id);
    }

    public function edit(array $data, $debtorId)
    {
        return $this->debtor->where("id", $debtorId)->update(array_merge(["user_id" => auth()->id()], $data));
    }

    public function delete(int $data) : bool{

        $this->debtor->where("id", $data)->delete();
        return true;
    }
}
