<!DOCTYPE html>
<html>
<head>
<title>
Welcome To CMS System  
</title>
<link rel="stylesheet" type="text/css" href="{{asset('Assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Assets/Icons/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('Assets/css/mystyle.css')}}">

<script type="text/javascript" src="{{asset('Assets/js/JQuery.js')}}"></script>
<script type="text/javascript" src="{{asset('Assets/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Assets/js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Assets/Icons/js/all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Assets/mce.js')}}"></script>
<script type="text/javascript" src="{{asset('Assets/MCE/jquery.tinymce.min.js')}}"></script>
<script type="text/javascript" src="{{asset('Assets/MCE/tinymce.min.js')}}"></script>
<script>
tinymce.init({
selector: 'textarea#editor',
height: 300,
}); 
</script>
<!-- Favicons -->
<style>
.container-fluid
{
margin-top:40px;
}
@media(max-width:400px)
{
.container-fluid
{
margin-top:100px;
} 
}
</style>
<!-- Custom styles for this template -->
</head>
<body>
<nav class="navbar fixed-top flex-md-nowrap p-0 shadow">
<a class="navbar-brand col-sm-3 col-md-2 mr-0 text-white" href="#">CMS System</a>
<input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
<ul class="navbar-nav px-3">
<li class="nav-item text-nowrap">
<a class="nav-link" href="#">Sign out</a>
</li>
</ul>
</nav>
<div class="container-fluid">
<div class="row">
<nav class="col-md-2 d-none d-md-block  sidebar" style="background:#004261;">
<div class="sidebar-sticky">
<ul class="nav flex-column">
<li class="nav-item">
<a class="nav-link active" href="">
  <span data-feather="home"></span>
  Dashboard <span class="sr-only">(current)</span>
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('User.index')}}">
  <span data-feather="file"></span>
  Users
</a>
</li>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('Profile.index')}}">
  <span data-feather="file"></span>
User Profile
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('Role.index')}}">
  <span data-feather="users"></span>
  Roles
</a>
</li>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('RoleUser.index')}}">
  <span data-feather="users"></span>
  User Role
</a>
</li>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('Catagory.index')}}">
  <span data-feather="layers"></span>
  Category
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{route('Post.index')}}">
  <span data-feather="shopping-cart"></span>
  Posts
</a>
</ul>
</div>
</nav>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<h1 class="h2">Dashboard</h1>
<div class="btn-toolbar mb-2 mb-md-0">
<div class="btn-group mr-2">
<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
</div>
<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
<span data-feather="calendar"></span>
This week
</button>
</div>
</div>
@yield('user_search')
@yield('user_create')
@yield('user_show')
@yield('user_edit')
@yield('role_search')
@yield('role_create')
@yield('role_show')
@yield('role_edit')
@yield('roleuser_search')
@yield('roleuser_create')
@yield('roleuser_show')
@yield('roleuser_edit')
@yield('catagory_search')
@yield('catagory_create')
@yield('catagory_show')
@yield('catagory_edit')
@yield('profile_search')
@yield('profile_create')
@yield('profile_show')
@yield('profile_edit')
@yield('post_search')
@yield('post_create')
@yield('post_show')
@yield('post_edit')
</main>
</div>
</div>
</html>
