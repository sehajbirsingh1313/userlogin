<!DOCTYPE html>
<html lang="en">
<head>
  <style>

  body,html{
    min-height: 100%;
}
body{

    background-image: url("crate.jpg");
	background-color: blueviolet;
    background-repeat: no-repeat;
    background-size: cover;      
}
.heading{
    width: 100%;
    max-width: 960px;
    font-size: 100px;
    font-weight: bolder;
    color: rgb(0, 0, 0);
    font-family:fantasy; 
    font-family: 'Tangerine', serif;
    font-size: 200px;
    text-shadow: 4px 4px 4px rgba(255, 196, 0, 0.804); 
    margin: 40px auto;
    text-align: center;


}

#custom-button {
    padding: 10px;
    color: yellow;
    background-color: black;
    border: 1 px black;
    border-radius: 35px;
    cursor: pointer;
    font-size: 25px;
    margin-left: 100px;
}

#custom-text{
    font-size: 25px;
    margin-left: 10px;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: black
}

#upload{
    padding: 10px;
    color: yellow;
    background-color: black;
    border: 1 px black;
    border-radius: 35px;
    cursor: pointer;
    font-size: 25px;
    margin-left: 80px;

}
#title{
    padding: 12px;
    color: yellow;
    background-color: black;
    border: 1 px black;
    border-radius: 35px;
    cursor: pointer;
    font-size: 25px;
    margin-left: 45px;
    padding-left: 55px;
    text-align: center;
    padding-right: 55px;

}
#box{
    margin: 15px;
    padding: 3px;
    background-color: rgb(234, 255, 0);
}

    </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href="css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine&effect=fire-animation">

    <title>Document</title>

</head>
<body>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <h1 class="heading">Treasure Crate</h1>

    <!-- <h1 class="heading">Treasure Crate</h1> -->

      <nav class="navbar navbar-dark text-bg-dark fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Treasure Crate</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Mini Project Synopsis.txt">About</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Topic
                  </a>
                  <ul class="dropdown-menu dropdown-menu-dark">
                    <li><a class="dropdown-item" href="#">Photos</a></li>
                    <li><a class="dropdown-item" href="#">Videos</a></li>
                    <li><a class="dropdown-item" href="#">Articles</a></li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">View All</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Contact Us</a>
                </li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-success" type="submit">Search</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
      

      <div>
        <form action = "tc_upload.php" method = "POST" enctype ="multipart/form-data">
          <label id = "title">Title</label><input type = "text" name = "title" id = "box" >
          <input type = "file" id = "real-file" hidden = "hidden" name = "file">
          <button type = "button" id = "custom-button">Choose a file</button>
          <span id = "custom-text">No file choosen, yet</span>
          <button type = "submit" name = "submit" id = "upload">Upload</button>
        </form>

      
    <script type="text/javascript">
        const realFileBtn = document.getElementById("real-file");
        const customBtn = document.getElementById("custom-button");
        const customTxt = document.getElementById("custom-text");

        customBtn.addEventListener("click", function(){
        realFileBtn.click();
        });

        realFileBtn.addEventListener("change",function(){
          if(realFileBtn.value){
            customTxt.innerHTML = realFileBtn.value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1];
          }else{
            customTxt.innerHTML = "No file choosen, yet";
          }
        });
    </script>
      </div>
</body>