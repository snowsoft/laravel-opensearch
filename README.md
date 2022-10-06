# laravel-opensearch
OpenSearch implementation for Laravel

[![Build Status](https://travis-ci.org/snowsoft/laravel-opensearch.svg?branch=master)](https://travis-ci.org/snowsoft/laravel-opensearch)
[![Coverage Status](https://coveralls.io/repos/github/snowsoft/laravel-opensearch/badge.svg?branch=master)](https://coveralls.io/github/snowsoft/laravel-opensearch?branch=master)

Installation
------------

First, install the package:

```bash
composer require snowsoft/laravel-opensearch
```

Then publish the config:

```bash
php artisan vendor:publish
```

Then, update `config/opensearch.php` to match your requirements. You also need to add something like the following to the HTML header for your site to tell the browser where to find the OpenSearch XML file:

```html
<link href="/opensearch" rel="search" title="Search title" type="application/opensearchdescription+xml">
```
