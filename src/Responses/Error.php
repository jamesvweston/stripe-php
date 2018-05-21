<?php

namespace jamesvweston\Stripe\Responses;


class Error implements \JsonSerializable
{

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $doc_url;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var string
     */
    protected $param;

    /**
     * @var string
     */
    protected $type;

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        $object['code']                 = $this->code;
        $object['doc_url']              = $this->doc_url;
        $object['message']              = $this->message;
        $object['param']                = $this->param;
        $object['type']                 = $this->type;

        return $object;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getDocUrl(): string
    {
        return $this->doc_url;
    }

    /**
     * @param string $doc_url
     */
    public function setDocUrl(string $doc_url): void
    {
        $this->doc_url = $doc_url;
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getParam(): string
    {
        return $this->param;
    }

    /**
     * @param string $param
     */
    public function setParam(string $param): void
    {
        $this->param = $param;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

}
