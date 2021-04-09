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
* **rd_language** default `en` Either `en` (British English) or `cy` (Welsh). This controls which language is shown.
* **rd_style** default `null` Encoded JSON object which allows some styles to be overridden.  See below.
* **rd_addbusiness** default `null`.  If present, this is the URL of a page where users can submit a new business.
* **width** default `100%` Size of the map shown.
* **height** default `600` Height of the map shown.

## Styling 

The `rd_style` parameter contains an URL-encoded JSON object.  For example:

`[repair-directory src="https://map.restarters.net/" rd_region="Wales" rd_parenturl="https://trp.restarters.dev/test-embed-page/" width="100%" height="700" rd_style="%7B%22bodyColor%22%3A%20%22%2315181d%22%2C%20%22primaryFont%22%3A%20%22Poppins%22%2C%20%22secondaryFont%22%3A%20%22Poppins%22%2C%20%22listPercentageColor%22%3A%20%22%23027602%22%2C%20%22sidebarBackground%22%3A%20%22%22%2C%20%22sidebarBackgroundColor%22%3A%20%22%23017602%22%2C%20%22sidebarButtonColor%22%3A%20%22%2315181D%22%2C%20%22sidebarButtonBackgroundColor%22%3A%20%22%2301D66D%22%2C%20%22sidebarInputColor%22%3A%20%22black%22%2C%20%22sidebarInputBackgroundColor%22%3A%20%22white%22%2C%20%22sidebarInputActiveColor%22%3A%20%22black%22%2C%20%22sidebarInputFocusColor%22%3A%20%22black%22%2C%20%22sidebarInputPlaceholderColor%22%3A%20%22black%22%2C%20%22businessHeadingColor%22%3A%20%22%2315181d%22%2C%20%22iconColor%22%3A%20%22%23027602%22%2C%20%22moreInfoColor%22%3A%20%22%23ffffff%22%2C%20%22viewMoreInfoColor%22%3A%20%22%23027602%22%2C%20%22moreInfoModalHeader%22%3A%20%22%23027602%22%20%7D" ]` 

which...decodes to the following string:

`{"bodyColor": "#15181d", "primaryFont": "Poppins", "secondaryFont": "Poppins", "listPercentageColor": "#027602", "sidebarBackground": "", "sidebarBackgroundColor": "#017602", "sidebarButtonColor": "#15181D", "sidebarButtonBackgroundColor": "#01D66D", "sidebarInputColor": "black", "sidebarInputBackgroundColor": "white", "sidebarInputActiveColor": "black", "sidebarInputFocusColor": "black", "sidebarInputPlaceholderColor": "black", "businessHeadingColor": "#15181d", "iconColor": "#027602", "moreInfoColor": "#ffffff", "viewMoreInfoColor": "#027602", "moreInfoModalHeader": "#027602" }`

...which would then be passed to JSON.parse().