<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML 2 Slide</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <div class="grid-container">
      <div class="row">
        <div class="large-6 columns">
          <div class="callout secondary">
            <h2 class="h2">Digitale Präsentation in wenigen Schritten generieren</h2>
            <p>Erstelle jetzt online mit wenigen Schritten eine webbasierte oder PDF-fähige Präsentation.</p>
            <a class="button" href="create.php">Neue Präsentation starten</a>
          </div>
        </div>

        <div class="large-6 columns">
          <div class="callout warning">
            <h4 class="h4">PDF-Export Anleitung (getestet in Google Chrome)</h4>
              <ol>
                <li>Präsentation im Browser aufrufen</li>
                <li>Drucken-Dialog aufrufen (CTRL/CMD+P).</li>
                <li><strong>Ziel</strong> zu <strong>"Als PDF speichern"</strong> anpassen.</li>
                <li><strong>Layout</strong> zum <strong>Querformat</strong> wechseln.</li>
                <li>Unter weiteren Einstellungen <strong>Ränder</strong> deaktivieren.</li>
                <li><strong>Hintergrundgrafiken</strong> aktivieren.</li>
                <li><strong>Speichern</strong> klicken.</li>
              </ol>
            <a class="button" href="create.php">Neue Präsentation starten</a>
          </div>
        </div>
      </div>

      <h3 class="h3 center">Letzte Präsentationen</h3>
      <table>
        <tbody>
        <?php
          $fileList = glob('xml/*');

          //Loop through the array that glob returned.
          foreach($fileList as $file){
            $file = explode("/",$file);
            //Simply print them out onto the screen.
            echo "<tr>
                  <td><strong>".$file[1]."</strong></td>
                  <td><a class='tiny button' href='open.php?f=".$file[1]."' target='_blank'>WEB-Ansicht</a></td>
                  <td><a class='tiny button' href='open.php?print-pdf&f=".$file[1]."' target='_blank'>PDF-Ansicht</a></td>
                  <td><a class='tiny button' href='download.php?f=".$file[1]."' target='_blank'>download xml</a></td>
                  <td><a class='tiny success button' disabled target='_blank'>bearbeiten</a></td>
                  <td><a class='tiny alert button deletexmlstructure' href='delete.php?f=".$file[1]."'>löschen</a></td>
                </tr>";
          }
        ?>
        </tbody>
      </table>
    </div>
  </body>
</html>