<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class VisualizarPerfilInstrutor
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function buscarResultadosNaPaginaTest(AcceptanceTester $I)
    {			
	$I->amOnPage('/pgProf.html');
	$I->click('Fidelis Zanetti de Castro 
					Professor doutor em MatemÃ¡tica Aplicada formado pela Unicamp');
	$I->seeCurrentURLEquals('/perfilProf.html');
	$I->see('Fidelis Zanetti de Castro');
	$I->see('Doutor em Matemática Aplicada pela Unicamp');

    }
}
