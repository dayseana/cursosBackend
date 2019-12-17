<?php

namespace App\Http\Controllers;

use App\Alunos;
use Illuminate\Http\Request;

class AlunosController extends Controller
{
  public function login(Request $request) {
    $loginForm = json_decode($request->getContent(), true);
    //echo 'Email form ', $loginForm['email'], PHP_EOL;
    //echo 'Senha form ', $loginForm['senha'], PHP_EOL;
    $alunos = Alunos::where('email', $loginForm['email'])->get();
    foreach ($alunos as $aluno) {
	//echo 'Senha db ', $aluno['senha'], PHP_EOL;
        //echo 'Senha form ', $loginForm['senha'], PHP_EOL;
    	if ($aluno['senha'] == $loginForm['senha']) {
	  //echo 'Senha igual', PHP_EOL;
	  return response()->json($aluno);
	} else {
	  //echo 'Senha diferente', PHP_EOL;
	}
    }
    return response()->json([
        'error' => 'Email ou senha incorretos',
      ], 404);
  }
}
