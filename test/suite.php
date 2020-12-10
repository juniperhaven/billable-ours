<?php
//suite.php - saved as index.php for test folder
/*
Use to setup a test suite and run
automated tests
*/
require_once 'simpletest/autorun.php';

class AllTests extends TestSuite {
    function AllTests() {
        $this->TestSuite('Run All Billable Our$ tests');
        $this->addFile('login_form_test.php');
        $this->addFile('hours_test.php');
    }
}
?>
