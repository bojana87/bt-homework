<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
<?php $current = 'contactus';?>
<div class="main-wrapper">
    <div class="container">
        <?php include './components/header.php';?>
       
        <div class="page-content center-content">
            <form class="contact-form">
                <fieldset>
                    <legend>Contact Us</legend>
                    <label class="form-field">Name:
                        <input type="text" name="name" placeholder="Your name ..." required>
                    </label>
                    <label class="form-field">Email:
                        <input type="email" name="email" placeholder="Your email ..." required>
                    </label>
                    <label class="form-field">Message:
                        <textarea id="message" name="message" rows="3" placeholder="Your message..."></textarea>
                    </label>
                    <button type="submit" class="btn btn-primary">Contact Us</button>
                </fieldset>
            </form>
        </div>

        <?php include './components/footer.php';?>
        
    </div>
</div> 
    
</body>
</html>