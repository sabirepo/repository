# Laravel-repository

| **Laravel/lumen**  |  **laravel-repository/lumen-repository** |
|---|---|
| ^6.*  | ^dev  |

`sabirepo/repository` is a Laravel package which created to manage your large  Laravel app using repository. Repository is like a Laravel package. This package is supported and tested in Laravel 5.*

With one big added bonus that the original package didn't have: **tests**.


## Install

To install through Composer, by run the following command:

``` bash
composer require sabirepo/repository
```

## Lumen config
``` bash
 //bootstrap\app.php
 Add : $app->register(Sabirepo\Repository\Providers\RepositoryServiceProvider::class);
```

## Laravel config
``` bash
  //config\app.php
 'providers' => [
	...
	Sabirepo\Repository\Providers\RepositoryServiceProvider::class,
 ],

 'aliases' => [
	...
	'Repository' => Sabirepo\Repository\Facades\Repository::class,
 ],
```

## Setup repository
``` Create HMVC module
	// Create folder default to app\repositories
	php artisan make:repository {name} {--m}
    
    // example: php artisan make:repository User

	// Add ModuleServiceProvider to config
	// Laravel : config\app.php

```

## Publish config
``` 
	php artisan vendor:publish --tag=repository
```

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

### Autoloading



**Tip: don't forget to run `composer dump-autoload` afterwards.**

## Documentation
### Response resource
```
return Repository::response($data);
- $data: String | Object | Array
$data interface: 
$data['status'] | $data['messages'] | $data['body']
```
You'll find installation instructions and full documentation on : comming son....
 
 
## Credits ....


## About sabirepo/repository

sabirepo/repository is a freelance web developer specialising on the Laravel/lumen framework.


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
