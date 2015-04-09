<?php
$pageTitle = "Home";
$splashMessage = "Welcome";
$splashGraphics = true;
$sidebar = true;
$numberOfChanges = 4;
$content = [
        [
            'title'   => "Is it SQuiggLy?",
            'content' => "SQL is easy. It's just a few simple statements, nothing earth-shattering.
            Now, put it into context of an API. Woo-hoo. When do we execute this statement?
            What about errors? Did we even connect? JUST TELL ME WHAT'S WRONG. Then, for some
            UNGODLY reason, I had to take it further. Have multiple pages to access, change, create, delete? Sounds lame,
            let's do it all from a single page dynamically loading in the PHP generated HTML and THEN resize the iframe based
            on it's contents with some quick Javascript and scroll to the bottom of the page. Oh, and let's style it all too.
            PS: That's me padding my own ego before I'm brought to my knees once again by the next challenge Professor Retterer
            has to throw at us. I just hope that I'll still be able to get some REST."
        ],
        [
            'title'   => "That learning curve...",
            'content' => "At first, PHP looked stupid. Then, I felt stupid. It's been quite a humbling experience
            learning just how poorly designed the HTML of my site was, and how difficult it is
            to handle all the little exceptions I previously decided to throw in. Weak coding is weak."
        ],
        [
            'title'   => "I'm glad you could make it.",
            'content' => "I was starting to get a little lonely.
            All this CSS everywhere, but it just isn't a very good conversationalist.
            It's such a hassle, but the options for creativity, the ability to make just
            about anything, that's why I love it. Yes, I wrote all the CSS for this page,
            with some help from the ever handy " . '<a href="http://www.w3schools.com" target="_blank">W3 Schools</a>. ' .
            "I mean, just resize this window a few times. Marvel at the intuitiveness of the creator. Revel
            in the navigation bar the follows you everywhere. Feel the magic when it collapses down to
            three simple lines! Isn't CSS just great?"
        ]
    ];
include('php/_single.php');