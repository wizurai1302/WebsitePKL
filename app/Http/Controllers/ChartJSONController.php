<?php

namespace App\Http\Controllers;
use App\Models\Siswa;
use Illuminate\Http\Request;
use DB;


class ChartJSONController extends Controller
{
    public function getCityCounts()
    {
        $cityCounts = Siswa::select('Kota', DB::raw('COUNT(*) as total'))
            ->groupBy('Kota')
            ->pluck('total', 'Kota')
            ->toArray();
    
        return response()->json(['cityCounts' => $cityCounts]);
    }
    
    public function showChart()
    {
        $cityCounts = $this->getCityCounts();

        return response()->json(['cityCounts' => $cityCounts]);
    }
}
