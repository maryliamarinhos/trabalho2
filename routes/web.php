<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'LivrosController@livros');

//Chamando o controllador
Route::get('/sobre', 'PaginaBasicaController@sobre');
Route::get('/contato', 'PaginaBasicaController@contato');

//Rotas para parte de Livros
Route::get('/livros/form-adicionar', 'LivrosController@formAdicionar');
Route::livro('/livros/adicionar', 'LivrosController@adicionar');
Route::get('/livros/excluir/{id}', 'LivrosController@excluir');
Route::get('/livros/editar/{id}', 'LivrosController@form_editar');
Route::livro('/livros/editar', 'LivrosController@editar');

// ver sobre a criação de uma rota única
//Route::get('/', function (){
    //return view ('welcome);
//})
//Route::resource('livraria', "LivroController');
