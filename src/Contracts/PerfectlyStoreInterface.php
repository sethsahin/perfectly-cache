<?php
/**
 * Created by PhpStorm.
 * User: Musa
 * Date: 25.03.2019
 * Time: 13:49
 */

namespace Whtht\PerfectlyCache\Contracts;


use Illuminate\Contracts\Cache\Store;

interface PerfectlyStoreInterface extends Store
{
    /**
     * @return string
     */
    public function getStore();

    /**
     * @param string $key
     * @return string
     */
    public function getCacheFile(string $key);

    /**
     * @param string $key
     * @return string
     */
    public function combineCacheName(string $key);

    /**
     * @return string
     */
    public function getCacheFileExt();

    /**
     * @param string $key
     * @return boolean
     */
    public function exists(string $key);

    /**
     * @return string
     */
    public function getDirectory();
}