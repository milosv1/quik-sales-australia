<nav class=" navbar navbar-light bg-light" style="background-color: #e3f2fd;">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>                        
    </button>
    <a class="navbar-brand" href="#">Quik-Sales Australia</a>
    <form class="form-inline">
      <div class="form-group mx-2">
        <label for="make" class="mr-1">Make</label>
        <select class="form-control" id="make">
          <option>Make</option>
          <option>Toyota</option>
          <option>Hyundai</option>
        </select>
      </div>
      <div class="form-group mx-2">
        <label for="model" class="mr-1">Model</label>
        <select class="form-control" id="model" placeholder="Model">
          <option>Corolla</option>
          <option>Hilux</option>
        </select>
      </div>
      <div class="form-group mx-2">
        <label for ="location" class="mr-1">Location</label>
        <select class="form-control" id="location">
          <option>NSW</option>
          <option>Sydney</option>
          <option>ACT</option>
          <option>Canberra</option>
          <option>Queensland</option>
          <option>Brisbane</option>
        </select>
      </div>
      <div class="form-group mx-2">
        <label for="price" class="mr-1">price</label>
        <input class="form-control" name="price" id="price" type="number" min="500" step="1000"/>
      </div>
      <div class="form-group mx-2">
        <label for="type" class="mr-1">Body Type</label>
        <select class="form-control" id="type">
          <option>anybody type</option>
          <option>cab chassis</option>
          <option>Couple</option>
          <option>SUV</option>
          <option>Ute</option>
          <option>Van</option>
        </select>
      </div>
      <button type="Submit" class="btn btn-primary">Search</button>
    </form>
    <div class="d-flex flex-row user-nav">
     <a href="register.php" class="nav-link">Sign Up</a>
     <a href="login.php" class="nav-link">Login</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
  <!--  <li class="active"><a href="#">Home</a></li> -->
      </ul>
    </div>
</nav>

<script>
// Have on change lister (Jquery/html onchange) on select boxes/input
// Take value from select boxes/input and do AJAX get
// handle request in a php endpoint
// Return a response from php endpoint
// Handle responde on script tag (.success(function) ... )
// Populate select boxes with new information


  //fetchModel(event) {
    //var makeName = event.currentTarget.value; 
    
    
    //$.ajax() //Look up ajax get request
    // pass in makeName
    
    // fetch rows where make = 'makename'
    // .success(function(res) {
      // Insert new values as options into select box
    //})
    
  //}
</script>
