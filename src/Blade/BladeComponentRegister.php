<?php

namespace THEPany\BladeComponents\Blade;

use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\SplFileInfo as LaravelFile;

abstract class BladeComponentRegister
{
    /**
     * @var string
     */
    private $pathName = __DIR__. '/../../resources/views/';

    /**
     * @var \Illuminate\Support\Collection
     */
    private $componentViews;

    /**
     * BladeComponentRegister constructor.
     */
    protected function __construct()
    {
        $this->componentViews = collect([]);
    }

    abstract protected function getDirectoryName();

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getComponentViews()
    {
        return $this->render();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    private function render()
    {
        foreach ($this->loadFiles() as $file) {
            $this->componentViews->push([
                'path' => $this->getDirectoryName(),
                'component' => $this->getComponentName($file),
                'alias' => $this->getComponentAlias($file)
            ]);
        }
        return $this->componentViews;
    }

    /**
     * @return \Symfony\Component\Finder\SplFileInfo[]
     */
    private function loadFiles()
    {
        return File::files($this->getFilePaths());
    }

    private function getFilePaths()
    {
        if (is_dir(resource_path('views/vendor/blade-components'))) {
            return resource_path("views/vendor/blade-components/{$this->getDirectoryName()}");
        }

        return $this->pathName . $this->getDirectoryName();
    }

    /**
     * @param \Symfony\Component\Finder\SplFileInfo $file
     * @return string
     */
    private function getComponentName(LaravelFile $file)
    {
        return explode('.',$file->getFilename())[0];
    }

    /**
     * @param \Symfony\Component\Finder\SplFileInfo $file
     * @return string
     */
    private function getComponentAlias(LaravelFile $file)
    {
        return str_replace('_', '', $this->getComponentName($file));
    }
}