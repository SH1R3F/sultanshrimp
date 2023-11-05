<?php

namespace App\Exports\Sheets;

use App\Models\Order;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithTitle;


class OrdersPerBranchSheet implements FromCollection, WithStrictNullComparison, WithHeadings, WithMapping, WithEvents, WithTitle
{
    private $order;
    private $row = 0;

    public function __construct($order)
    {
        $this->order = $order;
    }

    public function headings(): array
    {
        return [
            '#',
            'الطلبية | Order',
            'المطلوب | Required',
            'الموجود | Existing',
        ];
    }

    public function map($resource): array
    {
        return [
            ++$this->row,
            $resource->resource,
            $resource->amount,
            $resource->existing,
        ];
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return $this->order->branch;
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

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->order->resources;
    }
}
