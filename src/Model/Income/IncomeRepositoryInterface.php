<?php

namespace App\Model\Income;

interface IncomeRepositoryInterface
{
    public function create(Income $income): bool;
}