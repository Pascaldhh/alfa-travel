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
            $j = 1;
            foreach($read as $item)
            {
                for($i = 1; $i < 4; $i++)
                {
                    if(isset($_POST[$j.$i]))
                    {
                        $this->input = $_POST[$j.$i];
                        $sprint3 = sprintf('content%s = "%s"', $i, $this->input);
                        $this->db->Update('website_content', $sprint3, sprintf('id = %s', $j));
                  }
                }
                $j++;
            }
        }
    }
?>