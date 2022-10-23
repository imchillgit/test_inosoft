<?php

namespace App\Services;

use App\Repository\Eloquent\TransactionRepository; 

class TransactionService
{
    protected $transactionRepository;

    public function __construct(TransactionRepository $transactionRepository)
    {
        $this->transactionRepository = $transactionRepository;
    }
    public function getAll()
    {
        return $this->transactionRepository->all();
    }
    public function savePostData($data)
    {
        $result = $this->transactionRepository->store($data);

        return $result;
    }
    public function getTotalPriceById($find)
    {
        $result = $this->transactionRepository->getTotalPriceById($find);
        return $result;
    }
}