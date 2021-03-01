# Repair Directory
Contributors: The Restart Project  
Donate link: https://therestartproject.org/give/  
Tags: repair  
Requires at least: 5.6.1  
Tested up to: 5.6.1  
Stable tag: master  
Requires PHP: 7.2  
License: GPLv3 or later  
License URI: http://www.gnu.org/licenses/gpl-3.0.html  

The Restart Repair Directory is a tool for encouraging repair through local businesses.  

## Description

The Restart Repair Directory is a tool for encouraging repair through local businesses.  
It allows for the recording of local repair businesses in a directory and the searching of this directory by 
the public.  [Find out more](https://therestartproject.org/repairdirectory/about).

## Installation

This plugin is manually installed from a ZIP file supplied by The Restart Project.

1. Go to the WordPress Plugins Page
2. Click *Add New*
3. Select the ZIP file
4. Activate the plugin

Once installed and activated, the plugin can be used on a WordPress page using the `repair-directory` shortcode, e.g.

`[repair-directory region="Wales" width="100%" height="500" region="London" domain="https://map.restarters.net"`

The following options are available:
* **rd_parenturl** default `https://map.restarters.net`.  This is the path of the page at which the
 Repair Directory is included.  It is used when constructing links to share.  This must include the http:// or https:// 
 part, and does not have a trailing slash.
* **rd_region** default `London` Either `London` or `Wales`.  This controls which default view of the map is shown and 
which businesses are included.
* **width** default `100%` Size of the map shown.
* **height** default `600` Height of the map shown.