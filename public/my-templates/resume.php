<?php

/* Template Name: Rèsumè */

declare( strict_types = 1 );
namespace Waugh\Portfolio;

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
                        "Designed and developed websites, WordPress plugins, and Composer modules for small businesses.",
                        "Wrote and edited website copy and carried out and applied keyword research for SEO.",
                        "Troubleshoot computers and networks for small businesses."
                    ]
                ],
                [
                    "title" => "Web Developer Intern",
                    "employer" => "B Town Web",
                    "url" => "https://www.btownweb.com/",
                    "time" => "2017",
                    "description" => [ "Designed and developed WordPress website." ]
                ]
            ],
            "projects" =>
            [
                [
                    "title" => "Daily Dote",
                    "description" => "Developed WordPress website with WooCommerce shopping cart using Lisplike custom language for advanced shipping price calculations.",
                    "url" => "https://www.dailydote.com/"
                ],
                [
                    "title" => "Boskeopolis Stories",
                    "description" => "Developed and designed short story website using a custom-made static site generator in Python with dynamic and interactive stories made in JavaScript.",
                    "url" => "https://www.boskeopolis-stories.com/"
                ],
                [
                    "title" => "Boskeopolis Land",
                    "description" => "Programmed and designed computer game in C++ with SDL2.",
                    "url" => "https://www.boskeopolis-land.com/"
                ]
            ],
            "skills" =>
            [
                "Responsive Design",
                [ "parent" => "WordPress", "children" => [ "Theme Development", "Plugin Development" ] ],
                [ "parent" => "Modern PHP", "children" => [ "Unit Testing with PHPUnit" ] ],
                "WooCommerce",
                "Composer",
                "HTML",
                "Twig",
                [ "parent" => "CSS", "children" => [ "Sass" ] ],
                [ "parent" => "JavaScript", "children" => [ "TypeScript", "jQuery", "Unit Testing with Jest" ] ],
                "Git & Subversion",
                "Gulp, Webpack, & Grunt",
                [ "parent" => "SQL", "children" => [ "MySQL" ] ],
                "Linux / UNIX Terminal",
                "Bash",
                "Basic Vim Editing",
                "Python",
                [ "parent" => "C & C++", "children" => [ "Make", "Valgrind" ] ],
                "Ruby",
                "Photoshop & Illustrator",
                "GIMP & Inkscape",
                "JSON & XML"
            ],
            "currentlyLearning" =>
            [
                "Symfony",
                "Web Assembly",
                "OpenGL",
                "Rust"
            ]
        ]
    ]
);