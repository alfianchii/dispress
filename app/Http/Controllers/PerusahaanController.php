<?php

namespace App\Http\Controllers;

use App\Repository\Perusahaan\PerusahaanRepository;
use Illuminate\Http\Request;

class PerusahaanController extends Controller
{
    private $perusahaanRepository;

    public function __construct(PerusahaanRepository $perusahaanRepository)
    {
        $this->perusahaanRepository = $perusahaanRepository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $this->perusahaanRepository->store($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $this->perusahaanRepository->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $this->perusahaanRepository->edit($id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->perusahaanRepository->update($request, $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->perusahaanRepository->destroy($id);
    }
}
