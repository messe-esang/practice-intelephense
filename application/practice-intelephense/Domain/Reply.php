<?php

namespace MesseEsang\Practice\Domain;

/**
 * 댓글
 * @package MesseEsang\Practice\Domain
 */
class Reply
{
    /**
     * 
     * @var int
     */
    public $replyId;

    /**
     * 
     * @var int
     */
    public $postId;

    /**
     * 
     * @var string
     */
    public $content;

    /**
     * 
     * @var string
     */
    public $writer;

    /**
     * 
     * @var \DateTime
     */
    public $writeDate;
}
