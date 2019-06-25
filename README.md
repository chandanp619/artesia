# Brookfield - Artesia

This is a WordPress project built on [Bedrock](https://roots.io/bedrock/) v1.8.12 architecture and making use of the [Sage](https://roots.io/sage/) v9.0.2 starter theme, with [Carbon Fields](https://carbonfields.net), [Bourbon](https://www.bourbon.io), [Neat](https://neat.bourbon.io), and [Bitters](https://bitters.bourbon.io).

## Dependencies

* PHP >= 7.1.3 (with php-mbstring enabled)
* Composer
* Node.js >= 6.9.x

## Build commands

* `npm start` — Compile assets when file changes are made, start Browsersync session
* `npm run build` — Compile and optimize the files in your assets directory
* `npm run build:production` — Compile assets for production

## Installation 

* Clone the repo to your local machine, or remote server.
* Duplicate `.env.example` to `.env` and insert correct values.
* For the included Docker setup:
  * `WEB_DIRECTORY=html`
  * `DB_HOST=database`
* If database doesn't exist create a database with the same name given in `.env`. The WordPress install process will not create a DB.
* Run `composer install` from the project root.<sup>*</sup>
* Run `npm install` from the project root.<sup>*</sup>
* Run `npm build` from the project root.<sup>*</sup>

<sub>\* _Composer will install Bedrock dependencies in project root and theme dependencies in theme. It is not necessary to separately run `composer install` in theme as it will be called from the root script. Likewise with NPM._</sub>

## External Docs

* [WordPress Codex](https://codex.wordpress.org)
* [Bedrock](https://roots.io/bedrock/docs/)
* [Sage](https://roots.io/sage/docs/)
* [Blade](http://laravel.com/docs/5.6/blade)
* [Carbon Fields](https://carbonfields.net/docs/)
* Styles
  * [Bourbon](https://www.bourbon.io/docs/5.1.0)
  * [Neat](https://neat.bourbon.io/docs/3.0.0/)
  * [Bitters](https://github.com/thoughtbot/bitters/tree/v1.8.0)
  * [Normalize](http://nicolasgallagher.com/about-normalize-css/)

## Debugging 

The `App\Debug` class has three static methods:

* `Debug::log()` will output to `src/app/debug.log`.
* `Debug::show()` will format and output to the browser. <sup>*</sup>
* `Debug::console()` outputs hidden markup to the browser, JavaScript will read this markup and output to the console.

<sub>* Both `Debug::show()` and `Debug::console()` take a second `$return` parameter, which defaults to `FALSE`. If `TRUE` they will return the output rather than immediately printing. (Similar to `print_r()`)</sub>


## Modifications to Bedrock

#### `web/` renamed `src/`

Bedrock docs refer to the `web/` directory which runs as the web root. This has been renamed `src/` in this repo in order to play nice with our QA server.

In Docker, this directory gets renamed `html/`.


## Modifications to Sage

#### `npm` not `yarn`

Sage docs recommend the use of Yarn, but in order to reduce dependencies, and keep all devs on the same page, stick to NPM.

#### Bourbon not Bootstrap

Substituting default front-end framework.

#### `Fields/` directory

A `Fields/` directory has been added within `app/`. This will be used to create Carbon Fields grouped by content block containers.

#### Controllers

Sage includes the [Controller](https://github.com/soberwp/controller) library but offers alternate methods for passing data to templates. For this project we will strictly Controller, to keep all of our field structure in one place.

##### Avoiding the Loop

The Controller docs demonstrate building controller methods that depend on global variables set by The Loop. Wherever possible, we should avoid this. Use WP and plugin functions that get passed a post ID, rather than ones that depend on the global post ID. (e.g. `carbon_get_post_meta()` instead of `carbon_get_the_post_meta()`). A `getId()` method has been defined in `App/Helpers/Post` in order to retrieve the ID.

##### Using Controller for relationships

Where it comes to content relationships we can avoid the loop by returning a new controller object, and priming it with the `setId()` method defined in `App/Helpers/Post`. Example below:

    public function relatedPost() {
        $post = new Page; // Chose appropriate controller class
        $post->setId(15); // Id won't usually be hard coded, retrieve from field data
        return $post;
    }

With that defined you can call methods from related content in template like so:

    {{ $related_post->title() }}

#### WordPress Hooks

The `get_header` and `get_footer` hooks have been removed from `app.blade.php`. We should be able to add everything we need via proper template structure, but it is possible in the future that this will inhibit the use of third-party plugins.

## Composer Dependencies

Where possible, composer dependencies should be added at the root/Bedrock level. Running composer install from the root will install dependencies at both levels.

Sage has it's own `composer.json` but we should avoid adding to it if we can.

Carbon Fields wasn't properly autoloading from the root composer install, so it was added to the theme.

## NPM Dependencies

All NPM dependencies are installed at the theme level. However, a package.json has been added at the project root to make it possible to call the theme build scripts without moving into that directory.
# artesia
