<?php

namespace Hafijul233\Generator\Controllers;

use Hafijul233\Generator\Models\Generator;
use Hafijul233\Generator\Requests\StoreGeneratorRequest;
use Hafijul233\Generator\Requests\UpdateGeneratorRequest;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

/**
 * Class GeneratorController
 * @package Hafijul233\Generator\Controllers
 */
class GeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return response();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return response();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreGeneratorRequest  $request
     * @return Response
     */
    public function store(StoreGeneratorRequest $request)
    {
        return response();
    }

    /**
     * Display the specified resource.
     *
     * @param  Generator  $generator
     * @return Response
     */
    public function show(Generator $generator)
    {
        return response();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Generator  $generator
     * @return Response
     */
    public function edit(Generator $generator)
    {
        return response();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateGeneratorRequest  $request
     * @param  Generator  $generator
     * @return Response
     */
    public function update(UpdateGeneratorRequest $request, Generator $generator)
    {
        return response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Generator  $generator
     * @return Response
     */
    public function destroy(Generator $generator)
    {
        return response();
    }
}
