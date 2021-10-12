<?php

namespace App\Imports;

use App\Models\ServiceReport;
use Maatwebsite\Excel\Concerns\ToModel;

class ServiceReportsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ServiceReport([
            //
        ]);
    }
}
