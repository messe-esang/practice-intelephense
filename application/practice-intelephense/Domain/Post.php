<?php

namespace MesseEsang\Practice\Domain;

/**
 * 게시글
 * @package MesseEsang\Practice\Domain
 */
class Post
{
    /**
     * 식별자
     * @var int
     */
    public $postId;

    /**
     * 
     * @var string
     */
    public $type;

    /**
     * 제목
     * @var string
     */
    public $title;

    /**
     * 내용
     * @var string
     */
    public $content;

    /**
     * 글쓴이
     * @var string
     */
    public $writer;

    /**
     * 작성일
     * @var \DateTime
     */
    public $writeDate;

    /**
     * 댓글 리스트
     * @var Reply[]
     */
    public $replies;

    /**
     * 
     * @return int 
     */
    public function getReplyCount(): int
    {
        return count($this->replies);
    }
}
