<?php

class SignupAndLoginRulesTest extends PHPUnit\Framework\TestCase
{
    public $rules;

    public function setUp() : void
    {
        $this->rules = new App\Rules\SignupAndLoginRules;
    }

    public function testLoginMin()
    {
        $this->assertFalse($this->rules->loginMin('мало'));
    }

    public function testLoginMax()
    {
        $this->assertFalse($this->rules->loginMax('Больше 15 символов'));
    }

    public function testLoginEmpty()
    {
        $this->assertFalse($this->rules->loginEmpty(''));
    }

    public function testPasswordEmpty()
    {
        $this->assertFalse($this->rules->passwordEmpty(''));
    }
}

?>