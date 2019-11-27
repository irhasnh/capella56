
<!DOCTYPE HTML>
<html lang="en-US" class="no-js">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">	
  <meta name="Description" content="Make your business optimize with Capella ERP Indonesia The Best Web ERP Apps">
  <meta name="theme-color" content="#f00">    
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->theme->baseUrl?>/css/style.css"/>
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/jquery.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/modernizr.js"></script>
  <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl?>/js/fix-and-clock.js"></script>
</head>

<body>

<!-- FAIL -->
<div id="fail">
	<div class="fail-browser-logo">
    	<img src="<?php echo Yii::app()->theme->baseUrl?>/images/apple-logo-login.png" alt="Mac OS X" />
    </div>
    <div class="fail-browser">
        <p><strong>I'm sorry to inform you that your browser don't support CSS3 Animations!</strong></p> 
        <p>This site uses features that <em>require</em> a modern browser - why not try <a href="http://www.mozilla.org/en-US/firefox/fx/" target="_blank" title="Download Firefox">Firefox</a> ?</p>
    </div>
</div>

<!-- BOOT -->
<div id="pageLoading">
	<div class="loading">
		<div class="apple-logo"></div>
        <div class="spinner"></div>
	</div>
</div>

<!-- DESKTOP -->
<div id="page">
<header id="head">
	<nav id="menu">
    	<ul>
        <li class="apple">
        	<a href="#all">Apple</a>
            <ul class="sublist">
            <li><a href="#about-this-mac" data-rel="show">About This Mac</a></li>
            <li>Software Updates...</li>
            <li>App Store...</li>
            <li class="divider"></li>
            <li>System Preferences...</li>
            <li>Dock
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>Turn Hiding Off</li>
                <li>Turn Magnification Off</li>
                <li class="divider"></li>
                <li>Position on Left</li>
                <li>Position on Bottom</li>
                <li>Position on Right</li>
                <li class="divider"></li>
                <li>Dock Preferences...</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Recent Items
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li class="disable">Applications</li>
                <li class="divider"></li>
                <li class="disable">Documents</li>
                <li class="divider"></li>
                <li class="disable">Servers</li>
                <li class="divider"></li>
                <li>Clear Menu</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Force Quit...</li>
            <li class="divider"></li>
            <li>Sleep</li>
            <li>Restart...</li>
            <li>Shut Down...</li>
            <li class="divider"></li>
            <li>Log Out...</li>
            </ul>
        </li>
        <li class="here">
        	<a href="#all">Finder</a>
        	<ul class="sublist">
            <li><a href="#finder" data-rel="show">About Finder</a></li>
            <li class="divider"></li>
            <li>Preferences...</li>
            <li class="divider"></li>
            <li>Secure Empty Trash...</li>
            <li class="divider"></li>
            <li>Services
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li class="disable">No Services Apply</li>
                <li>Services Preferences...</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Hide Finder</li>
            <li>Hide Others</li>
            <li class="disable">Show All</li>
            </ul>
        </li>
        <li>
        	<a href="#all">File</a>   
            <ul class="sublist">
            <li>New Finder Window</li>
            <li>New Folder</li>
            <li class="disable">New Folder with Selection</li>
            <li>New Smart Folder</li>
            <li>New Burn Folder</li>
            <li class="disable">Open</li>
            <li class="disable">Open With
            	<span class="arrow"></span>
            </li>
            <li class="disable">Print</li>
            <li class="disable">Close Window</li>
            <li class="divider"></li>
            <li>Get Info</li>
            <li class="divider"></li>
            <li class="disable">Compress</li>
            <li class="divider"></li>
            <li class="disable">Duplicate</li>
            <li class="disable">Make Alias</li>
            <li class="disable">Quick Look</li>
            <li class="disable">Show Original</li>
            <li class="disable">Add to Sidebar</li>
            <li class="divider"></li>
            <li class="disable">Move to Trash</li>
            <li class="disable">Eject</li>
            <li>Burn "Desktop" to Disc...</li>
            <li class="divider"></li>
            <li>Find</li>
            <li class="divider"></li>
            <li class="disable">Label:</li>
            </ul> 
        </li>
        <li>
        	<a href="#all">Edit</a>
        	<ul class="sublist">
            <li class="disable">Undo</li>
            <li class="disable">Redo</li>
            <li class="divider"></li>
            <li class="disable">Cut</li>
            <li class="disable">Copy</li>
            <li class="disable">Paste</li>
            <li>Select All</li>
            <li class="divider"></li>
            <li>Show Clipboard</li>
            <li class="divider"></li>
            <li>Special Characters...</li>
            </ul>
        </li>
        <li>
        	<a href="#all">View</a>
        	<ul class="sublist">
            <li class="disable">as Icons</li>
            <li class="disable">as List</li>
            <li class="disable">as Columns</li>
            <li class="disable">as Cover Flow</li>
            <li class="divider"></li>
            <li>Clean Up</li>
            <li>Clean Up By
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>Name</li>
                <li>Kind</li>
                <li>Date Modified</li>
                <li>Date Created</li>
                <li>Size</li>
                <li>Label</li>
                </ul>
            </li>
            <li>Sort By
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>None</li>
                <li class="divider"></li>
                <li>Snap to Grid</li>
                <li class="divider"></li>
                <li>Name</li>
                <li>Kind</li>
                <li>Date Last Opened</li>
                <li>Date Added</li>
                <li>Date Modified</li>
                <li>Date Created</li>
                <li>Size</li>
                <li>Label</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li class="disable">Hide Path Bar</li>
            <li class="disable">Hide Status Bar</li>
            <li class="disable">Hide Sidebar</li>
            <li class="divider"></li>
            <li class="disable">Toolbar</li>
            <li class="disable">Customize Toolbar...</li>
            <li class="divider"></li>
            <li>Show View Options...</li>
            </ul>    
        </li>
        <li>
        	<a href="#all">Go</a>
        	<ul class="sublist">
            <li class="disable">Back</li>
            <li class="disable">Forward</li>
            <li>Enclosing Folder</li>
            <li class="divider"></li>
            <li>All My Files</li>
            <li>Documents</li>
            <li>Desktop</li>
            <li>Downloads</li>
            <li>Home</li>
            <li>Computer</li>
            <li>AirDrop</li>
            <li>Network</li>
            <li>Applications</li>
            <li>Utilities</li>
            <li class="divider"></li>
            <li>Recent Folders
            	<span class="arrow"></span>
                <ul class="sublist-menu">
                <li>2012-01-10</li>
                <li>Archieves</li>
                <li>buildFiles</li>
                <li>MyProjects</li>
                <li>XCode_iPhone</li>
                <li class="divider"></li>
                <li>Clear Menu</li>
                </ul>
            </li>
            <li class="divider"></li>
            <li>Go to Folder...</li>
            <li>Connect to Server...</li>
            </ul>    
        </li>
        <li>
        	<a href="#all">Window</a>
         	<ul class="sublist">
            <li class="disable">Minimize</li>
            <li class="disable">Zoom</li>
            <li class="disable">Cycle Through Windows</li>
            <li class="divider"></li>
            <li>Bring All to Front</li>
            </ul>   
        </li>
        <li><a href="#all">Help</a></li>
        </ul>
	</nav>
    <nav id="menu-dx">
    	<ul>
        <li class="wireless">
        	<a href="#all">Wireless</a>
        </li>
        <li class="time">
        	<ul>
            <li id="DateAbbr"> </li>
            <li class="hour"> </li>
    		<li class="point">:</li>
    		<li class="mins"> </li>
            </ul>
        </li>
        <li class="username">
        	<a href="#all">Alessio Atzeni</a>
        </li>
		</ul>
    </nav>
</header>


<div id="finder" class="window finder">
	<nav class="control-window">
    <a href="#finder" class="close" data-rel="close">close</a>
    <a href="#" class="minimize">minimize</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="titleInside">About Finder</h1>
    <div class="container">
    	<div class="container-inside">
        <img src="<?php echo Yii::app()->theme->baseUrl?>/images/FinderIcon.png" alt="Finder"/>
        <div class="about-this">
        <h2>Finder</h2>
        <p>The Macintosh Desktop Experience</p>
        <p class="small">Finder version 10.7.1</p>
        </div>
        <div class="copyright">
        <p>TM and © 1983-2011 Apple Inc</p>
        <p>All Rights Reserved</p>
        </div>
        </div>
    </div>
</div>

<div id="about-this-mac" class="window mac">
	<nav class="control-window">
    <a href="#about-this-mac" class="close" data-rel="close">close</a>
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="title-mac">About This Mac</h1>
    <div class="container">
    	<div class="container-inside">
    	<img src="<?php echo Yii::app()->theme->baseUrl?>/images/MacOSX.png" alt="Mac OS X"/>
    	<div class="about-this">
    	<p>Version 10.7.2</p>
        <p><a class="button about" href="#">Software Update...</a></p>
        <ul class="hardware">
        <li><strong>Processor</strong> 2 Ghz Intel Core 2 Duo</li>
        <li><strong>Memory</strong> 4 GB 1067 Mhz DDR3</li>
        <li><strong>Startup Disk</strong> Macintosh HD</li>
        </ul>
        <p><a class="button about" href="#">More Info...</a></p>
    	<div class="copyright">
    	<p>TM and © 1983-2011 Apple Inc</p>
        <p>All Rights Reserved</p>
    	</div>
    	</div>
    	</div>
    </div>
</div> 

<div id="warning" class="window warning">
	<div class="tab"></div>
    <div class="container">
    	<div class="container-alert">
        <img src="<?php echo Yii::app()->theme->baseUrl?>/images/Alert.png" alt="alert"/>
        <div class="about-alert">
        <h2>Alert</h2>
        <p>This application cannot be used in this version</p>
        <a href="#warning" class="button blink" data-rel="close">Close</a>
        </div>
        </div>
    </div>
</div>

<div id="trash" class="window warning">
	<div class="tab"></div>
    <div class="container">
    	<div class="container-alert">
        <img src="<?php echo Yii::app()->theme->baseUrl?>/images/FinderIcon.png" width="48px" height="48px" alt="alert"/>
        <div class="about-alert">
        <h2>Secure Empty Trash permanently erases the items in the Trash. Are you sure you want to permanently erase them?</h2>
        <p>If you choose Secure Empty Trash, you can't recover the items unless you've backed them up using Time Machine or another backup program.</p>
        <a href="#warning" class="button blink" data-rel="">Secure Empty Trash</a>
        <a href="#trash" class="button simple" data-rel="close">Cancel</a>
        </div>
        </div>
    </div>
</div>

<div id="project" class="window project">
	<nav class="control-window">
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="titleInside">About This Project</h1>
    <div class="container">
    	<div class="container-inside">
        <img src="<?php echo Yii::app()->theme->baseUrl?>/images/alessio-atzeni-logo.png" alt="Alessio Atzeni Logo" />
        <div class="about-this">
    	<p class="vers">Version 1.1</p>
    	<p><a class="button about" href="http://www.alessioatzeni.com" title="Alessio Atzeni Web Designer &amp; Front-end Developer">By Alessio Atzeni...</a></p>
    	<p>In this project I tried to maximize the use of CSS3.</p>
    	<p>For the <strong>clock</strong> and the <strong>fake login</strong> I used javascript. (knowing the limitations of CSS3).</p>
    	<p>To fix a limitation of the pseudo-class <strong>:target</strong> after login via javascript i added a some classes so 
    	that the <strong>desktop page</strong> remin visible even clicking on other links</p>
    	<p>For more information about this project please visit the link</p>
    	<p><a class="button about" href="http://www.alessioatzeni.com/blog/mac-os-x-lion-with-css3/" title="Mac OS X with CSS3">More Info...</a></p>
        </div>
        </div>
    </div>
</div>

<div id="spec" class="window spec">
	<nav class="control-window">
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    <a href="#" class="deactivate">deactivate</a>
    </nav>
    <h1 class="titleInside">Project Specifics</h1>
    <div class="container">
    	<div class="container-inside">
        <img src="<?php echo Yii::app()->theme->baseUrl?>/images/folder.png" alt="Project Specifics" />
        <div class="about-this">
    	<p class="vers">Version 1.1</p>
        <p><strong>New Version Featured</strong></p>
        <p>Replace some image elements with CSS3, Dock, hide and show window, fix and optimize the code</p>
		<p><strong>Modern Browser Supported</strong></p>
    	<p>Firefox, Safari and Chrome</p>
        <p><strong>HTML 5 and CSS3</strong></p>
    	<p>Intensive use of the CSS3 Keyframes Animations and :target pseudo-class and for GUI</p>
        <p><strong>Javascript</strong></p>
        <p>Clock, Fake Login and add special classes after login to remove animations and fix the desktop, hide and show window and and added classes for the dock</p>
        <p><strong>Draggable Window</strong></p>
        <p>Use a jQuery UI Draggable plugin</p>
        <p><strong>Images</strong></p>
        <p>Use images for logos, user-avatar, spinner loading, cursors, background images, icons</p>
        </div>
        </div>
    </div>
</div>

<div id="share" class="window share">
	<nav class="control-window">
	<a href="#" class="close">close</a>
    <a href="#" class="minimize">minimize</a>
    <a href="#" class="maximize">maximize</a>
    </nav>
    <h1 class="titleInside">Share This</h1>
    <div class="container">
    	<div class="container-inside">
        <ul>
        <li>
        <a href="https://twitter.com/share" class="twitter-share-button" data-url="http://www.alessioatzeni.com/mac-osx-lion-css3/" data-via="Bluxart" data-related="Bluxart">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}
		(document,"script","twitter-wjs");</script>
        </li>
        <li>
        <div id="fb-root"></div>
		<script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/it_IT/all.js#xfbml=1&appId=312294205481553";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-like" data-href="http://www.alessioatzeni.com/mac-osx-lion-css3/" data-send="false" data-layout="button_count" data-width="140" data-show-faces="false" data-font="lucida grande"></div>
        </li>
        <li>
        <div class="g-plusone" data-size="medium" data-href="http://www.alessioatzeni.com/mac-osx-lion-css3/"></div>
        <script type="text/javascript">
          (function() {
            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
            po.src = 'https://apis.google.com/js/plusone.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
          })();
        </script>
        </li>
        </ul>
        </div>
    </div>
</div>

<!-- DOCK -->
<div class="dock">
	<ul>
    	<li id="finderr">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Finder</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/FinderIcon.png" alt="Finder"/>
            </a>
        </li>
        <li id="launchPad">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Launchpad</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/launchPad.png" alt="Launchpad"/>
            </a>
        </li>
        <li id="expose">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Mission Control</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/expose.png" alt="Mission Control"/>
            </a>
        </li>
        <li id="appStore">
        	<a href="#warning" data-rel="showOp">
            	<em><span>App Store</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/appstore.png" alt="App Store"/>
            </a>
        </li>
        <li id="safari">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Safari</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/Safari.png" alt="Safari"/>
            </a>
        </li>
        <li id="iChat">
        	<a href="#warning" data-rel="showOp">
            	<em><span>iChat</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/ichat.png" alt="iChat"/>
            </a>
        </li>
        <li id="facetime">
        	<a href="#warning" data-rel="showOp">
            	<em><span>FaceTime</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/facetime.png" alt="Facetime"/>
            </a>
        </li>
        <li id="addressBook">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Address Book</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/address.png" alt="Address Book"/>
            </a>
        </li>
        <li id="preview">
        	<a href="#warning" data-rel="showOp">
            	<em><span>Preview</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/preview.png" alt="Preview"/>
            </a>
        </li>
        <li id="iTunes">
        	<a href="#warning" data-rel="showOp">
            	<em><span>iTunes</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/iTunes.png" alt="iTunes"/>
            </a>
        </li>
        <li id="preferences">
        	<a href="#warning" data-rel="showOp">
            	<em><span>System Preferences</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/preferences.png" alt="System Preferences"/>
            </a>
        </li>
        <li id="trash">
        	<a href="#trash" data-rel="showOpTrash">
            	<em><span>Trash</span></em>
                <img src="<?php echo Yii::app()->theme->baseUrl?>/images/trash.png" alt="Trash"/>
            </a>
        </li>
    </ul>
</div>

</div>



</body>
</html>
