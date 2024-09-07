<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;


class OrderExport implements WithEvents, WithHeadings, WithTitle, WithHeadings, WithMapping
{
    private $order;
    private $row = 0;

    public function __construct($order)
    {
        $this->order = $order;
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            '#',
            'الطلبية | Order',
            'المطلوب | Required',
            'الموجود | Existing',
            'التاريخ | Date'
        ];
    }

    public function title(): string
    {
        return $this->order->branch;
    }

    public function map($resource): array
    {
        return [
            ++$this->row,
            $resource->resource,
            $resource->amount,
            $resource->existing,
            $this->order->created_at->toDateString()
        ];
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

    public function collection()
    {
        return $this->order->resources;
    }
}
