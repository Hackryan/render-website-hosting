
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
?><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>

body {
  font-family: "Libre Baskerville", serif;
  font-weight: 400;
  font-size: 16px;
  line-height: 30px;
  background-color: #0c0f15;
  overflow-x:hidden;
  color: #ababab; }

::-webkit-scrollbar {
    width: 10px;
    background-color: #F5F5F5;
  
}

::-webkit-scrollbar-thumb {
    background-color: #f90a23;
    background-image: -webkit-linear-gradient(45deg,rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
    background-color: #F5F5F5;
}

.heading-page
{
      text-transform: uppercase;
    font-size: 43px;
    font-weight: bolder;
    letter-spacing: 3px;
    color: white;
}
a {
  color: inherit;
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s; }
  a:hover, a:focus {
    color: #ababab;
    text-decoration: none;
    outline: 0 none; }

h1, h2, h3,
h4, h5, h6 {
  color: #1e2530;
  font-family: "Open Sans", sans-serif;
  margin: 0;
  line-height: 1.3; }

p {
  margin-bottom: 20px; }
  p:last-child {
    margin-bottom: 0; }

/*
 * Selection color
 */
::-moz-selection {
  background-color: #FA6862;
  color: #fff; }

::selection {
  background-color: #FA6862;
  color: #fff; }

/*
 *  Reset bootstrap's default style
 */
.form-control::-webkit-input-placeholder,
::-webkit-input-placeholder {
  opacity: 1;
  color: inherit; }

.form-control:-moz-placeholder,
:-moz-placeholder {
  /* Firefox 18- */
  opacity: 1;
  color: inherit; }

.form-control::-moz-placeholder,
::-moz-placeholder {
  /* Firefox 19+ */
  opacity: 1;
  color: inherit; }

.form-control:-ms-input-placeholder,
:-ms-input-placeholder {
  opacity: 1;
  color: inherit; }

button, input, select,
textarea, label {
  font-weight: 400; }

.btn {
  -webkit-transition: all 0.3s ease 0s;
  -moz-transition: all 0.3s ease 0s;
  -o-transition: all 0.3s ease 0s;
  transition: all 0.3s ease 0s; }
  .btn:hover, .btn:focus, .btn:active:focus {
    outline: 0 none; }

.btn-primary {
  background-color: #FA6862;
  border: 0;
  font-family: "Open Sans", sans-serif;
  font-weight: 700;
  height: 48px;
  line-height: 50px;
  padding: 0 42px;
  text-transform: uppercase; }
  .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary:active:focus {
    background-color: #f9423a; }

.btn-border {
  border: 1px solid #d7d8db;
  display: inline-block;
  padding: 7px; }

/*
 *  CSS Helper Class
 */
.clear:before, .clear:after {
  content: " ";
  display: table; }

.clear:after {
  clear: both; }

.pt-table {
  display: table;
  width: 100%;
  height: -webkit-calc(100vh - 4px);
  height: -moz-calc(100vh - 4px);
  height: calc(100vh - 4px); }

.pt-tablecell {
  display: table-cell;
  vertical-align: middle; }

.overlay {
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%; }

.relative {
  position: relative; }

.primary,
.link:hover {
  color: #FA6862; }

.no-gutter {
  margin-left: 0;
  margin-right: 0; }
  .no-gutter > [class^="col-"] {
    padding-left: 0;
    padding-right: 0; }

.flex {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex; }

.flex-middle {
  -webkit-box-align: center;
  -ms-flex-align: center;
  -webkit-align-items: center;
  -moz-align-items: center;
  align-items: center; }

.space-between {
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  -webkit-justify-content: space-between;
  -moz-justify-content: space-between;
  justify-content: space-between; }

.nicescroll-cursors {
  background: #FA6862 !important; }

.preloader {
  bottom: 0;
  left: 0;
  position: fixed;
  right: 0;
  top: 0;
  z-index: 1000;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-flex;
  display: -ms-flexbox;
  display: flex; }
  .preloader.active.hidden {
    display: none; }

.loading-mask {
  background-color: #FA6862;
  height: 100%;
  left: 0;
  position: absolute;
  top: 0;
  width: 20%;
  -webkit-transition: all 0.6s cubic-bezier(0.61, 0, 0.6, 1) 0s;
  -moz-transition: all 0.6s cubic-bezier(0.61, 0, 0.6, 1) 0s;
  -o-transition: all 0.6s cubic-bezier(0.61, 0, 0.6, 1) 0s;
  transition: all 0.6s cubic-bezier(0.61, 0, 0.6, 1) 0s; }
  .loading-mask:nth-child(2) {
    left: 20%;
    -webkit-transition-delay: 0.1s;
    -moz-transition-delay: 0.1s;
    -o-transition-delay: 0.1s;
    transition-delay: 0.1s; }
  .loading-mask:nth-child(3) {
    left: 40%;
    -webkit-transition-delay: 0.2s;
    -moz-transition-delay: 0.2s;
    -o-transition-delay: 0.2s;
    transition-delay: 0.2s; }
  .loading-mask:nth-child(4) {
    left: 60%;
    -webkit-transition-delay: 0.3s;
    -moz-transition-delay: 0.3s;
    -o-transition-delay: 0.3s;
    transition-delay: 0.3s; }
  .loading-mask:nth-child(5) {
    left: 80%;
    -webkit-transition-delay: 0.4s;
    -moz-transition-delay: 0.4s;
    -o-transition-delay: 0.4s;
    transition-delay: 0.4s; }

.preloader.active.done {
  z-index: 0; }

.preloader.active .loading-mask {
  width: 0; }

/*------------------------------------------------
	Start Styling
-------------------------------------------------*/
.mt20{margin-top:20px;}
.site-wrapper {
  border-top: 4px solid #ff0037; }

.page-close {
  font-size: 30px;
  position: absolute;
  right: 30px;
  top: 30px;
  z-index: 100; }

.page-title {
  margin-bottom: 75px; }
  .page-title img {
    margin-bottom: 20px; }
  .page-title h2 {
    font-size: 68px;
    margin-bottom: 25px;
    position: relative;
    z-index: 0;
    font-weight: 900;
    text-transform: uppercase; }
  .page-title p {
    font-size: 16px; }
  .page-title .title-bg {
    color: rgba(30, 37, 48, 0.07);
    font-size: 158px;
    left: 0;
    letter-spacing: 10px;
    line-height: 0.7;
    position: absolute;
    right: 0;
    top: 50%;
    z-index: -1;
    -webkit-transform: translateY(-50%);
    -moz-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    -o-transform: translateY(-50%);
    transform: translateY(-50%); }

.section-title {
  margin-bottom: 20px; }
  .section-title h3 {
    display: inline-block;
    position: relative; }
    .section-title h3::before, .section-title h3::after {
      content: "";
      height: 2px;
      position: absolute;
      bottom: 8px;
      left: -webkit-calc(100% + 14px);
      left: -moz-calc(100% + 14px);
      left: calc(100% + 14px); }
    .section-title h3::before {
      background-color: #1e2530;
      width: 96px;
      bottom: 14px; }
    .section-title h3::after {
      background-color: #FA6862;
      width: 73px; }
  .section-title.light h3 {
    color: #fff; }
    .section-title.light h3::before {
      background-color: #fff; }

.page-nav {
  bottom: 40px;
  left: 0;
  position: absolute;
  right: 0; }
  .page-nav span {
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    font-weight: 500;
    line-height: 0.9;
    text-transform: uppercase; }

/*------------------------------------------------
    Home Page
-------------------------------------------------*/

.hexagon-item:first-child {
    margin-left: 0;
}

.page-home {
  background-position: center center;
  background-repeat: no-repeat;
  background-size: cover;
  vertical-align: middle; }
  .page-home .overlay {
    background-color: rgba(14, 17, 24, 0.97);
}

/* End of container */
.hexagon-item {
  cursor: pointer;
  width: 200px;
  height: 173.20508px;
  float: left;
  margin-left: -29px;
  z-index: 0;
  position: relative;
  -webkit-transform: rotate(30deg);
  -moz-transform: rotate(30deg);
  -ms-transform: rotate(30deg);
  -o-transform: rotate(30deg);
  transform: rotate(30deg); }
  .hexagon-item:first-child {
    margin-left: 0; }
  .hexagon-item:hover {
    z-index: 1; }
    .hexagon-item:hover .hex-item:last-child {
      opacity: 1;
      -webkit-transform: scale(1.3);
      -moz-transform: scale(1.3);
      -ms-transform: scale(1.3);
      -o-transform: scale(1.3);
      transform: scale(1.3); }
    .hexagon-item:hover .hex-item:first-child {
      opacity: 1;
      -webkit-transform: scale(1.2);
      -moz-transform: scale(1.2);
      -ms-transform: scale(1.2);
      -o-transform: scale(1.2);
      transform: scale(1.2); }
      .hexagon-item:hover .hex-item:first-child div:before,
      .hexagon-item:hover .hex-item:first-child div:after {
        height: 5px; }
    .hexagon-item:hover .hex-item div::before,
    .hexagon-item:hover .hex-item div::after {
      background-color: #ff0037; }
    .hexagon-item:hover .hex-content svg {
      -webkit-transform: scale(0.97);
      -moz-transform: scale(0.97);
      -ms-transform: scale(0.97);
      -o-transform: scale(0.97);
      transform: scale(0.97); }

.page-home .hexagon-item:nth-last-child(1),
.page-home .hexagon-item:nth-last-child(2),
.page-home .hexagon-item:nth-last-child(3) {
  -webkit-transform: rotate(30deg) translate(87px, -80px);
  -moz-transform: rotate(30deg) translate(87px, -80px);
  -ms-transform: rotate(30deg) translate(87px, -80px);
  -o-transform: rotate(30deg) translate(87px, -80px);
  transform: rotate(30deg) translate(87px, -80px); }

.hex-item {
  position: absolute;
  top: 0;
  left: 50px;
  width: 100px;
  height: 173.20508px; }
  .hex-item:first-child {
    z-index: 0;
    -webkit-transform: scale(0.9);
    -moz-transform: scale(0.9);
    -ms-transform: scale(0.9);
    -o-transform: scale(0.9);
    transform: scale(0.9);
    -webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    -moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    -o-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1);
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1); }
  .hex-item:last-child {
    transition: all 0.3s cubic-bezier(0.19, 1, 0.22, 1);
    z-index: 1; }
  .hex-item div {
    box-sizing: border-box;
    position: absolute;
    top: 0;
    width: 100px;
    height: 173.20508px;
    -webkit-transform-origin: center center;
    -moz-transform-origin: center center;
    -ms-transform-origin: center center;
    -o-transform-origin: center center;
    transform-origin: center center; }
    .hex-item div::before, .hex-item div::after {
      background-color: #1e2530;
      content: "";
      position: absolute;
      width: 100%;
      height: 3px;
      -webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
      -moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
      -o-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
      transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s; }
    .hex-item div:before {
      top: 0; }
    .hex-item div:after {
      bottom: 0; }
    .hex-item div:nth-child(1) {
      -webkit-transform: rotate(0deg);
      -moz-transform: rotate(0deg);
      -ms-transform: rotate(0deg);
      -o-transform: rotate(0deg);
      transform: rotate(0deg); }
    .hex-item div:nth-child(2) {
      -webkit-transform: rotate(60deg);
      -moz-transform: rotate(60deg);
      -ms-transform: rotate(60deg);
      -o-transform: rotate(60deg);
      transform: rotate(60deg); }
    .hex-item div:nth-child(3) {
      -webkit-transform: rotate(120deg);
      -moz-transform: rotate(120deg);
      -ms-transform: rotate(120deg);
      -o-transform: rotate(120deg);
      transform: rotate(120deg); }

.hex-content {
  color: #fff;
  display: block;
  height: 180px;
  margin: 0 auto;
  position: relative;
  text-align: center;
  transform: rotate(-30deg);
  width: 156px; }
  .hex-content .hex-content-inner {
    left: 50%;
    margin: -3px 0 0 2px;
    position: absolute;
    top: 50%;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    -o-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); }
  .hex-content .icon {
    display: block;
    font-size: 36px;
    line-height: 30px;
    margin-bottom: 11px; }
  .hex-content .title {
    display: block;
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    letter-spacing: 1px;
    line-height: 24px;
    text-transform: uppercase; }
  .hex-content svg {
    left: -7px;
    position: absolute;
    top: -13px;
    transform: scale(0.87);
    z-index: -1;
    -webkit-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
    -moz-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
    -o-transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) 0s; }
  .hex-content:hover {
    color: #fff; }

.page-home .hexagon-item:nth-last-child(1), .page-home .hexagon-item:nth-last-child(2), .page-home .hexagon-item:nth-last-child(3) {
    -webkit-transform: rotate(30deg) translate(87px, -80px);
    -moz-transform: rotate(30deg) translate(87px, -80px);
    -ms-transform: rotate(30deg) translate(87px, -80px);
    -o-transform: rotate(30deg) translate(87px, -80px);
    transform: rotate(30deg) translate(87px, -80px);
}
/*------------------------------------------------
    Welcome Page
-------------------------------------------------*/
.author-image-large {
  position: absolute;
  right: 0;
  top: 0; }
  .author-image-large img {
    height: -webkit-calc(100vh - 4px);
    height: -moz-calc(100vh - 4px);
    height: calc(100vh - 4px); }


@media (min-width: 1200px)
{
.col-lg-offset-2 {
    margin-left: 16.66666667%;
}
}

@media (min-width: 1200px)
{
.col-lg-8 {
    width: 66.66666667%;
}
}

.hexagon-item:first-child {
    margin-left: 0;
}

.pt-table.desktop-768 .pt-tablecell {
    padding-bottom: 110px;
    padding-top: 60px;
}



.hexagon-item:hover .icon i
{
  color:#ff0037;
  transition:0.6s;
  
}


.hexagon-item:hover .title
{
  -webkit-animation: focus-in-contract 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
	        animation: focus-in-contract 0.5s cubic-bezier(0.250, 0.460, 0.450, 0.940) both;
}
/***************************/

@-webkit-keyframes focus-in-contract {
  0% {
    letter-spacing: 1em;
    -webkit-filter: blur(12px);
            filter: blur(12px);
    opacity: 0;
  }
  100% {
    -webkit-filter: blur(0px);
            filter: blur(0px);
    opacity: 1;
  }
}
@keyframes focus-in-contract {
  0% {
    letter-spacing: 1em;
    -webkit-filter: blur(12px);
            filter: blur(12px);
    opacity: 0;
  }
  100% {
    -webkit-filter: blur(0px);
            filter: blur(0px);
    opacity: 1;
  }
}





@media only screen and (max-width: 767px)
{
.hexagon-item {
    float: none;
    margin: 0 auto 50px;
}
  .hexagon-item:first-child {
    margin-left: auto;
}
  
  .page-home .hexagon-item:nth-last-child(1), .page-home .hexagon-item:nth-last-child(2), .page-home .hexagon-item:nth-last-child(3) {
    -webkit-transform: rotate(30deg) translate(0px, 0px);
    -moz-transform: rotate(30deg) translate(0px, 0px);
    -ms-transform: rotate(30deg) translate(0px, 0px);
    -o-transform: rotate(30deg) translate(0px, 0px);
    transform: rotate(30deg) translate(0px, 0px);
}
  
}


</style></head>
<body><main class="site-wrapper">
  <div class="pt-table desktop-768">
    <div class="pt-tablecell page-home relative" style="">
                    <div class=""></div>

                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-md-offset-1 col-md-10 col-lg-offset-2 col-lg-8">
                                <div class="page-title  home text-center">
                                  
                                    
                                </div>

                                <div class="hexagon-menu clear">
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="/admin/profile.php" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-universal-access"></i>
                                                </span>
                                                <span class="title">Profile lists</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="../public/Google/GO.php" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-bullseye"></i>
                                                </span>
                                                <span class="title">Current Location Generator</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="../public/Google/GO1.php" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-braille"></i>
                                                </span>
                                                <span class="title">Google Drive Generateor</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>    
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="../public/deposit/manual.php" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-id-badge"></i>
                                                </span>
                                                <span class="title">TRANSFER GENERATOR</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="/public/tswift/taco.php" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-life-ring"></i>
                                                </span>
                                                <span class="title">TRANSFER REQUEST FORM</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-clipboard"></i>
                                                </span>
                                                <span class="title">PROFILE INFORMATION FORM</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                    <div class="hexagon-item">
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <div class="hex-item">
                                            <div></div>
                                            <div></div>
                                            <div></div>
                                        </div>
                                        <a href="/admin/dashboard.php" class="hex-content">
                                            <span class="hex-content-inner">
                                                <span class="icon">
                                                    <i class="fa fa-map-signs"></i>
                                                </span>
                                                <span class="title">FROSTING CENTER</span>
                                            </span>
                                            <svg viewBox="0 0 173.20508075688772 200" height="200" width="174" version="1.1" xmlns="http://www.w3.org/2000/svg"><path d="M86.60254037844386 0L173.20508075688772 50L173.20508075688772 150L86.60254037844386 200L0 150L0 50Z" fill="#1e2530"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </div></div>
                </div></div></div></main>
</body></html>