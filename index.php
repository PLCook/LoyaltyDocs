<!DOCTYPE html>



<html>

    <head>

        <link rel="stylesheet" type="text/css" href="/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="/css/loyalstyles.css">


        <meta name="description" content="Loyalty Docs Home Page">
        <meta name="keywords" content="Frager, Dr. Alfred, Dr. Stan, Loyalty, Book">
        <meta name="author" content="Paul Cook">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>The Loyalty Docs Home Page</title>
    </head>

<body>
    <header>
        <h1>The Loyalty Docs</h1>
        <nav>
            <ul class="nav nav-pills">
                <li><a href="index.php">Home</a></li>
                <li><a href="quote.php">People Are Saying</a></li>
                <li><a href="about.php">About the Docs</a></li>
                <li><a href="blog.php">The Docs Blog</a></li>
                <li><a href="services.php">Our Services</a></li>
                <li><a href="contact.php">Contact the Docs</a></li>
            </ul> 
        </nav>
    </header>

    <main> 
        <article>
            <section>
                <figure>
                    <img class="cover" src="/img/bookcover.jpg" alt="The Cover of the Upcoming Book"/>
                    <figcaption>The Cover of the Upcoming Book</figcaption>
                </figure>        

                <p id="primary">By taking lessons from top leaders in every branch of the U.S. military, with experience around the world, and discussing them with chief executives of major companies for application to the business world, The Loyalty Docs have created a book that will change the way employees, managers and executives view loyalty today. These generals were selected because they are among the most educated and loyal people on earth and because they have risen through all the commissioned officer ranks. With incredible experience and the wisdom of the years, Loyalty: From the Battlefield to the Boardroom will give you what you need to create and develop a loyal workforce.</p>
                
                <p id="secondary">To be notified when "Loyalty: From the Battlefield to the Boardroom" is available, please give us your email. We will notify you immediately upon publication.</p>
            </section>
            <section>
                <form action="guestData.php" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" size="40" name="name" id="name" placeholder="Name (Required)" type="text"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" size="40" name="company" id="company" placeholder="Company" type="text"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" size="40" name="title" id="title" placeholder="Title" type="text"/>
                        </div>
                        <div class="form-group">
                            <input class="form-control" size="40" name="email" id="email" placeholder="Email Address (Required)" type="text"/>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="submit">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </section>
        </article>
    </body>
</html>
 