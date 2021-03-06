<!DOCTYPE html>
<!-- <html lang="en" oncontextmenu="return false"> -->
  <html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="QUALITY DEVIATION NOTICE System">
  <meta name="author" content="Christian Araña, and open source Contributors">
  <link rel="icon" href="images/asti.ico"  type="image/x-icon">

  <title>Quality Deviation Notice</title>
  <!------------------------------------------------------------------>
  <!-- Bootstrap core CSS-->
  <!------------------------------------------------------------------>
  <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!------------------------------------------------------------------>
  <link href="./bootstrap/css/bootstrap.css" rel="stylesheet">
  <!------------------------------------------------------------------>
  <!-- Custom styles for this template -->
  <link href="./css/simple-sidebar.css" rel="stylesheet">
  <!------------------------------------------------------------------>
  <link type="text/css" href="./css/index.css" rel="stylesheet">
  <!------------------------------------------------------------------>
  <!-- JQUERY STYLESHEET -->
  <!------------------------------------------------------------------>
  <link rel="stylesheet" href="./js/jquery-ui-1.12.1/jquery-ui.css">
  <!------------------------------------------------------------------>
  <!-- Bootstrap core JS -->
  <!------------------------------------------------------------------>
  <script src="./bootstrap/js/bootstrap.bundle.min.js"></script>
  <!------------------------------------------------------------------>
  <script src="./bootstrap/js/bootstrap.js"></script>
  <!------------------------------------------------------------------>
  <script src="./bootstrap/js/bootstrap.bundle.js"></script>
  <!------------------------------------------------------------------>
  <!-- JS-->
  <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
  <!------------------------------------------------------------------> 
  <script src="./js/issuance.js" defer></script>
  <!------------------------------------------------------------------>
  <script src="./js/autoGeneratedQdnNo.js" defer></script>
  <!------------------------------------------------------------------>
  <script src="./js/time_date.js" defer></script>
  <!------------------------------------------------------------------>
  <script src="./js/sweetalert2.all.min.js" defer></script>
  <!------------------------------------------------------------------>
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <!------------------------------------------------------------------>
  <!-- JQUERY STYLESHEET -->
  <script src="https://smtpjs.com/v3/smtp.js"></script>
  <!------------------------------------------------------------------>
  <!-- JQUERY UI -->
  <!------------------------------------------------------------------>
  <script src="./js/jquery-ui-1.12.1/external/jquery/jquery.js"></script>
  <!------------------------------------------------------------------>
  <script src="./js/jquery-ui-1.12.1/jquery-ui.js"></script>
  <!------------------------------------------------------------------>
  <script src="./js/j_ui/jquery-ui.js"></script>
  <!------------------------------------------------------------------>
  <script src="./js/jquery-ui-1.12.1/jquery-ui.min.js"></script>
  <!------------------------------------------------------------------>

  <style>
    *{
      margin: 0;
      padding: 0;
    }
    body *{
      /* outline: 1px solid grey; */
      margin: 0;
      font-family: "Lato", sans-serif;
    }

    /*==============================================================
                            "SIDE BAR STYLE"
    ================================================================*/
    .sidebar {
      background-image: linear-gradient(to bottom, #dbf900, #dbfb48, #dcfc6a, #defd88, #e1fda2);
      margin: 0;
      padding: 0;
      width: 200px;
      background-color: #f1f1f1;
      position: fixed;
      height: 100%;
      overflow: auto;
    }
      .sidebar a {
        display: block;
        color: black;
        padding: 20px;
        text-decoration: none;
      }

        .sidebar a:hover:not(.active) {
          color: rgb(0, 0, 0);
          position: sticky;
          transform: scale(1.19);/* (120% zoom) */
          z-index:99;
        }
        .sidebar img, svg {
          vertical-align: middle;
          width: 40px;
          margin: 10px;
      }

    /*======================================
      "SYSTEM TITTLE STYLE INSIDE SIDEBAR"
    ========================================*/
    .sysName{
      display: block;
      text-align: center;
      border: 5px;
      border-bottom: 2px solid #00000030;
      margin-bottom: 15px;
    }
      .sysName img{
        width: 8rem;
        border-radius: 3px;
      }

    /*==============================================================
                      "MAIN CONTENT STYLE"
    ================================================================*/
    div.content {
      margin-left: 200px;
      padding: 1px 16px;
      height: 100vh;
    
    }
      .card{
        padding: 20px;
        margin: 20px auto;
      }
      h4.mb-4 {
        color: #8c7000;
        font-weight: bold;
        box-shadow: 2px 2px 5px black;
        width: 23rem;
        text-align: center;
        padding: 4px;
      }
      #qdnNumber {
        border: none;
        font-weight: bold;
        color: blue;
        font-size: 1.3rem;
      }

      input[value="Minor"],
      input[value="Major"] {
        margin: 0px 3px 0px 20px;
      }



    /*==============================================================
                        "RESPONSIVE STYLE"
    ================================================================*/

    @media screen and (max-width: 700px) {
      div.content {
      margin-left: 200px;
      padding: 64px 16px;
      height: 100vh;
    
    }
    /*======================
      "NAME INCLUDING LOGO"
    ========================*/
      .sysName{
        display: inline-block;
        text-align: center;
        width: 11rem;
        vertical-align: top;
        margin: 3px 0px 0px -6px;
        border-bottom: none;
        border-right: 2px solid #00000030;
      }
    /*====================
      "TOP NAV BAR"
    ======================*/
      .sidebar {
        width: 100%;
        height: 80px;
        z-index: 99;
        display: block;
        overflow: unset;
      }
        .sidebar a {
          display: inline-block;
          font-size: 0;
          line-height: 0;
          color: transparent;
          padding: 0;
          margin: 0.7rem 0.5rem 0.7rem 0.5rem;
          
        }
        .sidebar a img {
          vertical-align: middle;
          width: 41px;
          margin: 0px 7px;
        }
      div.content {margin-left: 0;}
    }

    @media screen and (max-width: 400px) {
    /*======================
      "NAME INCLUIDING LOGO"
    ========================*/
      .sysName {
        width: 6rem;
        font-size: 20px;
      }
        .sysName img{
          width: 5rem;
          border-radius: 1px;
        }
        .sysName h4 {
          font-size: 17px;
          padding: 0px;
          margin: -7px;
        }
    /*====================
      "TOP NAV BAR"
    ======================*/
      .sidebar {
        width: 100%;
        height: 70px;
        z-index: 99;
        display: inline;
        overflow: scroll; /*WHEN SCREEN DROPS < 240PX*/
      }
        .sidebar a {
          display: inline-block;
          font-size: 0;
          line-height: 0;
          color: transparent;
          padding: 0;
          margin: 0.7rem 0.5rem 0.7rem 0.5rem;
        }
        .sidebar a img {
          vertical-align: middle;
          width: 30px;
          margin: 6px 5px;
        }
      h4.mb-4 {
      width: 19rem;
      overflow: scroll;

      }
    }

  </style>
</head>
<body>
  <div class="sidebar">
    <div class="sysName">
      <img src="./images/TELFORDmd.png" alt="TELFORD_LOGO">
      <h4>QDN SYSTEM</h4>
    </div>
    <!-- <a href="analysis.html"><img src="./images/svg/012-analytics.svg"></img>Analysis</a> -->
    <a href="analysis.php"><img src="./images/svg/009-data research.svg"></img>Analysis</a>
    <a href="approval.php"><img src="./images/svg/026-decision.svg"></img>Approval</a>
  </div>
    
  <div class="content">
    <div class="card">
      <form class="needs-validation" novalidate>
        <h4 class="mb-4">QUALITY DEVIATION NOTICE</h4>

        <div class="row col-md-12">
          <div class="col-sm-4">
          <label for="qdnNumber" class="form-label">QDN #:</label>
          <input type="text" class="form-control" id="qdnNumber" >
        </div>
         <!--
        ================
          ROW #2
        ================  
        -->  
        <div class="row col-md-12 ">
          <div class="col-md-4">
            <label for="issuedByEmpNumber" class="col-form-label">Issued By:</label>
            <input id="issuedByEmpNumber" type="number" class="form-control" placeholder="Employee #" required/>
          </div>
          <div class="col-md-5">
            <label class="col-form-label">Emp. Name:</label>
            <input id="issuedByEmpName" type="text" class="form-control" required/>
          </div>
          <div class="col-md-3">
            <label class="col-form-label">Team:</label>
            <input id="issuedByEmpTeam" type="text" class="form-control" required/>
          </div>
        </div>
        <!--
        ================
            ROW #3
        ================  
        -->  
        <div id="issuedToDiv" class="row col-md-12">
          <div class="col-md">
            <label for="issuedToEmpNumber" class="col-form-label">Issued To:</label>
            <input id="issuedToEmpNumber" type="number" class="form-control" placeholder="Employee #" required/>
            <div class="invalid-feedback">
              Required field.
            </div>
          </div>
          <div class="col-md-5">
              <label for="issuedToEmpName" class="col-form-label">Emp. Name:</label>
              <input id="issuedToEmpName" type="text" class="form-control" required />
          </div>
          <div class="col-md-3">
              <label for="issuedToEmpTeam" class="col-form-label">Team:</label>
              <input id="issuedToEmpTeam" type="text" class="form-control" required/>
          </div>
        </div>
        <!--
        ================
            ROW #4
        ================  
        -->
        <div class="row col-md-12">
          <div class="col-md-4">
            <label for="station" class="col-form-label">Station:</label>
            <input id="station" type="text" class="form-control"required placeholder="AutoFill..."/>
          </div>
          <div class="col-md-4">
            <label class="col-form-label">Team/Resp:</label>
            <input id="teamResp" type="text" class="form-control" placeholder="AutoFill..." required/>
          </div>
          <div class="col-md-4">
            <label class="col-form-label">Date/Time:</label>
            <input id="dateTime" type="text" class="form-control" placeholder="Autogenerated..."/>
          </div>
        </div>  
        <!--
        ================
            ROW #5
        ================  
        -->  
        <div class="row col-md-12">
          <div class="col-md-4">
            <label class="col-form-label">Customer:</label>
              <select class="form-select" id="customer" required>
                <option value="" disabled selected hidden></option>
                <option>N/A</option>
                <option>ADLT</option>
                <option>ADGT</option>
              </select>
          </div>
          <div class="col-md-4">
            <label class="col-form-label">Machine:</label>
            <input id="machine" type="text" class="form-control"required/>
          </div>
          <div class="col-md-4">
            <label for="packageType" class="col-form-label">Package Type:</label>
            <input id="packageType" type="text" class="form-control" required/>
          </div>
        </div>
       
        <!--
        ================
            ROW #6
        ================  
        -->  
        <div class="row col-md-12">
          <div class="col-md-4">
            <label for="deviceName" class="col-form-label">Part Name:</label>
            <input id="partName" type="text" class="form-control" required/>
          </div>
          <div class="col-md-4">
            <label for="lotId" class="col-form-label">Lot ID:</label>
            <input id="lotId" type="text" class="form-control"required />
          </div>
        </div>
        <!--
        ================
            ROW #7
        ================  
        -->  
        <label class="col-md-3   mt-4 col-form-label-lg">Classification:</label>
        <div class="row col-md-12 mb-4">
          <div class="col-md-6 ml-4">
              <input type="radio" class="form-check-input " name="classification" id="minor" value="Minor" required> 
              <label for="minor" class="form-check-label">Minor</label>
              <input type="radio" class="form-check-input " name="classification" id="major" value="Major" required>
              <label for="major" class="form-check-label">Major</label></label>
          </div>
        </div>
        <!--
        ================
            ROW8
        ================  
        -->          
        <div class="row col-md-12 mb-4">
          <div class="col-md-12">
            <label for="exampleTextarea1" class="col-form-label-lg">NONCONFORMITY/ DEFECTS:</label>
            <textarea id="defects" class="form-control" rows="4" required></textarea>
          </div>
        </div>  
        
        <label class="col-md-5 col-form-label-lg">Failure Mode:</label>
        <div class="row col-md-12 mb-4">
          <div class="col-md-10 ml-4">
            <label for="classification" class="form-check-label">
            <div class="form-check form-check-inline">
              <input required name="failureMode" class="form-check-input" type="radio" value="Man" id="man" >
              <label class="form-check-label" for="man">Man</label>
            </div>
            <div class="form-check form-check-inline">
              <input required name="failureMode" class="form-check-input" type="radio" value="Machine" id="machine">
              <label class="form-check-label" for="machine">Machine</label>
            </div>
            <div class="form-check form-check-inline">
              <input required name="failureMode" class="form-check-input" type="radio" value="Material" id="material">
              <label class="form-check-label" for="material">Material</label>
            </div>
            <div class="form-check form-check-inline">
              <input required name="failureMode" class="form-check-input" type="radio" value="Method" id="method">
              <label class="form-check-label" for="method">Method</label>
            </div>
            <div class="form-check form-check-inline">
              <input required name="failureMode" class="form-check-input" type="radio" value="Environment" id="environment">
              <label class="form-check-label" for="environment">Environment</label>
            </div>
          </div>
        </div>
        
        <button id="submit" class="w-100 btn btn-success btn-lg mt-3" type="submit">Send for Review & Analysis</button>
      </form>
    </div>  

    </div>
  <script  src="./js/form-validation.js"></script>
</body>
</html>
