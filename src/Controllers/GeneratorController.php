<?php

namespace Hafijul233\Generator\Controllers;

use Hafijul233\Generator\Models\Generator;
use Hafijul233\Generator\Requests\StoreGeneratorRequest;
use Hafijul233\Generator\Requests\UpdateGeneratorRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Controller;

/**
 * Class GeneratorController
 */
class GeneratorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): Factory|View|Application
    {
        $generators = Generator::all();

        return view('generator::generator.index', compact('generators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): Factory|View|Application
    {
        $config = config('generator');

        return view('generator::generator.create', compact('config'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreGeneratorRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreGeneratorRequest $request): RedirectResponse
    {
        $generator = new Generator($request->all());

        $generator->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  Generator  $generator
     * @return Application|Factory|View
     */
    public function show(Generator $generator): Factory|View|Application
    {
        return view('generator::generator.', compact('generator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Generator  $generator
     * @return Application|Factory|View
     */
    public function edit(Generator $generator): Factory|View|Application
    {
        $config = config('generator');

        return view('generator::generator.', compact('config', 'generator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateGeneratorRequest  $request
     * @param  Generator  $generator
     * @return RedirectResponse
     */
    public function update(UpdateGeneratorRequest $request, Generator $generator): RedirectResponse
    {
        $generator->fill($request->validated());
        $generator->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Generator  $generator
     * @return RedirectResponse
     */
    public function destroy(Generator $generator): RedirectResponse
    {
        $generator->delete();

        return redirect()->back();
    }
}
