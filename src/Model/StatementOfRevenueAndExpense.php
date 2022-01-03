<?php
declare(strict_types=1);

namespace App\Model;

class statementOfRevenueAndExpense
{
    private int $id;

    private string $name;

    private float $amount;

    public function __construct(
        int $id,
        string $name,
        float $amount
    ) {
        $this->id = $id;
        $this->name = $name;
        $this->amount = $amount;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }
}