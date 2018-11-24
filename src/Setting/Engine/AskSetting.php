<?php
/**
 * This file is part of a Lyssal project.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\SearchEngine\Setting\Engine;

use Lyssal\SearchEngine\Engine\SearchEngine;

/**
 * Setting for Ask.
 */
class AskSetting extends GoogleSetting
{
    /**
     * @var string The search engine URL
     */
    public const SEARCH_ENGINE_URL = 'https://ask.com/web';


    /**
     * @inheritDoc
     */
    protected $searchEngine = SearchEngine::ASK;
}
