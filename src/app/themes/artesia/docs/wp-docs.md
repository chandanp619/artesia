# CMS User Documentation

## Wordpress Basics

See the [Wordpress Home Page](https://wordpress.org).

Note that the above address is WordPress.**org** not WordPress.**com**, which is a related, but not identical product. There are lots and lots of third party resources out there for WordPress, but you'll want to be sure, when making use of them that you're looking at content relevant to the self-hosted **.org** version.

### How to Log-in to the CMS

Visit [http://brookfield-artesia.qa.evanshunt.com/wp/wp-admin](http://brookfield-artesia.qa.evanshunt.com/). (The base URL will change after launch but it will always be found at "wp/wp-admin" relative to the home page. E.g. http://alberta.brookfieldresidential.com/calgary/artesia/wp/wp-admin.)

### WordPress content structure

The basic unit of content in WordPress is called a post. 

Pages are a specific kind of standalone post that don't have the relational structure of other post types. 

Two custom post types have been defined for this website: Showhomes and Lots. Custom post types allow for two primary ways to display their content: a single post, and an archive which lists the posts of that type.

For this website only Showhomes are displayed in either of these ways as the Lots content is all included in the Showhomes archive.

### Navigating the CMS

The various sections of the CMS are outlined in the sidebar. Navigating through these options will take you to various options pages and user created post content.

### Editing Content

The content editor contains all the fields for a particular content item. These fields are typically grouped into blocks which correlate to layout sections on the public facing post. Some fields may not display on the individual post for this piece of content but on a post that makes reference to it.

Don't forget about the fields in the right sidebar!

---

## Site Structure / Content Types

Most of the site lives in the Pages section of the CMS, but there are a couple of custom content types defined for Artesia. 

### Pages

Each page currently on the website has a different set of fields for its unique arrangement of content. "Home" has a set of fields assigned to it because it is the Front-Page of this WordPress install. The rest of the pages have their specific fields because of the Template chosen in the Page Attributes section of the right sidebar.

### Showhomes

Showhomes are a custom post type. The Showhomes section consists of both the Showhomes Archive  found at "/homes/" and the single Showhome posts found at "/homes/{showhome-title}/". 

The Showhomes Archive has its own special section in the CMS, found in *Showhomes>Archive Options*. Because of some quirks of the CMS, the fields are grouped into tabs rather than the section blocks found in post editor. Despite the cosmetic difference these field groups will operate the ame as elsewhere.

The single Showhomes can be found in *Showhomes>All Showhomes*.

### Lots

The Lots content is only displayed in the lot map found in the Showhomes archive. The content entered in a single lot will display when a user hovers over the lot on the map.

The ID field should correspond to the ID in the map SVG file generally follwing the pattern of Block number follwed by two-digit lot number. So Block 7 Lot 57 had a lot ID of 757, and Block 12 Lot 4 has an ID of 1204.

Not all units on the map are able to activated using the CMS. All units not defined in the CMS will display as "Sold" by default.

---

## Content Blocks

Each content block is a collection of fields associated with a particular layout. 

Any URL field will accept both absolute URLs (e.g. http://google.ca) and relative URLs (e.g. /homes).

Uploaded images will be resized by WordPress to display at an optimal resolution for the device they are displayed on. However recommended minimum sizes will be provided, and exceptionally large images should be avoided so as to reduce upload and processing time.

### Banner

The Banner is present on all pages. It has two background images with one of two options overlaying them:

* A short title.
* A small image, e.g. the animated GIF on the home page

Fill out the Title or the Title Image field according to the chosen type.

#### Images

* Background: 1000 x 1000
* Title: 375 x 120

### Contact Form

Present on Contact page. Allows for introductory title and text prior to an embedded Hubspot form.

### Content Block

Default WordPress field. This is a rich text editor allowing for a wide variety of content to be entered.

### Embed Map

This generates a Google Map centered on the entered latitude and longitude and desired zoom level.

### Featured Image

Default WordPress field, included for both Showhomes and Lots. For Showhomes this is the thumbnail displayed on the Archive, and for Lots this is the floorplan that shows on hover for the lot in the lot map.

#### Image sizes

* For Showhomes: 500 x 500
* For Lots: 200 x 200

### Featured Logo

Found on Showhomes. This logo overlays the Featured Image on the Archive page.

### Feature Panel

Used on Front-Page, Showhomes Archive, and Lifestyle and Why Artesia templates. There are several variations on this section depending on the fields filled out. It displays a Title, Body text, and an optional button alongside either a single image or a carousel.

* The Title Orientation field determines which side of the screen the text will appear.
* A button will only appear if the both the Button Text and Button URL fields are filled out.
* Choose between a Single Image or Carousel and fill out the fields according to the selected variation.

Image: 900 x 540

### Full Width Panel

Used on all Page templates, Front-Page, single Showhome, and Showhomes Archive. The background image stretches from one edge of the screen to the other, with the Title, Body and Button overlaying it.

Image: 1400 x 600

### Gallery

Featured on single Showhomes and the Lifestyle page template. A collection of images to be displayed in a lightbox.

#### Images

* Background: 1400 x 600
* Gallery: 1024 x 1024

### Home Details

Used on single Showhomes. Displays beneath content block.

### Logo Bar

Used on Showhomes Archive. Images with links.

Image: SVG preferred

### Lot Details

Fields for single Lots. Displayed on hover on the Showhomes Archive.

The ID field should correspond to the ID in the map SVG file generally follwing the pattern of Block number follwed by two-digit lot number. So Block 7 Lot 57 had a lot ID of 757, and Block 12 Lot 4 has an ID of 1204.

### Lot Style Legend

Used on Showhomes Archive. Descriptions for the various Lot styles. Displayed beneath the lot map.

### Panel Menu

Used on all Page templates, Front-Page, single Showhome, and Showhomes Archive. It is a set of three panels, each with a background image overlayed by the tile and button.

Images: 500 x 500

---

## Other Settings

### Menu

The Menu is defined in *Appearance>Menus*

### Stick Tab

The "Get In Touch" sticky tab is set up in *Theme Options*. The link is selected from Pages on the site.
