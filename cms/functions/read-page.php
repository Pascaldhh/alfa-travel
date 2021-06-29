<?php 
    class RPC 
    {
        public $db;
        public $input;
        public function __construct()
        {
            $this->db = new DB();
            $sprint2 = sprintf('page_id = ' . $_GET['id']);
            $read = $this->db->Read('website_content', '*', $sprint2);
            foreach($read as $item)
            {
                if(isset($_POST[$item['id']]))
                {
                    $this->input = $_POST[$item['id']];
                    $sprint3 = sprintf('content = "%s"', $this->input);
                    $this->db->Update('website_content', $sprint3, sprintf('id = %s', $item['id']));
                }
            }
        }
    }
?>