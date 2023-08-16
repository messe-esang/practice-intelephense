<?php

use MesseEsang\Practice\Domain\Parameters\FindPostParameters;
use MesseEsang\Practice\Domain\Post as DomainPost;

defined('BASEPATH') || exit('No direct script access allowed');

/**
 * 게시글 컨트롤러
 * 
 * @package 
 */
class Post extends CI_Controller
{
    /**
     * 인덱스 페이지
     * => 글 리스트
     * 
     * @return void 
     */
    public function index()
    {
        $this->list();
    }

    /**
     * 글 리스트
     * 
     * @return void 
     */
    public function list()
    {
        // TODO : get 파라미터를 받아서 FindPostParameters 객체를 생성해 findPosts 로 넘기는 코드 작성 (import 사용)

        $model = [
            'abcd' => [],
            'posts123' => $this->postModel->findPosts()
        ];

        $this->load->view('post/list', $model);
    }
}

/* End of file Post.php */
