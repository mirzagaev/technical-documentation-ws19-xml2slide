<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>XML 2 Slide</title>
    
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">

    <link href="css/quill.snow.css" rel="stylesheet">
  </head>
  <body>
    <div class="grid-container">
      <h1 class="h1">Daten eingeben und Folien beschriften</h1>
      <div class="xml2slide-process">
          <form class="xml2slide-form" action="convert2xml.php" method="POST">
            <ul class="accordion" data-accordion>
              <li class="accordion-item is-active" data-accordion-item>
                <a href="#" class="accordion-title">1. Basisdaten <span class="xml2slide-step-title-subheader">Schritt 1 von 2</span></a>
                <div class="accordion-content" data-tab-content>
                    <div class="row">
                      <div class="small-12 medium-9 column">
                        <div class="xml2slide-shipping-options xml2slide-step-section">
                          <h6 class="xml2slide-step-subheader">Titel</h6>
                          <div class="row">
                            <input type="text" name="titel" placeholder="Titel der Präsentation" required />
                          </div>
                        </div>
                        <div class="xml2slide-shipping-options xml2slide-step-section">
                          <h6 class="xml2slide-step-subheader">Präsentationsart</h6>
                          <div class="row xml2slide-shipping-option">
                              <div class="large-6 columns">
                                <label><input type="radio" name="type" value="html" class="xml2slide-shipping-option-selection" checked="checked">
                                <span class="xml2slide-shipping-option-title">Web-Ausgabe</span>
                                <div class="xml2slide-shipping-option-desc">Generierung einer XML-Datei, dient als Grundlage</div></label>
                              </div>
                              <div class="large-6 columns">
                                <label><input type="radio" name="type" value="pdf" class="xml2slide-shipping-option-selection"><span class="xml2slide-shipping-option-title">PDF</span>
                                <div class="xml2slide-shipping-option-desc">Generierung einer XML- und PDF-Datei</div></label>
                              </div>
                          </div>
                        </div>
                        <div class="xml2slide-shipping-options xml2slide-step-section">
                          <h6 class="xml2slide-step-subheader">Datum der Veröffentlichung</h6>
                          <div class="row">
                            <input type="date" name="publicdate" />
                          </div>
                        </div>
                        <div class="shipping-address xml2slide-step-section">
                          <h6 class="xml2slide-step-subheader">Autor-Daten</h6>
                          <p class="xml2slide-step-subdesc">Bitte hinterlegen Sie eine E-Mail-Adresse auf die Sie Ihre Ergebnisse zu geschickt bekommen möchten.</p>
                          <label>
                            <input type="text" placeholder="Vorname" name="vorname" />
                            <input type="text" placeholder="Nachname" name="nachname" />
                            <div><hr class="xml2slide-form-divider"></div>
                            <input type="email" placeholder="E-Mail" name="email" />
                          </label>
                        </div>
                      </div>
                    </div>
                </div>
              </li>
              <li class="accordion-item" id="mainaccordion" data-accordion-item>
                <a href="#" class="accordion-title">2. Folien <span class="xml2slide-step-title-subheader">Schritt 2 von 2</span></a>
                <div class="accordion-content" data-tab-content>
                  <table class="folientabelle">
            <thead>
              <tr>
                <th width="120">OPTIONEN</th>
                <th width="400">FOLIEN</th>
              </tr>
            </thead>
            <tbody>
              <tr class="">
                <td>
                  <input type="color" id="bgcolor" name="bgcolor[]" value="#FFFFFF">
                  <p class="help-text" id="passwordHelpText">Hintergrund</p>
                  
                  <label>Übergang zur nächsten Folie
                    <select id="transition" name="transition[]">
                      <option value="none">none</option>
                      <option value="fade">fade</option>
                      <option value="slide">slide</option>
                      <option value="convex">convex</option>
                      <option value="concave">concave</option>
                      <option value="zoom">zoom</option>
                    </select>
                  </label>
                  <button type="button" id="removeslide" class="alert button">Folie löschen</button>
                </td>
                <td>
                  <div id="editor_1"></div>
                </td>
              </tr>
            </tbody>
            </table>

            <button type="button" id="btnaddnewslide" class="success button">leere Folie hinzufügen</button>

                    <div><hr class="xml2slide-form-divider"></div>

                    <div class="callout secondary">
                      <p><strong>Das Klicken auf "Generieren" erzeugt eine XML-Datei, welche local zum Herunterladen angeboten wird. Zudem wird im neuen Tag die Präsentation aufgerufen.</strong></p>
                    </div>

                      <input type="submit" class="primary button expanded" id="mainbuttonsubmit" value="GENERIEREN" />
                  </div>

                </div>
              </li>
            </ul>
          </form>

            <table id="hiddentbl">
            <tr id="hiddensamplefolie">
                <td>
                  <input type="color" id="bgcolor" name="bgcolor[]" value="#FFFFFF">
                  <p class="help-text" id="passwordHelpText">Hintergrund</p>
                  
                  <label>Übergang zur nächsten Folie
                    <select id="transition" name="transition[]">
                      <option value="none">none</option>
                      <option value="fade">fade</option>
                      <option value="slide">slide</option>
                      <option value="convex">convex</option>
                      <option value="concave">concave</option>
                      <option value="zoom">zoom</option>
                    </select>
                  </label>
                  <button type="button" id="removeslide" class="alert button">Folie löschen</button>
                </td>
                <td>
                  <div id="editor_"></div>
                </td>
              </tr>
            </table>
      </div>
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/quill.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>