# php-routing-starter

## About

_php-routing-starter_ is a basic routing implementation for php. It comes with a _pre-configured_ docker-compose file that starts an **php-apache** server with the required modules (_mod_rewrite.c_). It also comes with a _"read-to-run"_ tailwindcss installation.

## Usage

**Why would I use it and what is it good for?**

When you build a small website and want/need a basic routing implementation, this package would be best suited.

It has a basic router `src/routes.php` where all the routes are defined. This is the entry point for the webapp. Every request that hits the server is getting redirected to the _routes.php_ file where the router decides what to load and where to redirect.

Everything is configured within the router. The views (_what to load/display_) are located in the `src/views/` folder. For best practice, put all your '_viewable_' files inside the views folder.

The styling can be done with tailwindcss classes and if you need to write your own classes and css, put them in the `resources/css/app.css` file. When you run the command _npm run watch_, tailwind will automatically check for changes in this file (_as well as all the html/php files_) and update the then loaded `src/public/css/app.css` file.

Everything that needs to be public should go in the `src/public/` folder, because **that's** the only acception the router **does NOT** redirect (_for obvious reasons_).

## Get started

When you freshly download/clone the package, make sure you run `npm install` so tailwindcss is available. Copy (_or rename_) the `.env.example` into `.env` and change the __APP_NAME__ to whatever suits you.
After that, you can simply start the docker container with `docker-compose up`. When everythings finished, take a look at **localhost:8080**, you should be greated with a welcome message.

### That's it

No, I'm not kidding, you can now go on and create your routes and views to your heart's content.

## Deployment

_Before you deploy, make sure that your webserver allows the usage of **.htaccess** files!_

For deploying your app, run the `npm run build` command for an more optimized css file. After that, simply upload all the files inside `src/` to your webserver.

## Issues

If you expirience any issues or problems, feel free to create an issue or simply hit me up on [twitter](https://twitter.com/mikeunge).
