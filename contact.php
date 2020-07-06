<?php

if(isset($_POST['email']) && $_POST['email'] != ''){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

   

print_r($_POST);
$userName = $_POST['name']
$userEmail = $_POST['email']
$userSubject = $_POST['subject']
$userMessage = $_POST['message']

$to = "janraczy@gmail.com";
$body = "";
$body .="Do: ".$userName. "\r\n";
$body .="Email: ".$userEmail. "\r\n";
$body .="Wiadmość: ".$userMessage. "\r\n";

mail($to,$userSubject,$body);
    }   
}

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Hello, world!</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap&subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4f181a5240.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg ">
            <div class="container d-flex ">
                <a class="navbar-brand" href="index.html">Strona główna</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="contact.php">Kontakt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main id="content" role="main">
        <div class="container">
            <section class="pt-5 pb-5">
            <div class="container">
                    <form action="contact.php" method="POST" class="form">
                        <div class="form-group">
                            <label for="name" class="form-label">Twoje imię</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Jan Kowalski" tabindex="1" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Adres email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="jan@gmail.com" tabindex="2" required>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Temat</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Temat" tabindex="3" required>
                        </div>
                        <div class="form-group">
                            <label for="message" class="form-label">Wiadmość</label>
                            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Wpisz tekst..." tabindex="4"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="btn">Wyślij wiadomość!</button>
                        </div>
                    </form>
                </div>
            
            </section>
            <hr> 
        </div>
    </main>
    <hr/>
    <footer class="pt-2 pb-2">
        <div class="container  d-flex justify-content-end">
            <a class="ml-3" href="https://www.facebook.com/">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="ml-3" href="https://www.twitter.com">
                <i class="fab fa-twitter"></i>
            </a>
            <a class="ml-3" href="https://www.linkedin.com">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
</body>

</html>