# Redactor Table plugin for Craft CMS

Adds inline tables to rich text fields in Craft CMS via the Redactor Table plugin.

**Installation**

1. Unzip file and place `redactortable` directory into your `craft/plugins` directory
2.  -OR- do a `git clone https://github.com/khalwat/redactortable.git` directly into your `craft/plugins` folder.  You can then update it with `git pull`
3. Install plugin in the Craft Control Panel under Settings > Plugins

## Usage

Add 'table' to the plugins array in your Redactor plugins configuration: http://buildwithcraft.com/docs/rich-text-fields#redactor-configs): 

```
{
	buttons: ['html','formatting','bold','italic','link','image'],
	plugins: ['fullscreen', 'table'],
    formattingTags: ['p', 'blockquote', 'pre', 'h1', 'h2', 'h3', 'h4'],
    observeLinks: true,
	toolbarFixedBox: true
}
```

## Changelog

### 1.0.0 -- 2015.11.25

* Initial release

## Credits

* Imperavi for writing the plugin
* MildlyGeeky's Redactor Font Size plugin (https://github.com/mildlygeeky/craft-redactorfontsize)
