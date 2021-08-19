<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class AllSheetsStatesExcelImport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            'Aguascalientes' => new MunicipalitiesExcelImport('Aguascalientes'),
            'Baja California' => new MunicipalitiesExcelImport('Baja California'),
            'Baja California Sur' => new MunicipalitiesExcelImport('Baja California Sur'),
            'Campeche' => new MunicipalitiesExcelImport('Campeche'),
            'Coahuila' => new MunicipalitiesExcelImport('Coahuila'),
            'Colima' => new MunicipalitiesExcelImport('Colima'),
            'Chiapas' => new MunicipalitiesExcelImport('Chiapas'),
            'Chihuahua' => new MunicipalitiesExcelImport('Chihuahua'),
            'Ciudad de México' => new MunicipalitiesExcelImport('Ciudad de México'),
            'Durango' => new MunicipalitiesExcelImport('Durango'),
            'Guanajuato' => new MunicipalitiesExcelImport('Guanajuato'),
            'Hidalgo' => new MunicipalitiesExcelImport('Hidalgo'),
            'Jalisco' => new MunicipalitiesExcelImport('Jalisco'),

            'México' => new MunicipalitiesExcelImport('México'),
            'Michoacán' => new MunicipalitiesExcelImport('Michoacán'),
            'Morelos' => new MunicipalitiesExcelImport('Morelos'),
            'Nayarit' => new MunicipalitiesExcelImport('Nayarit'),
            'Nuevo León' => new MunicipalitiesExcelImport('Nuevo León'),
            'Oaxaca' => new MunicipalitiesExcelImport('Oaxaca'),
            'Puebla' => new MunicipalitiesExcelImport('Puebla'),
            'Querétaro' => new MunicipalitiesExcelImport('Querétaro'),
            'Quintana Roo' => new MunicipalitiesExcelImport('Quintana Roo'),
            'San Luis Potosí' => new MunicipalitiesExcelImport('San Luis Potosí'),
            'Sinaloa' => new MunicipalitiesExcelImport('Sinaloa'),
            'Sonora' => new MunicipalitiesExcelImport('Sonora'),
            'Tabasco' => new MunicipalitiesExcelImport('Tabasco'),
            'Tamaulipas' => new MunicipalitiesExcelImport('Tamaulipas'),
            'Tlaxcala' => new MunicipalitiesExcelImport('Tlaxcala'),
            'Veracruz' => new MunicipalitiesExcelImport('Veracruz'),
            'Yucatán' => new MunicipalitiesExcelImport('Yucatán'),
            'Zacatecas' => new MunicipalitiesExcelImport('Zacatecas'),
        ];
    }
}
