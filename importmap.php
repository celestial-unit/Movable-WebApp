<?php

/**
 * Returns the importmap for this application.
 *
 * - "path" is a path inside the asset mapper system. Use the
 *   "debug:asset-map" command to see all paths.
 *
 * - "version" is the version that should be used when importing
 *   that module in JavaScript.
 */
return [
    'app' => [
        'path' => './assets/app.js',
        'version' => null,
    ],
    'jquery' => [
        'url' => 'https://code.jquery.com/jquery-3.4.1.min.js',
        'version' => '3.4.1',
    ],
    'bootstrap' => [
        'url' => 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js',
        'version' => '5.0.0',
    ],
    'font-awesome' => [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css',
        'version' => '5.10.0',
    ],
    'bootstrap-icons' => [
        'url' => 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css',
        'version' => '1.4.1',
    ],
    'typed.js' => [
        'url' => 'https://cdn.jsdelivr.net/npm/typed.js@2.0.12',
        'version' => '2.0.12',
    ],
    'wow.js' => [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js',
        'version' => '1.1.2',
    ],
    'isotope' => [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js',
        'version' => '3.0.6',
    ],
    'owl-carousel' => [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js',
        'version' => '2.3.4',
    ],
    'owl-carousel-css' => [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css',
        'version' => '2.3.4',
    ],
    'lightbox' => [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js',
        'version' => '2.11.3',
    ],
    'lightbox-css' => [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css',
        'version' => '2.11.3',
    ],
    'counterup' => [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js',
        'version' => '1.0.0',
    ],
    'waypoints' => [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js',
        'version' => '4.0.1',
    ],
    'easing' => [
        'url' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js',
        'version' => '1.4.1',
    ],
    '@hotwired/stimulus' => [
        'version' => '3.2.2',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => './vendor/symfony/stimulus-bundle/assets/dist/loader.js',
    ],
    '@hotwired/turbo' => [
        'version' => '7.3.0',
    ],
];
