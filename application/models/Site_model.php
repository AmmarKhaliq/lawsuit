 <?php
 defined( 'BASEPATH' )OR exit( 'No direct script access allowed' );

 class Site_model extends CI_Model {

 	public
 	function __construct() {
 		parent::__construct();

 		// if ( !$this->session->has_userdata( 'adminLogin' ) && !$this->session->has_userdata( 'adminEmail' ) && !$this->session->has_userdata( 'adminStatus' ) ) {

 		// 	redirect( base_url() );
 		// }
 	}

    public function home()
    {
        $this->load->view('home');
    }

    public function login()
    {
        $this->load->view('login');
    }

    public function addressbook()
    {
        $this->load->view('address-book');
    }
    

    public function newcases()
    {
        $this->load->view('new-cases');
    }
    
    public function newlibrary()
    {
        $this->load->view('new-library');
    }

    public function newmessage()
    {
        $this->load->view('new-message');
    }
    
    public function newstaff()
    {
        $this->load->view('new-staff');
    }

    public function preferences()
    {
        $this->load->view('preferences');
    }
    

    public function staff()
    {
        $this->load->view('staff');
    }

    public function support()
    {
        $this->load->view('support');
    }

    public function todos()
    {
        $this->load->view('to-dos');
    }

    public function newaddressbook()
    {
        $this->load->view('new-address-book');
    }

    public function messages()
    {
        $this->load->view('messages');
    }

    public function courts()
    {
        $this->load->view('courts');
    }

    public function finance()
    {
        $this->load->view('finance');
    }

    public function forms()
    {
        $this->load->view('forms');
    }


    public function library()
    {
        $this->load->view('library');
    }

    
    public function mapp()
    {
        $this->load->view('mapp');
    }


    public function caseshome()
    {
        $this->load->view('cases-home');
    }

    public function casespicture()
    {
        $this->load->view('cases-picture');
    }

    public function schedule()
    {
        $this->load->view('schedule');
    }

    public function stopwatch()
    {
        $this->load->view('stop-watch');
    }

    public function casesharing()
    {
        $this->load->view('casesharing');
    }
    

    public function yourfirm()
    {
        $this->load->view('yourfirm');
    }
    

    public function vendor()
    {
        $this->load->view('vendor');
    }
    
    
    public function organization()
    {
        $this->load->view('organization');
    }
 }