<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload certificate</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/fileupload1.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"  type="text/javascript"></script>
</head>
<body>
<nav class="navbar navbar-default title1">
        <div class="container-fluid">
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        <a class="navbar-brand" href="#"><b>Certification Portal</b></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
            <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="welcome.php?q=1"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home<span class="sr-only">(current)</span></a></li>
            <li <?php if(@$_GET['q']==2) echo'class="active"'; ?>> <a href="welcome.php?q=2"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;History</a></li>
            <li <?php if(@$_GET['q']==3) echo'class="active"'; ?>> <a href="fileupoload.php"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;Upload</a></li>
            <li <?php if(@$_GET['q']==4) echo'class="active"'; ?>> <a href="welcome.php?q=4"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>&nbsp;Uploaded certificates</a></li>

        </ul>
        <ul class="nav navbar-nav navbar-right">
        <li <?php echo''; ?> > <a href="logout.php?q=welcome.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
        </ul>
        
            
           
       
        </div>
    </div>
    </nav>
    
    <div class="regform">
        <h1>Registration Form</h1>
    </div>
    <div class="main">
    <form class="form-horizontal title1" name="form" action="update.php"  method="POST">
            <div id="name">
                <h2 class="name"> Employee Name </h2>
				<input class="firstname" type="text" name="emp_name"><br>
                
           </div>
           <h2 class="name">CSP</h2>
            <select class="option" name="csp">
                <option disabled="disabled" selected="selected">--Choose option--</option>
                <option>AWS</option>
                <option>AZURE</option>
                <option>GCP</option>
            </select>
		   <h2 class="name">Certificate Name</h2>
		   <input class="email" type="text" name="cer_name">
		   
		   <h2 class="name">Certificate Level</h2>
		   <input class="email" type="text" name="cer_level">
		   
		   <h2 class="name">Certificate Id</h2>
		   <input class="email" type="number" name="cer_id">
		   
		   <h2 class="name">Certificate date</h2>
		   <input class="email" type="date" name="cer_date">
		   
		   <h2 class="name">Certificate Expiry</h2>
		   <input class="email" type="date" name="cer_expiry">
		   
		   <h2 class="name">Validity</h2>
		   <input class="email" type="number" name="validity">
            
		   
           <h2 class="name">Upload Certificate</h2>
		   <input class="email" type="file" name="certification">
    
            
    
            
    
    
           <button class="btn btn-primary btn-block" name="submit">SUBMIT</button>
    
    
        </form>
</div>
</body>
</html>