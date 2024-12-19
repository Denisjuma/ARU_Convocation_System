<!-- link to include every where -->
@include('admin/admin_link_component')

<!-- Navbar -->
<nav  class="main-header navbar navbar-expand navbar-white navbar-light "style = "position: fixed; top: 140px; display: inline-flex; padding: 0 20% 0 0; width: 100%;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a  href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a  href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  
  <div class="container" id = "top-header">
        <div class="row">
            <div class="col-md-2 col-sm-1 col-1">
                    <img class = "logo"  src="https://www.aru.ac.tz/site/images/emblem.png" height= "120" width = "120"alt="">
            </div>
            <div class="col-md-8 col-sm-9 col-9" >
                <h1 style = "text-align: center;margin-top: 27px;margin-left:23%; color: #225294; font-weight: 900">ARU CONVOCATION</h1>
                </div>
                <div class="col-md-2 col-sm-1 col-1" >
                <img src="https://www.aru.ac.tz/site/images/logo.jpg" alt="">
                </div>
        </div>
        </div>
        <br><br><br>




     <!--side bar inclussion   -->

     <!-- Main Sidebar Container -->
     <aside class="main-sidebar sidebar-dark-primary elevation-4 sidebar-bg top2-fixed ">

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="admin/images/profile vector.png" class="img-circle elevation-2" alt="User Image">
          </div> 
          <div class="info">
            <a href="" class="d-block">Admin</a>
            
          </div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul id = "spide-icon" class=" nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item has-treeview menu-open" >
              <a href="#" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Dashboard
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">

                <li class="nav-item" id = "sidebtn-hover">
                    <a href="a_home" class="nav-link">
                
                      <p>Home</p>
                    </a>
                  </li>
            
  
            <li class="nav-item" id = "sidebtn-hover">
              <a href="" class="nav-link">
          
                <p>News</p>
              </a>
            </li>
  
            <li class="nav-item" id = "sidebtn-hover">
              <a href="create_announc" class="nav-link">
          
                <p>New Announcement</p>
              </a>
            </li>
  
            <li class="nav-item" id = "sidebtn-hover">
              <a href=" create_event" class="nav-link">
          
                <p>New Event/News</p>
              </a>
            </li>
            
            <li class="nav-item" id = "sidebtn-hover">
              <a href="a_users" class="nav-link">
          
                <p>View Users</p>
              </a>
            </li>


            <li class="nav-item" id = "sidebtn-hover">
              <a href="a_Announcement_list" class="nav-link">
          
                <p>Announcements List</p>
              </a>
            </li>

                  <li class="nav-item" id = "sidebtn-hover">
              <a href="a_Events_list" class="nav-link">
          
                <p>Events/News List</p>
              </a>
            </li>
  
            <li class="nav-item" id = "sidebtn-hover">
              <a href="sign_out" class="nav-link">
          
                <p>Logout</p>
              </a>
            </li>
            
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>



   <!-- Admin dynamic content goes here -->
   <div class="content-wrapper">
   <table id="table" class="table table-striped table-hover">
    <thead>
      <tr>
        
        <th scope="col">Tittle</th>
        <th scope="col">url</th>
        <th scope="col">Created By</th>
        <th scope="col">Creation Date</th>
        <th scope="col">Action</th>
       
     
      </tr>
    </thead>

    <tbody>

      <tr>
        @foreach($announcement_list as $announcement)
   
        <td>{{$announcement->tittle}}</td>
        <td>{{$announcement->url}}</td>
        <td>{{$announcement->first_name}}</td>
        <td>{{$announcement->created_at}}</td>
       
        <td id="dbtn" >

       
      @if($announcement->announce_status == 0)
             <td>
                
            <a class="btn btn-warning" href={{"announc_publish/".$announcement->announce_id}} role="button">Publish</a>
            </td>
      @endif
        


   @if($announcement->announce_status == 1)
        <td>
        <a class="btn btn-success"  href={{"announc_unpublish/".$announcement->announce_id}} role="button">{{$announcement->announce_id}}Unpublish</a>
        </td>
  @endif
   
  
    <td>
        <a class="btn btn-primary" href={{"announc_update/".$announcement->announce_id}} role="button">Update</a>
    </td>

    <td>
        <a id="dbtn" class="btn btn-danger" href={{"annoumce_delete/".$announcement->announce_id}} role="button">Delete</a>
    </td>
    
    </td>
      </tr>
      @endforeach



 
    </tbody>
  </table>
<!--here for pagination -->
</div>

<style>
    .btn
   {
       border-radius: 2px;
       height: 30px;
   }
</style>


@if(session('announce_delete'))
<script type="text/javascript" >
    alert('Announcement Deleted ');
</script>
@endif

@if(session('announce_un_publish'))
<script type="text/javascript" >
    alert('Announcement Hve Been Unpublished');
</script>
@endif

@if(session('announce_publish'))
<script type="text/javascript" >
    alert('Announcement Published');
</script>
@endif

@if(session('announc_update'))
<script type="text/javascript" >
    alert('Announcement Updated Successfully');
</script>
@endif


  <!--   Admin dynamic content end  here -->
  

  <!-- footer goes here-->
