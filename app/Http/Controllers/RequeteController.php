<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requete;

class RequeteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requetes = Requete::paginate(10);  
        return view('admin.requete.index', ['requetes']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    public function export(Request $request)
    {
    // Fetch all records from the Requete table
    $Requete = Requete::all();

    // Prepare CSV data
    $csvData = [];
    $Version=Requete->Version->numVersion;
    $csvData[] = ['VersionProjet', 'SQLRequtes'];

    foreach ($Requete as $data) {
        $csvData[] = [$data->idModule, $data->VersionProjet, $data->SQLRequetes];
    }

    // Generate CSV file
    $filename = 'sql_requests_' . date('Y-m-d_H-i-s') . '.csv';

    // Create a streamed response with CSV data
    $response = new StreamedResponse(function () use ($csvData) {
        $handle = fopen('php://output', 'w');
        foreach ($csvData as $row) {
            fputcsv($handle, $row);
        }
        fclose($handle);
    });

    // Set response headers
    $response->headers->set('Content-Type', 'text/csv');
    $response->headers->set('Content-Disposition', 'attachment; filename="' . $filename . '"');

    return $response;
    }
}
