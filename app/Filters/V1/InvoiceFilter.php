<?php

namespace App\Filters\V1;

use App\Filters\ApiFilter;
use Illuminate\Http\Request;

class InvoiceFilter extends ApiFilter
{
    protected $safeParms = [
        'customer' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'amount' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'status' => ['eq', 'ne'],
        'billedDated' => ['eq', 'lt', 'gt', 'lte', 'gte'],
        'paidDated' => ['eq', 'lt', 'gt', 'lte', 'gte']
    ];

    protected $columnMap = [
        'customer' => 'customer_id',
        'billedDated' => 'billed_dated',
        'paidDated' => 'paid_dated'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'ne' => '!=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>=',
    ];
}
