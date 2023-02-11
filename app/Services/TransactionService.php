<?php

namespace App\Services;

use App\Events\TransactionCreated;
use App\Models\Transaction\Transaction;

class TransactionService
{
    /**
     * Create a new Transaction.
     *
     * @param array $data
     * @return Transaction
     */
    public function createTransaction(array $data): Transaction
    {
        /** @var Transaction $transaction */
        $transaction = Transaction::query()->create([
            'amount'           => $data['amount'],
            'description'      => $data['description'],
            'currency'         => $data['currency'],
            'status'           => $data['status'],
            'issuer'           => $data['issuer'],
            'transaction_date' => $data['transaction_date'],
        ]);

        TransactionCreated::dispatch($transaction);

        return $transaction;
    }

    /**
     * Update an existing Transaction.
     *
     * @param Transaction $transaction
     * @param array $data
     * @return Transaction
     */
    public function updateTransaction(Transaction $transaction, array $data): Transaction
    {
        $transaction->update([
            'amount'           => $data['amount'],
            'description'      => $data['description'],
            'currency'         => $data['currency'],
            'status'           => $data['status'],
            'issuer'           => $data['issuer'],
            'transaction_date' => $data['transaction_date'],
        ]);

        return $transaction;
    }

    /**
     * Delete a Transaction.
     *
     * @param Transaction $transaction
     * @return Transaction
     */
    public function deleteTransaction(Transaction $transaction): Transaction
    {

    }
}
