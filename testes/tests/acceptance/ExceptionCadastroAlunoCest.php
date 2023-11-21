<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class ExceptionCadastroAlunoCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {
            $I->amOnPage('/');
            $I->click('Cadastre-se!');
            $I->click('Aluno');
            $I->seeCurrentURLEquals('/cadastroAluno.html');
            $I->click('Realizar Cadastro');
            $I->see('Nome deve ser preenchido!');
            $I->see('Telefone deve ser preenchido!');
            $I->see('Email deve ser preenchido!');
            $I->see('Senha deve ser preenchida!');
            $I->see('Data de Nascimento deve ser preenchida!');
            $I->see('Endereço deve ser preenchido!');
        
    }
}
