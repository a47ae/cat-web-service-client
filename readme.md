# CAT WebService Client
This is a PHP Client for The CAT WebService.

It implements all available methods that the WebService exposes.

## Usage

Run `composer require a47ae/cat-web-service-client` and include the generated autoloader in your file.

Then create an instance of the client
```php
<?php 

$client = new \a47ae\CatWebServiceClient\CatWebServiceClient();
```

Optionally one can pass an array of SOAP client options as first parameter and a string containing the wsdl URI as second parameter.
 
 ## Tests
 To run the tests simply run `vendor/phpunit/phpunit/phpunit`.
 At the current state there are not much tests implemented.