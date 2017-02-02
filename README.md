# sacklerinsight_wp
A WordPress-based blog for the Sackler InSight newsletter with a WP theme based on the InSight PDF theme.

The code basis for this theme is from Tania Rascia's blog post tutorial series on developing a WordPress theme from scratch: https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/ Additional Resources are listed at the end of this Readme file.

While this repository contains an entire WordPress installation, all of the changes are actually only occurring in files inside the `wp-content/themes/sacklerinsight` folder.

## Notes
GitHub repository uses the GitHub WordPress .gitignore file, so among other files, wp_config.php is not tracked. This is for security reasons, as this file contains the database settings, password, and site-specific security keys. This file will need to be re-generated when deployed.

Sackler InSight WP theme is located in wp-content/themes/sacklerinsight/.

## Meeting notes
### 31 Jan 2017
- Hold one sidebar fixed, content scrolls in remaining space.
  - INSIGHT logo
  - Menu w/ hamburger
    - About
    - PDFs
    - Sections
  - Search w/ magnifying glass
  - Follow us for subscribe
  - Tag cloud
  - Archives
- Word cloud for categories/tags
- Achrives as dropdown or separate page.
- Ticker for new headlines?
- 3-4 featured articles at top of main content pane, scroll away.
- Flickr account for InSight
- Focus on InSight Website, plan GSC website for next year.
  - Google calendar
- How to handle new users
- Mockups.
- Aim for launch Fall 2017, use interim time to work out kinks, establish SOPs for writing, website management.

## Changes
### 1 Feb 2017
- Fixed left navigation panel design implemented
  - Issues with CSS styling of menu item text color
- Mobile-responsive deisgn implemented
  - Need to account for landscape orientation
- Rudimentary features implemented:
  - Search (needs more polish)
  - Comments (also needs more polish, styling)

## Resources
- Developing a WordPress Theme https://www.taniarascia.com/developing-a-wordpress-theme-from-scratch/
- Mobile-Responsive CSS Navigation Menu http://blog.teamtreehouse.com/create-an-absolute-basic-mobile-css-responsive-navigation-menu
- Responsive Web Design http://www.w3schools.com/css/css_rwd_mediaqueries.asp
- CSS Media Queries https://www.smashingmagazine.com/2010/07/how-to-use-css3-media-queries-to-create-a-mobile-version-of-your-website/
- Make WordPress CSS changes live immediately https://kellenmace.com/force-css-changes-to-go-live-immediately/
