<?php


namespace Singleton;


class Singleton
{
    private static $instances = [];

    private $variableOne;

    private $variableTwo;

    protected function __construct() { }

    protected function __clone() { }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): Singleton
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

    /**
     * @return mixed
     */
    public function getVariableOne()
    {
        return $this->variableOne;
    }

    /**
     * @param mixed $variableOne
     * @return Singleton
     */
    public function setVariableOne($variableOne)
    {
        $this->variableOne = $variableOne;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVariableTwo()
    {
        return $this->variableTwo;
    }

    /**
     * @param mixed $variableTwo
     * @return Singleton
     */
    public function setVariableTwo($variableTwo)
    {
        $this->variableTwo = $variableTwo;
        return $this;
    }


    public function getVariables()
    {
        return  [
            'variable_one' => $this->getVariableOne(),
            'variable_two'  => $this->getVariableTwo()
        ];
    }
}
