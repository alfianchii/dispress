<?php

namespace App\Repository\Perusahaan;

interface PerusahaanRepository
{
    public function store($data);
    public function show(string $id);
    public function edit(string $id);
    public function update($data, string $id);
    public function destroy(string $id);
}
