<?php
namespace THEPany\BladeComponents\Blade;

use Illuminate\Support\Facades\Blade;

class Includes extends BladeComponentRegister
{
    public static function make()
    {
        return new self();
    }

    public function register()
    {
        foreach ($this->getComponentViews() as $component) {
            Blade::include(
                "blade-components::{$component['path']}.{$component['component']}",
                "{$component['alias']}"
            );
        }
    }

    protected function getDirectoryName()
    {
        return 'includes';
    }
}