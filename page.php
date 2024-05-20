<?php
class Page
{
  // class Page's attributes
  public $content;
  public $title = "Edmonds College";
  public $keywords = "TLA Consulting, Three Letter Abbreviation, 
                     some of my best friends are search engines";
  public $buttons = array("Home"   => "home.php",
                        "Edc"      => "https://www.edmonds.edu/",
                        "Business" => "https://www.edmonds.edu/programs-and-degrees/business/",
                        "CIS" => "services.php",
                        "Contact" => "map.php"
                    );
					


  // class Page's operations
  public function __set($name, $value)
  {
    $this->$name = $value;
  }

  public function Display()
  {
    echo "<html>\n<head>\n";
    $this -> DisplayTitle();
    $this -> DisplayKeywords();
    $this -> DisplayStyles();
    echo "</head>\n<body>\n";
    $this -> DisplayHeader();
    $this -> DisplayMenu($this->buttons);
    echo $this->content;
    $this -> DisplayFooter();
    echo "</body>\n</html>\n";
  }

  public function DisplayTitle()
  {
    echo "<title>".$this->title."</title>";
  }

  public function DisplayKeywords()
  {
    echo "<meta name='keywords' content='".$this->keywords."'/>";
  }

  public function DisplayStyles()
  { 
    ?>   
    <link href="styles.css" type="text/css" rel="stylesheet">
    <?php
  }

  public function DisplayHeader()
  { 
    ?>   
    <!-- page header -->
    <header>    
      <img src="edmondscollege.png" alt="TLA logo" height="70" width="70" />
      <h1>Edmonds College</h1>
    </header>
    <?php
  }

  public function DisplayMenu($buttons)
  {
    echo "<!-- menu -->
    <nav>";
	
	
/*	 while (list($name, $url) = each($buttons)) {
      $this->DisplayButton($name, $url, 
               !$this->IsURLCurrentPage($url));
    }*/
		
	foreach($buttons as $name => $url) {
       $this->DisplayButton($name, $url, 
               !$this->IsURLCurrentPage($url));
    }


   echo "</nav>\n";
  }

  public function IsURLCurrentPage($url)
  {
    if(strpos($_SERVER['PHP_SELF'],$url)===false)
    {
      return false;
    }
    else
    {
      return true;
    }
  }

  public function DisplayButton($name,$url,$active=true)
  {
	   
    if ($active) { ?>
      <div class="menuitem">
        <a href="<?=$url?>">
        <img src="s-logo.gif" alt="" height="20" width="20" />
        <span class="menutext"><?=$name?></span>
        </a>
      </div>
      <?php
    } else { ?>
      <div class="menuitem">
      <img src="side-logo.gif">
      <span class="menutext"><?=$name?></span>
      </div>
      <?php
    }  

  }

  public function DisplayFooter()
  {
    ?>
    <!-- page footer -->
    <footer>
      <p>&copy; TLA Consulting Pty Ltd.<br />
      Please see our 
      <a href="legal.php">legal information page</a>.</p>
    </footer>
    <?php
  }
}
?>

