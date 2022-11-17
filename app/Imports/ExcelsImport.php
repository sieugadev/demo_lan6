<?php

namespace App\Imports;

use App\Models\Excel;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
class ExcelsImport implements ToModel,WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $data = [
            'ma_nv' => $row[0],
            'ten_nv' => $row[1],
            'tong_cong' => $row[2]
        ];
        Excel::create($data);

    }
    
    public function startRow(): int
    {
        return 2;
    }
}
