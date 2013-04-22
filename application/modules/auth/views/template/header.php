<!doctype html>
<html>
<head>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    
    <link href='http://fonts.googleapis.com/css?family=Archivo+Narrow' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet" />
    
    <style>
        body {font-family: 'Archivo Narrow', sans-serif;}
        label {display: block;}
        .errors {color:red;}
    </style>
</head>
<body>
    <?php if (isset($_SESSION['username'])) { ?>
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="employee">Proyekto</a>
                
                    <ul class="nav">
                        <li class="active"><a href="employee">Employee</a></li>
                    </ul>
                <a class="brand" id="logout" href="auth/login/logout" style="float:right">Logout</a>
            </div>
        </div>
    <?php } ?>
        
