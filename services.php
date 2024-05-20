<?php
  require ("page.php");

  class ServicesPage extends Page
  {
    private $row2buttons = array(
        "Computer Information Systems - Home" => "https://www.edmonds.edu/programs-and-degrees/areas-of-study/information-technology/computer-information-systems/",

        "Computer Information Systems - Associate of Technical Arts Degree" => "https://catalog.edmonds.edu/preview_program.php?catoid=63&poid=16037",
        "Computer Information Systems - Information Security and Digital Forensics Associate of Technical Arts Degree" => "https://catalog.edmonds.edu/preview_program.php?catoid=63&poid=15843&returnto=18366",
        "Computer Information Systems - Network Technology Associate of Technical Arts Degree" => "https://catalog.edmonds.edu/preview_program.php?catoid=63&poid=16022&returnto=18366",
        "Computer Information Systems - Web Application and Cloud Developer Associate of Technical Arts Degree" => "https://catalog.edmonds.edu/preview_program.php?catoid=63&poid=16023&returnto=18366"
                           );

    public function Display()
    {
      echo "<html>\n<head>\n";
      $this->DisplayTitle();
      $this->DisplayKeywords();
      $this->DisplayStyles();
      echo "</head>\n<body>\n";
      $this->DisplayHeader();
      $this->DisplayMenu($this->buttons);
      $this->DisplayMenu($this->row2buttons);
      echo $this->content;
      $this->DisplayFooter();
      echo "</body>\n</html>\n";
    }
  }

  $services = new ServicesPage();

  $services -> content ="<p>At TLA Consulting, we offer a number
  of services.  Perhaps the productivity of your employees would
  improve if we re-engineered your business. Maybe all your business
  needs is a fresh mission statement, or a new batch of
  buzzwords.</p>";

  $services->Display();
?>
