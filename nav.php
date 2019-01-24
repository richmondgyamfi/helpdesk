<!DOCTYPE html>
<html> 
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Portal Helpdesk</title>

         <script type="text/javascript" src="js/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css" >
        <link href="css/font-awesome.min.css" rel="stylesheet" >
        <!-- <link href="css/style5.css" rel="stylesheet" > -->
        <link rel="stylesheet" href="css/shards.min.css">
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="css/style5.css">
        <style type="text/css">
      
      .sidebar-sticky {
    position: -webkit-sticky;
    position: sticky;
    }
    .sidebar-sticky {
        position: relative;
        top: 0;
        height: calc(100vh - 48px);
        padding-top: 3.5rem;
        overflow-x: hidden;
        overflow-y: auto;
    }

    .flex-column {
        -ms-flex-direction: column !important;
        flex-direction: column !important;
    }
    .nav {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none;
    }
    dl, ol, ul {
        margin-top: 0;
        margin-bottom: 1rem;
    }

    body {
          position: relative; 
      }
      #section1 {padding:10px;height:500px;color: #fff; box-shadow: 3px 3px #bbbbbb; border-radius:25px; background-color: #0069d9;}
      #section2 {padding:10px;height:500px;color: #fff; box-shadow: 3px 3px #bbbbbb; border-radius:25px; background-color: grey;}
      #section3 {padding:20px;height:80px; width: auto; color: #fff; box-shadow: 3px 3px #bbbbbb; border-radius:25px; background-color: #ff9800;}
      #section41 {padding-top:50px;height:500px;color: #fff; background-color: #00bcd4;}
      #section42 {padding-top:50px;height:500px;color: #fff;  background-color: #009688;}

      .scrollbar-deep-purple::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

    .scrollbar-deep-purple::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

    .scrollbar-deep-purple::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #512da8; }

    .scrollbar-cyan::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

    .scrollbar-cyan::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

    .scrollbar-cyan::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #00bcd4; }

    .scrollbar-dusty-grass::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

    .scrollbar-dusty-grass::-webkit-scrollbar {
    width: 12px;
    background-color: #F5F5F5; }

    .scrollbar-dusty-grass::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-image: -webkit-linear-gradient(330deg, #d4fc79 0%, #96e6a1 100%);
    background-image: linear-gradient(120deg, #d4fc79 0%, #96e6a1 100%); }

    .scrollbar-ripe-malinka::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-color: #F5F5F5;
    border-radius: 10px; }

    .scrollbar-ripe-malinka::-webkit-scrollbar {
    width: 100%;
    background-color: #F5F5F5; }

    .scrollbar-ripe-malinka::-webkit-scrollbar-thumb {
    border-radius: 10px;
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.1);
    background-image: -webkit-linear-gradient(330deg, #f093fb 0%, #f5576c 100%);
    background-image: linear-gradient(120deg, #f093fb 0%, #f5576c 100%); }

    .bordered-deep-purple::-webkit-scrollbar-track {
    -webkit-box-shadow: none;
    border: 1px solid #512da8; }

    .bordered-deep-purple::-webkit-scrollbar-thumb {
    -webkit-box-shadow: none; }

    .bordered-cyan::-webkit-scrollbar-track {
    -webkit-box-shadow: none;
    border: 1px solid #00bcd4; }

    .bordered-cyan::-webkit-scrollbar-thumb {
    -webkit-box-shadow: none; }

    .square::-webkit-scrollbar-track {
    border-radius: 0 !important; }

    .square::-webkit-scrollbar-thumb {
    border-radius: 0 !important; }

    .thin::-webkit-scrollbar {
    width: 6px; }

    .example-1 {
    position: relative;
    overflow-y: scroll;
    height: 200px; }
        </style>
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                   <a href="index.php"><h3>Portal Help Desk</h3></a>
                </div>

                <ul class="list-unstyled components">
                    <li class="nav-item" style="margin-bottom: 10px;">
                    <a class="btn btn-info nav-link active" href="#">
                      <!-- <span class="fa fa-home"></span> -->
                      Dashboard <span class="sr-only">(current)</span>
                    </a>
                  </li>
                    <li class="nav-item" style="margin-bottom: 10px;">
                        <a class="nav-link btn btn-danger" href="pages/residential.php">
                          Help Desk
                        </a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link btn btn-waring" href="#">
                      <!-- <span data-feather="layers"></span> -->
                      Sign Out
                    </a>
                  </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content" style="margin: 0px; width: 100%">

                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                        <h3>Help System</h3>
                    </div>
                </nav>
         
