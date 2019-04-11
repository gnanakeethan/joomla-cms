<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Content.opengraph
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Plugin\CMSPlugin;

class PlgContentOpenGraph extends CMSPlugin
{
	protected $app;
	
	public function __construct(&$subject, $config = array())
	{
		parent::__construct($subject, $config);
		$this->app = JFactory::getApplication();
		
	}
	
	function onContentPrepare($context, &$article, &$params, $page = 0)
	{
		if (isset($article->title))
		{
			$this->app->getDocument()->addCustomTag('<meta property="og:title" content="' . $article->title . '"/>');
			$this->app->getDocument()->addCustomTag('<meta property="og:type" content=""/>');
			$this->app->getDocument()->addCustomTag('<meta property="og:type" content="article"/>');
		}
	}
}
