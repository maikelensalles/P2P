<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Revenda;

class RevendaController extends Controller
{
    protected $request;
    private $repository;

    public function __construct(Request $request, Revenda $revenda)
    {
        $this->request = $request;
        $this->repository = $revenda;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $revendas = Revenda::paginate(25);

        return view('pages.revendas.index', compact('revendas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.revendas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only('usuario', 'password', 'email', 'master', 'creditos');

        $this->repository->create($data);

        return redirect()->route('revendas.index');
    }

}
