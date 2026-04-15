<?php


    class Contents extends CI_Model{

        public function getformInpt($data){ //insert
            //insert the data
           return $this->db->insert('posts', $data);
        }


        public function getAllPosts() {  //view SELECT
            return $this->db->get('posts')->result();
        }


        public function geteditID($id){   //edit
            return $this->db->get_where('posts', ['POST_ID' => $id])->result(); 
            
        }

        public function updateID($updateddata, $id){   
            // 1. Hanapin ang tamang blog post gamit ang ID
            $this->db->where('POST_ID', $id);
            
            // 2. I-update ang table na 'posts' gamit ang bagong data
            return $this->db->update('posts', $updateddata);
        }


        public function deletepost($id){
            return $this->db->delete('posts', ['POST_ID' => $id]);
        }

        public function readmore($id){

            return $this->db->get_where('posts', ['POST_ID' => $id])->row();
            
        }

        public function get_categories(){
            $this->db->order_by('name');
            $query = $this->db->get('categories');
            return $query->result_array();
        }
    
    
    } 