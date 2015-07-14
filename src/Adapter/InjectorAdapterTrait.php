<?php

namespace Embark\Journey\Adapter;

trait InjectorAdapterTrait
{
    /**
     * Apply a classmap to the injector for setup
     *
     * @param  array $classmap
     */
    public function bootstrap(array $classmap)
    {
        foreach ($classmap as $func => $classes) {
            foreach ($classes as $arguments) {
                call_user_func_array([$this, $func], $arguments);
            }
        }
    }
}
