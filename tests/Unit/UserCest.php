<?php 

class UserCest
{
    public function _before(UnitTester $I)
    {
    }

    // tests
    public function tryToTest(UnitTester $I)
    {
    }

    public function deleteUserTrue(UnitTester $I)
    {
        $id = 1;

        $I->seeRecord('users', array('id' => $id));

        $result = \App\User::deleteUser($id);

        $I->assertArrayHasKey('status', $result);
        $I->cantSeeRecord('users', array('id' => $id));

    }

    public function deleteUserFalse(UnitTester $I)
    {

        $id = 777;

        $I->cantSeeRecord('users', array('id' => $id));

        $result = \App\User::deleteUser($id);

        $I->assertArrayHasKey('error', $result);

    }
}
