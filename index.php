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
      <h1 class="h1">Digitale Präsentation in wenigen Schritten generieren</h1>
      <div class="row">
        <div class="large-6 columns">
          <div class="callout secondary">
            <h5>Quelldatei in XML-Format</h5>
            <p>It has an easy to override visual style, and is appropriately subdued.</p>
            <a class="button" href="/create.php">Create new Slide</a>
          </div>
        </div>
        <div class="large-6 columns">
          <div class="callout success">
            <h5>This is a secondary callout</h5>
            <p>It has an easy to override visual style, and is appropriately subdued.</p>
            <a class="button" href="/open.php">Edit existing XML file</a>
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
                  <td>".$file[1]."</td>
                  <td><a class='tiny button' href='open.php?f=".$file[1]."' target='_blank'>ansehen</a></td>
                  <td><a class='tiny button' href='download.php?f=".$file[1]."' target='_blank'>download</a></td>
                  <td><a class='tiny success button' href='create.php?f=".$file[1]."' target='_blank'>bearbeiten</a></td>
                  <td><a class='tiny alert button' href='delete.php?f=".$file[1]."'>löschen</a></td>
                </tr>";
          }
        ?>
        </tbody>
      </table>
    </div>
  </body>
</html>