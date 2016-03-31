# WP Elements

> Predefined ACF groups

## Getting Started

The easiest way to install this package is by using composer from your terminal:

```bash
composer require moxie-leean/wp-elements
```

Or by adding the following lines on your `composer.json` file

```json
"require": {
  "moxie-leean/wp-elements": "dev-master"
}
```

This will download the files from the [packagist site](https://packagist.org/packages/moxie-leean/wp-elements)
and set you up with the latest version located on master branch of the repository.

After that you can include the `autoload.php` file in order to
be able to autoload the class during the object creation.

```php
include '/vendor/autoload.php';
```


## Usage

You need to register the elements you want to use using the ```Elements::init()``` function. This function takes the following parameters: $location and $element.

```php
\Leean\Elements\Register::init(
	$location,
	[ 'ContactDetails', 'SocialIcons' ]
);
```

Note that $location is an array with the format of the ACF 'location' parameter.
