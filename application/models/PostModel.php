<?php

use Illuminate\Support\Collection;
use MesseEsang\Practice\Domain\Parameters\FindPostParameters;
use MesseEsang\Practice\Domain\Post;

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * 게시글 모델
 * 
 * @package 
 */
class PostModel extends CI_Model
{
    /**
     * 게시글 임시 컬렉션
     * 
     * @var Collection
     */
    private $posts;

    /**
     * 생성자
     * 
     * @author Hyeonmin Seon
     * @return void 
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ReplyModel', 'reply');
        $this->posts = (new Collection(json_decode(file_get_contents(APPPATH . 'assets/posts.json'))))
            ->map(function ($p) {
                /** @var Post */
                $post = mapping($p, new Post());
                $post->replies = $this->reply->getRepliesByPostId($post->postId);
                return $post;
            });
    }

    #region Public Methods

    /**
     * 게시글 검색
     * 
     * @param   FindPostParameters $params 파라미터
     * @return  Post[] 
     */
    public function findPosts(FindPostParameters $params = null): array
    {
        // TODO: 파라미터($params)를 이용하여 검색 필터 기능 추가
        return $this->posts->all();
    }

    #endregion
}

/* End of file Post.php */
