<?php

namespace App\Imports;

use App\Models\Municipality;
use App\Models\State;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class MunicipalitiesExcelImport implements ToCollection
{

    public $stateId;
    public function __construct($stateName)
    {

        $state = State::create([
            'name'=> $stateName
        ]);

        $this->stateId = $state->id;

    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {
        foreach ($rows as $key => $row)
        {
            if ($key > 0 && $row[0] != '' && $row[3] != ''){

                $municipality = Municipality::create([
                    'name' => $row[3],
                    'cp' => $row[0],
                    'state_id'  => $this->stateId,
                ]);

//                dd([$row], $this->stateId, $municipality);
            }
        }
    }
}
