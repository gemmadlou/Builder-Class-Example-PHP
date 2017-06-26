<?php namespace BNC\Builder;

use Exception;

final class User implements UserType
{
    protected $age;
    protected $name;

    public function __construct(array $options = [])
    {
        if (empty($options)) return;

        $this->callOptionMethods($options);

        $this->validate();
    }

    private function callOptionMethods(array $options)
    {
        foreach ($options as $optionKey => $optionValue) {
            $methodName = 'set' . ucfirst($optionKey);
            if (method_exists($this, $methodName)) {
                call_user_func_array([$this, $methodName], [$optionValue]);
            }
        }
    }

    private function setAge($age)
    {
        $this->age = $age;
    }

    public function age()
    {
        return $this->age;
    }

    private function setName($name)
    {
        $this->name = $name;
    }

    public function name()
    {
        return $this->name;
    }

    public function validate()
    {
        if (!isset($this->name)) {
            throw new Exception('User should always have a name');
        }
    }
}
