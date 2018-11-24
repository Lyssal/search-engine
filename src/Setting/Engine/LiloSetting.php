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
 * Setting for Lilo.
 */
class LiloSetting extends GoogleSetting
{
    /**
     * @var string The search engine URL
     */
    public const SEARCH_ENGINE_URL = 'https://search.lilo.org/results.php';


    /**
     * @inheritDoc
     */
    protected $searchEngine = SearchEngine::LILO;
}
