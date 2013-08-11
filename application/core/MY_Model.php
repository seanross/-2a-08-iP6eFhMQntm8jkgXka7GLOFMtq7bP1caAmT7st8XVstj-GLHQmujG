<?php 

use Doctrine\ORM\Tools\DisconnectedClassMetadataFactory;
use Doctrine\ORM\Tools\EntityGenerator;
use Doctrine\ORM\Mapping\Driver\DatabaseDriver;
use Doctrine\ORM\Tools\Pagination\Paginator;

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
* 
*/
class MY_Model extends CI_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
}

class AspectService extends MY_Model {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
        
        public function newStatusAdvice($object){                    //I have to get username explicitly because
            $object->setEnabled(true);                                          //you are not yet logged in
            $object->setCreatedDate(new \DateTime("now"));
            $object->setUpdatedDate(new \DateTime("now"));
            $object->setCreatedBy($this->tank_auth->get_username());
//            $object->setUpdatedBy($username);
        }
        
        
        public function updateStatusAdvice($object){
            $object->setUpdatedBy($this->tank_auth->get_username());                                   //fetching username is easier when you are
            $object->setUpdatedDate(new \DateTime("now"));                      //logged in
        }
}

class GlobalService extends AspectService {

	public $user_id;
	public $username;
	public $roledisplay;
	public $em;
	
	private $gallery_path;
	private $gallery_path_url;

	public function __construct()
	{
		parent::__construct();
		$this->user_id = $this->tank_auth->get_user_id();
		$this->username	= $this->tank_auth->get_username();
		$this->roledisplay = $this->tank_auth->get_role();
		$this->load->library('doctrine');
		$this->load->helper('form');
		$this->gallery_path = 'uploads';
		$this->gallery_path_url = base_url() . 'uploads/';
		$this->em = $this->doctrine->em;
	}

	/**
   * generate entity objects automatically from mysql db tables
   * @return none
   */
	function generate_classes(){    
	       
	    $this->em->getConfiguration()
	             ->setMetadataDriverImpl(
	                new DatabaseDriver(
	                        $this->doctrine->em->getConnection()->getSchemaManager()
	                )
	    );
	 
	    $cmf = new DisconnectedClassMetadataFactory();
	    $cmf->setEntityManager($this->em);
	    $metadata = $cmf->getAllMetadata();    
	    $generator = new EntityGenerator();
	     
	    $generator->setUpdateEntityIfExists(true);
	    $generator->setGenerateStubMethods(true);
	    $generator->setGenerateAnnotations(true);
	    $generator->generate($metadata, APPPATH."models/temp");
	     
	}

	public function getAll($entity){
		return $this->em->getRepository($entity)->findAll();
	}

	public function getById($entity, $id){
		return $this->em->getRepository($entity)->find($id);
	}

	public function delete($entity){
		$this->em->remove($entity);
		$this->em->flush();
		return 'Success';
	}

	public function getPaginated($entity, $perPage, $numLinks){
		$this->load->library('pagination');
			
		$perPageResults = $perPage;
		$dql = "SELECT p FROM {$entity} p";
		$query = $this->em->createQuery($dql)
		                   ->setFirstResult($this->uri->segment(3))
		                   ->setMaxResults($perPageResults);
		$paginator = new Paginator($query, $fetchJoinCollection = true);
		
		$config['total_rows'] = count($paginator);
		$config['per_page'] = $perPageResults;
		$config['num_links'] = $numLinks;
		$config['full_tag_open'] = '<div class="pagination">';
		$config['full_tag_close'] = '</div>';
		$config['base_url'] = base_url() . $this->uri->segment(1). '/' .$this->uri->segment(2). '/';

		$this->pagination->initialize($config);

		return $paginator;
	}

	public function uploadPhoto($entity, $id){
		$product = $this->getById($entity, $id);
		$config = array('allowed_types' => 'jpg|jpeg|gif|png',
						'upload_path' => $this->gallery_path,
						'max_size' => 2000
						);
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( !$this->upload->do_upload()){
			$fail = array('status' => 'fail' ,' error' => $this->upload->display_errors());
			return $fail;
		} else {
			$img = $this->upload->data();
			$image_name = $img['file_name'];
			$config = array('source_image' => $img['full_path'],
						'new_image' => $this->gallery_path . '/thumbs',
						'maintain_ratio' => true,
						'width' => 100,
						'height' => 100
							);
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$u = new Entity\MisImageTb;
			$u->setFileName($image_name);
			$u->setClientName('???');
			$u->setFileType($img['file_type']);
			$u->setFilePath($img['file_path']);
			$u->setFullPath($img['full_path']);
			$u->setFileUrl(base_url() . 'uploads/' . $image_name);
			$u->setThumbUrl(base_url() . 'uploads/thumbs/' . $image_name);
			$u->setRawName($img['raw_name']);
			$u->setOrigName($img['orig_name']);
			$u->setClientName($img['client_name']);
			$u->setFileExt($img['file_ext']);
			$u->setFileSize($img['file_size']);
			$u->setIsImage($img['is_image']);
			$u->setImageWidth($img['image_width']);
			$u->setImageHeight($img['image_height']);
			$u->setImageType($img['image_type']);
			$u->setImageSizeStr($img['image_size_str']);
                        $product->setMisImageTb($u);
                        $this->updateStatusAdvice($product, 'admin');
                        $this->newStatusAdvice($u, 'admin');
                        $this->em->persist($product);
			$this->em->persist($u);
			$this->em->flush();

			$success = array('status' => 'success' ,'upload_data' => $img , 'upload_id' => $u->getId());
			return $success;
		}
	}

	public function uploadPrimary($memberid){
		$userprofile = $this->getById('Entity\UserProfiles', $memberid);
		$config = array('allowed_types' => 'jpg|jpeg|gif|png',
						'upload_path' => $this->gallery_path,
						'max_size' => 2000
						);
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		if ( !$this->upload->do_upload()){
			$fail = array('status' => 'fail' ,' error' => $this->upload->display_errors());
			return $fail;
		} else {
			$img = $this->upload->data();
			$image_name = $img['file_name'];
			$config = array('source_image' => $img['full_path'],
						'new_image' => $this->gallery_path . '/thumbs',
						'maintain_ratio' => true,
						'width' => 100,
						'height' => 100
							);
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$u = new Entity\Picture;
			$u->setFileName($image_name);
			$u->setUserProfile($userprofile);
			$u->setFileType($img['file_type']);
			$u->setFilePath($img['file_path']);
			$u->setFullPath($img['full_path']);
			$u->setFileUrl(base_url() . 'uploads/' . $image_name);
			$u->setThumbUrl(base_url() . 'uploads/thumbs/' . $image_name);
			$u->setRawName($img['raw_name']);
			$u->setOrigName($img['orig_name']);
			$u->setClientName($img['client_name']);
			$u->setFileExt($img['file_ext']);
			$u->setFileSize($img['file_size']);
			$u->setIsImage($img['is_image']);
			$u->setImageWidth($img['image_width']);
			$u->setImageHeight($img['image_height']);
			$u->setImageType($img['image_type']);
			$u->setImageSizeStr($img['image_size_str']);
			$this->em->persist($u);
			$this->em->flush();

			$success = array('status' => 'success' ,'upload_data' => $img , 'upload_id' => $u->getId());
			return $success;
		}
	}
}

/* End of file MY_Model.php */
/* Location: ./application/core/MY_Model.php */

