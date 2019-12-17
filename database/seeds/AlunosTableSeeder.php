<?php

use Illuminate\Database\Seeder;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Alunos::truncate();

	App\Alunos::create([
	  'cpf' => '11111111111',
          'nome' => 'Aluno1',
	  'endereco' => 'Endereco1',
	  'estado' => 'MG',
	  'municipio' => 'Belo Horizonte',
	  'telefone' => '(31) 99111-1111',
	  'email' => 'aluno1',
	  'senha' => 'aluno1',
	]);

	App\Alunos::create([
	  'cpf' => '22222222222',
          'nome' => 'Aluno2',
	  'endereco' => 'Endereco2',
	  'estado' => 'MG',
	  'municipio' => 'Belo Horizonte',
	  'telefone' => '(32) 99222-2222',
	  'email' => 'aluno2',
	  'senha' => 'aluno2',
	]);
    }
}
