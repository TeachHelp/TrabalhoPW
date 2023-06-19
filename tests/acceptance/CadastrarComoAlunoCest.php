<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class CadastrarComoAlunoCest
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
            $I->fillField('nome', 'Harian Adami');
            $I->fillField('telefone', '27998950028');
            $I->fillField('email', 'harianadami@gmail.com');
            $I->fillField('senha', 'harian123');
            $I->fillField('dataNasc', '2005-03-19');
            $I->fillField('endereco', 'Rua 1, Avenida 7, 75, Serra, Espirito Santo');
            $I->click('Realizar Cadastro');
            $I->seeCurrentURLEquals('/menu.html');

    }
}
