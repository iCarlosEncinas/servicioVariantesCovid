<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Variante;

class VariantesController extends Controller
{
    public function index() {
        $variantes = Variante::select('id', 'lineage', 'common_countries', 'earliest_date', 'designated_number', 'assigned_number', 'who_name')
        ->orderBy('id', 'DESC')->limit(20)->get();
        return $variantes;
    }

    public function show($id){
        $variante = Variante::select('id', 'description', 'evidence')->where('id', $id)->first();
        return $variante;
    }
}
