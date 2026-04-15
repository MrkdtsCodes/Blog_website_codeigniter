<?php
/**
 * @property Students_models $Students_models
 * @property input $input
 * @property Contents $Contents
 * @property form_validation $form_validation
 * 
 */

    class Blogpage_Controllers extends CI_Controller{


        public function __construct()
        {
            parent::__construct();
            $this->load->model('Contents'); //load the model and give the data
        }

        public function displayListingpage(){
            


            //i load na na natin yung mga articles na ginagawa natin
            // yung pangalawnag value ay parang rename lng ng method mo
            
            $data['blogs'] = $this->Contents->getAllPosts();
            
            $this->load->view('pages/navigation_bar');
            $this->load->view('pages/listing_page', $data);

            // $this->load->view('pages/listing_page', ['blogs'=>$blogs]);
        }

        public function displayAbout(){
            $this->load->view('pages/navigation_bar');
            $this->load->view('pages/about');
        }

        public function displayContacts(){
            $this->load->view('pages/navigation_bar');
            $this->load->view('pages/contact');
        }

        

        public function displayCreatePost(){
            $data['categories'] = $this->Contents->get_categories();

            $this->load->view('pages/create_post',$data);

            
        }

        public function getformsData(){

            //pwede mong lagyan g validation
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('body', 'Body', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');

        

            if($this->form_validation->run()){
                $data = [
                    'title' => $this->input->post('title'),
                    'body' => $this->input->post('body'),
                    'category_id' => $this->input->post('category')
                ];
                
                $this->Contents->getformInpt($data);

                //redirect sa home page page 
                redirect(base_url('home'));
            }else{
                $this->displayCreatePost();
            }
        }

      


        public function editpost($id){

            $this->load->model('Contents');

            $data['blogs'] = $this->Contents->geteditID($id);

            $this->load->view('pages/edit_post', $data);
        }


        public function updatepost($id){

            $this->load->model('Contents');

            $updateddata = [
                'title' => $this->input->post('title'), 
                'body' => $this->input->post('body'),
            ];

           $this->Contents->updateID($updateddata, $id);

           $this->displayListingpage();
        }

        public function deletepost($id){

            //LOAD THE MODEL
            $this->load->model('Contents');

            $this->Contents->deletepost($id);

            $this->displayListingpage();
        }

        public function readmore($id){

            $this->load->model('Contents');
            
            $data['post'] = $this->Contents->readmore($id);

            $this->load->view('pages/readmore', $data);
        }

        
    }