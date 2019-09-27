<?php

namespace App\Http\Controllers;

use App\Sale;
use App\Client;
use App\Service;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use PDF;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::all();
       return view ("ventas.cotizacion", compact("service"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function generatePDF(Request $request)
    {
        
       $pdf = PDF::loadView('ventas/pdfcotizacion', compact('request'));
        return $pdf->stream('Cotizacion.pdf', array('Attachment' => 0));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale, $id)
    {
        
        $sale = DB::table('sales')
            ->join('clients', 'clients.Id', '=', 'sales.client_id')
            ->join('services', 'services.Id', '=', 'sales.services_id')
            ->where( 'clients.Id', '=', $id)
            ->select('clients.*', 'services.*', 'sales.*')
            ->get();

        return view("ventas.show", compact(["sale"]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
