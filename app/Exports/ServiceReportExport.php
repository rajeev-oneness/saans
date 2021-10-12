<?php

namespace App\Exports;

use App\Models\ServiceReport;
use Maatwebsite\Excel\Concerns\FromCollection;

class ServiceReportExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ServiceReport::all();
    }
}
