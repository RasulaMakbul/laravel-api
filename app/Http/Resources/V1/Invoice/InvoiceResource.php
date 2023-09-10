<?php

namespace App\Http\Resources\V1\Invoice;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'customer' => $this->customer_id,
            'amount' => $this->amount,
            'status' => $this->status,
            'billedDated' => $this->billed_dated,
            'paidDated' => $this->paid_dated,
        ];
    }
}
