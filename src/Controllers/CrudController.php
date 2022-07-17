<?php


namespace Hafijul233\Generator\Controllers;

use Illuminate\Routing\Controller;

/**
 * Class CrudController
 * @package Hafijul233\Generator\Controllers
 */
class CrudController extends Controller
{

    /**
     * CrudController constructor.
     */
    public function __construct()
    {

    }

    /**
     *
     */
    public function __invoke()
    {
        return view('generator::invoke');
    }
}
