<?php

/* Template Name: Rèsumè */

declare( strict_types = 1 );
namespace Waugh\Portfolio;

use WaughJ\WPScripts\WPStylesheets;

WPStylesheets::register( 'resume' );

PageTemplate::print
(
    "resume",
    [
        "page" => new \Timber\Post(),
        "resume" =>
        [
            "jobs" =>
            [
                [
                    "title" => "Web Developer",
                    "employer" => "Cascade e-Commerce Solutions, Inc.",
                    "url" => "https://www.4cesi.com",
                    "time" => "2017 – Present",
                    "description" =>
                    [
                        "Design, develop, and manage responsive websites for small businesses.",
                        "Write and edit website copy and carry out and apply keyword research for SEO.",
                        "Troubleshoot computers and networks for small businesses."
                    ]
                ]
            ],
            "projects" =>
            [
                [
                    "title" => "City Fish",
                    "description" => "Developed and designed e-commerce website for Seattle fish market using custom-
made theme.",
                    "url" => "https://www.cityfish.com"
                ],
                [
                    "title" => "Daily Dote",
                    "description" => "Developed WordPress website with WooCommerce shopping cart using Lisplike custom language for advanced shipping price calculations.",
                    "url" => "https://www.dailydote.com"
                ],
                [
                    "title" => "Boskeopolis Stories",
                    "description" => "Developed and designed short story website using a custom-made static site generator in Python with dynamic and interactive stories made in JavaScript.",
                    "url" => "https://www.boskeopolis-stories.com"
                ],
                [
                    "title" => "Boskeopolis Land",
                    "description" => "Programmed and designed computer game in C++ with SDL2.",
                    "url" => "https://www.boskeopolis-land.com"
                ]
            ],
            "skills" =>
            [
                "Responsive Design",
                [ "parent" => "WordPress", "children" => [ "Theme Development", "Plugin Development" ] ],
                [ "parent" => "Modern PHP", "children" => [ "Composer", "Unit Testing with PHPUnit" ] ],
                "WooCommerce",
                "HTML",
                "Twig",
                [ "parent" => "CSS", "children" => [ "Sass" ] ],
                [ "parent" => "JavaScript", "children" => [ "Node", "TypeScript", "jQuery", "Unit Testing with Jest" ] ],
                "Git & Subversion",
                "Webpack, Gulp, & Grunt",
                [ "parent" => "SQL", "children" => [ "MySQL", "PostgreSQL" ] ],
                [ "parent" => "Security Headers", "children" => [ "Content Security Policy" ] ],
                "Linux / UNIX Terminal",
                "Bash",
                "Basic Vim Editing",
                "Python",
                [ "parent" => "C & Modern C++", "children" => [ "Make", "Valgrind" ] ],
                "Ruby",
                "Photoshop & Illustrator",
                "GIMP & Inkscape",
                "JSON & XML"
            ],
            "currentlyLearning" =>
            [
                "Symfony",
                "Laravel",
                "React",
                "Next.js",
                "OpenGL",
                "Lisp"
            ]
        ]
    ]
);