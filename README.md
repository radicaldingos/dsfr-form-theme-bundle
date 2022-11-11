# DsfrBundle
A Symfony 4+ bundle integrating "Système de Design de l'État" (DSFR).

## Index
 * [Installation](#installation)
 * [Sources](#sources)

## Installation

First of all, the DSFR library needs to be installed in your project. Please refer to Symfony documentation to install it.

Then, install the bundle with Composer:
```
composer require radicaldingos/dsfr-bundle
```

And enable it by adding it to your `config/bundles.php` file:

```php
# config/bundles.php
return [
    ...
    RadicalDingos\DsfrBundle\RadicalDingosDsfrBundle::class => ['all' => true],
];
```

If you just want to use the form theme, another easiest way is just to copy the form theme file `Resources\views\Form\dsfr-form-theme.html.twig` somewhere in the *templates* folder of your project. This way is not recommended as you will not be able to update this form theme with Composer.


## How to use the form theme

For now, this bundle only contains a form theme which was built to work with Twig in combination with the Symfony Framework.

To globally use this form theme in all your project, edit the `config/packages/twig.yaml` file of your project and add it to the *form_themes* section :
```yaml
twig:
    form_themes:
        - '@RadicalDingosDsfr/Form/dsfr_form_theme.html.twig'
```

Have a look at the [Symfony documentation](https://symfony.com/doc/current/form/form_customization.html#making-application-wide-customizations). Also example files are provided in this repository.


## Sources

Have a look at the following websites and their documentation for more information about this subject.

 * The [DSFR](https://www.systeme-de-design.gouv.fr/) website;
 * The [Twig](http://twig.sensiolabs.org/) Template engine for PHP website;
 * The [Symfony](http://symfony.com/) PHP framework website.
