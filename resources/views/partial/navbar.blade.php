 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
     <!-- Left navbar links -->
     <ul class="navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
         </li>
     </ul>

     <!-- Right navbar links -->
     <ul class="ml-auto navbar-nav">
         <li class="nav-item">
             <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                 <i class="fas fa-expand-arrows-alt"></i>
             </a>
         </li>
         <li class="nav-item">
             <form action="/logout" method="post">
                 @csrf
                 <button type="submit"
                     class="text-lg d-flex align-items-center nav-link btn btn-link">@include('partial.icons.logout')
                     Logout</button>
             </form>
         </li>
     </ul>
 </nav>
 <!-- /.navbar -->
