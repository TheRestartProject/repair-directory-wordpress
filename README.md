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

This plugin embeds a public, searchable directory and map interface for the businesses in a particular region.  
Contact [tech@therestartproject.org](mailto:tech@therestartproject.org) to find out more about how to add and manage businesses for your region.

## Installation

Download the latest release ZIP file from [the Releases page](https://github.com/TheRestartProject/repair-directory-wordpress/releases).  Then:

1. Go to the WordPress Plugins Page
2. Deactivate and delete any existing Repair Directory plugin.
3. Click *Add New*
4. Select the ZIP file and upload it.
5. Activate the plugin

Once installed and activated, the plugin can be used on a WordPress page using the `repair-directory` shortcode, e.g.

`[repair-directory width="100%" height="500" rd_region="London" rd_parenturl="https://map.restarters.net"]`

The following options are available:
* **rd_parenturl** default `https://map.restarters.net`.  This is the path of the page at which the
 Repair Directory is included.  It is used when constructing links to share.  This must include the http:// or https:// 
 part, and does not have a trailing slash.
* **rd_region** default `London` Either `London` or `Wales`.  This controls which default view of the map is shown and 
which businesses are included.
* **rd_addbusiness** default `null`.  If present, this is the URL of a page where users can submit a new business.
* **width** default `100%` Size of the map shown.
* **height** default `600` Height of the map shown.