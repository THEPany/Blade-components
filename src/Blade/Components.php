<?php

namespace THEPany\BladeComponents\Blade;

use Illuminate\Support\Facades\Blade;

class Components extends BladeComponentRegister
{

    public static function make()
    {
        return new self();
    }

    public function register()
    {
        foreach ($this->getComponentViews() as $component) {
            Blade::component(
                "blade-components::{$component['path']}.{$component['component']}",
                "{$component['alias']}"
            );
        }
    }

    protected function getDirectoryName()
    {
        return 'components';
    }
}