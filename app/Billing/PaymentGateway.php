<?php

namespace App\Billing;

class PaymentGateway
{
    public function charge($amount)
    {
        return [
            'amount' => $amount,
            'confirmation_number' => Str::random(),
        ];
    }
}