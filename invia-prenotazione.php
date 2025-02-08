<?php
// Verifica che il modulo sia stato inviato
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Raccogli i dati dal modulo
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $arrivo = $_POST['arrivo'];
    $partenza = $_POST['partenza'];
    $messaggio = $_POST['messaggio'];

    // Destinatario dell'email
    $to = "weekendrooms3@gmail.com"; // Sostituisci con il tuo indirizzo email
    $subject = "Nuova Prenotazione - Weekend Rooms";
    
    // Corpo dell'email
    $body = "Hai ricevuto una nuova prenotazione:\n\n";
    $body .= "Nome: $nome\n";
    $body .= "Email: $email\n";
    $body .= "Data di Arrivo: $arrivo\n";
    $body .= "Data di Partenza: $partenza\n";
    $body .= "Messaggio: $messaggio\n";
    
    // Intestazioni dell'email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Invia l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Grazie per la tua prenotazione! Ti contatteremo a breve.";
    } else {
        echo "Si è verificato un errore nell'invio della prenotazione. Riprova più tardi.";
    }
}
?>
