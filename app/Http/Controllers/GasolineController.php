<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GasolineController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request,$zipCode)
    {
        /*
         * Construccion de endpoint
         */
        $baseUrl = "https://api.datos.gob.mx/v1/precio.gasolina.publico";
        $page = "1";
        $pageSize = "10018";
        $cp = "filter[codigopostal]=${zipCode}";
        $url = "${baseUrl}?page=${page}&pageSize=${pageSize}&${cp}";

        /*
         * Consumiendo el endpoint con el cliente Http de Laravel (Guzzle para versiones anteriores)
         */

        $response  = Http::timeout(10)
            ->retry(3, 1000)
            ->get($url);

        if ($response->successful()){
            /*
             * Obteniendo Estado y Municipio por medio de Cp
             */

            $results = $response->json();
            $api_responses = [];
            $municipality = Municipality::where('cp', $zipCode)->with('states')->first();
            foreach ($results['results'] as $result){
                $result['estado'] = $municipality['states']['name'];
                $result['municipio'] = $municipality['name'];

                array_push($api_responses,$result);
            }



            return response()->json([
                "success"       => true,
                "results"       => $api_responses,
            ], 200);
        } else {
            return response()->json([
                "success" => false,
                "results" => [],
            ], 400);
        }



    }
}
