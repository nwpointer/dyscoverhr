<?php 
function activeClass($page){
  $actual_link = "$_SERVER[REQUEST_URI]";
  $actual_link = explode('/', $actual_link);
  if($actual_link[1] == $page){
    echo('class="active"');
  }
}
?>

<nav class="nav-primary hidden-xs">
  <!-- <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm">Start</div> -->
  <ul class="nav nav-main" data-ride="collapse">
    <li <?php activeClass(''); ?>>
      <a href="/" class="auto">
        <i class="i i-statistics icon">
        </i>
        <span class="font-bold">Overview</span>
      </a>
    </li>
    <li <?php activeClass('employees'); ?> >
      <span class="pull-right text-muted add">
        <i class="fa fa-plus"></i>
      </span>
      <a href="#" class="auto">
        

        
        <i class="fa fa-users"></i>

        </i>
        <span class="font-bold">Employees</span>
      </a>
      <ul class="nav dk">
        <li>
          <a href="/employees/directory.php" class="auto">                                                        
            <i class="i i-dot"></i>
            <span>Directory <b class="badge bg-danger pull-right">4</b></span>
          </a>
        </li>
        <li>
          <a href="/employees/locations.php" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Locations</span>
          </a>
        </li>
        <li>
          <a href="/employees/groups.php" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Work groups</span>
          </a>
        </li>
      </ul>
    </li>
    <li <?php activeClass('jobs'); ?>>
      <span class="pull-right text-muted add" onclick="window.location.href = '/jobs/new.php';">
        <i class="fa fa-plus"></i>
      </span>
      <a href="/jobs/jobs.php" class="auto">
        <i class="i i-grid2 icon"></i>
        <span class="font-bold">Job Listings</span>
      </a>
    </li>
    <li>
      <a href="#" class="auto">
        <i class="i i-docs icon">
        </i>
        <span class="font-bold">HR tools</span>
      </a>
      <ul class="nav dk">
        <li>
          <a href="profile.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Profile</span>
          </a>
        </li>
        <li>
          <a href="profile-2.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Profile 2</span>
          </a>
        </li>
        <li>
          <a href="search.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Search</span>
          </a>
        </li>
        <li>
          <a href="invoice.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Invoice</span>
          </a>
        </li>
        <li>
          <a href="intro.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Intro</span>
          </a>
        </li>
        <li>
          <a href="master.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Master</span>
          </a>
        </li>
        <li>
          <a href="gmap.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Google Map</span>
          </a>
        </li>
        <li>
          <a href="jvectormap.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Vector Map</span>
          </a>
        </li>
        <li>
          <a href="signin.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Signin</span>
          </a>
        </li>
        <li>
          <a href="signup.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>Signup</span>
          </a>
        </li>
        <li>
          <a href="404.html" class="auto">                                                        
            <i class="i i-dot"></i>

            <span>404</span>
          </a>
        </li>
      </ul>
    </li>
    <li>
      <a href="http://www.google.com" class="auto">
        <i class="i i-lab icon"></i>
        <span class="font-bold">Marketing tools</span>
      </a>
    </li>
  </ul>
  <div class="line dk hidden-nav-xs"></div>

  <!-- <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm"> 
  Lables</div>
   <ul class="nav">
    <li>
      <a href="http://www.google.com">
        <i class="i i-circle-sm text-info-dk"></i>
        <span>Work space</span>

      </a>
    </li>
    <li>
      <a href="mail.html#social">
        <i class="i i-circle-sm text-success-dk"></i>
        <span>Connection</span>
      </a>
    </li>
    <li>
      <a href="mail.html#projects">
        <i class="i i-circle-sm text-danger-dk"></i>
        <span>Projects</span>
      </a>
    </li>
  </ul>
  <div class="text-muted text-xs hidden-nav-xs padder m-t-sm m-b-sm">Circles</div>
  <ul class="nav">
    <li>
      <a href="#">
        <i class="i i-circle-sm-o text-success-lt"></i>
        <span>College</span>
      </a>
    </li>
    <li>
      <a href="#">
        <i class="i i-circle-sm-o text-warning"></i>
        <span>Social</span>
      </a>
    </li>
  </ul> 
  -->
</nav>
<!-- / nav -->