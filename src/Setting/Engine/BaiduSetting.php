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
 * Setting for Baidu.
 */
class BaiduSetting extends AbstractSetting
{
    /**
     * @var string The search engine URL
     */
    public const SEARCH_ENGINE_URL = 'https://www.baidu.com/s';


    /**
     * @inheritDoc
     */
    protected $searchEngine = SearchEngine::BAIDU;


    /**
     * @inheritDoc
     */
    public function generateSearchUrl(): string
    {
        return static::SEARCH_ENGINE_URL.'?wd='.urlencode($this->query.(null !== $this->website ? ' site:'.$this->website : ''));
    }
}
