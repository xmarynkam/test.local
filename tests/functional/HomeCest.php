<?php 

class HomeCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToTest(FunctionalTester $I)
    {
        $I->wantTo('check home page');
        $I->amOnRoute('home');
        $I->see('Laravel');
    }
}
