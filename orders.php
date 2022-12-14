<?php

$dataPoints = array(
  array("label" => "Industrial", "y" => 51.7),
  array("label" => "Transportation", "y" => 26.6),
  array("label" => "Residential", "y" => 13.9),
  array("label" => "Commercial", "y" => 7.8)
)

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Orders</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
  <link rel="stylesheet" href="./styles/style.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
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
    <section class="usersPageMainPanel" id="orderPageMainPanel">
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
          <section class="usersFancyDisplaySection1 tankersFancyDisplaySection1" id="userSelection">
            <div class="selectedUserSection" onclick="selectedUserSection(0)" id="Today-Orders-Selector">
              <section>
                <h2>Today's Orders</h2>
                <h1>746</h1>
              </section>
            </div>
            <div onclick="selectedUserSection(1)" id="Weekly-Orders-Selector">
              <section>
                <h2>Weekly Orders</h2>
                <h1>740</h1>
              </section>
            </div>
            <div onclick="selectedUserSection(2)" id="Monthly-Orders-Selector">
              <section>
                <h2>Monthly Orders</h2>
                <h1>6</h1>
              </section>
            </div>
            <div onclick="selectedUserSection(3)" id="Yearly-Orders-Selector">
              <section>
                <h2>Yearly Orders</h2>
                <h1>1</h1>
              </section>
            </div>
          </section>

          <section class="presentationChartSection">
            <main>
              <div>
                <!-- <canvas id="pieChart"></canvas> -->

                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
              </div>
            </main>

            <div class="usersFancyDisplaySection1 tankersFancyDisplaySection1 tankersFancyDisplaySection2 tankersFancyDisplaySection3" id="userSelection">
              <div onclick="selectedOrderStatusSection(0)" id="Completed-Orders-Selector">
                <div style="background-color: white; color: #61b95b">
                  <i class="fa-solid fa-check"></i>
                </div>
                <section>
                  <h1>746</h1>
                  <h2>Completed Orders</h2>
                </section>
              </div>
              <div onclick="selectedOrderStatusSection(1)" id="Pending-Orders-Selector">
                <div style="background-color: white; color: #fcc910">
                  <i class="fa-solid fa-clock"></i>
                </div>
                <section>
                  <h1>740</h1>
                  <h2>Pending Orders</h2>
                </section>
              </div>
              <div onclick="selectedOrderStatusSections(2)" id="Failed-Orders-Selector">
                <div style="background-color: white; color: #ee405e">
                  <i class="fa-solid fa-exclamation"></i>
                </div>
                <section>
                  <h1>6</h1>
                  <h2>Failed Orders</h2>
                </section>
              </div>
              <div onclick="selectedOrderStatusSections(3)" id="Cancelled-Orders-Selector">
                <div style="background-color: white; color: #777">
                  <i class="fa-solid fa-ban"></i>
                </div>
                <section>
                  <h1>6</h1>
                  <h2>Cancelled Orders</h2>
                </section>
              </div>
            </div>

          </section>

          <section class="haltSection">

            <section class="tabSection">
              <div id="quotaTabSection">
                <section onclick="ordersTabSectionToggler(this)">Quota</section>
              </div>
              <div id="haltTabSection">
                <section onclick="ordersTabSectionToggler(this)">Halt</section>
              </div>
            </section>

            <div class="tabSectionHiddenBody" id="tabSectionBody">
              <section>
                <h1>Daily Quota Limit =</h1>
                <input type="text" value="120" disabled id="dailyQuotaInput" />
                <div>
                  <button onclick="dailyQuotaEditBtn(this)">EDIT</button>
                </div>
              </section>
            </div>

            <div class="tabSectionHiddenBody" id="tabSectionHaltBody">
              <section>
                <h1>Halt Service</h1>
                <i class="fa-solid fa-toggle-off" onclick="haltServiceToggler(this)"></i>
              </section>
            </div>
          </section>

          <section class="usersMainListingSection">
            <section class="usersSearchSection">
              <section class="userSearchSectionFirstSection">
                <h2 id="usersListMainHeading" onclick="usersListMainHeading()">
                  All Orders
                </h2>
                <div class="besideHeadingDiv">
                  <button onclick="multipleSelectionFunction(this)"><i class="fa-solid fa-bars"></i>Select Multiple</button>
                </div>
              </section>
              <section class="searchSectionContainer">
                <div class="searchBarContainer">
                  <div>Search Order</div>
                  <section><input type="search" /></section>
                </div>
                <div>
                  <select name="Date" id="" class="userTypeDropDown">
                    <option value="Select" disabled selected>Select</option>
                    <option value="ID">ID</option>
                    <option value="Name">Name</option>
                    <option value="TankerType">Tanker Type</option>
                    <option value="to">To</option>
                  </select>
                </div>
                <div>
                  <input type="date" name="date" id="" class="userTypeDropDown dateSearchField" />
                </div>
                <!-- <div><button style="margin-right: 10px">Search</button></div> -->
                <div><button class="importData">Import Data</button></div>
              </section>

              <div class="orderDiffCounterDiv">
                <p>Completed : <span>03</span></p>
                <p>Pending : <span>03</span></p>
                <p>Failed : <span>03</span></p>
                <p>Cancelled : <span>03</span></p>
              </div>

            </section>

            <section class="usersListSection tankersListSection">
              <table>
                <thead>
                  <tr>
                    <th class="firstCell">ID</th>
                    <th>User Name</th>
                    <!-- <th>CNIC</th> -->
                    <th>Tanker Type</th>
                    <th>To</th>
                    <th>Order Status</th>
                    <th class="lastCell">Created At</th>
                  </tr>
                </thead>
                <tbody id="orderTableBody">
                  <tr data-toggle="modal" data-target="#userDetails">
                    <!-- <td style="width: 40px; position: absolute;">
                      </td> -->
                    <!-- <td><input type="checkbox" name="" id=""></td> -->
                    <td class="firstCell">12345</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="doubleTanker">Double Tanker</td>
                    <td>A-01</td>
                    <td>
                      <div class="completed">Completed</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">67890</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="singleTanker">Single Tanker</td>
                    <td>A-02</td>
                    <td>
                      <div class="pending">Pending</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">14529</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="doubleTanker">Double Tanker</td>
                    <td>A-03</td>
                    <td>
                      <div class="completed">Completed</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">64646</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="singleTanker">Single Tanker</td>
                    <td>A-04</td>
                    <td>
                      <div class="completed">Completed</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">24536</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="singleTanker">Single Tanker</td>
                    <td>A-05</td>
                    <td>
                      <div class="failed">Failed</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">99754</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="doubleTanker">Double Tanker</td>
                    <td>A-06</td>
                    <td>
                      <div class="completed">Completed</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">09129</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="doubleTanker">Double Tanker</td>
                    <td>A-06</td>
                    <td>
                      <div class="cancelled">Cancelled</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">74722</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="singleTanker">Single Tanker</td>
                    <td>A-02</td>
                    <td>
                      <div class="pending">Pending</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">11002</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="doubleTanker">Double Tanker</td>
                    <td>A-03</td>
                    <td>
                      <div class="completed">Completed</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">65656</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="singleTanker">Single Tanker</td>
                    <td>A-04</td>
                    <td>
                      <div class="completed">Completed</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">12345</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="singleTanker">Single Tanker</td>
                    <td>A-05</td>
                    <td>
                      <div class="failed">Failed</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">12112</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="doubleTanker">Double Tanker</td>
                    <td>A-06</td>
                    <td>
                      <div class="completed">Completed</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                  <tr data-toggle="modal" data-target="#userDetails">
                    <td class="firstCell">09090</td>
                    <td>Yousuf Islam</td>
                    <!-- <td>42201-2729672-7</td> -->
                    <td class="doubleTanker">Double Tanker</td>
                    <td>A-06</td>
                    <td>
                      <div class="cancelled">Cancelled</div>
                    </td>
                    <td class="lastCell">
                      <span>
                        2022-09-29
                        <br />
                        <span class="timeSpan"> 11:11 AM </span>
                      </span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="displayNone" id="multipleSelectedOrderActionBtnDiv">
                <button data-toggle="modal" data-target="#multipleOrderSelected">Action</button>
              </div>
            </section>
          </section>
        </div>
      </section>
    </section>
  </section>

  <!-- /--- Order Details Modal ---/ -->

  <section class="modal fade" id="userDetails">
    <div class="modal-dialog modal-xl">
      <div class="modal-content forBorderRadius">
        <section class="modal-body wholeModal">
          <section class="headingSection">
            <h1>Receiver Details</h1>
          </section>
          <section class="userDetailSection">
            <section>
              <div>
                <p>Receiver Name :</p>
                <input type="text" value="Yousuf Islam" class="editableFields" disabled />
              </div>
              <div>
                <p>Unit No.</p>
                <input type="text" value="A-01" disabled />
              </div>
            </section>
            <section>
              <div>
                <p>Contact :</p>
                <input type="number" value="03082028980" class="editableFields" disabled />
              </div>
              <div>
                <p>Swapped to :</p>
                <input type="text" value="B-01" disabled />
              </div>
            </section>
            <section>
              <div>
                <p>Receiver Type :</p>
                <input type="text" value="Tenant" style="color: #e14eca" id="userTypeInputField" disabled />
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
              <div>
                <p>Tenant's CNIC :</p>
                <input type="text" value="42201-5679456-2" class="editableFields" disabled />
              </div>
            </section>
            <section class="ordersPageModalLastSection">
              <div>
                <p>
                  Remaining <br />
                  Tankers :
                </p>
                <input type="number" value="02" disabled />
              </div>
              <div>
                <p>Cash Tankers <br /> Ordered :</p>
                <input type="number" value="02" disabled />
              </div>
            </section>
            <section>
              <div>
                <p>Normal Tankers :</p>
                <input type="text" value="01" class="editableFields" disabled />
              </div>
              <div>
                <p>Swapped Tankers :</p>
                <input type="text" value="01" class="editableFields" disabled />
              </div>
            </section>
          </section>
          <!-- <hr /> -->
          <section class="headingSection headingSection2">
            <h1>Order Details</h1>
          </section>
          <section class="userDetailSection">
            <section>
              <div>
                <p>Order ID :</p>
                <input type="number" value="12345" class="editableFields" disabled />
              </div>
              <div>
                <p>Tanker Type :</p>
                <input type="text" value="Single Tanker" disabled />
              </div>
            </section>
            <section>
              <div>
                <p>Order Created :</p>
                <input type="text" value="2022-10-07, 11:11AM" class="editableFields" disabled />
              </div>
              <div>
                <p>Expected Date :</p>
                <input type="text" value="2022-10-10" class="editableFields" disabled />
              </div>
            </section>
            <section>
              <div>
                <p>Order Status :</p>
                <input type="text" value="Pending" style="color: #fcc910" id="statusInputField" disabled />
              </div>
              <div>
                <p>Order Delivered :</p>
                <input type="text" value="" id="userTypeInputField" disabled />
              </div>
            </section>
          </section>

          <div class="orderDetailActions">
            <div><button id="modalDeliveredBtn">Delivered</button></div>
            <div><button id="modalFailedBtn">Failed</button></div>
            <div><button id="modalCanceledBtn">Canceled</button></div>
          </div>

        </section>
      </div>
    </div>
  </section>


  <!-- Multiple Order Modal -->
  <section class="modal fade" id="multipleOrderSelected">
    <div class="modal-dialog modal-lg">
      <div class="modal-content forBorderRadius">
        <section class="modal-body wholeModal wholeModal2">
          <section class="headingSection">
            <h1>Selected Orders</h1>
          </section>

          <section class="modalOrderTableSection">
            <table>
              <thead>
                <th>Order ID</th>
                <th>To</th>
                <th>Tanker Type</th>
              </thead>
              <tbody id="modalTbody">

              </tbody>
            </table>
          </section>
          <main><small onclick="clearAllModalList()">Clear All</small></main>

          <!-- <div class="orderDetailActions">
              <div><button id="modalDeliveredBtn">Delivered</button></div>
              <div><button id="modalFailedBtn">Failed</button></div>
              <div><button id="modalCanceledBtn">Canceled</button></div>
            </div> -->

          <div class="multipleOrderActionSection">
            <div><button id="multipleDeliveredBtn">Delivered</button></div>
            <div><button id="multipleFailedBtn">Failed</button></div>
            <div><button id="multipleCanceledBtn">Canceled</button></div>
          </div>

        </section>
      </div>
    </div>
  </section>

</body>

<script src="./scripts/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  /// Setup Block
  const data = {
    labels: [
      "Double Tankers",
      "Single Tankers",
      "Swap Tankers",
      "Cash Tankers",
    ],
    datasets: [{
      label: "My First Dataset",
      data: [200, 70, 100, 120],
      backgroundColor: [
        "rgb(255, 99, 132)",
        "rgb(54, 162, 235)",
        "rgb(255, 205, 86)",
        "rgb(54, 255, 86)",
      ],
      hoverOffset: 4,
    }, ],
  };

  ///  Options Block
  const options = {
    // scales: {
    //     x: {
    //         grid: {
    //             display: false,
    //         },
    //     },
    //     y: {
    //         grid: {
    //             display: false,
    //         },
    //     },
    // },
  };

  /// Config Block
  const config = {
    type: "pie",
    data,
    options,
  };

  /// Render Block
  const pieChart = new Chart(document.getElementById("pieChart"), config);
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

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
  window.onload = function() {


    var chart = new CanvasJS.Chart("chartContainer", {
      theme: "light2",
      animationEnabled: true,
      title: {
        text: "World Energy Consumption by Sector - 2012"
      },
      data: [{
        type: "pie",
        indexLabel: "{y}",
        yValueFormatString: "#,##0.00\"%\"",
        indexLabelPlacement: "inside",
        indexLabelFontColor: "#36454F",
        indexLabelFontSize: 18,
        indexLabelFontWeight: "bolder",
        showInLegend: true,
        legendText: "{label}",
        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
      }]
    });
    chart.render();

  }
</script>

</html>