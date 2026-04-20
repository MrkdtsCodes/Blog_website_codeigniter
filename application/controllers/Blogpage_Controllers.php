<?php

/**
 * @property Students_models $Students_models
 * @property input $input
 * @property Contents $Contents
 * @property form_validation $form_validation
 * @property upload $upload
 * @property Contents $contents
 * @property Session $session
 */

class Blogpage_Controllers extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Contents'); //load the model and give the data
    }

    public function displayListingpage() //view
    {
        //i load na na natin yung mga articles na ginagawa natin
        // yung pangalawnag value ay parang rename lng ng method mo


        $data['blogs'] = $this->Contents->getAllPosts();


        if (empty($data['blogs'])) {
            $data['error_message'] = "The database has no Contents";;
        }

        $this->load->view('pages/navigation_bar');
        $this->load->view('pages/listing_page', $data);
        // $this->load->view('pages/listing_page', ['blogs'=>$blogs]);
    }

    public function displayAbout()
    {
        $this->load->view('pages/navigation_bar');
        $this->load->view('pages/about');
    }

    public function displayContacts()
    {
        $this->load->view('pages/navigation_bar');
        $this->load->view('pages/contact');
    }



    public function displayCreatePost()
    //this this plays the current categories in out db
    {
        $data['categories'] = $this->contents->get_categories();
        $this->load->view('pages/create_post', $data);
    }

    public function getformsData()
    {
        // echo "<pre>"; //debugger
        // print_r($_FILES);
        // echo "</pre>";
        // die();
        //Validation para sa input fields natin
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');
        $this->form_validation->set_rules('category', 'Category', 'required');

        //if form validation is true(may laman i run to )
        if ($this->form_validation->run()) {

            //i-setup ang pag upload ng img
            $config['upload_path'] = './assets/images/posts';
            $config['allowed_types'] = 'jpeg|png|jpg';
            $config['max_size'] = '2048';
            // s$config['max_width'] = '500';
            // $config['max_height'] = '500';

            $this->load->library('upload');
            $this->upload->initialize($config);

            //i try i upload
            if (!$this->upload->do_upload('userfile')) {
                $errors = array('error' => $this->upload->display_errors());
                $post_image = 'noimage.jpg';
            } else {
                // Kung success ang upload, kunin ang totoong pangalan ng file mula sa CI
                $upload_data = $this->upload->data();
                $post_image = $upload_data['file_name']; // FIXED: Ito ang gagamitin natin
            }

            $is_saved = $this->contents->getformInpt($post_image); //isend sa db

            if ($is_saved) {
                redirect(base_url('home'));
            } else {
                echo "may naging mali tayo";
            }


            //redirect sa home page page 

        } else {
            // echo "Walang laman";
            $this->displayCreatePost();
        }
    }


    //update-edit

    public function editpost($id)
    //pang show ng db
    {
        $data['post'] = $this->contents->geteditID($id);
        $data['categories'] = $this->contents->get_categories();
        $this->load->view('pages/edit_post', $data);
    }


    public function updatepost($id)
    { //sending the data to be updated 

        $this->displayListingpage();
    }


    public function deletepost($id)
    {

        //LOAD THE MODEL
        $this->load->model('Contents');

        $this->Contents->deletepost($id);

        $this->displayListingpage();
    }

    public function readmore($id)
    {

        $this->load->model('Contents');

        $data['post'] = $this->Contents->readmore($id);

        $this->load->view('pages/readmore', $data);
    }


    //create user's account
    public function displaycreatepage()
    {
        $this->load->view('pages/create_account');
    }


    public function getCrtUsr()
    {
        //validations 
        $this->form_validation->set_rules('lastname', 'Your Lastname is ', 'required');
        $this->form_validation->set_rules('firstname', 'Your Firstname is ', 'required');
        $this->form_validation->set_rules('middlename', 'Your Middlename is ', 'required');
        $this->form_validation->set_rules('email_address', 'Email Address', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]');

        $enc_pass = md5($this->input->post('password'));


        //passing the values to model
        if ($this->form_validation->run()) {

            //encryot password
            $is_saved = $this->contents->newUsrinsert($enc_pass);

            if (!$is_saved) {
                echo "may mali";
            } else {
                echo "sumacess ka eh";

                $this->session->set_flashdata('user_registered', "you are now logged in");
                redirect('home');
            }
        } else {
            $this->displaycreatepage();
            //pag tawag  and pinapasa yung erros
        }
    }
}
