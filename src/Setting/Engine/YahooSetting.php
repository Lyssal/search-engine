<?php
/**
 * This file is part of a Lyssal project.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\SearchEngine\Setting\Engine;

use Lyssal\SearchEngine\Engine\SearchEngine;
use Lyssal\SearchEngine\Setting\AbstractSetting;

/**
 * Setting for Yahoo!.
 */
class YahooSetting extends AbstractSetting
{
    /**
     * @var string The search engine URL
     */
    public const SEARCH_ENGINE_URL = 'https://search.yahoo.com/search';


    /**
     * @inheritDoc
     */
    protected $searchEngine = SearchEngine::YAHOO;


    /**
     * @inheritDoc
     */
    public function generateSearchUrl(): string
    {
        return static::SEARCH_ENGINE_URL.'?p='.urlencode((null !== $this->website ? 'site:'.$this->website.' ' : '').$this->query);
    }
}
