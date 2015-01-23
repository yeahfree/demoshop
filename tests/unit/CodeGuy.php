<?php
// This class was automatically generated by build task
// You should not change it manually as it will be overwritten on next build
// @codingStandardsIgnoreFile


use \Codeception\Maybe;
use Codeception\Module\CodeHelper;
use Codeception\Module\PropelModule;

/**
 * Inherited methods
 * @method void execute($callable)
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void offsetGet($offset)
 * @method void offsetSet($offset, $value)
 * @method void offsetExists($offset)
 * @method void offsetUnset($offset)
*/

class CodeGuy extends \Codeception\AbstractGuy
{
    
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     *
     * @see Codeception\Module::getName()
     * @return \Codeception\Maybe
     */
    public function getName() {
        $this->scenario->addStep(new \Codeception\Step\Action('getName', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     * @param string $table
     * @param string $selectColumns
     * @param array $criteria
     * @param int $limit
     * @return array
     * @throws ModuleException
    * Conditional Assertion: Test won't be stopped on fail
     * @see Codeception\Module\PropelModule::seeInDatabase()
     * @return \Codeception\Maybe
     */
    public function canSeeInDatabase($table, $selectColumns, $criteria, $limit = null) {
        $this->scenario->addStep(new \Codeception\Step\ConditionalAssertion('seeInDatabase', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     * @param string $table
     * @param string $selectColumns
     * @param array $criteria
     * @param int $limit
     * @return array
     * @throws ModuleException
     * @see Codeception\Module\PropelModule::seeInDatabase()
     * @return \Codeception\Maybe
     */
    public function seeInDatabase($table, $selectColumns, $criteria, $limit = null) {
        $this->scenario->addStep(new \Codeception\Step\Assertion('seeInDatabase', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }

 
    /**
     * This method is generated.
     * Documentation taken from corresponding module.
     * ----------------------------------------------
     *
     * @param string $sql
     * @return array
     * @see Codeception\Module\PropelModule::execInDatabase()
     * @return \Codeception\Maybe
     */
    public function execInDatabase($sql) {
        $this->scenario->addStep(new \Codeception\Step\Action('execInDatabase', func_get_args()));
        if ($this->scenario->running()) {
            $result = $this->scenario->runStep();
            return new Maybe($result);
        }
        return new Maybe();
    }
}

