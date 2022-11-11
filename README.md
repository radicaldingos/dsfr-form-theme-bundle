# DsfrFormThemeBundle
A Symfony 4+ bundle integrating a Twig form theme for "Système de Design de l'État" (DSFR).

## Index
 * [Installation](#installation)
 * [Sources](#sources)

## Installation

First of all, the DSFR library needs to be installed in your project. Please refer to [DSFR](https://www.systeme-de-design.gouv.fr/comment-utiliser-le-dsfr/developpeurs/prise-en-main-du-dsfr) and [Symfony](https://symfony.com/doc/current/setup.html) documentations to install it.

Then, install the bundle with Composer:
```
composer require radicaldingos/dsfr-form-theme-bundle
```

And assure it's enabled in your `config/bundles.php` file (add this line if it's not):

```php
# config/bundles.php
return [
    ...
    RadicalDingos\DsfrFormThemeBundle\RadicalDingosDsfrFormThemeBundle::class => ['all' => true],
];
```

Another easiest way is just to copy the form theme file `Resources\views\Form\dsfr-form-theme.html.twig` somewhere in the *templates* folder of your project. This way is not recommended as you will not be able to update this form theme with Composer.


## How to use the form theme

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
