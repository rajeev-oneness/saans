<?php

namespace App\Exports;

use App\Models\ServiceReport;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ServiceReportExport implements FromCollection, WithHeadings
{
   
    public function collection()
    {
        return ServiceReport::all()->only([
        'company_name',
        'name',
        'email',
        'phone',
        'address',
        'serial_no',
        'installed_system',
        'warranty',
        'amc_offer_sent',
        'amc_value',
        'remarks',
        'action_plan',
        'concern_engineer'
    ]);
    }

    public function headings(): array
    {
        return [
            'company_name',
            'name',
            'email',
            'phone',
            'address',
            'serial_no',
            'installed_system',
            'warranty',
            'amc_offer_sent',
            'amc_value',
            'remarks',
            'action_plan',
            'concern_engineer',
        ];
    }
}
