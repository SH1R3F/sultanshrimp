<?php

namespace App\Exports;

use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class SalesExport implements FromCollection, WithHeadings, WithMapping, WithEvents, WithStrictNullComparison
{
    private $sales;
    private $row = 0;

    public function __construct($sales)
    {
        $this->sales = $sales;
    }


    public function headings(): array
    {
        return [
            '#',
            'الاسم | Name',
            'الفرع | Branch',
            'الكاش | Cash',
            'الشبكة | Visa',
            'التوصيل | Delivery',
            'التاريخ | Date'
        ];
    }

    public function map($resource): array
    {
        return [
            ++$this->row,
            $resource->name,
            $resource->branch,
            $resource->cash,
            $resource->network,
            $resource->delivery,
            $resource->created_at->toDateString()
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

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return $this->sales;
    }
}
