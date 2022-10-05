<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Users</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <link rel="stylesheet" href="./styles/style.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body onload="loadImage()">
  <section class="usersPage">
    <!-- Side Bar -->
    <section class="usersPageSideBar">
      <h1>
        <img src="./images/Logo2.png" alt="" width="80%" />
      </h1>

      <section class="sideBarListContainer">
        <div class="pageSelectors" onclick="pageSelector(0)">
          <i class="fa-solid fa-circle selectedSideBarCirclePointer"></i>
          <section>
            <i class="fa-solid fa-users"></i>
          </section>
          <p>Users</p>
        </div>
        <div class="pageSelectors" onclick="pageSelector(1)">
          <i class="fa-solid fa-circle selectedSideBarCirclePointer"></i>
          <section>
            <i class="fa-solid fa-truck-fast"></i>
          </section>
          <p>Tankers</p>
        </div>
        <div class="pageSelectors" onclick="pageSelector(2)">
          <i class="fa-solid fa-circle selectedSideBarCirclePointer"></i>
          <section>
            <i class="fa-solid fa-coins"></i>
          </section>
          <p>Maintenance</p>
        </div>
        <div class="pageSelectors" onclick="pageSelector(3)">
          <i class="fa-solid fa-circle selectedSideBarCirclePointer"></i>
          <section>
            <i class="fa-solid fa-chart-simple"></i>
          </section>
          <p>Logs</p>
        </div>
        <div class="pageSelectors" onclick="pageSelector(4)">
          <i class="fa-solid fa-circle selectedSideBarCirclePointer"></i>
          <section>
            <i class="fa-solid fa-chart-pie"></i>
          </section>
          <p>Summary</p>
        </div>
      </section>
    </section>
    <section class="usersPageMainPanel">
      <!-- <section class="topHeaderSection">
          <div class="adminLoginProfileDiv">
            <div class="profilePicIconDiv">
              <i class="fa-solid fa-user"></i>
            </div>
            <h3>Yousuf Islam Rathore</h3>
            <div>
              <i class="fa-solid fa-chevron-down"></i>
            </div>
          </div>
        </section> -->

      <section class="usersBodySection">
        <div>
          <!-- <h1>All Registered Users</h1> -->

          <!-- <section class="usersFancyDisplaySection1">
              <div>
                <h1>746</h1>
                <h2 style="color: #186eb1">All Users</h2>
              </div>
              <div>
                <h1>740</h1>
                <h2 style="color: #61b95b">Active Users</h2>
              </div>
              <div>
                <h1>6</h1>
                <h2 style="color: #fcc910">Requested Users</h2>
              </div>
              <div>
                <h1>1</h1>
                <h2 style="color: #ee405e">Block Users</h2>
              </div>
            </section> -->

          <!-- <section class="usersFancyDisplaySection1">
              <div>
                <section>
                  <div style="background-color: #186eb1">
                    <i class="fa-solid fa-users"></i>
                  </div>
                  <h1>746</h1>
                </section>
                <h2 style="color: #186eb1">All Users</h2>
              </div>
              <div>
                <section>
                  <div style="background-color: #61b95b">
                    <i class="fa-solid fa-check"></i>
                  </div>
                  <h1>740</h1>
                </section>
                <h2 style="color: #61b95b">Active Users</h2>
              </div>
              <div>
                <section>
                  <div style="background-color: #fcc910">
                    <i class="fa-solid fa-exclamation"></i>
                  </div>
                  <h1>6</h1>
                </section>
                <h2 style="color: #fcc910">Requested Users</h2>
              </div>
              <div>
                <section>
                  <div style="background-color: #ee405e">
                    <i class="fa-solid fa-ban"></i>
                  </div>
                  <h1>1</h1>
                </section>
                <h2 style="color: #ee405e">Block Users</h2>
              </div>
            </section> -->

          <!-- <section class="usersFancyDisplaySection1" id="userSelection">
              <div class="selectedUserSection" onclick="selectedUserSection(0)">
                <div style="background-color: #186eb1;" >
                  <i class="fa-solid fa-users"></i>
                </div>
                <section>
                  <h1>746</h1>
                  <h2>All Users</h2>
                </section>
                <main
                  class="containerUnderline"
                  style="border-color: #186eb1; background-color: #186eb1"
                ></main>
              </div>
              <div onclick="selectedUserSection(1)">
                <div style="background-color: #61b95b">
                  <i class="fa-solid fa-check"></i>
                </div>
                <section>
                  <h1>740</h1>
                  <h2 style="color: #61b95b">Active Users</h2>
                </section>
                <main
                  class="containerUnderline"
                  style="border-color: #61b95b; background-color: #61b95b"
                ></main>
              </div>
              <div onclick="selectedUserSection(2)">
                <div style="background-color: #fcc910">
                  <i class="fa-solid fa-exclamation"></i>
                </div>
                <section>
                  <h1>6</h1>
                  <h2 style="color: #fcc910">Requested Users</h2>
                </section>
                <main
                  class="containerUnderline"
                  style="border-color: #fcc910; background-color: #fcc910"
                ></main>
              </div>
              <div onclick="selectedUserSection(3)">
                <div style="background-color: #ee405e">
                  <i class="fa-solid fa-ban"></i>
                </div>
                <section>
                  <h1>1</h1>
                  <h2 style="color: #ee405e">Block Users</h2>
                </section>
                <main
                  class="containerUnderline"
                  style="border-color: #ee405e; background-color: #ee405e"
                ></main>
              </div>
            </section> -->
            <!-- all users -->
          <section class="usersFancyDisplaySection1" id="userSelection">
            <div class="selectedUserSection" onclick="selectedUserSection(0)" id="All-Users-Selector">
              <div style="background-color: white; color: #186eb1">
                <i class="fa-solid fa-users"></i>
              </div>
              <?php
                include 'connection.php';
              $query="SELECT * from users";
              $res=mysqli_query($con,$query);
              $count = mysqli_num_rows($res);
              $users="All user";
                  ?>
                  
              <section  onclick="window.location.href = 'users.php?users=<?php echo $users ?>'">
                
               
                <h1 name="alluser"><?php echo $count?></h1>
                <h2 name="alluser_hed">All Users</h2>
              

              </section>
              
            
              <!-- <main
                  class="containerUnderline"
                  style="border-color: #186eb1; background-color: #186eb1"
                ></main> -->
            </div>
            <!-- ALl Active users -->
            <div onclick="selectedUserSection(1)" id="Active-Users-Selector">
              <div style="background-color: white; color: #61b95b">
                <i class="fa-solid fa-check"></i>
              </div>
              <?php
                include 'connection.php';
              $query="SELECT * from users where is_active = 1 and is_block = 0";
              $res=mysqli_query($con,$query);
              $count = mysqli_num_rows($res);
              $users="Active user";
                  ?>
                <form action="users.php" method="GET">

              <section onclick="window.location.href = 'users.php?users=<?php echo $users ?>'">
                
                <h1 name="alluser"><?php echo $count?></h1>
                <h2 name="alluser_hed">Active Users</h2>
              </section>
              </form>
            
              <!-- <main
                  class="containerUnderline"
                  style="border-color: #61b95b; background-color: #61b95b"
                ></main> -->
            </div>


            <!-- Request users -->

            <div onclick="selectedUserSection(2)" id="Requested-Users-Selector">
              <div style="background-color: white; color: #fcc910">
                <i class="fa-solid fa-exclamation"></i>
              </div>
              <?php
                include 'connection.php';
              $query="SELECT * from users where is_active = 0 and is_block = 0";
              $res=mysqli_query($con,$query);
              $count = mysqli_num_rows($res);
              $users="Request user";
                  ?>
                   <form action="users.php" method="GET">
              <section onclick="window.location.href = 'users.php?users=<?php echo $users ?>'">

               
                <h1 name="alluser"><?php echo $count?></h1>
                <h2 name="alluser_hed">Request Users</h2>
              </section>
              </form>

             
              <!-- <main
                  class="containerUnderline"
                  style="border-color: #fcc910; background-color: #fcc910"
                ></main> -->
            </div>
            <div onclick="selectedUserSection(3)" id="Blocked-Users-Selector">
              <div style="background-color: white; color: #ee405e">
                <i class="fa-solid fa-ban"></i>
              </div>


              <!-- all block users -->
              <?php
                include 'connection.php';
              $query="SELECT * from users where  is_block = 1";
              $res=mysqli_query($con,$query);
              $count = mysqli_num_rows($res);
              $users="Block user";
                  ?>
                <form action="users.php" method="GET">

              <section onclick="window.location.href = 'users.php?users=<?php echo $users ?>'">
               
                <h1 name="alluser"><?php echo $count?></h1>
                <h2 name="alluser_hed">Block Users</h2>
              </section>
              </form>

              
              <!-- <main
                  class="containerUnderline"
                  style="border-color: #ee405e; background-color: #ee405e"
                ></main> -->
            </div>
          </section>

          <section class="presentationChartSection">
            <main>
              <div>
                <canvas id="lineChart"></canvas>
              </div>
            </main>

            <section>
              <section>
                <div class="ownerMainSection" onclick="selectedUserTypeSection(0)">
                  <!-- /// Circle Div /// -->
                  <?php $owner="owner";?>
                  <div class="skill" onclick="window.location.href = 'users.php?users=<?php echo $_GET['users'] ?>&owner=<?php echo $owner?>'">
                    <div class="outer">
                      <div class="inner">
                        <div id="ownerCount">65%</div>
                      </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="110px" height="110px">
                      <defs>
                        <linearGradient id="GradientColor">
                          <stop offset="0%" stop-color="#e91e63" />
                          <stop offset="100%" stop-color="#673ab7" />
                        </linearGradient>
                      </defs>
                      <circle cx="55" cy="55" r="45" stroke-linecap="round" />
                    </svg>
                  </div>

                  <!-- /// Name Below Circle /// -->
                  <div class="userTypeHeadingDiv">
                    <h1 id="ownerH1">Owners</h1>
                  </div>
                </div>
              </section>
              <section>
                <div class="tenantMainSection" onclick="selectedUserTypeSection(1)">
                  <?php $tenant="tenant";?>
                  <div class="skill" onclick="window.location.href = 'users.php?users=<?php echo $_GET['users']?>&owner=<?php echo $tenant?>'">
                    <div class="outer">
                      <div class="inner">
                        <div id="tenantCount">35%</div>
                      </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="110px" height="110px">
                      <defs>
                        <linearGradient id="GradientColor">
                          <stop offset="0%" stop-color="#e91e63" />
                          <stop offset="100%" stop-color="#673ab7" />
                        </linearGradient>
                      </defs>
                      <circle cx="55" cy="55" r="45" stroke-linecap="round" />
                    </svg>
                  </div>
                  <div class="userTypeHeadingDiv">
                    <h1 id="tenantH1">Tenants</h1>
                  </div>
                </div>
              </section>
            </section>
          </section>

          <section class="usersMainListingSection">
            <section class="usersSearchSection">
              <section class="userSearchSectionFirstSection">
                 <?php
                 if( isset($_GET['users']) && $_GET['users'] == 'All user' && !isset($_GET['owner'])){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  All Users
                </h2>
                  <?php
                 }
                  else if(isset($_GET['users']) && $_GET['users'] == 'Active user' && !isset($_GET['owner'])){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  Active Users
                </h2>
                  <?php
                 }
                 else if(isset($_GET['users']) && $_GET['users'] == 'Request user' && !isset($_GET['owner'])){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  Requested Users
                </h2>
                  <?php
                 }
                   else if(isset($_GET['users']) && $_GET['users'] == 'Block user' && !isset($_GET['owner'])){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  Blocked Users
                </h2>
                  <?php
                 }
                 if(isset($_GET['owner'])){

                   if(isset($_GET['users']) && $_GET['users'] == 'All user' && $_GET['owner'] == 'owner' ){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  All Users - Owner
                </h2>
                  <?php
                 }
                  else if(isset($_GET['users']) && $_GET['users'] == 'Active user'  && $_GET['owner'] == 'owner' ){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  Active Users - Owner
                </h2>
                  <?php
                 }
                  else if(isset($_GET['users']) && $_GET['users'] == 'Block user'  && $_GET['owner'] == 'owner' ){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  Blocked Users - Owner
                </h2>
                  <?php
                 }
                  else if(isset($_GET['users']) && $_GET['users'] == 'Request user' && $_GET['owner'] == 'owner' ){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  Requested Users - Owner
                </h2>
                  <?php
                 }
                 else if(isset($_GET['users']) && $_GET['users'] == 'All user'  && $_GET['owner'] == 'tenant' ){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  All Users - Tenant
                </h2>
                  <?php
                 }
                  else if(isset($_GET['users']) && $_GET['users'] == 'Active user'  && $_GET['owner'] == 'tenant' ){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  Active Users - Tenant
                </h2>
                  <?php
                 }
                  else if(isset($_GET['users']) && $_GET['users'] == 'Request user'  && $_GET['owner'] == 'tenant' ){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  Requested Users - Tenant
                </h2>
                  <?php
                 }
                  else if(isset($_GET['users']) && $_GET['users'] == 'Block user' && $_GET['owner'] == 'tenant' ){
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  Blocked Users - Tenant
                </h2>
                  <?php
                 }
                 }
                
                 
                  
                   else if(!isset($_GET['users']) && !isset($_GET['owner']) ) {
                  ?>
                  <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  All Users
                </h2>
                  <?php
                 }
                 ?>

                
                <!-- <main class="ownerTenantMainContainer" id="ownerAndTenant">
                    <div
                      class="ownerMainSection"
                      onclick="selectedUserTypeSection(0)"
                    >
                      <div class="skill">
                        <div class="outer">
                          <div class="inner">
                            <div id="ownerCount">65%</div>
                          </div>
                        </div>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          version="1.1"
                          width="90px"
                          height="90px"
                        >
                          <defs>
                            <linearGradient id="GradientColor">
                              <stop offset="0%" stop-color="#e91e63" />
                              <stop offset="100%" stop-color="#673ab7" />
                            </linearGradient>
                          </defs>
                          <circle
                            cx="45"
                            cy="45"
                            r="40"
                            stroke-linecap="butt"
                          />
                        </svg>
                      </div>
                      <div class="userTypeHeadingDiv">
                        <h1 id="ownerH1">Owners</h1>
                      </div>
                    </div>

                    <div
                      class="tenantMainSection"
                      onclick="selectedUserTypeSection(1)"
                    >
                      <div class="skill">
                        <div class="outer">
                          <div class="inner">
                            <div id="tenantCount">35%</div>
                          </div>
                        </div>
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          version="1.1"
                          width="90px"
                          height="90px"
                        >
                          <defs>
                            <linearGradient id="GradientColor">
                              <stop offset="0%" stop-color="#e91e63" />
                              <stop offset="100%" stop-color="#673ab7" />
                            </linearGradient>
                          </defs>
                          <circle
                            cx="45"
                            cy="45"
                            r="40"
                            stroke-linecap="round"
                          />
                        </svg>
                      </div>
                      <div class="userTypeHeadingDiv">
                        <h1 id="tenantH1">Tenants</h1>
                      </div>
                    </div>
                  </main> -->
              </section>
              <section class="searchSectionContainer">
                <div class="searchBarContainer">
                  <div>Search User</div>
                  <section><input type="search" /></section>
                </div>
                <div>
                  <select name="userType" id="" class="userTypeDropDown">
                    <option value="Select" disabled selected>
                      Select
                    </option>
                    <option value="All">All</option>
                    <option value="Owner">Owner</option>
                    <option value="Tenant">Tenant</option>
                  </select>
                </div>
                <div>
                  <input type="date" name="date" id="" class="userTypeDropDown dateSearchField"> 
                </div>
                <!-- <div>
                    <select name="userType" id="" class="userTypeDropDown">
                      <option value="Select" disabled selected>
                        Select User Type
                      </option>
                      <option value="All">All</option>
                      <option value="Owner">Owner</option>
                      <option value="Tenant">Tenant</option>
                    </select>
                  </div> -->
                <div><button style="margin-right: 10px">Search</button></div>
                <div><button class="importData">Import Data</button></div>
              </section>
            </section>

            <section class="usersListSection">
              <table>
                <thead>
                  <tr>
                    <th class="firstCell">Unit no.</th>
                    <th>Full Name</th>
                    <th>CNIC</th>
                    <th>Contact</th>
                    <th>User Type</th>
                    <th class="lastCell" s>Active Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // all users and owner not set in url
                  if(isset($_GET['users']) && $_GET['users'] == 'All user' && !isset($_GET['owner'])){
                    $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id  ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                      <?php
                      if($row['is_active']==1 && $row['is_block']==0  ){
                        ?>
                        <div class="active">Active</div>
                        <?php
                      }
                      else if($row['is_active']==0 && $row['is_block']==0){
                        ?>
                        <div class="requested">Request</div>
                        <?php
                      }
                      else {
                         ?>
                        <div class="blocked">Blocked</div>
                        <?php
                      }
                      ?>
                      
                    </td>
                  </tr>
                  <?php
                   }
                  }
                    // Active users  and owner not set in url
                 else if(isset($_GET['users']) && $_GET['users'] == 'Active user' && !isset($_GET['owner'])){
                    $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id where is_block= 0 and is_active = 1 ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);

                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                      <?php
                      if($row['is_active']==1 && $row['is_block']==0  ){
                        ?>
                        <div class="active">Active</div>
                        <?php
                      }
                   
                      else {
                         ?>
                        <div class="blocked">Blocked</div>
                        <?php
                      }
                      ?>
                      
                    </td>
                  </tr>
                  <?php
                   }
                  }


                  // request uses and owner not set in url
                   else if(isset($_GET['users']) && $_GET['users'] == 'Request user' && !isset($_GET['owner'])){
                    $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id where is_block= 0 and is_active = 0 ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                    
                        <div class="requested">Request</div>
                       
                        
                       
                      
                    </td>
                  </tr>
                  <?php
                   }
                  }

                  // block users and owner not set in url
                    else if(isset($_GET['users']) && $_GET['users'] == 'Block user' && !isset($_GET['owner'])){
                    $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id where is_block= 1  ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                    
                        <div class="blocked">Blocked</div>
                       
                        
                       
                      
                    </td>
                  </tr>
                  <?php
                   }
}
                                // checking set owner condition in url 

                   if(isset($_GET['owner']))
                   {
                          // set all owners either active or block
                   if(isset($_GET['users']) && $_GET['users'] == 'All user' && $_GET['owner'] == 'owner' ){
                  $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id where user_type ='owner'  ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);
                    
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                    
                         <?php
                      if($row['is_active']==1 && $row['is_block']==0  ){
                        ?>
                        <div class="active">Active</div>
                        <?php
                      }
                      else if($row['is_active']==0 && $row['is_block']==0){
                        ?>
                        <div class="requested">Request</div>
                        <?php
                      }
                      else {
                         ?>
                        <div class="blocked">Blocked</div>
                        <?php
                      }
                      ?>
                       
                        
                       
                      
                    </td>
                  </tr>
                  <?php
                 }}
                                // set user all active owner
                  else if(isset($_GET['users']) && $_GET['users'] == 'Active user'  && $_GET['owner'] == 'owner' ){
                   $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id where is_active= 1 and user_type = 'owner'  ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);
                    
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                    
                        <div class="active">Active</div>
                       
                        
                       
                      
                    </td>
                  </tr>
                  <?php
                 }}
                          // set user owner block
                  else if(isset($_GET['users']) && $_GET['users'] == 'Block user'  && $_GET['owner'] == 'owner' ){
                 $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id where is_block= 1 and user_type ='owner' ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                    
                        <div class="blocked">Blocked</div>
                       
                        
                       
                      
                    </td>
                  </tr>
                  <?php
                 }}
                                // set user owner request
                  else if(isset($_GET['users']) && $_GET['users'] == 'Request user' && $_GET['owner'] == 'owner' ){
                  $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id where is_block = 0 and is_active = 0 and user_type ='owner' ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                    
                        <div class="requested">Requested</div>
                       
                        
                       
                      
                    </td>
                  </tr>
                  <?php
                 }}
                            // set user all tenant either block or active
                 else if(isset($_GET['users']) && $_GET['users'] == 'All user'  && $_GET['owner'] == 'tenant' ){
                  $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id  where user_type ='tenant' ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);
                   
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                    
                       <?php
                      if($row['is_active']==1 && $row['is_block']==0  ){
                        ?>
                        <div class="active">Active</div>
                        <?php
                      }
                      else if($row['is_active']==0 && $row['is_block']==0){
                        ?>
                        <div class="requested">Request</div>
                        <?php
                      }
                      else {
                         ?>
                        <div class="blocked">Blocked</div>
                        <?php
                      }
                      ?>
                       
                        
                       
                      
                    </td>
                  </tr>
                  <?php
                 }}
                                      // set user active tenant
                  else if(isset($_GET['users']) && $_GET['users'] == 'Active user'  && $_GET['owner'] == 'tenant' ){
                  $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id  where user_type ='tenant' and is_active=1 ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);

                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                    
                        <div class="active">Active</div>
                       
                        
                       
                      
                    </td>
                  </tr>
                  <?php
                 }}

                                        // set user requested tenant
                  else if(isset($_GET['users']) && $_GET['users'] == 'Request user'  && $_GET['owner'] == 'tenant' ){
                  $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id  where user_type ='tenant' and is_active=0 and is_block=0 ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                    
                        <div class="requested">Requested</div>
                       
                        
                       
                      
                    </td>
                  </tr>
                  <?php
                 }}
                            // set user and blocked tenant
                  else if(isset($_GET['users']) && $_GET['users'] == 'Block user' && $_GET['owner'] == 'tenant' ){
                  $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id  where user_type ='tenant' and is_block=1 ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC ";
                    $res=mysqli_query($con,$query);
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                    
                        <div class="blocked">Blocked</div>
                       
                        
                       
                      
                    </td>
                  </tr>
                  <?php
                 }
                 }
               
                  }



                  else if(!isset($_GET['users']) && !isset($_GET['owner'])){
                    $query="SELECT 
                    users.id as user_id,
                     users.full_name as users_fullname,
                     users.user_type as user_type, 
                     users.owner_cnic as user_cnic,
                      users.tenant_cnic as user_tenetcnic,
                       users.unit_no as unit_no,
                       users.contact as contact,
                        users.address as user_address,
                         users.is_active as is_active,
                          users.is_block as is_block, 
                          users.password as password,
                          address.id as address_id,
                          address.address as address_address

                     from users join address on users.address = address.id  ORDER BY  
  SUBSTR(`address_address` FROM 1 FOR 1), 
  LPAD(lower(`address_address`), 10,0) ASC";
                    $res=mysqli_query($con,$query);
                   
                    while($row=mysqli_fetch_assoc($res)){
                  ?>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell"><?php echo $row['address_address']?></td>
                    <td><?php echo $row['users_fullname']?></td>
                    <td><?php echo $row['user_cnic']?></td>
                    <td><?php echo $row['contact']?></td>
                    <td class="ownerCell"><?php echo $row['user_type']?></td>
                    <td class="lastCell">
                      <?php
                      if($row['is_active']==1 && $row['is_block']==0  ){
                        ?>
                        <div class="active">Active</div>
                        <?php
                      }
                      else if($row['is_active']==0 && $row['is_block']==0){
                        ?>
                        <div class="requested">Request</div>
                        <?php
                      }
                      else {
                         ?>
                        <div class="blocked">Blocked</div>
                        <?php
                      }
                      ?>
                      
                    </td>
                  </tr>
                  <?php
                   }
                  }

                  
                  ?>
                
<script >
  function loadImage(){
    // console.log(window.location.href)
    let pageUrl = window.location.href
    let matchingUrl = pageUrl.slice(-10)
    // console.log(matchingUrl)
    if(matchingUrl == "/users.php") {
      window.location.assign("users.php?users='All user'")
    } else {
      return false
    }
  }
// loadImage();
</script>


                 <!--  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="ownerCell">Owner</td>
                    <td class="lastCell">
                      <div class="active">Active</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="tenantCell">Tenant</td>
                    <td class="lastCell">
                      <div class="blocked">Blocked</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="tenantCell">Tenant</td>
                    <td class="lastCell">
                      <div class="active">Active</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="ownerCell">Owner</td>
                    <td class="lastCell">
                      <div class="suspended">Suspended</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="ownerCell">Owner</td>
                    <td class="lastCell">
                      <div class="requested">Requested</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="tenantCell">Tenant</td>
                    <td class="lastCell">
                      <div class="active">Active</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="tenantCell">Tenant</td>
                    <td class="lastCell">
                      <div class="suspended">Suspended</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="ownerCell">Owner</td>
                    <td class="lastCell">
                      <div class="requested">Requested</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="ownerCell">Owner</td>
                    <td class="lastCell">
                      <div class="suspended">Suspended</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="ownerCell">Owner</td>
                    <td class="lastCell">
                      <div class="active">Active</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="tenantCell">Tenant</td>
                    <td class="lastCell">
                      <div class="blocked">Blocked</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="tenantCell">Tenant</td>
                    <td class="lastCell">
                      <div class="active">Active</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="ownerCell">Owner</td>
                    <td class="lastCell">
                      <div class="suspended">Suspended</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="ownerCell">Owner</td>
                    <td class="lastCell">
                      <div class="requested">Requested</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="tenantCell">Tenant</td>
                    <td class="lastCell">
                      <div class="active">Active</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="tenantCell">Tenant</td>
                    <td class="lastCell">
                      <div class="suspended">Suspended</div>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">A-01</td>
                    <td>Yousuf Islam</td>
                    <td>42201-2729672-7</td>
                    <td>03082028980</td>
                    <td class="ownerCell">Owner</td>
                    <td class="lastCell">
                      <div class="requested">Requested</div>
                    </td>
                  </tr> -->
                </tbody>
              </table>
            </section>
          </section>

          <!-- <main class="pieChartSection">
              <canvas id="myChart"></canvas>

              <h1>Number of Gallons Delievered</h1>
            </main> -->
          <!-- <section class="ownerTenantMainSection">
            <div>
              <section class="doughnutChartSection">
                <canvas id="myDoughnut"></canvas>
              </section>
              <h3>Owner</h3>
            </div>
          </section> -->

          <!-- <section class="ownerTenantMainSection">
              <div>
                <section class="doughnutChartSection">
                  <div class="skill">
                    <div class="outer">
                      <div class="inner">
                        <div id="number">65%</div>
                      </div>
                    </div>
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      version="1.1"
                      width="160px"
                      height="160px"
                    >
                      <defs>
                        <linearGradient id="GradientColor">
                          <stop offset="0%" stop-color="#e91e63" />
                          <stop offset="100%" stop-color="#673ab7" />
                        </linearGradient>
                      </defs>
                      <circle cx="80" cy="80" r="70" stroke-linecap="round" />
                    </svg>
                  </div>
                </section>
              </div>
            </section> -->
        </div>
      </section>
    </section>
  </section>

  <!-- /--- User Modal ---/ -->

  <section class="modal fade" id="userDetails">
    <div class="modal-dialog modal-xl">
      <div class="modal-content forBorderRadius">
        <section class="modal-body wholeModal">
          <section class="headingSection">
            <h1>
              User Details
              <img src="./images/users/detailing.png" alt="" width="28px" id="userDetailsImg" />
            </h1>
          </section>
          <section class="userDetailSection">
            <section>
              <div>
                <p>Full Name :</p>
                <input type="text" value="Yousuf Islam" class="editableFields" disabled />
              </div>
              <div>
                <p>Password :</p>
                <input type="password" value="yousuf123" class="editableFields" disabled />
                <div>
                  <i class="fa-solid fa-eye" onclick="showPassword(this)" style="color: #555; margin-left: -30px"></i>
                </div>
              </div>
            </section>
            <section>
              <div>
                <p>Unit No.</p>
                <input type="text" value="A-01" disabled />
              </div>
              <div>
                <p>Contact :</p>
                <input type="number" value="03082028980" class="editableFields" disabled />
              </div>
            </section>
            <section>
              <div>
                <p>User Type :</p>
                <input type="text" value="Owner" style="color: #186eb1" id="userTypeInputField" disabled />
              </div>
              <div>
                <p>Status :</p>
                <input type="text" value="Active" style="color: #61b95b" id="statusInputField" disabled />
              </div>
            </section>
            <section>
              <div>
                <p>Owner's CNIC :</p>
                <input type="text" value="42201-2729672-7" class="editableFields" disabled />
              </div>
              <div class="visibilityHidden" id="tenantDetail">
                <p>Tenant's CNIC :</p>
                <input type="text" value="" class="editableFields" disabled />
              </div>
            </section>
            <section>
              <div>
                <p>Created At :</p>
                <input type="text" value="09/19/2022" disabled />
              </div>
              <div>
                <p>Last Updated At :</p>
                <input type="text" value="09/23/2022" disabled />
              </div>
            </section>
            <section class="buttonSection2">
              <button class="btn" onclick="editBtnToggler(this)">
                <i class="fa-solid fa-pen-to-square"></i> EDIT DETAILS
              </button>
            </section>
          </section>

          <div class="actionsSection">
            <h2>Actions :</h2>

            <section>
              <p>Change Active Status :</p>
              <div>
                <button class="active" onclick="changeActiveStatus(this)">Active</button>
                <button class="changingBgBtn" 
                onclick="changeActiveStatus(this)">Suspended</button>
                <button class="changingBgBtn" 
                onclick="changeActiveStatus(this)">Blocked</button>
              </div>
            </section>

            <section>
              <p>Change User Type :</p>
              <div class="userTypeBtnDiv">
                <button class="ownerChangeBtn" 
                onclick="changeUserType(this); 
                ownerToTenantEffects(0)">Owner</button>
                <button class="changingBgBtn" 
                onclick="changeUserType(this); 
                ownerToTenantEffects(1)">Tenant</button>
              </div>
            </section>
          </div>

          <section class="buttonSection">
            <button class="btn UpdateBtn" onclick="updateTenantDetails()">
              Update
            </button>
          </section>
        </section>
      </div>
    </div>
  </section>
</body>

<script src="./scripts/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  /// Setup Block
  const labels = ["January", "February", "March", "April", "May", "June"];
  const data = {
    labels: labels,
    datasets: [
      {
        label: "My First dataset",
        backgroundColor: "rgb(24, 110, 190)",
        borderColor: "rgb(24, 110, 190)",
        data: [0, 10, 5, 2, 20, 30, 45],
        showLine: true,
      },
    ],
  };

  ///  Options Block
  const options = {
    scales: {
      x: {
        grid: {
          display: false,
        },
      },
      y: {
        grid: {
          display: false,
        },
      },
    },
  };

  /// Config Block
  const config = {
    type: "line",
    data,
    options,
  };

  /// Render Block
  const lineChart = new Chart(document.getElementById("lineChart"), config);
</script>
<!-- <script>
  const data = {
    labels: [
      'Red',
      'Blue',
      'Yellow'
    ],
    datasets: [{
      label: 'My First Dataset',
      data: [300, 50, 100],
      backgroundColor: [
        'rgb(255, 99, 132)',
        'rgb(54, 162, 235)',
        'rgb(255, 205, 86)'
      ],
      hoverOffset: 4
    }]
  };
  const options = {
  
  };
  const config = {
    type: 'doughnut',
    data,
    options,
  };
  const myDoughnut = new Chart(
    document.getElementById('myDoughnut'),
    config
  )
</script> -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
  integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</html>