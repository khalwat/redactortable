<?php
namespace Craft;

/**
 * Redactor CSS plugin
 */
class RedactorTablePlugin extends BasePlugin
{
    function getName()
    {
        return Craft::t('Redactor Table');
    }

    public function getDescription()
    {
        return 'Adds inline tables to rich text fields in Craft CMS via the Redactor Table plugin.';
    }
    
    public function getDocumentationUrl()
    {
        return 'https://github.com/khalwat/redactortable/blob/master/README.md';
    }
    
    public function getReleaseFeedUrl()
    {
        return 'https://github.com/khalwat/redactortable/blob/master/releases.json';
    }
    
    public function getVersion()
    {
        return '1.0.0';
    }

    public function getSchemaVersion()
    {
        return '1.0.0';
    }

    function getDeveloper()
    {
        return 'nystudio107';
    }

    function getDeveloperUrl()
    {
        return 'http://nystudio107.com';
    }

    public function hasCpSection()
    {
        return false;
    }

	public function init()
	{
		if (craft()->request->isCpRequest())
		{
			craft()->templates->includeJsResource('redactortable/table.js');
		}
	}
}
