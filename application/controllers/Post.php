<?php

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
        $pageModel = [
            'posts' => $this->post->findPosts()
        ];

        $this->load->view('post/list', $pageModel);
    }
}

/* End of file Post.php */
