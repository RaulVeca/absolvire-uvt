<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Absolvire Universitatea de Vest din Timisoara</title>
    <link rel="stylesheet" href="../css/components.css" />
    <link rel="stylesheet" href="../css/icons.css" />
    <link rel="stylesheet" href="../css/responsee.css" />
    <link rel="stylesheet" href="../css/owl.carousel.css" />
    <link rel="stylesheet" href="../css/owl.theme.css" />
    <link rel="stylesheet" href="../css/lightcase.css" />
    <!-- CUSTOM STYLE -->
    <link rel="stylesheet" href="../css/template-style.css" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&subset=latin,latin-ext"
      rel="stylesheet"
      type="text/css"
    />
    <script type="text/javascript" src="../js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="../js/validation.js"></script>
    <link rel="stylesheet" href="../css/font-awesome.min.css" />

    <script type="text/javascript" src="../js/jquery.easypiechart.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="../js/820828fb28.js" crossorigin="anonymous"></script>

    <!--Form styles -->
    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Custom Styles -->
    <style>

      /* Style for suggestions dropdown */
      .autocomplete-items {
            position: absolute;
            z-index: 99;
            background: white;
            max-height: 200px;
            overflow-y: auto;
            border-radius: 5px;
            width: 50%;
        }
        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
        }
        .autocomplete-items div:hover {
            background-color: #f1f1f1;
        }
      .form-step {
        opacity: 0;
        display: none;
        /* visibility: hidden; */
        transition: opacity 0.5s ease-in-out, visibility 0.5s ease-in-out;
      }

      [readonly] {
        background-color: #f5f5f5;
        cursor: not-allowed;
      }

      .form-step.active {
        opacity: 1;
        /* visibility: visible; */
        display: block;
      }

      .form-step.completed {
        opacity: 1;
        /* visibility: visible; */
        display: block;
        pointer-events: none; /* Prevent user interaction */
      }

      .progress-bar {
        transition: width 0.5s ease-in-out;
      }

      .is-invalid {
        border-color: red;
      }

      .is-valid {
        border-color: green;
      }

      .hidden {
        display: none;
      }

      #socials {
        margin-top: 50px !important;
      }

      #carousel {
        margin-bottom: 50px !important;
      }

      .mt-5 {
        font-size: 20px;
      }

      .form-step h4 {
        font-size: 25px !important;
        padding: 30px !important;
        font-weight: bold !important;
      }
      .app-select {
        background-color: white !important;
      }
    </style>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async=""
      src="https://www.googletagmanager.com/gtag/js?id=UA-120366797-2"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "UA-120366797-2");
    </script>
  </head>

  <body class="size-1140">
    <!-- TOP NAV WITH LOGO -->
    <header>
      <div class="fixed">
        <div id="topbar" class="hide-s hide-m">
          <div class="line">
            <div class="m-6 l-6">
              <p class="hide-s">
                Contactează-ne:
                <strong
                  ><a href="mailto:festivitateabsolvire@e-uvt.ro"
                    >festivitateabsolvire@e-uvt.ro</a
                  ></strong
                >
              </p>
            </div>
            <div class="s-12 m-6 l-6"></div>
          </div>
        </div>

        <nav>
          <div class="line">
            <div class="s-12 l-2">
              <a class="logo" href="https://absolvire.uvt.ro/"
                ><img class="logo-uvt" src="../images/Asset%206%402x.png"
              /></a>
            </div>
            <div class="top-nav s-12 l-10">
              <ul class="right">
                <li class="active-item"><a href="#carousel">Acasa</a></li>
                <li><a href="#descriere">Concept</a></li>
                <li><a href="#pachet">Pachet de beneficii</a></li>

                <li>
                  <a href="#inscriere">Înscrie-te la<br />ceremonie</a>
                </li>
                <li><a href="#program">Program</a></li>
                <!-- <li><a href="#locatii">Locații</a></li>-->
                <li>
                  <a href="#editii"
                    >Ediții<br />
                    anterioare</a
                  >
                </li>
                <li><a href="#parteneri">Parteneri</a></li>
                <!--<li><a href="#amintire">Amintiri<br> din studenție</a></li>-->
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>

    <section>
      <!-- CAROUSEL -->
                <div style="margin-top:300px"></div>
      <!-- FORM -->

      <div class="container mt-5">
        <!-- Progress Bar -->
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="progress mb-4">
              <div
                class="progress-bar"
                id="form-progress"
                role="progressbar"
                style="width: 20%"
                aria-valuemin="0"
                aria-valuemax="100"
              ></div>
            </div>
          </div>
        </div>

        <!-- Multi-Step Form -->
        <div class="row justify-content-center">
          <div class="col-md-8">
            <form
              id="multiStepForm"
              action="process.php"
              method="POST"
              novalidate
            >
              <!-- Step 1: Consent for Personal Data Processing -->
              <div class="form-step active">
                <h4>
                  Pasul 1. Acord privind prelucrarea datelor cu caracter
                  personal
                </h4>

                <!-- GDPR Checkbox -->
                <div class="form-check mb-3">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="gdpr"
                    name="gdpr"
                    required
                  />
                  <label for="gdpr" class="form-check-label">
                    Sunt de acord cu prelucrarea datelor mele personale în
                    conformitate cu
                    <a href="https://uvt.ro/gdpr" target="_blank"
                      >regulamentul GDPR</a
                    >.
                  </label>
                  <div class="invalid-feedback">
                    Trebuie să acceptați prelucrarea datelor personale.
                  </div>
                </div>

                <!-- Privacy Policy Checkbox -->
                <div class="form-check">
                  <input
                    type="checkbox"
                    class="form-check-input"
                    id="privacy"
                    name="privacy"
                    required
                  />
                  <label for="privacy" class="form-check-label">
                    Am citit și înțeles
                    <a
                      href="https://plationline.uvt.ro/politica-de-confidentialitate/"
                      target="_blank"
                      >politica de confidențialitate</a
                    >
                    disponibilă pe
                    <a
                      href="https://plationline.uvt.ro/politica-de-confidentialitate/"
                      target="_blank"
                    >
                      pagina UVT</a
                    >.
                  </label>
                  <div class="invalid-feedback">
                    Trebuie să acceptați politica de confidențialitate.
                  </div>
                </div>

                <!-- Navigation Button -->
                <div class="d-flex justify-content-end mt-4">
                  <button type="button" class="btn btn-primary next-step">
                    Continuă
                  </button>
                </div>
              </div>

              <!-- Step 2: Personal Information -->
              <div class="form-step">
                <h4>Pasul 2. Informații Personale</h4>

                <!-- Nume -->
                <div class="mb-3">
                  <label for="lastName" class="form-label"
                    >Numele de familie</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="lastName"
                    name="lastName"
                    pattern="[A-ZÀ-ÖØ-ÞĀ-ŌŎ-ƵǍ-ȘȚ-ɎĀĂÂĈĊČĎĐĒĔĖĘĚĜĞĠĢĤĦĨĪĬĮİĲĴĶĹĻĽĿŁŃŅŇŊŌŎŐŒŔŖŘŚŜŞŠŢŤŦŨŪŬŮŰŲŴŶŸŹŻŽ\u0100-\u017F\s\-]+"
                    placeholder="POPESCU"
                    required
                  />
                  <div class="invalid-feedback">
                    Introduceți numele de familie cu MAJUSCULE și cu DIACRITICE.
                  </div>
                </div>

                <!-- Prenume -->
                <div class="mb-3">
                  <label for="firstName" class="form-label">Prenume</label>
                  <input
                    type="text"
                    class="form-control"
                    id="firstName"
                    name="firstName"
                    pattern="[a-zA-Zà-öø-ÿĀ-ōŏ-ƶǎ-șț-ɏĀăâĉċčďđēĕėęěĝğġģĥħĩīĭįıĳĵķĺļľŀłńņňŋōŏőœŕŗřśŝşšţťŧũūŭůűųŵŷÿźżž\u0100-\u017F\s\-]+"
                    placeholder="Ion"
                    required
                  />
                  <div class="invalid-feedback">
                    Introduceți prenumele cu DIACRITICE..
                  </div>
                </div>

                <!-- E-mail instituțional -->
                <div class="mb-3">
                  <label for="email" class="form-label"
                    >E-mail (instituțional UVT)</label
                  >
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    pattern=".+@e-uvt\.ro"
                    placeholder="ceremonieabsolvire@e-uvt.ro"
                    required
                  />
                  <div id="email-feedback" class="invalid-feedback">
                    Introduceți un e-mail valid care conține @e-uvt.ro.
                  </div>
                  <div
                    id="email-exists-feedback"
                    class="text-danger"
                    style="display: none"
                  >
                    E-mail-ul introdus este deja utilizat!
                  </div>
                </div>

                <!-- Număr de telefon -->
                <div class="mb-3">
                  <label for="phone" class="form-label">Număr de telefon</label>
                  <input
                    type="tel"
                    class="form-control"
                    id="phone"
                    name="phone"
                    pattern="(\+|00)?[0-9]{9,13}"
                    maxlength="13"
                    placeholder="0256592111"
                    required
                  />
                  <div class="invalid-feedback">
                    Introduceți un număr de telefon valid (Exemplu:
                    +40256592111, 0040256592111 sau 0256592111).
                  </div>
                </div>

                <!-- Gen -->
                <div class="mb-3">
                  <label class="form-label">Gen</label>
                  <div class="form-check">
                    <input
                      type="radio"
                      id="male"
                      name="gender"
                      class="form-check-input"
                      value="Masculin"
                      required
                    />
                    <label for="male" class="form-check-label">Masculin</label>
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      id="female"
                      name="gender"
                      class="form-check-input"
                      value="Feminin"
                      required
                    />
                    <label for="female" class="form-check-label">Feminin</label>
                  </div>
                  <div class="invalid-feedback">Selectați sexul.</div>
                </div>

                <!-- CNP -->
                <!-- <div class="mb-3">
                  <label for="cnp" class="form-label"
                    >Cod numeric personal</label
                  >
                  <input
                    type="text"
                    class="form-control"
                    id="cnp"
                    name="cnp"
                    pattern="^\d{1,13}$"
                    maxlength="13"
                    placeholder="1234567891234"
                    required
                  />
                  <div class="invalid-feedback">
                    Introduceți un CNP/ ID valid (maxim 13 cifre).
                  </div>
                </div> -->

         <!-- Județ -->
         <div class="mb-3">
            <label for="county" class="form-label">Județ</label>
            <input type="text" class="form-control" id="county" name="county" placeholder="Timiș" autocomplete="off" required>
            <div id="county-suggestions" class="autocomplete-items"></div>
            <div class="invalid-feedback">Introduceți un județ valid.</div>
         </div>
    
   
         <!-- Oraș -->
         <div class="mb-3">
            <label for="city" class="form-label">Localitate</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Căutați localitatea..." autocomplete="off" required>
            <div id="suggestions" class="autocomplete-items"></div>
            <div class="invalid-feedback">Introduceți localitatea validă.</div>
         </div>
                <!-- Adresă -->
                <div class="mb-3">
                  <label for="address" class="form-label">Adresă</label>
                  <textarea
                    class="form-control"
                    id="address"
                    name="address"
                    placeholder="Bd. Vasile Pârvan, nr. 4, 300223"
                    rows="3"
                    required
                  ></textarea>
                  <div class="invalid-feedback">
                    Introduceți adresa completă (Stradă, Nr., Bl., Sc., Et.,
                    Apt.).
                  </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-end mt-4">
                  <button
                    type="button"
                    class="btn btn-secondary prev-step me-3"
                  >
                    Înapoi
                  </button>
                  <button type="button" class="btn btn-primary next-step">
                    Continuă
                  </button>
                </div>
              </div>

              <!-- Step 3: Academic Information -->
              <div class="form-step">
                <h4>Pasul 3. Informații cu privire la absolvire</h4>

                <!-- Single Specialization -->
                <div class="mb-3">
                  <label for="cycle" class="form-label"
                    >Ciclul de studii:</label
                  >
                  <select id="cycle" name="cycle" class="form-select" required>
                    <option value="">Selectează...</option>
                  </select>
                  <div class="invalid-feedback">
                    Selectați ciclul de studii.
                  </div>
                </div>

                <div class="mb-3">
                  <label for="faculty" class="form-label">Facultate:</label>
                  <select
                    id="faculty"
                    name="faculty"
                    class="form-select"
                    required
                  >
                    <option value="">Selectează...</option>
                  </select>
                  <div class="invalid-feedback">Selectați facultatea.</div>
                </div>

                <div class="mb-3">
                  <label for="programstudy" class="form-label"
                    >Program de studii:</label
                  >
                  <select
                    id="programstudy"
                    name="programstudy"
                    class="form-select"
                    required
                  >
                    <option value="">Selectează...</option>
                  </select>
                  <div class="invalid-feedback">
                    Selectați programul de studii.
                  </div>
                </div>

                <!-- Promoție -->
                <div class="mb-3">
                  <label for="promotion" class="form-label">Promoție:</label>
                  <select
                    id="promotion"
                    name="promotion"
                    class="form-select"
                    onchange="toggleOtherPromotion()"
                    required
                  >
                    <option value="">Selectează...</option>
                    <option value="Actuală">Actuală</option>
                    <option value="2023/2024">Promoția 2023/2024</option>
                    <option value="2022/2023">Promoția 2022/2023</option>
                    <option value="2021/2022">Promoția 2021/2022</option>
                    <option value="2020/2021">Promoția 2020/2021</option>
                    <option value="2019/2020">Promoția 2019/2020</option>
                    <option value="Alte promoții">Alte promoții</option>
                  </select>
                  <div class="invalid-feedback">Selectați promoția.</div>
                </div>

                <!-- Text field for "Alte promoții" -->
                <div id="otherPromotionField" class="mb-3 hidden">
                  <label for="otherPromotion" class="form-label"
                    >Specificați promoția:</label
                  >
                  <input
                    type="text"
                    id="otherPromotion"
                    name="otherPromotion"
                    class="form-control"
                    placeholder="2015/2016"
                  />
                  <div class="invalid-feedback">
                    Introduceți promoția (exemplu: 2024/2025).
                  </div>
                </div>

                <!-- Dublă specializare -->
                <div class="mb-3">
                  <label class="form-label">Dublă specializare:</label>
                  <div class="form-check">
                    <input
                      type="radio"
                      class="form-check-input"
                      id="doubleYes"
                      name="doubleSpecialization"
                      value="Da"
                      onclick="toggleDoubleSpecialization(true)"
                      required
                    />
                    <label class="form-check-label" for="doubleYes">Da</label>
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      class="form-check-input"
                      id="doubleNo"
                      name="doubleSpecialization"
                      value="Nu"
                      onclick="toggleDoubleSpecialization(false)"
                      required
                    />
                    <label class="form-check-label" for="doubleNo">Nu</label>
                  </div>
                </div>

                <!-- Fields for double specialization -->

                <div id="doubleSpecializationFields" class="hidden">
                  <div class="mb-3">
                    <label for="doublecycle" class="form-label"
                      >Ciclul de studii:</label
                    >
                    <select
                      id="doublecycle"
                      name="doublecycle"
                      class="form-select"
                      required
                    >
                      <option value="">Selectează...</option>
                    </select>
                    <div class="invalid-feedback">
                      Selectați ciclul de studii.
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="doubleFaculty" class="form-label"
                      >Facultate:</label
                    >
                    <select
                      id="doubleFaculty"
                      name="doubleFaculty"
                      class="form-select"
                      required
                    >
                      <option value="">Selectează...</option>
                    </select>
                    <div class="invalid-feedback">
                      Selectați facultatea pentru dubla specializare.
                    </div>
                  </div>

                  <div class="mb-3">
                    <label for="doubleProgram" class="form-label"
                      >Program de studii:</label
                    >
                    <select
                      id="doubleProgram"
                      name="doubleProgram"
                      class="form-select"
                      required
                    >
                      <option value="">Selectează...</option>
                    </select>
                    <div class="invalid-feedback">
                      Selectați programul de studii pentru dubla specializare.
                    </div>
                  </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-end mt-4">
                  <button
                    type="button"
                    class="btn btn-secondary prev-step me-3"
                  >
                    Înapoi
                  </button>
                  <button type="button" class="btn btn-primary next-step">
                    Continuă
                  </button>
                </div>
              </div>

              <!-- Step 4: Robes and Caps Information -->
              <div class="form-step">
                <h4 id="step4">
                  Pasul 4. Informații cu privire la robă și tocă
                </h4>

                <!-- Roba -->
                <h5>Roba (se returnează organizatorilor)</h5>
                <p>
                  <i>
                    Ghid de dimensiuni pentru robă: consultați ghidul pentru
                    alegerea mărimii potrivite
                    <a href="#" id="openPdf_1">aici</a>.
                  </i>
                </p>
                <div id="pdfViewer_1" style="display: none; margin-top: 20px">
                  <iframe
                    src="../pdf/ghid_roba.pdf"
                    width="100%"
                    height="600px"
                    style="border: none"
                    title="Ghid de dimensiuni"
                  ></iframe>
                  <button
                    type="button"
                    id="closePdf_1"
                    class="btn btn-secondary"
                    style="margin-top: 20px; margin-bottom: 20px"
                  >
                    &times; Închide
                  </button>
                </div>

                <div class="form-check mb-3">
                  <input
                    type="checkbox"
                    id="robeGuide"
                    name="robeGuide"
                    class="form-check-input"
                    required
                  />
                  <label for="robeGuide" class="form-check-label"
                    >Am luat la cunoștință ghidul de dimensiuni pentru
                    robă.</label
                  >
                  <div class="invalid-feedback">
                    Trebuie să confirmați că ați luat la cunoștință ghidul de
                    dimensiuni pentru robă.
                  </div>
                </div>
                <div class="mb-3">
                  <label for="robeSize" class="form-label"
                    >Mărimea robei:</label
                  >
                  <select
                    id="robeSize"
                    name="robeSize"
                    class="form-select"
                    required
                  >
                    <option value="">Selectează...</option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                  </select>
                  <div class="invalid-feedback">Selectați mărimea robei.</div>
                </div>

                <!-- Tocă -->
                <h5>Tocă (personalizată cu UVT)</h5>

                <p>
                  <i>
                    Ghid de dimensiuni pentru tocă: consultați ghidul pentru
                    alegerea mărimii potrivite
                    <a href="#" id="openPdf_2">aici</a>.
                  </i>
                </p>
                <div id="pdfViewer_2" style="display: none; margin-top: 20px">
                  <iframe
                    src="../pdf/ghid_toca.pdf"
                    width="100%"
                    height="600px"
                    style="border: none"
                    title="Ghid de dimensiuni"
                  ></iframe>
                  <button
                    type="button"
                    id="closePdf_2"
                    class="btn btn-secondary"
                    style="margin-top: 20px; margin-bottom: 20px"
                  >
                    &times; Închide
                  </button>
                </div>

                <div class="form-check mb-3">
                  <input
                    type="checkbox"
                    id="capGuide"
                    name="capGuide"
                    class="form-check-input"
                    required
                  />
                  <label for="capGuide" class="form-check-label"
                    >Am luat la cunoștință ghidul de dimensiuni pentru
                    tocă.</label
                  >
                  <div class="invalid-feedback">
                    Trebuie să confirmați că ați luat la cunoștință ghidul de
                    dimensiuni pentru tocă.
                  </div>
                </div>

                <div class="mb-3">
                  <label for="capSize" class="form-label">Mărimea tocii:</label>
                  <select
                    id="capSize"
                    name="capSize"
                    class="form-select"
                    required
                  >
                    <option value="">Selectează...</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                  </select>
                  <div class="invalid-feedback">Selectați mărimea tocii.</div>
                </div>
                <div class="mb-3">
                  <!-- Kit-ul Alumna/Alumnus UVT -->
                  <p><b>Costul kit-ului și al serviciilor include:</b></p>
                  <ul>
                    <li>
                      Robă – disponibilă pe mărimi diferite, închiriată (se
                      returnează organizatorilor).
                    </li>
                    <li>Tocă personalizată UVT – mărimi diferite.</li>
                    <li>
                      Eșarfă personalizată UVT – cu logo UVT și facultatea
                      absolventului.
                    </li>
                    <li>Pin/Insignă Alumna/Alumnus UVT.</li>
                    <li>
                      Certificat onorific – cu ramă folio și etichetă metalică
                      aurie.
                    </li>
                    <li>Copertă de catifea – pentru certificate.</li>
                    <li>Cutie Kit Alumna/Alumnus UVT.</li>
                    <li>Livestreaming HD – transmisie live a ceremoniei.</li>
                    <li>
                      Album digital – cu fotografii profesionale de la
                      ceremonie.
                    </li>
                    <li>
                      Photo Corners și branding UVT – spidere și roll-up-uri UVT
                      disponibile pentru fotografii la nivel de ceremonie.
                    </li>
                  </ul>
                  <p><b>Costuri:</b></p>
                  <p>
                    Pentru a beneficia de Kit-ul Alumna/Alumnus UVT și de
                    serviciile incluse în Ceremonia de Absolvire UVT 2025, este
                    necesară achitarea unei sume de
                    <strong>190 lei<upper>*</upper> </strong> de către
                    participant.
                  </p>
                  <p>
                    <i
                      ><upper>*</upper>Suma achitată devine nerambursabilă cu 30
                      de zile înainte de data ceremoniei.</i
                    >
                  </p>
                </div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-end mt-4">
                  <button
                    type="button"
                    class="btn btn-secondary prev-step me-3"
                  >
                    Înapoi
                  </button>
                  <button type="button" class="btn btn-primary next-step">
                    Continuă
                  </button>
                </div>
              </div>

              <!-- Step 5: Special Needs Information -->
              <div class="form-step">
                <h4>5. Situații Speciale (dacă este cazul)</h4>

                <!-- Do you have special needs? -->
                <div class="mb-3">
                  <label class="form-label"
                    >Aveți nevoie de asistență specială?</label
                  >
                  <div class="form-check">
                    <input
                      type="radio"
                      id="specialNeedsYes"
                      name="specialNeeds"
                      class="form-check-input"
                      value="Da"
                      onclick="toggleSpecialNeeds(true)"
                      required
                    />
                    <label for="specialNeedsYes" class="form-check-label"
                      >Da</label
                    >
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      id="specialNeedsNo"
                      name="specialNeeds"
                      class="form-check-input"
                      value="Nu"
                      onclick="toggleSpecialNeeds(false)"
                      required
                    />
                    <label for="specialNeedsNo" class="form-check-label"
                      >Nu</label
                    >
                  </div>
                  <div class="invalid-feedback">
                    Selectați dacă aveți nevoie de asistență specială.
                  </div>
                </div>

                <!-- Special needs options -->
                <div id="specialNeedsOptions" class="hidden">
                  <div class="form-check mb-3">
                    <input
                      type="checkbox"
                      id="mobilityAccess"
                      name="mobilityAccess"
                      class="form-check-input"
                    />
                    <label for="mobilityAccess" class="form-check-label"
                      >Acces pentru persoane cu mobilitate redusă</label
                    >
                  </div>
                  <div class="form-check mb-3">
                    <input
                      type="checkbox"
                      id="extraAssistance"
                      name="extraAssistance"
                      class="form-check-input"
                    />
                    <label for="extraAssistance" class="form-check-label"
                      >Asistență suplimentară</label
                    >
                  </div>
                  <div class="invalid-feedback">
                    Bifați cel puțin o opțiune.
                  </div>
                  <div class="mb-3">
                    <label for="otherNeeds" class="form-label"
                      >Vă rugăm să ne furnizați mai multe detalii:</label
                    >
                    <textarea
                      id="otherNeeds"
                      name="otherNeeds"
                      class="form-control"
                      placeholder="Introduceți detalii"
                    ></textarea>
                    <div class="invalid-feedback">
                      Furnizați informațiile necesare.
                    </div>
                  </div>
                </div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-end mt-4">
                  <button
                    type="button"
                    class="btn btn-secondary prev-step me-3"
                  >
                    Înapoi
                  </button>
                  <button type="button" class="btn btn-primary next-step">
                    Continuă
                  </button>
                </div>
              </div>

              <!-- Step 6: Payment Methods -->
              <div class="form-step">
                <h4>6. Metode de Plată</h4>

                <!-- Payment Method: Card -->
                <div class="mb-4">
                  <h5>Plată cash</h5>
                  <div class="form-check mb-2">
                    <input
                      type="radio"
                      id="paymentCard"
                      name="paymentMethod"
                      class="form-check-input"
                      value="Cash"
                      required
                    />
                    <label for="paymentCard" class="form-check-label"
                      >Confirm plata cash </label
                    >
                    <div class="invalid-feedback">
                      Selectați o metoda de plată.
                    </div>
                  </div>
                  <div class="mb-3">
                    <label for="paymentCard" class="form-check-label"
                      >Suma de plată:
                    </label>
                    <input
                      type="text"
                      id="amount"
                      name="amount"
                      value="190.00"
                      readonly
                      style="
                        pointer-events: none;
                        background-color: #f9f9f9;
                        border: none;
                      "
                    />
                    <!--Aici avem recaptcha -->
                     <center>
                      <div
                        class="g-recaptcha"
                        data-sitekey="6LeHncAqAAAAAAJDjHrRx-tlgAoRQebr__F1c0ZW"
                      ></div>
                    </center> 
                  </div>

                  <!-- Confirm Correctness -->
                  <div class="form-check mb-3">
                    <input
                      type="checkbox"
                      id="confirmInfo"
                      name="confirmInfo"
                      class="form-check-input"
                      required
                    />
                    <label for="confirmInfo" class="form-check-label"
                      >Confirm corectitudinea informațiilor furnizate.</label
                    >
                    <div class="invalid-feedback">
                      Trebuie să confirmați corectitudinea informațiilor
                      furnizate.
                    </div>
                  </div>

                  <!-- Confirm Correctness -->
                  <div class="form-check mb-3">
                    <input
                      type="checkbox"
                      id="termeniInfo"
                      name="termeniInfo"
                      class="form-check-input"
                      required
                    />
                    <label for="termeniInfo" class="form-check-label"
                      >Accept
                      <a
                        href="https://plationline.uvt.ro/termeni-si-conditii-absolvire/"
                        target="_blank"
                        >termenii și condițiile</a
                      >, precum și
                      <a
                        href="https://plationline.uvt.ro/politica-de-livrare-anulare-absolvire/"
                        target="_blank"
                        >politica de livrare/ anulare</a
                      >.</label
                    >
                    <div class="invalid-feedback">
                      Trebuie să acceptați termenii și condițiile, precum și
                      politica de livrare/ anulare.
                    </div>
                  </div>
                  <p>
                    După completarea formularului veți fi redirecționat spre
                    pagina de <strong>confirmare a plății cash</strong>.
                  </p>
                  <ul>
                    <li>
                      Veți primi o confirmare automată pe e-mail care va include
                      detaliile înscrierii.
                    </li>
                    <li>
                      Mesaj de confirmare automată după efectuarea plății.
                    </li>
                  </ul>
                </div>
                <div
                  id="form-error-feedback"
                  class="text-danger mb-3"
                  style="display: none"
                ></div>

                <!-- Navigation Buttons -->
                <div class="d-flex justify-content-end mt-4">
                  <button
                    type="button"
                    class="btn btn-secondary prev-step me-3"
                  >
                    Înapoi
                  </button>
                  <button type="submit" class="btn btn-success">Trimite</button>
                </div>

                <div style="text-align: center; margin-top: 20px">
                  <p>
                    <strong
                      >UVT - CENTRUL DE INOVARE SI ANTREPRENORIAT SRL</strong
                    >
                  </p>
                  <p>CUI: RO33990834</p>
                  <p>J35/108/2015</p>
                  <p>
                    E-mail:
                    <a href="mailto:fundatia.uvt@e-uvt.ro"
                      >fundatia.uvt@e-uvt.ro</a
                    >
                  </p>
                  <p>Telefon: <a href="tel:0725380224">0725380224</a></p>
                  <!-- ANPC & EU img -->
                  <div class="mb-3">
                    <div
                      style="
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                      "
                    >
                      <a
                        href="https://ec.europa.eu/consumers/odr/main/index.cfm?event=main.home2.show&amp;lng=RO"
                      >
                        <img
                          width="100px"
                          src="https://wpfitness.eu/wp-content/uploads/2022/10/anpc-sol.png"
                          alt="ANPC SOL"
                        />
                      </a>
                      <a href="https://anpc.ro/ce-este-sal/">
                        <img
                          width="100px"
                          src="https://wpfitness.eu/wp-content/uploads/2022/10/anpc-sal.png"
                          alt="ANPC SAL"
                        />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <!-- SOCIALS -->
      <div id="socials">
        <div class="s-12 m-6 l-3">
          <a
            class="facebook"
            target="_blank"
            href="https://www.facebook.com/uvtromania/?ref=br_rs"
            ><span
              ><i style="font-size: 24px" class="fab fa-facebook-square"></i
              >Alătură-te nouă pe Facebook</span
            ></a
          >
        </div>
        <div class="s-12 m-6 l-3">
          <a class="twitter" target="_blank" href=""
            ><span
              ><i style="font-size: 24px" class="fab fa-twitter-square"></i
              >Urmărește-ne pe Twitter</span
            ></a
          >
        </div>
        <div class="s-12 m-6 l-3">
          <a
            class="google"
            target="_blank"
            href="https://www.linkedin.com/school/west-university-of-timisoara/"
            ><span
              ><i style="font-size: 24px" class="fab fa-linkedin"></i
              >Urmărește-ne pe Linkedin
            </span></a
          >
        </div>
        <div class="s-12 m-6 l-3">
          <a
            class="instagram"
            target="_blank"
            href="https://www.instagram.com/uvt_romania/"
            ><span
              ><i style="font-size: 24px" class="fab fa-instagram-square"></i
              >Urmărește-ne pe Instagram</span
            ></a
          >
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer>
      <div class="line">
        <div class="s-12 l-6">
          <p>
            Copyright 2024,
            <a target="_blank" href="https://www.uvt.ro/ro/"
              >Universitatea de Vest din Timisoara</a
            >
          </p>
        </div>
      </div>
    </footer>

    <link rel="stylesheet" href="../css/leaflet.css" crossorigin="" />
    <script type="text/javascript" src="../js/responsee.js"></script>
    <script type="text/javascript" src="../js/owl.carousel.js"></script>
    <script type="text/javascript" src="../js/template-scripts.js"></script>
    <script type="text/javascript" src="../js/lightcase.js"></script>

    <script>
      const steps = document.querySelectorAll(".form-step");
      const progressBar = document.getElementById("form-progress");
      let currentStep = 0;

      let isEmailValid = false; // Default to invalid

      // Function to show the current step
      function showStep(index) {
        steps.forEach((step, i) => {
          if (i < index) {
            // Mark previous steps as completed
            step.classList.add("completed");
            step
              .querySelectorAll("input, select, textarea")
              .forEach((field) => {
                field.setAttribute("readonly", "true");
              });
          } else {
            // Remove completed status for current and future steps
            step.classList.remove("completed");
            step
              .querySelectorAll("input, select, textarea")
              .forEach((field) => {
                field.removeAttribute("readonly");
              });
          }

          // Toggle visibility
          step.classList.toggle("active", i === index);
        });

        progressBar.style.width = `${((index + 1) / steps.length) * 100}%`;

        // Scroll to the active step
        steps[index].scrollIntoView({ behavior: "smooth", block: "center" });
      }

      // Save all fields to localStorage
      function saveFormData() {
        document
          .querySelectorAll("input, select, textarea")
          .forEach((field) => {
            if (field.type === "checkbox" || field.type === "radio") {
              localStorage.setItem(field.id, field.checked);
            } else {
              localStorage.setItem(field.id, field.value);
            }
          });
      }

      // Restore fields from localStorage
      function restoreFormData() {
        document
          .querySelectorAll("input, select, textarea")
          .forEach((field) => {
            const savedValue = localStorage.getItem(field.id);
            if (savedValue !== null) {
              if (field.type === "checkbox" || field.type === "radio") {
                field.checked = savedValue === "true";
              } else {
                field.value = savedValue;
              }
            }
          });

        // Adjust visibility for dependent fields
        toggleOtherPromotion();
        toggleDoubleSpecialization(
          document.querySelector("#doubleYes")?.checked
        );
        toggleSpecialNeeds(document.querySelector("#specialNeedsYes")?.checked);
      }

      // Clear data on successful submission
      function clearFormData() {
        localStorage.clear();
        document.getElementById("multiStepForm").reset();
        currentStep = 0;
        showStep(currentStep);
      }

      // Validate inputs for the current step 1
      function validateStep() {
        const inputs = steps[currentStep].querySelectorAll(
          "input, select, textarea"
        );
        let valid = true;

        inputs.forEach((input) => {
          if (currentStep === 4) {
            if (
              input.id === "specialNeedsYes" ||
              input.id === "specialNeedsNo"
            ) {
              if (!validateSpecialNeedsRadio()) {
                valid = false;
              }
            } else if (document.getElementById("specialNeedsYes").checked) {
              if (!validateSpecialNeeds()) {
                valid = false;
              }
            }
          }

          if (currentStep === 1 && input.id === "email") {
            // Skip email validation here (handled separately on blur)
            if (!isEmailValid) {
              input.classList.add("is-invalid");
              valid = false;
            }
            return;
          }

          if (!input.checkValidity()) {
            input.classList.add("is-invalid");
            input.reportValidity();
            valid = false;
          } else {
            input.classList.remove("is-invalid");
            input.classList.add("is-valid");
          }
        });

        return valid;
      }

      // Email validation logic
      document
        .getElementById("email")
        .addEventListener("blur", async function () {
          const email = this.value.trim();
          const feedback = document.getElementById("email-feedback");
          const existsFeedback = document.getElementById(
            "email-exists-feedback"
          );

          // Reset feedback messages
          feedback.style.display = "none";
          existsFeedback.style.display = "none";
          this.classList.remove("is-invalid", "is-valid"); // Reset validation states

          

          // Validate email pattern
          const emailPattern = /^[a-zA-Z0-9._%+-]+@e-uvt\.ro$/;
          if (!emailPattern.test(email)) {
            feedback.style.display = "block"; // Show invalid format feedback
            this.classList.add("is-invalid"); // Mark input as invalid
            isEmailValid = false; // Invalid email
            return;
          }

          try {
            // Check if email exists in the database
            const response = await fetch(
              `validate_email.php?email=${encodeURIComponent(email)}`,
              {
                method: "GET",
                headers: {
                  "Content-Type": "application/x-www-form-urlencoded",
                },
                //body: `email=${encodeURIComponent(email)}`,
              }
            );

            if (response.ok) {
              const data = await response.json();

              // Show "email exists" feedback if the email is already used
              if (data.exists) {
                existsFeedback.style.display = "block";
                this.classList.add("is-invalid"); // Mark input as invalid
                isEmailValid = false;
                return;
              } else {
                this.classList.add("is-valid"); // Mark input as valid
                isEmailValid = true;
              }
            } else {
              console.error("Server error:", response.statusText);
            }
          } catch (error) {
            console.error("Error while validating email:", error);
          }
        });

      document.querySelectorAll(".next-step").forEach((button) => {
        button.addEventListener("click", () => {
          if (!validateStep()) {
            console.error("Step validation failed!");
            return;
          }
          if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
          }
        });
      });

      // Previous step logic
      document.querySelectorAll(".prev-step").forEach((button) => {
        button.addEventListener("click", () => {
          if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
          }
        });
      });

          // Form submission logic
        document
        .getElementById("multiStepForm")
        .addEventListener("submit", (e) => {
          e.preventDefault(); // Prevent default form submission

          // Validate all fields before submission
          if (!validateStep()) {
            const errorContainer = document.getElementById("form-error-feedback");
            errorContainer.textContent =
              "Vă rugăm să bifați toate câmpurile obligatorii pentru a putea finaliza formularul.";
            errorContainer.style.display = "block"; // Show the error message
            return;
          }

          saveFormData(); // Ensure form data is saved before submission

          const form = e.target;
          const formData = new FormData(form);

          fetch("process.php", {
            method: "POST",
            body: formData,
          })
            .then((response) => {
              if (!response.ok) {
                throw new Error("Network response was not ok");
              }
              return response.json(); // Expecting JSON response
            })
            .then((data) => {
              const errorContainer = document.getElementById("form-error-feedback");

              if (data.redirect) {
                // Do not clear form data here, just navigate
                window.location.href = data.redirect;
              } else if (data.error) {
                errorContainer.textContent = data.error; // Show server-side error
                errorContainer.style.display = "block";
              }
            })
            .catch((error) => {
              const errorContainer = document.getElementById("form-error-feedback");
              errorContainer.textContent = `Eroare: ${error.message}`;
              errorContainer.style.display = "block";
              console.error("Full Error:", error); // Log the full error for debugging
            });
        });

      // Restore form data on page reload
      window.addEventListener("load", () => {
        restoreFormData();
      });

      // Prevent form submission on Enter key unless all fields are valid
      document
        .getElementById("multiStepForm")
        .addEventListener("keydown", (e) => {
          if (e.key === "Enter") {
            e.preventDefault();

            if (validateStep() && currentStep < steps.length - 1) {
              currentStep++;
              showStep(currentStep);
            }
          }
        });

      // Initialize the first step
      showStep(currentStep);

      // Restore form data on page load
      document.addEventListener("DOMContentLoaded", restoreFormData);

      // Helper functions for conditional fields
      function toggleOtherPromotion() {
        const promotion = document.getElementById("promotion").value;
        const otherPromotionField = document.getElementById(
          "otherPromotionField"
        );

        if (promotion === "Alte promoții") {
          otherPromotionField.classList.remove("hidden");
          document
            .getElementById("otherPromotion")
            .setAttribute("required", "true");
        } else {
          otherPromotionField.classList.add("hidden");
          document.getElementById("otherPromotion").removeAttribute("required");
        }
      }

      function toggleDoubleSpecialization(isDoubleSpecialization) {
        const doubleFields = document.getElementById(
          "doubleSpecializationFields"
        );
        const doubleFaculty = document.getElementById("doubleFaculty");
        const doubleProgram = document.getElementById("doubleProgram");
        const doubleCycle = document.getElementById("doublecycle");

        if (isDoubleSpecialization) {
          doubleFields.classList.remove("hidden");
          doubleCycle.setAttribute("required", "true");
          doubleFaculty.setAttribute("required", "true");
          doubleProgram.setAttribute("required", "true");
        } else {
          doubleFields.classList.add("hidden");

          // Remove required attribute
          doubleCycle.removeAttribute("required");
          doubleFaculty.removeAttribute("required");
          doubleProgram.removeAttribute("required");

          // Clear values and reset validation state
          doubleCycle.value = "";
          doubleFaculty.value = "";
          doubleProgram.value = "";

          doubleCycle.classList.remove("is-invalid", "is-valid");
          doubleFaculty.classList.remove("is-invalid", "is-valid");
          doubleProgram.classList.remove("is-invalid", "is-valid");
        }
      }

      function toggleSpecialNeeds(hasSpecialNeeds) {
        const specialNeedsOptions = document.getElementById(
          "specialNeedsOptions"
        );
        const otherNeeds = document.getElementById("otherNeeds");

        if (hasSpecialNeeds) {
          specialNeedsOptions.classList.remove("hidden");
          otherNeeds.setAttribute("required", "true");
        } else {
          specialNeedsOptions.classList.add("hidden");
          otherNeeds.removeAttribute("required");
          otherNeeds.value = "";
          document.getElementById("mobilityAccess").checked = false;
          document.getElementById("extraAssistance").checked = false;
        }
      }

      function validateSpecialNeedsRadio() {
        const specialNeedsYes = document.getElementById("specialNeedsYes");
        const specialNeedsNo = document.getElementById("specialNeedsNo");
        const feedback = document.querySelector(".invalid-feedback");

        if (!specialNeedsYes.checked && !specialNeedsNo.checked) {
          feedback.style.display = "block";
          specialNeedsYes.classList.add("is-invalid");
          specialNeedsNo.classList.add("is-invalid");
          return false;
        } else {
          feedback.style.display = "none";
          specialNeedsYes.classList.remove("is-invalid");
          specialNeedsNo.classList.remove("is-invalid");
          return true;
        }
      }

      function validateSpecialNeeds() {
        const mobilityAccess = document.getElementById("mobilityAccess");
        const extraAssistance = document.getElementById("extraAssistance");
        const otherNeeds = document.getElementById("otherNeeds");
        const checkboxesFeedback = document.querySelector(
          "#specialNeedsOptions .invalid-feedback"
        );
        const textareaFeedback = otherNeeds.nextElementSibling;

        let valid = true;

        if (document.getElementById("specialNeedsYes").checked) {
          if (!mobilityAccess.checked && !extraAssistance.checked) {
            checkboxesFeedback.style.display = "block";
            mobilityAccess.classList.add("is-invalid");
            extraAssistance.classList.add("is-invalid");
            valid = false;
          } else {
            checkboxesFeedback.style.display = "none";
            mobilityAccess.classList.remove("is-invalid");
            extraAssistance.classList.remove("is-invalid");
          }

          if (!otherNeeds.value.trim()) {
            textareaFeedback.style.display = "block";
            otherNeeds.classList.add("is-invalid");
            valid = false;
          } else {
            textareaFeedback.style.display = "none";
            otherNeeds.classList.remove("is-invalid");
          }
        }

        return valid;
      }

      // Fetch data for study programs
      document.addEventListener("DOMContentLoaded", () => {
        const cycleDropdown = document.getElementById("cycle");
        const facultyDropdown = document.getElementById("faculty");
        const programDropdown = document.getElementById("programstudy");

        const doubleCycleDropdown = document.getElementById("doublecycle");
        const doubleFacultyDropdown = document.getElementById("doubleFaculty");
        const doubleProgramDropdown = document.getElementById("doubleProgram");

        // Fetch data from the server
        fetch("fetch_programeUVT.php")
          .then((response) => response.json())
          .then((data) => {
            if (data.success) {
              populateDropdowns(
                data.data,
                cycleDropdown,
                facultyDropdown,
                programDropdown
              );
              populateDropdowns(
                data.data,
                doubleCycleDropdown,
                doubleFacultyDropdown,
                doubleProgramDropdown
              );
            } else {
              console.error(data.message);
            }
          })
          .catch((error) => console.error("Error fetching data:", error));

        // Populate dropdowns function
        function populateDropdowns(
          data,
          cycleDropdown,
          facultyDropdown,
          programDropdown
        ) {
          resetDropdown(cycleDropdown);

          for (const cycle in data) {
            const option = document.createElement("option");
            option.value = cycle;
            option.textContent = cycle;
            cycleDropdown.appendChild(option);
          }

          cycleDropdown.addEventListener("change", () => {
            const selectedCycle = cycleDropdown.value;
            if (selectedCycle) {
              populateFaculties(
                data[selectedCycle],
                facultyDropdown,
                programDropdown
              );
            } else {
              resetDropdown(facultyDropdown);
              resetDropdown(programDropdown);
            }
          });
        }

        function populateFaculties(
          faculties,
          facultyDropdown,
          programDropdown
        ) {
          resetDropdown(facultyDropdown);
          resetDropdown(programDropdown);

          for (const faculty in faculties) {
            const option = document.createElement("option");
            option.value = faculty;
            option.textContent = faculty;
            facultyDropdown.appendChild(option);
          }

          facultyDropdown.addEventListener("change", () => {
            const selectedFaculty = facultyDropdown.value;
            if (selectedFaculty) {
              populatePrograms(faculties[selectedFaculty], programDropdown);
            } else {
              resetDropdown(programDropdown);
            }
          });
        }

        function populatePrograms(programs, programDropdown) {
          resetDropdown(programDropdown);

          programs.forEach((program) => {
            const option = document.createElement("option");
            option.value = program;
            option.textContent = program;
            programDropdown.appendChild(option);
          });
        }

        function resetDropdown(dropdown) {
          dropdown.innerHTML = '<option value="">Selectează...</option>'; // Reset dropdown
        }
      });

      // PDF viewer 1
      const openPdfLink = document.getElementById("openPdf_1");
      const pdfViewer = document.getElementById("pdfViewer_1");
      const closePdfButton = document.getElementById("closePdf_1");

      // Show PDF viewer when clicking "aici"
      openPdfLink.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default link behavior
        pdfViewer.style.display = "block";
      });

      // Hide PDF viewer when clicking "Închide"
      closePdfButton.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default button behavior
        pdfViewer.style.display = "none";
      });

      // PDF viewer 2
      const openPdfLink2 = document.getElementById("openPdf_2");
      const pdfViewer2 = document.getElementById("pdfViewer_2");
      const closePdfButton2 = document.getElementById("closePdf_2");

      // Show PDF 2 viewer when clicking "aici"
      openPdfLink2.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default link behavior
        pdfViewer2.style.display = "block";
      });

      // Hide PDF 2 viewer when clicking "Închide"
      closePdfButton2.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default button behavior
        pdfViewer2.style.display = "none";
      });


      
// fetch cities counties
let counties = {};   // Store counties and their localities
let selectedCounty = ""; // Track the selected county
let isDataLoaded = false; // Flag to check if data is loaded

// Fetch counties and localities from judete.json
async function fetchData() {
    try {
        const response = await fetch("../judete.json"); // Ensure this path is correct
        const data = await response.json();

        // Extract counties and their respective localities
        data.judete.forEach(judet => {
            let countyName = judet.nume;
            let localityList = judet.localitati.map(loc => loc.nume);

            counties[countyName] = localityList; // Store in dictionary
        });

        isDataLoaded = true; // Mark data as loaded
        console.log("Counties loaded:", Object.keys(counties).length);

    } catch (error) {
        console.error("Error loading data:", error);
    }
}

// Call the function to load data
fetchData();

// Function to show suggestions
function showSuggestions(inputId, suggestionsId, dataList, onSelect) {
    if (!isDataLoaded) return;

    let input = document.getElementById(inputId);
    let suggestionsContainer = document.getElementById(suggestionsId);
    let filter = input.value.toLowerCase();

    // Clear previous suggestions
    suggestionsContainer.innerHTML = "";
    suggestionsContainer.style.display = "block"; // Show suggestions

    // Filter matching entries
    let filteredItems = dataList.filter(item => item.toLowerCase().includes(filter));

    // Show max 10 suggestions
    filteredItems.slice(0, 10).forEach(item => {
        let suggestion = document.createElement("div");
        suggestion.textContent = item;
        suggestion.onclick = function () {
            input.value = item;
            suggestionsContainer.style.display = "none"; // Hide suggestions
            input.classList.remove("is-invalid"); // Remove error if valid
            onSelect(item);
        };
        suggestionsContainer.appendChild(suggestion);
    });

    // Hide dropdown when clicking outside
    document.addEventListener("click", function hideOnClick(event) {
        if (!input.contains(event.target) && !suggestionsContainer.contains(event.target)) {
            suggestionsContainer.style.display = "none";
            document.removeEventListener("click", hideOnClick);
        }
    });
}

// Function to handle county selection
function selectCounty(county) {
    selectedCounty = county;
    document.getElementById("city").value = ""; // Reset city input
    document.getElementById("county").classList.remove("is-invalid");
    document.getElementById("city").classList.remove("is-invalid");
}

// Show county suggestions when typing
document.getElementById("county").addEventListener("input", function () {
    let countyList = Object.keys(counties);
    showSuggestions("county", "county-suggestions", countyList, selectCounty);
});

// Show locality suggestions only for the selected county
document.getElementById("city").addEventListener("input", function () {
    if (!selectedCounty || !counties[selectedCounty]) return;
    let localityList = counties[selectedCounty];
    showSuggestions("city", "suggestions", localityList, () => {});
});

// FIXED: Validate county selection on blur
document.getElementById("county").addEventListener("blur", function () {
    if (!Object.keys(counties).includes(this.value)) {
        this.value = "";
        this.classList.add("is-invalid");
    } else {
        this.classList.remove("is-invalid");
    }
});

// Validate city selection on blur
document.getElementById("city").addEventListener("blur", function () {
    if (selectedCounty && counties[selectedCounty].includes(this.value)) {
        this.classList.remove("is-invalid"); // VALID CITY: Remove error message
    } else {
        this.value = ""; // INVALID CITY: Clear input
        this.classList.add("is-invalid"); // Show error
    }
});
    </script>
  </body>
</html>
