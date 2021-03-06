<!DOCTYPE html>

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	    <link rel="stylesheet" type="text/css" href="css/normalize.css">
	    <link rel="stylesheet" type="text/css" href="css/loyalstyles.css">


	    <meta charset="UTF-8"> 
        <meta name="description" content="Loyalty Docs Home Page">
        <meta name="keywords" content="Frager, Dr. Alfred, Dr. Stan, Loyalty, Book, Docs">
        <meta name="author" content="Paul Cook">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    	<title>The Loyalty Docs Home Page</title>
	</head>
	<body>
		<div align="center">
		<header>
			<div class="navbar-wrapper navbar-default navbar-fixed-top" role="navigation"> 
				<div class="container"> 
					<div class="navbar-header"> 
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"> 
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">The Loyalty Docs</a>
					</div>
					<div id="navbar" class="collapse navbar-collapse"> 
						<ul class="nav navbar-nav navbar-right"> 
							<li class="active"><a href="index.php">Home</a></li>
							<li><a href="quote.php">People Are Saying</a></li>
							<li><a href="about.php">About the Docs</a></li>
							<li><a href="blog.php">The Docs Blog</a></li>
							<li><a href="services.php">Our Services</a></li>
							<li><a href="contact.php">Contact the Docs</a></li>

						</ul>
					</div>
				</div>
			</div>

			<div class="container-fluid">
        	<h1>The Loyalty Docs</h1>
        	</div>
		</header>
		<main>
			<article>
				<div class="container-fluid row">
				<section>
					<figure>
                    	<img class="img-responsive col-xs-12 col-sm-6"  src="img/bookcover.jpg" alt="The Cover of the Upcoming Book"/>
                	</figure>
                	<div class ="col-xs-12 col-sm-6 ">
                	<p class="press_release01">FOR IMMEDIATE RELEASE:</p>
        
					<p class="press_release02">Contact:<br>
					Alfred Joshua Frager<br>
					DoctorAlfred@theloyaltydocs.com<br>
					502) 640-5466</p>

					<p id="press_release03">New Book Gives Insight into the Role Loyalty Plays in Today's Economy<br><br>

					Louisville, KY - Loyalty: From the Battlefield to the Boardroom isn't the first book to examine the role of loyalty in today's economy, but the Loyalty Docs have brought together an unprecedented body of knowledge and distilled the lessons for you.<br><br>

					It's rare to get ten minutes with these generals and admirals; Drs. Stanley and Alfred Frager spent hundreds of hours in personal interviews to gather perspectives never previously revealed. This unparalleled and unprecedented access to America's top military and business leaders allowed the Loyalty Docs to chart a course for loyalty. Now they share that knowledge with you.<br><br>

					The Loyalty Docs gathered the best of America's military and asked: why would people join an organization whose purpose is to fight similar organizations to the death? What does the military know that the rest of us do not? They found the answers to these questions, and then took them to corporate leaders to get their feedback and insights and to share how loyalty can best be developed in the business world. Those strategies and methods are revealed in this book, along with practical examples and inspiring stories from America's best.
					<br><br>
					The Loyalty Docs have created a book that will change the way employees, managers and executives view loyalty today. Loyalty: From the Battlefield to the Boardroom will give you what you need to create and develop a loyal workforce.<br><br>

					For more information, contact DoctorAlfred@theloyaltydocs.com, or DoctorStan@theloyaltydocs.com. To get more information about the book and to sign up for updates about the book, such as when it is being published and where, please fill out the form below.</p>
					</div>

					
				</section>
			
				</div>

<script>
function validateForm() {
    var x = document.forms["emailform"]["name"].value;
    var n = document.forms["emailform"]["email"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        return false;
    }
    if (n == null || n == "") {
    	alert("Email address must be filled out");
    	return false;
    }
}

</script>

				<div class="container-fluid">
				<section>
	                <form name="emailform" onsubmit="return validateForm()" action="guestData.php" method="POST">
	                    <fieldset>
	                        <div class="form-group">
	                            <input class="form-control" name="name" id="name" placeholder="Name (Required)" type="text"/>
	                        </div>
	                        <div class="form-group">
	                            <input class="form-control" name="company" id="company" placeholder="Company" type="text"/>
	                        </div>
	                        <div class="form-group">
	                            <input class="form-control" name="title" id="title" placeholder="Title" type="text"/>
	                        </div>
	                        <div class="form-group">
	                            <input class="form-control" name="email" id="email" placeholder="Email Address (Required)" type="text"/>
	                        </div>
	                        <div class="form-group">
	                            <button type="submit" class="submit">Submit</button>
	                        </div>
	                    </fieldset>
	                </form>
	            </section>
        		</div>
			</article>
		</main>
	</div>
	</body>
			<script src="http://code.jquery.com/jquery.js"></script>
		    <script language="javascript" type="text/javascript" src="js/bootstrap.js"></script>
	    	<script language="javascript" type="text/javascript" src="js/bootstrap.min.js"></script>
</html>