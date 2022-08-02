<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\newChamados;



class ChamadosController extends Controller

{

    public $data;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('chamado');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data = array();

        if ($request->input('tipo') != "") $data['tipo']=$request->input('tipo');
        if ($request->input('nome') != "") $data['nome']=$request->input('nome');
        if ($request->input('categoria') != "") $data['categoria']=$request->input('categoria');
        if ($request->input('setor') != "") $data['setor']=$request->input('setor');
        if ($request->input('filial') != "") $data['filial']=$request->input('filial');
        if ($request->input('email') != "") $data['email']=$request->input('email');
        if ($request->input('prioridade') != "") $data['prioridade']=$request->input('prioridade');
        if ($request->input('msg') != "") $data['msg']=$request->input('msg');



        Mail::to('chamados@casasdaagua.com.br')
                ->send(new newChamados($data));



        return back()
              ->with('success', 'Solicitação enviada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
