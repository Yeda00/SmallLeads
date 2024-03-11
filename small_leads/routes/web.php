<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [LeadController::class, 'index']);


Route::get('/leads/create', [LeadController::class, 'create'])->middleware('auth');
Route::get('/leads/{id}', [LeadController::class, 'show']);
Route::post('/leads', [LeadController::class, 'store']);
Route::delete('leads/{id}', [LeadController::class, 'destroy'])->middleware('auth');
Route::get('/leads/edit/{id}', [LeadController::class, 'edit'])->middleware('auth');
Route::put('/leads/update/{id}', [LeadController::class, 'update'])->middleware('auth');
Route::get('/leads/id}', [LeadController::class], 'show');
Route::get('/dashboard',[LeadController::class, 'dashboard'])->name('dashboard')->middleware('auth');










Route::get('/converted_list', function () {
    $search = request('search');
    
        $user = auth()->user();
        $leadsQuery = $user->leads(); // Obtém a consulta para os leads do usuário
    
        if ($search) { 
            $leadsQuery->where('name', 'like', '%'.$search.'%'); // Aplica a busca aos leads
        }
    
        $leads = $leadsQuery->get(); 

    return view('leads.converted_list', ['leads' => $leads, 'search' => $search]);
});






    
