<?php include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UrbanNest - Agents List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="agentStyle.css">
</head>

<body>

  
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <a class="navbar-brand" href="#">UrbanNest</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <input type="text" class="form-control" placeholder="Search by Location">
            </li>
            <li class="nav-item">
              <input type="text" class="form-control" placeholder="Search by Name">
            </li>
            <li class="nav-item">
              <select class="form-control">
                <option value="" selected disabled>Select Speciality</option>
                <option value="speciality1">dummy speciality</option>
                <option value="speciality2">dummy speciality2</option>
                
              </select>
            </li>
            <li class="nav-item">
              <select class="form-control">
                <option value="" selected disabled>Select Language</option>
                <option value="language1">Bangla</option>
                <option value="language2">English</option>
                
              </select>
            </li>
          </ul>
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </div>
      </nav>
      

  
  <div class="container mt-4">
    <div class="row">
      
      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent1.jpg" alt="Agent 1" class="img-fluid">
          <h4>Name 1</h4>
          <p>Phone: 123-456-7890</p>
          <p>Rating: 4.5</p>
          <p>Review: Excellent service!</p>
        </div>
      </div>

      
      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="agent-card">
          <img src="agent2.jpg" alt="Agent 2" class="img-fluid">
          <h4>Name 2</h4>
          <p>Phone: 987-654-3210</p>
          <p>Rating: 4.2</p>
          <p>Review: Knowledgeable and helpful.</p>
        </div>
      </div>



      

    </div>
  </div>

  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
