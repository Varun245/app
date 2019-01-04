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
    <div class="container" id="main">
     &nbsp;
     <h4>Meeting List<h4>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">Project</th>
            <th scope="col">Room</th>
            <th scope="col">Owner</th>
            <th scope="col">Attendees</th>
            <th scope="col">Date</th>
            <th scope="col">Start Time</th>
            <th scope="col">End Time</th>
            <th scope="col">
              <div class="row">
                <div class="col-sm-12 text-center">Actions </div>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><a href="Meeting_details.php">EE Training</a></th>
            <td><a href="#">Room 3</a></td>
            <td>John Miller</a></td>
            <td>
              <select class="mdb-select md-form colorful-select dropdown-primary form-control" multiple searchable="Search here..">
                <option value="" disabled selected>View Attendees</option>
                <option value="1">John Miller</option>
                <option value="2">Andrew Johnson</option>
                <option value="3">Mike Thompson</option>
                <option value="4">Paul Johson</option>
                <option value="5">Wayne Miller</option>
                <option value="1">John Miller</option>
                <option value="2">Andrew Johnson</option>
                <option value="3">Mike Thompson</option>
                <option value="4">Paul Johson</option>
                <option value="5">Wayne Miller</option>
              </select>
            </div>
          </td>
          <td scope="row">22-08-2018</a></td>
          <td scope="row">12.00 PM</a></td>
          <td scope="row">1.00 AM</a></td>
          <td>
           <div class="row">
             <div class="col-sm-12 text-center">
               <button class="btn btn-success btn-sm">Edit</button>
               <button class="btn btn-danger btn-sm">Cancel</button>
             </div>
           </td>
         </tr>
         <tr>
           <tr>
            <th scope="row"><a href="#">EE Training</a></th>
            <td><a href="#">Room 3</a></td>
            <td>John Miller</a></td>
            <td>
              <select class="mdb-select md-form colorful-select dropdown-primary form-control" multiple searchable="Search here..">
                <option value="" disabled selected>View Attendees</option>
                <option value="1">John Miller</option>
                <option value="2">Andrew Johnson</option>
                <option value="3">Mike Thompson</option>
                <option value="4">Paul Johson</option>
                <option value="5">Wayne Miller</option>
                <option value="1">John Miller</option>
                <option value="2">Andrew Johnson</option>
                <option value="3">Mike Thompson</option>
                <option value="4">Paul Johson</option>
                <option value="5">Wayne Miller</option>
              </select>
            </td>
            <td scope="row">22-08-2018</a></td>
            <td scope="row">12.00 PM</a></td>
            <td scope="row">1.00 AM</a></td>
            <td>
              <div class="row">
               <div class="col-sm-12 text-center">
                 <button class="btn btn-success btn-sm">Edit</button>
                 <button class="btn btn-danger btn-sm">Cancel</button>
               </div>
               
             </td>
           </tr>
           <tr>
             <tr>
              <th scope="row"><a href="Meeting_details.php">EE Training</a></th>
              <td><a href="#">Room 3</a></td>
              <td>John Miller</td>
              <td>
                <select class="mdb-select md-form colorful-select dropdown-primary form-control" multiple searchable="Search here..">
                 <option value="" disabled selected>View Attendees</option>
                 <option value="1">John Miller</option>
                 <option value="2">Andrew Johnson</option>
                 <option value="3">Mike Thompson</option>
                 <option value="4">Paul Johson</option>
                 <option value="5">Wayne Miller</option>
                 <option value="1">John Miller</option>
                 <option value="2">Andrew Johnson</option>
                 <option value="3">Mike Thompson</option>
                 <option value="4">Paul Johson</option>
                 <option value="5">Wayne Miller</option>
               </select>
             </td>
             <td scope="row">22-08-2018</td>
             <td scope="row">12.00 PM</td>
             <td scope="row">1.00 AM</td>
             <td>
              <div class="row">
               <div class="col-sm-12 text-center">
                 <button class="btn btn-success btn-sm">Edit</button>
                 <button class="btn btn-danger btn-sm">Cancel</button>
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