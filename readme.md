# Não use este código, eu só mantenho ele para lembrar de como eu programava antigamente.

## Defender Dashboard

That package is under development!

# Install 

add on composer:

```json

"require" : {
	"artesaos/defender-dashboard" : "dev-master"
},

"repositories": [
	{
		"type":"vcs",
		"url":"https://github.com/artesaos-lab/defender-dashboard"
	}
]

```
> Note: After its first release (not done yet), you just need do that to require that package:

```
composer require artesaos/defender-dashboard
```



# Configuration

Add on your providers list `config/app.php`:

```php

// Defender Provider (do not duplicate this line)
Artesaos\Defender\Providers\DefenderServiceProvider::class,

// Dashboard Provider
Artesaos\Defender\Providers\DashboardServiceProvider::class

```        

After add the providers, just run that command to publish views and migrations:

```
php artisan vendor:publish
```

Remember, you need to run the Defender migrations, if you didn't do it yet:

```
php artisan migrate
```

> Remember to configure your database connection first.

# Languages Available

* en
* pt_BR
