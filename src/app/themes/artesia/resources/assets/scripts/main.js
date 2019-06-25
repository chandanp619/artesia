// import external dependencies
import 'jquery';
import 'picturefill';
import 'lightgallery.js';
import 'slick-carousel/slick/slick';
import 'lazysizes';
import 'lazysizes/plugins/bgset/ls.bgset';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import postTypeArchiveHomes from './routes/postTypeArchiveHomes';
import templateContact from './routes/templateContact';
import './util/debug';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // Homes
  postTypeArchiveHomes,
  //Contact
  templateContact,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
