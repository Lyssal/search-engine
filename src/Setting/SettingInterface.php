<?php
/**
 * This file is part of a Lyssal project.
 *
 * @copyright Rémi Leclerc
 * @author Rémi Leclerc
 */
namespace Lyssal\SearchEngine\Setting;

/**
 * An engine setting.
 */
interface SettingInterface
{
    /**
     * Get the search engine.
     *
     * @return string The search engine
     */
    public function getSearchEngine(): string;

    /**
     * Set the query.
     *
     * @param string $query The query
     * @return \Lyssal\SearchEngine\Setting\SettingInterface Self
     */
    public function setQuery(string $query): SettingInterface;

    /**
     * Set the website.
     *
     * @param string $website The website
     * @return \Lyssal\SearchEngine\Setting\SettingInterface Self
     */
    public function setWebsite(string $website): SettingInterface;

    /**
     * Generate the search URL.
     *
     * @return string The search URL
     */
    public function generateSearchUrl(): string;
}
