<?php

namespace App\Exports;

use App\Models\signup;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SignupGroupExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return signup::all();
    }
  
  	public function headings(): array
    {
        return array_keys($this->collection()->first()->toArray());
    }
}
