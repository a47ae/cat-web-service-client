# CAT WebService Client
This is a PHP Client for the CAT WebService.

It implements all available methods that the WebService exposes.

## Usage

Add `https://github.com/a47ae/cat-web-service-client` as a repository to your `composer.json` or simply download the files.

Then create an instance of the client
```php
<?php 

$client = new \a47ae\CatWebServiceClient\CatWebServiceClient();
```

Optionally one can pass an array of SOAP client options as first parameter and a string containing the wsdl URI as second parameter.
 
 ## Tests
 To run the tests simply run `composer install` and then`vendor/phpunit/phpunit/phpunit`.
 At the current state there are not much tests implemented.