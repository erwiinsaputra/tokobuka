<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penjualan;

class PenjualanController extends Controller
{
    public function laporan()
    {
        $penjualan = Penjualan::all();

        return view('laporan.penjualan', compact('penjualan'));
    }
}