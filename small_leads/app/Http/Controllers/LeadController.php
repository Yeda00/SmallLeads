<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lead;

use App\Models\User;

class LeadController extends Controller
{
    public function index() {
        $search = request('search');

        if($search){ 
            $leads = Lead::where([
                ['name','like', '%'.$search.'%'],
            ]);
        }else {
            $leads = Lead::all();
        }
        
        return view('welcome',['leads'=> $leads, 'search' => $search]);
    }
 
    public function create() {
        return view('leads.create');
    }

    public function store(Request $request) {
        $lead = new Lead;

        $lead->name = $request->name;
        $lead->surname = $request->surname;
        $lead->email = $request->email;
        $lead->phone = $request->phone;
        $lead->company_name = $request->company_name;
        $lead->tags = $request->tags;
        $lead->converted = $request->converted;
        $lead->meet = "";

        //tenho que fazer um novo item na tabela leads, com a informaçao de meet
        //Novo formulário de marcar reunião na info
        //Adicionar options se é convertido ou não, e criar outra view mostrando apenas os leads convertidos
        //Adicionar segmento da empresa no formulário   

        $user = auth()->user();
        $lead->user_id = $user->id;
        
        $lead->save();

        return redirect('/')->with('msg', 'Lead criado com sucesso');
    }

    public function dashboard() {
        $search = request('search');
    
        $user = auth()->user();
        $leadsQuery = $user->leads(); // Obtém a consulta para os leads do usuário
    
        if ($search) { 
            $leadsQuery->where('name', 'like', '%'.$search.'%'); // Aplica a busca aos leads
        }
    
        $leads = $leadsQuery->get(); // Obtém os resultados da consulta
    
        return view('leads.dashboard', ['leads' => $leads, 'search' => $search]);
    }

    

    public function destroy($id) {
        Lead::findOrFail($id)->delete();
        
        return redirect('/dashboard')->with('msg', 'Lead excluído com sucesso');
    }

    public function edit($id) {
        $lead = Lead::findOrFail($id);

        return view('leads.edit', ['lead'=> $lead]);
    }

    public function show($id) {
        $lead = Lead::findOrFail($id);
        return view('leads.notes', ['lead' => $lead , ]);


    }

    public function update(Request $request) {
        Lead::findOrFail($request->id)->update($request->all());
        return redirect('/dashboard')->with('msg', 'Lead editado com sucesso');
    }
    
    
}
