# First+Third Wordpress Challenge

👋 Thanks for your interest in First+Third!

We use this simple programming challenge to evaluate your proficiency with WordPress. We've designed this challenge to not take too much of your time (~4hrs).

Things we are looking out for:

-   Following standard WordPress theme conventions
-   Use of TailwindCSS
-   Accessible code
-   Performance considerations
-   PHPCS validation using the [VIP Coding Standards](https://github.com/Automattic/VIP-Coding-Standards)

### Example file

Use the figma file in the repo as the goal (use the WordPress Test Simplified). Don't worry about being pixel perfect; use whatever the closest TailwindCSS helper class best matches. It's okay to eyeball it so you shouldn't need to inspect values.

### Specs

-   Header / Footer nav should be menus that are editable in the admin
-   Main featured post should be configurable somehow in the admin. There's multiple ways to handle this and we've interested in seeing how you'd tackle it. The image in the featured post can just be the post's thumbnail image.
-   Recent post module should pull the most recent three posts, making sure the featured post is not included. The text/slug above the title (Article, Video, Case Study) should be the main category for the post. "More from the Blog" and text below may be hardcoded in the layout.
-   Hero page doesn't need to be blocks. It being a single page layout is fine.
-   Post page content can just use prose if it's easier. We're not too worried about the content styling.
-   Related module on post page should exclude the current post.
-   Don't worry about mobile

### Getting Started

This repo has all the boilerplate you need to get started.

You'll need a few things to get started:

-   Docker
-   Git
-   Composer & PHP 7.4+
-   NodeJS 16+ or Volta.js

Steps:

-   Clone or fork this repo.
-   `cd` to the directory
-   Duplicate the `.env-example` to `.env`
-   run: `composer install`
-   if you use volta: `volta install`
-   run: `npm install`
-   run: `docker-compose up -d`
-   run `npm run dev`
-   Open your browser to `http://localhost`
-   You can setup a basic wordpress and activate the example theme
-   This is where you'll do your development
-   Make sure to lint your work!
-   When all finished: stop the `npm run dev` cmd
-   run: `docker-compose down`
-   Commit your changes and push to Github. It would be great if you opened a pull request with just the changes instead of everything all at once.

You can then submit the url to your First+Third contact and we'll perform a light code review and may leave feedback directly. We'll also clone your code and run locally using the same steps above.

You don't have to, but if you include a wordpress content export that would be great. Otherwise we'll generate some content to test against.
