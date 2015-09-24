<?php 
	include_once("view/Header.php");
        $result='';
            if (isset($_POST["envoyer"])) {
        
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'Bibliothèque'; 
        $to = 'example@bootstrapbay.com'; //Votre email
        $subject = 'Message utilisateur bibliothèque ';
        
        $body = "De: $name\n E-Mail: $email\n Message:\n $message";
         
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Entrer votre message !';
        }
 
// If there are no errors, send the email
if (!$errMessage) {
    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success col-md-8">Merci votre message à bien été envoyé</div>';
    } else {
        $result='<div class="alert alert-danger">Une erreur s\'est produite ! Veuillez réessayer</div>';
    }
}
    }
?>
<html>
    <head></head>
    
    <body>
        <form class="form-horizontal" role="form" method="post" action="contact.php">
    <div class="form-group">
        <label for="name" class="col-sm-2  control-label">Nom & Prénom</label>
        <div class="col-sm-10 col-md-8">
            <input type="text" class="form-control" id="name" name="name" placeholder="Votre nom et prénom" value="" required>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10 col-md-8">
            <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" value="" required>
        </div>
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10 col-md-8">
            <textarea class="form-control" rows="4" name="message" placeholder="Votre message.."></textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <input id="envoyer" name="envoyer" type="submit" value="Envoyer" class="btn btn-primary">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?> 
        </div>
    </div>
</form>
                
<address class="col-xs-12 col-md-12 centrer">
  <strong>Horaires</strong><br>
  Lundi : 8h-12h 14-18h<br>
  Mardi : 8h-12h 14-18h<br>
  Mercredi : 8h-12h 14-18h<br>
  Jeudi : 8h-12h 14-18h<br>
  Vendredi : 8h-12h 14-18h<br>
</address>
    </body>
</html>

<?php 
include_once("view/Footer.php");
?>