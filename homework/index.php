<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" action="email.php" novalidate>
            <p><label for="name">Name:</label>
                <input name="name" id="name" type="text" value=""
                       required>
            </p>
            <p><label for="email">Email:</label>
                <input name="email" id="email" type="email" value=""
                       required>
            </p>
            <p><label for="subject">Subject:</label>
                <input name="subject" id="subject" type="text" value=""
                       required>
            </p>
            <p><label for="message">Message:</label>
                <textarea name="comments" id="comments" required>
                </textarea>
            </p>

            <p><button type="submit" name="send">Send Message</button></p>
        </form>
    </body>
</html>
