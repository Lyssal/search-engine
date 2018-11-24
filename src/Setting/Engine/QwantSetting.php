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
 * Setting for Qwant.
 */
class QwantSetting extends GoogleSetting
{
    /**
     * @var string The search engine URL
     */
    public const SEARCH_ENGINE_URL = 'https://www.qwant.com/';


    /**
     * @inheritDoc
     */
    protected $searchEngine = SearchEngine::QWANT;
}
