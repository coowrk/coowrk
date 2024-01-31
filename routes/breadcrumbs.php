<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// home
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('home'));
});

// home > letter-protocol
Breadcrumbs::for('letter-protocol', function (BreadcrumbTrail $trail) {
    $trail->parent('home');
    $trail->push('Briefprotokoll', route('letter-protocol.index'));
});

// home > letter-protocol > create
Breadcrumbs::for('letter-protocol.create', function (BreadcrumbTrail $trail) {
    $trail->parent('letter-protocol');
    $trail->push('Erstellen', route('letter-protocol.create'));
});
