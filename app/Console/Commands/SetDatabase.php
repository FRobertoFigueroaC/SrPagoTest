<?php

namespace App\Console\Commands;

use App\Imports\AllSheetsStatesExcelImport;
use App\Models\Municipality;
use App\Models\State;
use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;

class SetDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:setDatabase';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Carga las tablas de Estados y Municipios de datos con la información desde Excel.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        State::query()->delete();
        Municipality::query()->delete();
        $this->info('Reset de tablas.');


//        Excel::import(new AllSheetsStatesExcelImport, 'Excel/cps.xlsx', 'public');
        Excel::import(new AllSheetsStatesExcelImport,  public_path('Excel/cps.xlsx'));

        $this->info('Creación de estados exitosa.');

    }
}
