<?php

namespace jamesvweston\Stripe\Responses;


abstract class BaseCollection
{

    /**
     * @var array
     */
    protected $data;

    /**
     * @var bool
     */
    protected $has_more;

    /**
     * @var int
     */
    protected $total_count;

    /**
     * @var string
     */
    protected $url;

    abstract function getData();
    abstract function setData($data);

    /**
     * @return boolean
     */
    public function getHasMore()
    {
        return $this->has_more;
    }

    /**
     * @param boolean $has_more
     */
    public function setHasMore($has_more)
    {
        $this->has_more = $has_more;
    }

    /**
     * @return int
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * @param int $total_count
     */
    public function setTotalCount($total_count)
    {
        $this->total_count = $total_count;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

}
