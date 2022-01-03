<?php
declare(strict_types=1);

namespace App\Infatructure\Income\Repository;

use App\Model\Income\Income;
use App\Model\Income\IncomeRepositoryInterface;

class IncomeRepository implements IncomeRepositoryInterface
{
    public function create(Income $income): bool
    {
        if ($income instanceof Income)
            return true;

        return false;
    }

}