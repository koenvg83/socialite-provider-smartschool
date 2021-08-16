# Smartschool

```bash
composer require koenvg83/socialite-smartschool
```

## Installation & Basic Usage

Please see the [Base Installation Guide](https://socialiteproviders.com/usage/), then follow the provider specific instructions below.

### Add configuration to `config/services.php`

```php
'smartschool' => [    
  'client_id' => env('SMARTSCHOOL_CLIENT_ID'),  
  'client_secret' => env('SMARTSCHOOL_CLIENT_SECRET'),  
  'redirect' => env('SMARTSCHOOL_REDIRECT_URI'),
  'platform' => env('SMARTSCHOOL_PLATFORM')
],
```

### Add provider event listener

Configure the package's listener to listen for `SocialiteWasCalled` events.

Add the event to your `listen[]` array in `app/Providers/EventServiceProvider`. See the [Base Installation Guide](https://socialiteproviders.com/usage/) for detailed instructions.

```php
protected $listen = [
    \SocialiteProviders\Manager\SocialiteWasCalled::class => [
        // ... other providers
        'SocialiteProviders\\Smartschool\\SmartschoolExtendSocialite@handle',
    ],
];
```

### Usage

You should now be able to use the provider like you would regularly use Socialite (assuming you have the facade installed):

```php
return Socialite::driver('smartschool')->scopes(['userinfo fulluserinfo groupinfo'])->redirect();
```

### Returned User fields

- ``id``
- ``nickname``
- ``name``
- ``email``
