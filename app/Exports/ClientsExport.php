<?php

namespace App\Exports;

use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class ClientsExport implements FromCollection, WithHeadings, WithMapping, WithEvents, WithStrictNullComparison
{
    private $clients;
    private $row = 0;

    public function __construct($clients)
    {
        $this->clients = $clients;
    }



    public function headings(): array
    {
        return [
            '#',
            'الاسم | Name',
            'الرقم | Phone',
            'الفرع | Branch',
            'التاريخ | Date'
        ];
    }

    public function map($resource): array
    {
        return [
            ++$this->row,
            $resource->name,
            $resource->phone,
            $resource->branch,
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
        return $this->clients;
    }
}
