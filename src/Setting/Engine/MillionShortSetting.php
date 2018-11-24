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
 * Setting for Million short.
 */
class MillionShortSetting extends AbstractSetting
{
    /**
     * @var string The search engine URL
     */
    public const SEARCH_ENGINE_URL = 'https://millionshort.com/search';


    /**
     * @inheritDoc
     */
    protected $searchEngine = SearchEngine::MILLION_SHORT;


    /**
     * @inheritDoc
     */
    public function generateSearchUrl(): string
    {
        return static::SEARCH_ENGINE_URL.'?keywords='.(null !== $this->website ? 'site:'.$this->website.' ' : '').$this->query.'&remove=0';
    }
}
