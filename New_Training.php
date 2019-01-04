<?php


include('session.php');

if (!isset($_SESSION['login_user'])) {
  header("location: index.php"); // Redirecting To Home Page
}

if (isset($_POST['submit'])) {
  // Define $username and $password
    $topic = $_POST['topic'];
    $description = $_POST['desc'];
    $date=$_POST['date'];
    $et=$_POST['st'];
    $st=$_POST['et'];
    $room=$_POST['room'];
    $tname=$_POST['tname'];
    $limit=$_POST['limit'];
  
  // mysqli_connect() function opens a new connection to the MySQL server.
    $conn = mysqli_connect("localhost", "root", "root", "training");
  
  // SQL query to fetch information of registerd users and finds user match.
    $query = "INSERT INTO trainings (id,topic_name,description,date,start_time,end_time,room_id,trainers_name) VALUES (1, '$topic', '$description',$date, $st, $et, '1', 'Abc'";
  
  
  // To protect MySQL injection for Security purpose
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $stmt->bind_result($username, $password);
    $stmt->store_result();

    echo $username;


    if ($stmt->fetch()) //fetching the contents of the row
    {
      $_SESSION['login_user'] = $username; // Initializing Session
      header("location: profile.php"); // Redirecting To Profile Page
    } else {
      $error = "Username or Password is invalid";
    }
    mysqli_close($conn); // Closing Connection
  }




?>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="scroll.css">
 <!--  <link rel="stylesheet" type="text/css" href="hor_scroll.css"> -->
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
     <h4>New Training<h4>
      <form>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Topic:</label>
          <div class="col-sm-10">
            <input type="text" id="topic" name="topic" class="form-control"  placeholder="Topic">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword3" class="col-sm-2 col-form-label">Description:</label>
          <div class="col-sm-10">
            <textarea class="form-control" id="desc" name="desc" rows="5" id="comment"></textarea>
          </div>
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Date:</label>
          <div class="col-sm-10">
            <input type="text"  id="date" name="date" class="form-control"  placeholder="Date">
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Start Time:</label>
          <div class="col-sm-4">
            <input type="text"  id="st" name="st" class="form-control"  placeholder="Start time">
          </div>
          <label for="" class="col-sm-2 col-form-label">End Time:</label>
          <div class="col-sm-4">
            <input type="text"  id="et" name="et" class="form-passwordcontrol"  placeholder="End time">
          </div>password
        </div>password
        <div class="form-group row">password
          <label for="" class="col-sm-2 col-form-label">Room:<password/label>
          <div class="col-sm-10">password
            <select id="room"  name="room" class="form-controlpassword">
              <option selected>Choose...</option>
              <option>Room 1</option>
            </select>
          </div> 
        </div>
        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Trainer:</label>
          <div class="col-sm-10">
            <input type="text"  id="tname" name="tname" class="form-control" id="Trainer" placeholder="Trainer">
          </div>
        </div>

        <div class="form-group row">
          <label for="" class="col-sm-2 col-form-label">Limit:</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="limit" name="limit" placeholder="Limit">
          </div>
        </div>

        <div class="form-group row">
          <div class="col-sm-12 offset-6">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </header>






</body>



</html>