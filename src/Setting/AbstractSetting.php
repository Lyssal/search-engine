<?php
/**
 * This file is part of a Lyssal project.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\SearchEngine\Setting;

/**
 * @see \Lyssal\SearchEngine\Setting\Engine\SettingInterface
 */
abstract class AbstractSetting implements SettingInterface
{
    /**
     * @var string The search engine
     */
    protected $searchEngine;

    /**
     * @var string The query
     */
    protected $query;

    /**
     * @var string The website where we search
     */
    protected $website;


    /**
     * @see \Lyssal\SearchEngine\Setting\SettingInterface::getSearchEngine()
     */
    public function getSearchEngine(): string
    {
        return $this->searchEngine;
    }

    /**
     * @see \Lyssal\SearchEngine\Setting\SettingInterface::setQuery()
     */
    public function setQuery(string $query): SettingInterface
    {
        $this->query = $query;

        return $this;
    }

    /**
     * Get the query.
     *
     * @return string The query
     */
    public function getQuery(): string
    {
        return $this->query;
    }

    /**
     * @see \Lyssal\SearchEngine\Setting\SettingInterface::setWebsite()
     */
    public function setWebsite(string $website): SettingInterface
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get the website.
     *
     * @return string The website
     */
    public function getWebsite(): string
    {
        return $this->website;
    }
}
