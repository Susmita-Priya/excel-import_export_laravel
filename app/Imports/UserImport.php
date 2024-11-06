<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Hash;

class UserImport implements ToCollection, ToModel
{
    private $current = 0;
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        // dd($collection);
    }

    public function model(array $row)
    {
        $this->current++;
        if($this->current == 1){
            return null;
        }
        // dd($row);
        $count = User::where('email', $row[1])->count();
        if($count > 0){
            return null;
        }
        User::create([
            'name' => $row[0],
            'email' => $row[1],
            'password' => Hash::make($row[2])
        ]);
    }

}
