<?php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});

// Database
Breadcrumbs::for('database', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Datenbank', route('database.index'));
});

// Database Customer
Breadcrumbs::for('database.customer', function (BreadcrumbTrail $trail) {
    $trail->parent('database');
    $trail->push('Kunden', route('database.customer.index'));
});

// Database Customer Create
Breadcrumbs::for('database.customer.create', function (BreadcrumbTrail $trail) {
    $trail->parent('database.customer');
    $trail->push('Anlegen', route('database.customer.create'));
});
