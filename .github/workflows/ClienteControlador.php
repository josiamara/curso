<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $clientes =[
        ['id'=>1, 'nome'=>'ademir'],
        ['id'=>2, 'nome'=>'joao'],
        ['id'=>3, 'nome'=>'maria'],
        ['id'=>4, 'nome'=>'aline']
        
    ];
    /*Proximo 23 */
    public function index()
    {
            /*Teste seguindo orientações do professor - 12112019
                ***Esse teste não apareceu nada na tela...                         
            $clientes = session('clientes');
            dd($clientes);
             */
        echo "<ol>";
        foreach($this->clientes as $c){
            echo "<li>" .$c['nome'] . "</li>";
            
        }
        echo "</ol>";
        
        $clientes = $this->clientes;                
        return view('clientes.index', compact(['clientes']));
         
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dados = $request->all();
        //dd mostra na tela tudo que estamos recebendo
        dd($dados); //ou podemos utilizar vardump 
        
                                                    
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
