<?php
/**
 * This file is part of a Lyssal project.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\SearchEngine\Setting;

use Lyssal\Exception\InvalidArgumentException;
use Lyssal\SearchEngine\Engine\SearchEngine;
use Lyssal\SearchEngine\Setting\Engine;

/**
 * Factory to get a search engine setting.
 */
class SettingFactory
{
    /**
     * Get the search engine setting.
     *
     * @param string $searchEngine The search engine
     *
     * @return \Lyssal\SearchEngine\Setting\SettingInterface The setting
     */
    public function getSetting(string $searchEngine): SettingInterface
    {
        switch ($searchEngine) {
            case SearchEngine::AOL:
                return new Engine\AolSetting();
            case SearchEngine::ASK:
                return new Engine\AskSetting();
            case SearchEngine::BAIDU:
                return new Engine\BaiduSetting();
            case SearchEngine::BING:
                return new Engine\BingSetting();
            case SearchEngine::DUCKDUCKGO:
                return new Engine\DuckDuckGoSetting();
            case SearchEngine::ECOSIA:
                return new Engine\EcosiaSetting();
            case SearchEngine::EXALEAD:
                return new Engine\ExaleadSetting();
            case SearchEngine::GOOGLE:
                return new Engine\GoogleSetting();
            case SearchEngine::LILO:
                return new Engine\LiloSetting();
            case SearchEngine::MILLION_SHORT:
                return new Engine\MillionShortSetting();
            case SearchEngine::MYWEBSEARCH:
                return new Engine\MyWebSearchSetting();
            case SearchEngine::QWANT:
                return new Engine\QwantSetting();
            case SearchEngine::STARTPAGE:
                return new Engine\StartpageSetting();
            case SearchEngine::WOW:
                return new Engine\WowSetting();
            case SearchEngine::YAHOO:
                return new Engine\YahooSetting();
        }

        throw new InvalidArgumentException('The search engine "'.$searchEngine.'" is not managed.');
    }
}
