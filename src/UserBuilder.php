<?php namespace BNC\Builder;

final class UserBuilder implements UserSetters, Builder
{

    private $options = [];

    public function setName($name)
    {
        $this->options['name'] = $name;
    }

    public function setAge($age)
    {
        $this->options['age'] = $age;
    }

    public function build()
    {
        return new User($this->options);
    }
}
