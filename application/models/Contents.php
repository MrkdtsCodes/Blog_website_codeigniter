<?php


class Contents extends CI_Model
{

    public function getformInpt($post_image)
    { //insert
        //insert the data

        $data = [
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body'),
            'category_id' => $this->input->post('category'),
            'post_image' => $post_image
        ];

        return $this->db->insert('posts', $data);
    }

    //join categories table to posts to access the name attribute of category_id
    public function getAllPosts()
    {  //view SELECT
        //  $this->db->get('posts')->result();
        
        $this->db->join('categories', 'categories.id = posts.category_id');
        $query = $this->db->get('posts');
        return $query->result_array();
        
    }


    public function geteditID($id)
    {   //edit
        return $this->db->get_where('posts', ['POST_ID' => $id])->result();
    }

    public function updateID($id)
    {
         $updateddata = [
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body'),
            'category_id' => $this->input->post('category'),
        ];

        // 1. Hanapin ang tamang blog post gamit ang ID
        $this->db->where('POST_ID', $id);

        // 2. I-update ang table na 'posts' gamit ang bagong data
        return $this->db->update('posts', $updateddata);
    }


    public function deletepost($id)
    {
        return $this->db->delete('posts', ['POST_ID' => $id]);
    }

    public function readmore($id)
    {

        return $this->db->get_where('posts', ['POST_ID' => $id])->row();
    }

    public function get_categories()
    {
        $this->db->order_by('name');
        $query = $this->db->get('categories');
        return $query->row();
    }

    public function sortbyCategory()
    {

        $this->db->where_in('');
    }
}
