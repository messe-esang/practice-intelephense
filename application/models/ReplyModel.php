<?php

use Illuminate\Support\Collection;
use MesseEsang\Practice\Domain\Reply;

defined('BASEPATH') or exit('No direct script access allowed');

class ReplyModel extends CI_Model
{
    /**
     * 
     * @var Collection
     */
    private $replies;

    /**
     * 생성자
     * 
     * @author Hyeonmin Seon
     * @return void 
     */
    public function __construct()
    {
        parent::__construct();
        $this->replies = (new Collection(json_decode(file_get_contents(APPPATH . 'assets/replies.json'))))
            ->map(function ($p) {
                return mapping($p, new Reply());
            });
    }

    /**
     * 
     * @author Hyeonmin Seon
     * @param int $postId 
     * @return array 
     */
    public function getRepliesByPostId(int $postId): array
    {
        return $this->replies->where('postId', '=', $postId)->all();
    }
}

/* End of file ReplyModel.php */
