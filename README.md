# Composer installer for Elefant CMS apps

This custom [Composer](http://getcomposer.org/) installer will install apps
into an Elefant CMS site's `apps/` folder through Composer. It will trigger
when a Composer package uses the `elefant-app` custom package type.

## Usage

In order for an app to install using this installer, it needs a `composer.json`
file with the following:

```json
{
	"name": "elefant/app-$NAME$",
	"type": "elefant-app",
	"license": "MIT",
	"repositories": [
		{"type": "git", "url": "http://github.com/jbroadway/elefant_installer"}
	],
	"require": {
		"jbroadway/elefant_installer": "*"
	}
}
```

The type element will instruct Composer to use this custom installer.