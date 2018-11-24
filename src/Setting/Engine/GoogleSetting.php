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
 * Setting for Google.
 */
class GoogleSetting extends AbstractSetting
{
    /**
     * @var string The search engine URL
     */
    public const SEARCH_ENGINE_URL = 'https://www.google.com/search';

    /**
     * @inheritDoc
     */
    protected $searchEngine = SearchEngine::GOOGLE;


    /**
     * @inheritDoc
     */
    public function generateSearchUrl(): string
    {
        return static::SEARCH_ENGINE_URL.'?q='.urlencode((null !== $this->website ? 'site:'.$this->website.' ' : '').$this->query);
    }
}
