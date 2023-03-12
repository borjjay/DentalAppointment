<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
     
         <link rel="stylesheet" href={{asset('./app.css')}}>
        <title>DentalAppointment</title>
    </head>
    <body>
       <div class='mainContainer'>
      <body>
          <nav class="sidebar close">
              <header>
                  <div class="image-text">
                      <span class="image">
                        
                      </span>
      
                      <div class="text logo-text">
                          <span class="name">DentalAppointment</span>
                          <span class="profession">Name</span>
                      </div>
                  </div>
      
                  <i class='bx bx-chevron-right toggle'></i>
              </header>
      
              <div class="menu-bar">
                  <div class="menu">
      
                      <li class="search-box">
                          <i class='bx bx-search icon'></i>
                          <input type="text" placeholder="Search...">
                      </li>
      
                      <ul class="menu-links">
                          <li class="nav-link">
                              <a href="#">
                                  <i class='bx bx-home-alt icon' ></i>
                                  <span class="text nav-text">Dashboard</span>
                              </a>
                          </li>
      
                          <li class="nav-link">
                              <a href="#">
                                  <i class='bx bx-bar-chart-alt-2 icon' ></i>
                                  <span class="text nav-text">Revenue</span>
                              </a>
                          </li>
      
                          <li class="nav-link">
                              <a href="#">
                                  <i class='bx bx-bell icon'></i>
                                  <span class="text nav-text">Notifications</span>
                              </a>
                          </li>
      
                          <li class="nav-link">
                              <a href="#">
                                  <i class='bx bx-pie-chart-alt icon' ></i>
                                  <span class="text nav-text">Analytics</span>
                              </a>
                          </li>
      
                          <li class="nav-link">
                              <a href="#">
                                  <i class='bx bx-heart icon' ></i>
                                  <span class="text nav-text">Likes</span>
                              </a>
                          </li>
      
                          <li class="nav-link">
                              <a href="#">
                                  <i class='bx bx-wallet icon' ></i>
                                  <span class="text nav-text">Wallets</span>
                              </a>
                          </li>
      
                      </ul>
                  </div>
      
                  <div class="bottom-content">
                      <li class="">
                          <a href="#">
                              <i class='bx bx-log-out icon' ></i>
                              <span class="text nav-text">Logout</span>
                          </a>
                      </li>
      
                      <li class="mode">
                          <div class="sun-moon">
                              <i class='bx bx-moon icon moon'></i>
                              <i class='bx bx-sun icon sun'></i>
                          </div>
                          <span class="mode-text text">Dark mode</span>
      
                          <div class="toggle-switch">
                              <span class="switch"></span>
                          </div>
                      </li>
                      
                  </div>
              </div>
      
          </nav>
      
          <section class="home">
              <div class="text">Home</div>
          </section>
      
          <script>
            const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");
      
      
      toggle.addEventListener("click" , () =>{
          sidebar.classList.toggle("close");
      })
      
      searchBtn.addEventListener("click" , () =>{
          sidebar.classList.remove("close");
      })
      
      modeSwitch.addEventListener("click" , () =>{
          body.classList.toggle("dark");
          
          if(body.classList.contains("dark")){
              modeText.innerText = "Light mode";
          }else{
              modeText.innerText = "Dark mode";
              
          }
      });
          </script>
      
      </body>
      </html>
      
       
       </div>

       @yield('content')
   
    </body>



    <script type="module" src={{asset("./main.js")}}></script>
</html>
