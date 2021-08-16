<?php

namespace SocialiteProviders\Smartschool;

use SocialiteProviders\Manager\SocialiteWasCalled;

class SmartschoolExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('smartschool', Provider::class);
    }
}
