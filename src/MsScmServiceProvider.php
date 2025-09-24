<?php

namespace WellmedLite\MsScm;

use Hanafalah\LaravelSupport\Providers\BaseServiceProvider;

class MsScmServiceProvider extends BaseServiceProvider
{
    /**
     * Registers the package's namespaces.
     *
     * @return $this
     */
    public function register()
    {
        $this->registerMainClass(MsScm::class)->registers(['*']);
    }

    /**
     * Get the base path of the package.
     *
     * @return string
     */
    protected function dir(): string
    {
        return __DIR__ . '/';
    }
}
