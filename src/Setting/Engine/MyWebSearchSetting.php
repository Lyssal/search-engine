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
 * Setting for MyWebSearch.
 */
class MyWebSearchSetting extends AbstractSetting
{
    /**
     * @var string The search engine URL
     */
    public const SEARCH_ENGINE_URL = 'https://search.mywebsearch.com';


    /**
     * @inheritDoc
     */
    protected $searchEngine = SearchEngine::MYWEBSEARCH;


    /**
     * @inheritDoc
     */
    public function generateSearchUrl(): string
    {
        return static::SEARCH_ENGINE_URL.'?searchfor='.urlencode((null !== $this->website ? 'site:'.$this->website.' ' : '').$this->query);
    }
}
