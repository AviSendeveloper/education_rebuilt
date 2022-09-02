<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UserExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::select('id', 'firstname', 'lastname', 'email', 'title', 'status', 'social_type', 'created_at')->get();
    }
  
  	public function headings(): array
    {
        $header = ['ID', 'FirstName', 'Lastname', 'Email', 'User Type', 'Status', 'Provider', 'Register Date'];
        return $header;
    }
}
