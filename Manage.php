<?php


include('session.php');

if(!isset($_SESSION['login_user'])){
header("location: index.php"); // Redirecting To Home Page
}
?>


<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="scroll.css">
 <link rel="stylesheet" type="text/css" href="hor_scroll.css">
 <link rel="stylesheet" type="text/css" href="border.css">

 <!-- Bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>

    <nav class="navbar  navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
        <div id="profile">
        <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
        <b id="logout"><a href="logout.php">Log Out</a></b>
       </div>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Trainings
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index1.php">Trainings List</a>
                <a class="dropdown-item" href="New_Training.php">New trainings</a>
               
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Meetings
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="Meeting_list.php">Meeting Lists</a>
                <a class="dropdown-item" href="Room_list.php">Room list</a>
                <a class="dropdown-item" href="Schedule_New.php">Schedule</a>
                <a class="dropdown-item" href="Manage.php">Manage</a>
              </div>
            </li>
         
      
      
      
          </ul>
           <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-right: 80px">User</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
                <a class="dropdown-item" href="#">Admin</a>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
          </ul>
        
        </div>
        </div>
      </nav>

  <header>

    <div class="container">

      <form>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label"><h3>Manage Room</h3></label>
          <div class="col-sm-10 text-right">
            <button class="btn btn-primary">New</button>
          </div>
        </div>

      </form>

    </div>










  </div>
  <div class="container" id="main">
   &nbsp;
   <h4>Room List<h4>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">
              <div class="row">
              <div class="col-sm-12 text-center">Actions</div>
              </div>
            </th>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row"><a href="#">Room 1</a></th>
          <td>
           <div class="col-sm-12 text-center">
        <button class="btn btn-success btn-sm">Edit</button>
        <button class="btn btn-primary btn-sm">Delete</button>
           </div>

          </td>
        </tr>
        <tr>
          <th scope="row"><a href="#">Room 2</a></th>
          <td>
            <div class="col-sm-12 text-center">
        <button class="btn btn-success btn-sm">Edit</button>
        <button class="btn btn-primary btn-sm">Delete</button>
           </div>
          </td>
        </tr>
        <tr>
          <th scope="row"><a href="#">Room 3</a></th>
          <td>
           <div class="col-sm-12 text-center">
        <button class="btn btn-success btn-sm">Edit</button>
        <button class="btn btn-primary btn-sm">Delete</button>
           </div>
          </td>
        </tr>


      </tbody>
    </table>
  </div>
</header>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>


</body>



</html>