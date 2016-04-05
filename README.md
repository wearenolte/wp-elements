# WP Elements

> Predefined ACF groups like ContactDetails, SocialLinks or Hero. We will be adding more as we need them.


## Getting Started

The easiest way to install this package is by using composer from your terminal:

```bash
composer require moxie-lean/wp-elements
```

Or by adding the following lines on your `composer.json` file

```json
"require": {
  "moxie-lean/wp-elements": "dev-master"
}
```

This will download the files from the [packagist site](https://packagist.org/packages/moxie-lean/wp-elements)
and set you up with the latest version located on master branch of the repository.

After that you can include the `autoload.php` file in order to
be able to autoload the class during the object creation.

```php
include '/vendor/autoload.php';
```


## Usage

You need to register the elements you want to use using the ```Elements::add()``` function. This function takes the following parameters: $element and $location.

```php
\Lean\Elements\Register::add(
	'SiteIdentity',
	$location
);
```

Note that $location is an array with the format of the ACF 'location' parameter. For some elements $location can be left blank and the default location will be used instead.

There is also a shortcut function to add an options page, with predefined sub-pages (currently only GENERAL_PAGE is implemented).

```php
\Lean\Elements\Register::options_page( [
    Register::GENERAL_PAGE,
] );
```


### Elements

The following elements are provided:

`SiteIdentity`: The site logo. Defaults to the options page if $location is blank.

`ContactDetails`: Address, phone and email. Defaults to the options page if $location is blank.
