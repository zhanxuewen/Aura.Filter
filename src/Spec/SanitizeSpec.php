<?php
namespace Aura\Filter\Spec;

class SanitizeSpec extends AbstractSpec
{
    public function to($rule)
    {
        return $this->init(func_get_args());
    }

    protected function getDefaultMessage()
    {
        return $this->field . ' should have sanitized to '
             . parent::getDefaultMessage();
    }
}
