<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Post extends CI_Model {
    var $table_name = 'posts';
    var $table_pk = 'post_id';
    var $image_upload_path = POSTS_UPLOAD_PATH;

    function __construct() {
        parent::__construct();
    }

    public function get($post_id) {
        $this->db->where($this->table_pk, $post_id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

	public function getAll($page=0) {
        $this->db->order_by('date', 'desc');
        if (!empty($page)) {
            $limit = ITEMS_PER_PAGE;
            $offset = ($page * ITEMS_PER_PAGE) - ITEMS_PER_PAGE;
            $query = $this->db->get($this->table_name, $limit, $offset);
        }
        else {
            $query = $this->db->get($this->table_name);
        }
        return $query->result();
    }

    public function getAllBySearch($text_to_search) {
        if (!empty($text_to_search)) {
            $this->db->select('*')
                    ->from('posts')
                    ->like('posts.title', $text_to_search)
                    ->or_like('posts.body', $text_to_search)
                    ->or_like('posts.search_tags', $text_to_search)
                    ->order_by('date', 'desc');
            $query = $this->db->get();
            return $query->result();
        }
        else {
            return FALSE;
        }
    }

    public function getTotalNumberOfRows() {
        return $this->db->count_all_results($this->table_name);
    }
}