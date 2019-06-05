    <nav class="navbar navbar-inverse nav-fixed-top" data-spy="affix" data-offset-top="197">
      <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
         <a class="navbar-brand" href="#">Distribution Core</a>
      </div>
     
      <div class="collapse navbar-collapse" id="Navbar">
          <ul class="nav navbar-nav">
        <li><a href="/index.php">Home</a></li>
          
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Reading Zone<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/eco/">Economics</a></li>
                <li><a href="/math/">Mathematics</a></li>
                <li><a href="/stat/">Statistics</a></li>
				<li><a href="/comp/">Computer and Security</a></li>
              </ul>
            </li>
		
  			<li><a href="/about.php">About Us</a></li>
          
            <li><a href="/privacypolicy.php">Privacy Policy</a></li>
        
          </ul>
         
          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="/report.php">Reporting System</a></li>
                <li><a href="/speedtest/">Speed Test</a></li>
              <!--  <li><a href="/networkmap.php">Internet Backbone</a></li> -->
               
              </ul>
            </li>
          <li>
              <a href="#"> IST :  
          <?php
                date_default_timezone_set('Asia/Kolkata');
                echo date('d-m-Y H:i');
          ?>
             </a>
         </li>

          </ul>
      </div>
      </div>
      
    </nav>