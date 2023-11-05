<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use App\Exports\Sheets\OrdersPerBranchSheet;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class OrdersExport implements WithEvents, WithMultipleSheets
{
    private $orders;

    public function __construct($orders)
    {
        $this->orders = $orders;
    }

    /**
     * @return array
     */
    public function sheets(): array
    {
        $sheets = [];

        $this->orders->each(function($order) use (&$sheets) {
            $sheets[] = new OrdersPerBranchSheet($order);
        });

        return $sheets;
    }

    /**
     * @return array
     */
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getDelegate()->setRightToLeft(true);
            },
        ];
    }
}
