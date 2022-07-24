<?php

namespace Hafijul233\Generator\Controllers;

use Hafijul233\Generator\Requests\StoreGeneratorRequest;
use Hafijul233\Generator\Requests\UpdateGeneratorRequest;
use Hafijul233\Generator\Models\Generator;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class GeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreGeneratorRequest  $request
     * @return Response
     */
    public function store(StoreGeneratorRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Generator $generator
     * @return Response
     */
    public function show(Generator $generator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Generator $generator
     * @return Response
     */
    public function edit(Generator $generator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateGeneratorRequest  $request
     * @param Generator $generator
     * @return Response
     */
    public function update(UpdateGeneratorRequest $request, Generator $generator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Generator $generator
     * @return Response
     */
    public function destroy(Generator $generator)
    {
        //
    }
}
