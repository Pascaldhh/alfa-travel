<?php
class routing
{
    public $cmspage = DS . 'user-login';
    public $page = DS . 'home';
    public $page2 = '';
    public $page3 = '';
    public function __construct()
    {
        if(isset($_GET['pages']) == 'cms')
        {
            $this->Cms();
        } else {
            $this->Site();
        }
    }
    public function Site()
    {
        include_once('header.php');
        if(isset($_GET['page']) && !empty($_GET['page']))
        {
            $this->page = DS . $_GET['page'];
        }
        if(isset($_GET['page2']) && !empty($_GET['page2']))
        {
            $this->page2 = DS . $_GET['page2'];
        }
        if(isset($_GET['page3']) && !empty($_GET['page3']))
        {
            $this->page3 = DS . $_GET['page3'];
        }
        include_once(sprintf('pages%s%s%s.php', $this->page, $this->page2, $this->page3));
        include_once('footer.php');
    }
    public function Cms()
    {
        $this->page = $this->cmspage;
        include_once(sprintf('cms%sheader.php', DS));
        if(isset($_GET['page']) && !empty($_GET['page']))
        {
            $this->page = DS . $_GET['page'];
        }
        if(isset($_GET['page2']) && !empty($_GET['page2']))
        {
            $this->page2 = DS . $_GET['page2'];
        }
        if(isset($_GET['page3']) && !empty($_GET['page3']))
        {
            $this->page3 = DS . $_GET['page3'];
        }
        include_once(sprintf('cms%spages%s%s%s.php', DS, $this->page, $this->page2, $this->page3));
        include_once(sprintf('cms%sfooter.php', DS));
    }
}
$route = new routing();