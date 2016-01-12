
<!doctype html>
<head>


    <meta charset="utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex" /> 
    <meta http-equiv="content-type" content="text/plain; charset=UTF-8">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE, NO-STORE, must-revalidate">
    <META HTTP-EQUIV="PRAGMA" CONTENT="NO-CACHE">
    <META HTTP-EQUIV="EXPIRES" CONTENT=0>

    <title>Knowledge Desk</title>
        
    <script src='http://knowledge.desk/assets/js/modernizr-2.5.3.js' type='text/javascript'></script>

    <link rel="stylesheet" href="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.0.0/css/responsive.dataTables.min.css">    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css"> -->

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>     
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>      
    <script src="http://cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>  
    <!--<script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.7.7/js/bootstrap-select.min.js"></script>  -->
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>    
    <script src="https://cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script> 
    <script src="https://cdn.datatables.net/responsive/2.0.0/js/dataTables.responsive.min.js"></script>  
    <script src="http://knowledge.desk/themes/default/js/custom.js?1234"></script>  

    <link rel='stylesheet' type='text/css' href='http://knowledge.desk/themes/default/css/clean-blog.min.css' media='screen' />
<link rel='stylesheet' type='text/css' href='http://knowledge.desk/themes/default/css/bootstrap-datepicker.min.css' media='screen' />
<link rel='stylesheet' type='text/css' href='http://knowledge.desk/themes/default/css/motion-ui.min.css' media='screen' />
<link rel='stylesheet' type='text/css' href='http://knowledge.desk/themes/default/css/offcanvas.css' media='screen' />
<link rel='stylesheet' type='text/css' href='http://knowledge.desk/themes/default/css/semantic.min.css' media='screen' />
<link rel='stylesheet' type='text/css' href='http://knowledge.desk/themes/default/css/custom.css' media='screen' />
<link rel='stylesheet' type='text/css' href='http://knowledge.desk/themes/default/css/bootstrap-select.min.css' media='screen' />
<link rel='stylesheet' type='text/css' href='http://knowledge.desk/themes/default/css/bootstrap.css' media='screen' />
<link rel='stylesheet' type='text/css' href='http://knowledge.desk/assets/css/bootstrap-responsive.css' media='screen' />
<link rel='stylesheet' type='text/css' href='http://knowledge.desk/themes/default/css/custom.css' media='screen' />
<script src='http://knowledge.desk/themes/default/js/semantic.min.js' type='text/javascript'></script>
<script src='http://knowledge.desk/themes/default/js/bootstrap-datepicker.js' type='text/javascript'></script>
<script src='http://knowledge.desk/themes/default/js/bootstrap-select.min.js' type='text/javascript'></script>
<script src='http://knowledge.desk/themes/default/js/motion-ui.min.js' type='text/javascript'></script>
<script src='http://knowledge.desk/themes/default/js/chartist-plugin-tooltip.min.js' type='text/javascript'></script>
<script src='http://knowledge.desk/themes/default/js/clean-blog.min.js' type='text/javascript'></script>
        
        <!--/script-->
    <script type="text/javascript">
                jQuery(document).ready(function($) {
                    $(".scroll").click(function(event){     
                        event.preventDefault();
                        $('html,body').animate({scrollTop:$(this.hash).offset().top},900);
                    });

                    // $('#post_date').datepicker({
                    // format: "yyyy-mm-dd"
                    // });  
                });
    </script>
    <!---->    
    <link rel="shortcut icon" href="http://knowledge.desk/favicon.ico">
</head>
<!-- <body class="desktop" onbeforeunload="return HandleBackFunctionality(this)"> -->
<body class="desktop">
    <!--[if lt IE 7]>
    <p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or
    <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p>
    <![endif]-->
    <noscript>
        <p>Javascript is required to use Bonfire's admin.</p>
    </noscript>

    <!-- Navigation -->

    <nav class="navbar-static-top navbar-inverse navbar navbar-default navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>                
                <a href="http://knowledge.desk/index.php/" class="navbar-brand">Knowledge Desk</a>            </div>
               

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <ul class="nav navbar-nav navbar-right">        
        <li ><a href="http://knowledge.desk/index.php">Home</a></li>
        <li ><a href="http://knowledge.desk/index.php/blog">Blog</a></li>        
        <li class="active"><a href="http://knowledge.desk/index.php/geekzone">Geekzone</a></li>        

         
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="http://knowledge.desk/index.php/admin/settings/users/edit"
                id="tb_email" class="btn dark" title="My Profile">admin 
                <span class="caret"></span></a>         
            <ul class="dropdown-menu">
                <li>
                    <div class="inner">
                        <div class="toolbar-profile-img">
                            <img src='http://www.gravatar.com/avatar/d2a1906e4c9b816eb2f920bbe48bd63b?s=96&amp;r=pg&amp;d=identicon' width='96' height='96' alt='' title='admin' />                        </div>
                        <div class="toolbar-profile-info">
                            <p><strong>admin</strong><br />
                                admin@mybonfire.com                                <br/>
                            </p>
                            <a href="http://knowledge.desk/index.php/admin/settings/users/edit">My Profile</a>
                            <a href="http://knowledge.desk/index.php/logout">Sign Out</a>
                        </div>
                    </div>
                </li>
            </ul>
        </li>                
        
    </ul>
                                    
        <!-- <h3 class="navbar-brand muted">Knowledge Desk</h3> -->


</div>        </div>
        <!-- /.container -->
    </nav>

    
<div id="container" class="quiz well">
        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <h2>Results Page For <span>admin</span></h2>
            <div style="clear:both"></div><div class="col-md-6 clearfix"><h5 class="correct"> <font color="red">Question 1</font></h5></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 2</h5></div><div style="clear:both"></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 3</h5></div><div class="col-md-6 clearfix"><h5 class="correct">Question 4</h5></div><div style="clear:both"></div><div class="col-md-6 clearfix"><h5 class="correct">Question 5</h5></div><div class="col-md-6 clearfix"><h5 class="wrong-answer">Question 6</h5></div><div style="clear:both"></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 7</h5></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 8</h5></div><div style="clear:both"></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 9</h5></div><div class="col-md-6 clearfix"><h5 class="correct">Question 10</h5></div><div style="clear:both"></div><div class="col-md-6 clearfix"><h5 class="correct">Question 11</h5></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 12</h5></div><div style="clear:both"></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 13</h5></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 14</h5></div><div style="clear:both"></div><div class="col-md-6 clearfix"><h5 class="correct">Question 15</h5></div><div class="col-md-6 clearfix"><h5 class="correct">Question 16</h5></div><div style="clear:both"></div><div class="col-md-6 clearfix"><h5 class="correct">Question 17</h5></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 18</h5></div><div style="clear:both"></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 19</h5></div><div class="col-md-6 clearfix"><h5 class="wrong">Question 20</h5></div>            </div>
            <div class="col-md-3">   
                <h2>Top Scorers</h2>
                <ul class="leaders">
                    <li><strong class="currentuser">admin</strong>: 40%</li><li>bhushan: 15%</li>                </ul>
            </div>
        </div>
    </div><!--container-->



<div id="footer" align="center">
    <footer class="footer">
        <p>                        
            Copyright &copy; 2016 Bhushan Gavhale - IGATE Global Solutions. All rights reserved. <br />
            <a>contact us</a> 
            Powered by <a href="http://cibonfire.com" target="_blank"><span class="icon-fire"></span>&nbsp;Bonfire</a> v0.8.3            
        </p>
    </footer>    
    <div id="debug"><!-- Stores the Profiler Results --></div>
    <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="http://knowledge.desk/assets/js/jquery-1.7.2.min.js"><\/script>');</script>
     -->
</div>
<style type="text/css">
#ci-profiler-menu-open{background-color:#141722;position:fixed;left:0;bottom:0;padding:5px 7px;}
#ci-profiler-menu-open img{display:block;}
#ci-profiler-menu-open:hover{background-color:#5a8616;}
#codeigniter-profiler{background-color:#141722;clear:both;font-family:'Helvetica Neue',Helvetica,Arial,sans-serif;position:fixed;bottom:0;left:0;width:100%;z-index:1000;}
#profiler-panel{background-color:#1f2332;padding:0 5px;}
#profiler-panel .main{font-family:Monaco,'Lucida Console','Courier New',monospace;}
.ci-profiler-box{padding:0 10px 10px 10px;margin:0 0 10px 0;max-height:300px;overflow:auto;color:#fff;font-size:11px!important;}
.ci-profiler-box h2{color:#fff;font-weight:bolder;font-size:16px!important;padding:0 0 0 5px;line-height:2.0;}
#ci-profiler-menu a{display:inline-block;font-size:13px;font-weight:200;line-height:25px;padding:3px 7px;color:#fff;text-decoration:none;cursor:pointer;}
#ci-profiler-menu a:first-child img{vertical-align:middle;margin-bottom:2px;cursor:default;}
#ci-profiler-menu a:first-child:hover,#ci-profiler-menu a:last-child:hover{background-color:transparent!important;}
#ci-profiler-menu a span{background-color:#fff;border-radius:4px;font-size:11px;font-weight:600;padding:2px 5px;vertical-align:bottom;}
#ci-profiler-menu > a.current{padding-bottom:4px;}
#ci-profiler-menu-time:hover,#ci-profiler-menu-time:focus,#ci-profiler-menu-time.current,#ci-profiler-benchmarks h2{background-color:#b72f09}
#ci-profiler-menu-time span{color:#b72f09;}
#ci-profiler-menu-memory:hover,#ci-profiler-menu-memory:focus,#ci-profiler-menu-memory.current,#ci-profiler-memory h2{background-color:#953fa1;}
#ci-profiler-menu-memory span{color:#953fa1;}
#ci-profiler-menu-queries:hover,#ci-profiler-menu-queries:focus,#ci-profiler-menu-queries.current,#ci-profiler-queries h2{background-color:#3769a0;}
#ci-profiler-menu-queries span{color:#3769a0;}
#ci-profiler-menu-vars:hover,#ci-profiler-menu-vars:focus,#ci-profiler-menu-vars.current,#ci-profiler-vars h2{background-color:#d28c00;}
#ci-profiler-menu-vars span{color:#d28c00;}
#ci-profiler-menu-files:hover,#ci-profiler-menu-files:focus,#ci-profiler-menu-files.current,#ci-profiler-files h2{background-color:#5a8616;}
#ci-profiler-menu-files span{color:#5a8616;} #ci-profiler-menu-console:hover,#ci-profiler-menu-console:focus,#ci-profiler-menu-console.current,#ci-profiler-console h2{background-color:#5a8616;}
#ci-profiler-menu-console span{color:#5a8616;}
.ci-profiler-db-explain{display:block;}
.ci-profiler-db-explain em,#ci-profiler-queries b,#ci-profiler-queries .hilight{font-weight:bolder;color:#3769a0!important;font-style:normal;}
#ci-profiler-vars .hilight{color:#d28c00!important;}
#ci-profiler-memory .hilight{color:#953fa1!important;}
#ci-profiler-benchmarks .hilight{color:#b72f09!important;}
#ci-profiler-console .hilight{color:#5a8616!important;}
#codeigniter-profiler table{width:100%;}
#codeigniter-profiler table.main td{padding:7px 15px;text-align:left;vertical-align:top;color:#000;line-height:1.5;background-color:#f0f0f0!important;font-size:12px!important;}
#codeigniter-profiler table.main tr:hover td{background-color:#cdd1d4!important;}
#codeigniter-profiler table.main code{padding:0;background:transparent;border:0;color:#fff;}
#codeigniter-profiler table .faded{color:#aaa!important;}
#codeigniter-profiler table .small{font-size:10px;letter-spacing:1px;font-weight:lighter;}
#ci-profiler-menu-exit{background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAPCAYAAAA71pVKAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyNpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOkQwQUYxNjIzQkNGOTExRTM4OTY3QzU4NjQ2QzdDQkMzIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOkQwQUYxNjI0QkNGOTExRTM4OTY3QzU4NjQ2QzdDQkMzIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6RDBBRjE2MjFCQ0Y5MTFFMzg5NjdDNTg2NDZDN0NCQzMiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6RDBBRjE2MjJCQ0Y5MTFFMzg5NjdDNTg2NDZDN0NCQzMiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz6BRWmSAAABa0lEQVR42lzTzyuEURTG8TtjzDSKjEayUBbU/AWymZ0s/KghG2xkwcZCrKSklGzskGJrR6MsZEGRiIUNC0tRo8mGIUS8vrd5bl3vrU/dc885t/ed804kCIKEMSaKH3yZ8upBB+rwjCPsKhdHBX4NzUnEYfddeMQHbnCOa7zjCTnVVdo+4zVOB+W1ibTOnBRWlZ91F7hkTomBUFM8FHerbtjG7tCuDe1rsYaM4mbFDYqXVR81uiXwbj9QfIt2XCk+9WrsGrebHVzqMIJeFIL/q4g+5W3dCfbtiNIoemPYQ7/5v4aQR0JxAfW2+RU1OvxGCxZCzXPIeN9BCiX7CFOaq3ufQz1qCWOar10XXs0L5uymSslJJdpwjE7FWb1jVvGo6lPuphkdtIbmmgjFTapbdHOOKbGlxEiowRlUPq845r5tN4J5FdxrhOvYxp3Ol7zLkhHvX/UJnsU0YgJZVOMNZ1jBg37tpP1X/QkwAM/DSXbJEwZhAAAAAElFTkSuQmCC) 0% 0% no-repeat;position:absolute;right:5px;top:9px;height:2.1em;width:2em;}
.ci-profiler-box .hilight{width:9em;}
div.ci-profiler-box{display:none;}
</style>
<script type="text/javascript">
var ci_profiler_bar = {
    /** Current toolbar section open */
    current: null,
    /** Current vars and config section open */
    currentvar: null,
    /** Current config section open */
    currentli: null,
    /** The class name used for the active section */
    currentClass: 'current',
    /** The id of the icon used to open the profiler */
    openIconId: 'ci-profiler-menu-open',
    /** The id of the profiler itself */
    profilerId: 'codeigniter-profiler',
    /** Toggle a toolbar section */
    show: function(obj, el) {
        if (obj == ci_profiler_bar.current) {
            this.off(obj, el);
            this.current = null;
            this.currentvar = null;
        } else {
            this.off(this.current, this.currentvar);
            this.current = obj;
            this.currentvar = el;
            this.on(this.current, this.currentvar);
        }
    },
    /** Turn an element on */
    on: function(obj, el) {
        if (document.getElementById(obj) != null) {
            document.getElementById(obj).style.display = 'block';
        }
        this.add_class(el, this.currentClass);
    },
    /** Turn an element off */
    off: function(obj, el) {
        if (document.getElementById(obj) != null) {
            document.getElementById(obj).style.display = 'none';
        }
        this.remove_class(el, this.currentClass);
    },
    /** Toggle an element */
    toggle: function(obj) {
        if (typeof obj == 'string') {
            obj = document.getElementById(obj);
        }
        if (obj) {
            obj.style.display = obj.style.display == 'none' ? 'block' : 'none';
        }
    },
    /** Open the toolbar */
    open: function() {
        document.getElementById(this.openIconId).style.display = 'none';
        document.getElementById(this.profilerId).style.display = 'block';
        this.set_cookie('open');
    },
    /** Close the toolbar */
    close : function() {
        document.getElementById(this.profilerId).style.display = 'none';
        document.getElementById(this.openIconId).style.display = 'block';
        this.set_cookie('closed');
    },
    /** Add class to element */
    add_class: function(obj, a_class) {
        document.getElementById(obj).className += " " + a_class;
    },
    /** Remove class from element */
    remove_class : function(obj, r_class) {
        if (undefined != obj) {
            document.getElementById(obj).className = document.getElementById(obj).className.replace(r_class, '');
        }
    },
    /** Read the cookie */
    read_cookie: function() {
        var nameEQ = "Profiler=",
            ca = document.cookie.split(';'),
            i = 0,
            c;
        for (i = 0; i < ca.length; i++) {
            c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1, c.length);
            }
            if (c.indexOf(nameEQ) == 0) {
                return c.substring(nameEQ.length, c.length);
            }
        }
        return null;
    },
    /** Set the cookie. */
    set_cookie: function(value) {
        var expires = "; expires=",
            date = new Date();
        date.setTime(date.getTime() + (365*24*60*60*1000));
        expires += date.toGMTString();
        document.cookie = "Profiler=" + value + expires + "; path=/";
    },
    /** Set the load state */
    set_load_state: function() {
        var cookie_state = this.read_cookie();
        if (cookie_state == 'open') {
            this.open();
        } else {
            this.close();
        }
    },
    /** Toggle a data table */
    toggle_data_table: function(obj) {
        if (typeof obj == 'string') {
            obj = document.getElementById(obj + '_table');
        }
        if (obj) {
            obj.style.display = obj.style.display == 'none' ? 'block' : 'none';
        }
    }
};
window.onload = function() {
    ci_profiler_bar.set_load_state();
}
</script>
<a href="#codeigniter-profiler" id="ci-profiler-menu-open" onclick="ci_profiler_bar.open(); return false;"><img width="22" height="22" alt="Profiler" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3NpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo5YmMwMzhkZi0xZGNjLTRhNGYtYjI0ZC0zN2RhYjAzZGNiMjYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NkJFRjQxMDhCQ0Y4MTFFMzg5NjdDNTg2NDZDN0NCQzMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NkJFRjQxMDdCQ0Y4MTFFMzg5NjdDNTg2NDZDN0NCQzMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OWJjMDM4ZGYtMWRjYy00YTRmLWIyNGQtMzdkYWIwM2RjYjI2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjliYzAzOGRmLTFkY2MtNGE0Zi1iMjRkLTM3ZGFiMDNkY2IyNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgSqUnYAAAHjSURBVHjarJRLKEVBGMe/43G7XQt5lM2VkhARFhaUkpVHibIXSSIWFrKyoaxYKBsLwsZCFmJjjY2FEll4LAhJHuV1cc74z5w5t3HOnOvKnfqdme873/znO9/MHIMxRqJZH/RLC4MgOIkZlRSwO4q/5YHReIP/IhwBXaAh0cJdsu9NpHAT6JPjokQJ14ANxTYTIdwCtl2+8/8Kt4N1jX/3P8LFYNXnnZNxRqx6+wm7M31Watsv+3xwDNq0CvzmCcyIwyRgLjrAg2JHJI7dHZ0v9QzXlc4BN8RdRnTtV5AGOsG8PjsRX4nnvvdKM8oCA2JsKBMsFiKT5WK8AKucmdYpfCRwkrLjp0C1t8YGNYJWO3t8zpdlY/IysWE+hv+ALCqAPSP9JP08iXrMbPYKM6pCQAn75ILMzpboDXxhwSG+SVxIZGfQoMCZKhbhSVhhjzBWDiAg+UcpiOqU41UWLY/dZsCSq3QvuuN2CM4UexzsgRGwA+Y02zatjK9kvEd4BSwrtnNB1kAtuHZ9DW+3yngWLOqE78EYuCDSSOhboeyPwIT6InqOWeTd8aWDR7Cp7rLPUpcgE2TL805GIOh7pZ8A38RU0BMj2y1wB0KOaDz/ChxOcaZ5XVM070vlP7rCb9VvAQYARSbvijTk29UAAAAASUVORK5CYII=" /></a>
<div id="codeigniter-profiler">
    <div id="ci-profiler-menu">
        <!-- CI Logo -->
        <a><img width="22" height="22" alt="Profiler" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABYAAAAWCAYAAADEtGw7AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3NpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo5YmMwMzhkZi0xZGNjLTRhNGYtYjI0ZC0zN2RhYjAzZGNiMjYiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6NkJFRjQxMDhCQ0Y4MTFFMzg5NjdDNTg2NDZDN0NCQzMiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6NkJFRjQxMDdCQ0Y4MTFFMzg5NjdDNTg2NDZDN0NCQzMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6OWJjMDM4ZGYtMWRjYy00YTRmLWIyNGQtMzdkYWIwM2RjYjI2IiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjliYzAzOGRmLTFkY2MtNGE0Zi1iMjRkLTM3ZGFiMDNkY2IyNiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgSqUnYAAAHjSURBVHjarJRLKEVBGMe/43G7XQt5lM2VkhARFhaUkpVHibIXSSIWFrKyoaxYKBsLwsZCFmJjjY2FEll4LAhJHuV1cc74z5w5t3HOnOvKnfqdme873/znO9/MHIMxRqJZH/RLC4MgOIkZlRSwO4q/5YHReIP/IhwBXaAh0cJdsu9NpHAT6JPjokQJ14ANxTYTIdwCtl2+8/8Kt4N1jX/3P8LFYNXnnZNxRqx6+wm7M31Watsv+3xwDNq0CvzmCcyIwyRgLjrAg2JHJI7dHZ0v9QzXlc4BN8RdRnTtV5AGOsG8PjsRX4nnvvdKM8oCA2JsKBMsFiKT5WK8AKucmdYpfCRwkrLjp0C1t8YGNYJWO3t8zpdlY/IysWE+hv+ALCqAPSP9JP08iXrMbPYKM6pCQAn75ILMzpboDXxhwSG+SVxIZGfQoMCZKhbhSVhhjzBWDiAg+UcpiOqU41UWLY/dZsCSq3QvuuN2CM4UexzsgRGwA+Y02zatjK9kvEd4BSwrtnNB1kAtuHZ9DW+3yngWLOqE78EYuCDSSOhboeyPwIT6InqOWeTd8aWDR7Cp7rLPUpcgE2TL805GIOh7pZ8A38RU0BMj2y1wB0KOaDz/ChxOcaZ5XVM070vlP7rCb9VvAQYARSbvijTk29UAAAAASUVORK5CYII=" /></a>
                <!-- Console -->
        <a href="#ci-profiler-console" id="ci-profiler-menu-console" onclick="ci_profiler_bar.show('ci-profiler-console', 'ci-profiler-menu-console'); return false;">
            Console            <span>0</span>
        </a>
                <!-- Benchmarks -->
        <a href="#ci-profiler-benchmarks" id="ci-profiler-menu-time" onclick="ci_profiler_bar.show('ci-profiler-benchmarks', 'ci-profiler-menu-time'); return false;">
            Load Time            <span>488ms</span>
        </a>
        <a href="#ci-profiler-memory" id="ci-profiler-menu-memory" onclick="ci_profiler_bar.show('ci-profiler-memory', 'ci-profiler-menu-memory'); return false;">
            Memory Used            <span>4.14 MB</span>
        </a>
                <!-- Queries -->
        <a href="#ci-profiler-queries" id="ci-profiler-menu-queries" onclick="ci_profiler_bar.show('ci-profiler-queries', 'ci-profiler-menu-queries'); return false;">
            Database            <span>73                Queries            </span>
        </a>
                <!-- Vars and Config -->
        <a href="#ci-profiler-vars" id="ci-profiler-menu-vars" onclick="ci_profiler_bar.show('ci-profiler-vars', 'ci-profiler-menu-vars'); return false;">
            <span>vars</span> &amp; Config        </a>
                <!-- Files -->
        <a href="#ci-profiler-files" id="ci-profiler-menu-files" onclick="ci_profiler_bar.show('ci-profiler-files', 'ci-profiler-menu-files'); return false;">
            Files            <span>103</span>
        </a>
                <a href="#ci-profiler-menu-open" id="ci-profiler-menu-exit" onclick="ci_profiler_bar.close(); return false;"></a>
    </div>
    <!-- Profiler Panel -->
    <div id="profiler-panel">
                <!-- Console -->
        <div id="ci-profiler-console" class="ci-profiler-box">
            <h2>Console</h2>
                        <table class="main">
                            </table>
                    </div>
        <!-- Memory -->
        <div id="ci-profiler-memory" class="ci-profiler-box">
            <h2>Memory Usage</h2>
                        <table class="main">
                            </table>
                    </div>
                <!-- Benchmarks -->
        <div id="ci-profiler-benchmarks" class="ci-profiler-box">
            <h2>Benchmarks</h2>
                        <table class="main">
                                <tr>
                    <td class="hilight">30 ms</td>
                    <td>Loading Time: Base Classes</td>
                </tr>
                                <tr>
                    <td class="hilight">390 ms</td>
                    <td>Controller Execution Time ( Geekzone / Quiz Results )</td>
                </tr>
                                <tr>
                    <td class="hilight">488 ms</td>
                    <td>Total Execution Time</td>
                </tr>
                            </table>
                    </div>
                <!-- Queries -->
        <div id="ci-profiler-queries" class="ci-profiler-box">
            <h2>Queries</h2>
                        <table class="main">
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> GET_LOCK<strong>(</strong>'00f20830f5f5454f9c3072ef5a4e50b777fd72f6', 300<strong>)</strong><strong> AS </strong>ci_session_lock<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em></em> - Key Used: <em></em> - Type: <em></em> - Rows: <em></em> - Extra: <em>No tables used</em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> `data`
<strong>FROM</strong> `bf_ci3_sessions`
<strong>WHERE</strong> `id` = '00f20830f5f5454f9c3072ef5a4e50b777fd72f6'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0020</td>
                    <td>SHOW TABLES <strong>FROM</strong> `knowledgedesk`</td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_settings`<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em></em> - Key Used: <em></em> - Type: <em>ALL</em> - Rows: <em>37</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> `bf_users`.*, `role_name`
<strong>FROM</strong> `bf_users`
<strong>LEFT JOIN</strong> `bf_roles`<strong> ON</strong> `bf_roles`.`role_id` = `bf_users`.`role_id`
<strong>WHERE</strong> `bf_users`.`id` = '1'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0020</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_useraudit`
<strong>WHERE</strong> `user_id` = 1
<strong>and</strong> `quiz_id` = '126'
<strong>and</strong> `session_id` = '00f20830f5f5454f9c3072ef5a4e50b777fd72f6'<span class='ci-profiler-db-explain'>Speed: <em>0.0020</em> - Possible keys: <em>user_id,quiz_id</em> - Key Used: <em>quiz_id,user_id</em> - Type: <em>index_merge</em> - Rows: <em>12</em> - Extra: <em>Using<strong> IN</strong>tersect<strong>(</strong>quiz_id,user_id<strong>)</strong>; Using <strong>WHERE</strong></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_quiz_users`
<strong>WHERE</strong> `quiz_id` = '126'
<strong>ORDER BY</strong> `percent_score` DESC, `date_submitted` DESC
 <strong>LIMIT</strong> 30<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>quiz_id</em> - Key Used: <em>quiz_id</em> - Type: <em>ref</em> - Rows: <em>2</em> - Extra: <em>Using<strong> IN</strong>dex condition; Using <strong>WHERE</strong>; Using filesort</em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_quizzes`
<strong>WHERE</strong> `bf_geekzone_quizzes`.`id` = '126'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> `bf_users`.*, `role_name`
<strong>FROM</strong> `bf_users`
<strong>LEFT JOIN</strong> `bf_roles`<strong> ON</strong> `bf_roles`.`role_id` = `bf_users`.`role_id`
<strong>WHERE</strong> `bf_users`.`id` = '1'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_quizzes`
<strong>WHERE</strong> `bf_geekzone_quizzes`.`id` = '126'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> `bf_users`.*, `role_name`
<strong>FROM</strong> `bf_users`
<strong>LEFT JOIN</strong> `bf_roles`<strong> ON</strong> `bf_roles`.`role_id` = `bf_users`.`role_id`
<strong>WHERE</strong> `bf_users`.`id` = '3'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1307'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1307'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1314'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1314'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1327'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0890</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1327'<span class='ci-profiler-db-explain'>Speed: <em>0.0890</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1336'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1336'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1215'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0800</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1215'<span class='ci-profiler-db-explain'>Speed: <em>0.0800</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1219'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1219'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1226'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1226'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1234'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1234'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1249'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1249'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1259'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1259'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1263'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1263'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1265'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1265'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1280'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1280'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1300'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1300'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1312'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1312'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1313'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1313'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1316'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1316'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1281'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1281'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1333'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1333'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_questions`
<strong>WHERE</strong> `bf_geekzone_questions`.`id` = '1341'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0010</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_categories`
<strong>WHERE</strong> `bf_geekzone_categories`.`id` = '15'<span class='ci-profiler-db-explain'>Speed: <em>0.0010</em> - Possible keys: <em>PRIMARY</em> - Key Used: <em>PRIMARY</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.0000</td>
                    <td><strong>SELECT</strong> *
<strong>FROM</strong> `bf_geekzone_answers`
<strong>WHERE</strong> `question_id` = '1341'<span class='ci-profiler-db-explain'>Speed: <em>0.0000</em> - Possible keys: <em>foregin_key</em> - Key Used: <em>foregin_key</em> - Type: <em>const</em> - Rows: <em>1</em> - Extra: <em></em></span></td>
                </tr>
                                <tr>
                    <td class="hilight">0.2030</td>
                    <td>Total Query Execution Time</td>
                </tr>
                            </table>
                    </div>
                <!-- Vars and Config -->
        <div id="ci-profiler-vars" class="ci-profiler-box">
                        <!-- User Data -->
            <a href="#" onclick="ci_profiler_bar.toggle_data_table('userdata'); return false;">
                <h2>Session User Data</h2>
            </a>
                        <table class="main" id="userdata_table">
                                <tr>
                    <td class="hilight">__ci_last_regenerate</td>
                    <td>1452504208</td>
                </tr>
                                <tr>
                    <td class="hilight">requested_page</td>
                    <td>http://knowledge.desk/index.php/geekzone/quiz_results/126</td>
                </tr>
                                <tr>
                    <td class="hilight">previous_page</td>
                    <td>http://knowledge.desk/index.php/geekzone/quiz_results/126</td>
                </tr>
                                <tr>
                    <td class="hilight">user_id</td>
                    <td>1</td>
                </tr>
                                <tr>
                    <td class="hilight">auth_custom</td>
                    <td>admin</td>
                </tr>
                                <tr>
                    <td class="hilight">user_token</td>
                    <td>a9e4d623226cfeea8661e67e47278f2f9d64cb15</td>
                </tr>
                                <tr>
                    <td class="hilight">identity</td>
                    <td>admin@mybonfire.com</td>
                </tr>
                                <tr>
                    <td class="hilight">role_id</td>
                    <td>1</td>
                </tr>
                                <tr>
                    <td class="hilight">logged_in</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">language</td>
                    <td>english</td>
                </tr>
                                <tr>
                    <td class="hilight">numquestions</td>
                    <td>20</td>
                </tr>
                                <tr>
                    <td class="hilight">attempted_questions</td>
                    <td>Array
(
    [0] =&amp;gt; 1307
    [1] =&amp;gt; 1314
    [2] =&amp;gt; 1327
    [3] =&amp;gt; 1336
    [4] =&amp;gt; 1215
    [5] =&amp;gt; 1219
    [6] =&amp;gt; 1226
    [7] =&amp;gt; 1234
    [8] =&amp;gt; 1249
    [9] =&amp;gt; 1259
    [10] =&amp;gt; 1263
    [11] =&amp;gt; 1265
    [12] =&amp;gt; 1280
    [13] =&amp;gt; 1300
    [14] =&amp;gt; 1312
    [15] =&amp;gt; 1313
    [16] =&amp;gt; 1316
    [17] =&amp;gt; 1281
    [18] =&amp;gt; 1333
    [19] =&amp;gt; 1341
)
</td>
                </tr>
                                <tr>
                    <td class="hilight">quiz</td>
                    <td>FaceOff</td>
                </tr>
                                <tr>
                    <td class="hilight">quiz_category</td>
                    <td>PL/SQL and Oracle</td>
                </tr>
                                <tr>
                    <td class="hilight">difficulty_level</td>
                    <td>10</td>
                </tr>
                                <tr>
                    <td class="hilight">nonce</td>
                    <td>00f20830f5f5454f9c3072ef5a4e50b777fd72f6</td>
                </tr>
                                <tr>
                    <td class="hilight">quizid</td>
                    <td>126</td>
                </tr>
                                <tr>
                    <td class="hilight">score</td>
                    <td>8</td>
                </tr>
                                <tr>
                    <td class="hilight">consecutive_correct</td>
                    <td>0</td>
                </tr>
                                <tr>
                    <td class="hilight">correct</td>
                    <td>Array
(
)
</td>
                </tr>
                                <tr>
                    <td class="hilight">wrong</td>
                    <td>Array
(
)
</td>
                </tr>
                                <tr>
                    <td class="hilight">finished</td>
                    <td>yes</td>
                </tr>
                                <tr>
                    <td class="hilight">num</td>
                    <td>20</td>
                </tr>
                                <tr>
                    <td class="hilight">starttime</td>
                    <td>2016-01-11 14:55:31</td>
                </tr>
                                <tr>
                    <td class="hilight">questions_remaining</td>
                    <td>0</td>
                </tr>
                                <tr>
                    <td class="hilight">get_question</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">last</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">timetaken</td>
                    <td>Array
(
    [hours] =&amp;gt; 
    [mins] =&amp;gt; 1 mins 
    [secs] =&amp;gt; 20 secs
)
</td>
                </tr>
                            </table>
                        <!-- The Rest -->
                        <a href='#get_table' onclick="ci_profiler_bar.toggle_data_table('get'); return false;">
                <h2>GET DATA</h2>
            </a>
            <table class="main" id="get_table">
                                <tr>
                    <td>No GET data exists</td>
                </tr>
                            </table>
                        <a href='#post_table' onclick="ci_profiler_bar.toggle_data_table('post'); return false;">
                <h2>POST DATA</h2>
            </a>
            <table class="main" id="post_table">
                                <tr>
                    <td>No POST data exists</td>
                </tr>
                            </table>
                        <a href='#uri_string_table' onclick="ci_profiler_bar.toggle_data_table('uri_string'); return false;">
                <h2>URI STRING</h2>
            </a>
            <table class="main" id="uri_string_table">
                                <tr>
                    <td>geekzone/quiz_results/126</td>
                </tr>
                            </table>
                        <a href='#controller_info_table' onclick="ci_profiler_bar.toggle_data_table('controller_info'); return false;">
                <h2>CLASS/METHOD</h2>
            </a>
            <table class="main" id="controller_info_table">
                                <tr>
                    <td>geekzone/quiz_results</td>
                </tr>
                            </table>
                        <a href='#headers_table' onclick="ci_profiler_bar.toggle_data_table('headers'); return false;">
                <h2>HTTP HEADERS</h2>
            </a>
            <table class="main" id="headers_table">
                                <tr>
                    <td class="hilight">HTTP_ACCEPT</td>
                    <td>text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8</td>
                </tr>
                                <tr>
                    <td class="hilight">HTTP_USER_AGENT</td>
                    <td>Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.65 Safari/537.36</td>
                </tr>
                                <tr>
                    <td class="hilight">HTTP_CONNECTION</td>
                    <td>keep-alive</td>
                </tr>
                                <tr>
                    <td class="hilight">SERVER_PORT</td>
                    <td>80</td>
                </tr>
                                <tr>
                    <td class="hilight">SERVER_NAME</td>
                    <td>knowledge.desk</td>
                </tr>
                                <tr>
                    <td class="hilight">REMOTE_ADDR</td>
                    <td>127.0.0.1</td>
                </tr>
                                <tr>
                    <td class="hilight">SERVER_SOFTWARE</td>
                    <td>Apache</td>
                </tr>
                                <tr>
                    <td class="hilight">HTTP_ACCEPT_LANGUAGE</td>
                    <td>en-US,en;q=0.8</td>
                </tr>
                                <tr>
                    <td class="hilight">SCRIPT_NAME</td>
                    <td>/index.php</td>
                </tr>
                                <tr>
                    <td class="hilight">REQUEST_METHOD</td>
                    <td>GET</td>
                </tr>
                                <tr>
                    <td class="hilight"> HTTP_HOST</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">REMOTE_HOST</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">CONTENT_TYPE</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">SERVER_PROTOCOL</td>
                    <td>HTTP/1.1</td>
                </tr>
                                <tr>
                    <td class="hilight">QUERY_STRING</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">HTTP_ACCEPT_ENCODING</td>
                    <td>gzip, deflate, sdch</td>
                </tr>
                                <tr>
                    <td class="hilight">HTTP_X_FORWARDED_FOR</td>
                    <td></td>
                </tr>
                            </table>
                        <a href='#config_table' onclick="ci_profiler_bar.toggle_data_table('config'); return false;">
                <h2>CONFIG VARIABLES</h2>
            </a>
            <table class="main" id="config_table">
                                <tr>
                    <td class="hilight">base_url</td>
                    <td>http://knowledge.desk/</td>
                </tr>
                                <tr>
                    <td class="hilight">index_page</td>
                    <td>index.php</td>
                </tr>
                                <tr>
                    <td class="hilight">uri_protocol</td>
                    <td>AUTO</td>
                </tr>
                                <tr>
                    <td class="hilight">url_suffix</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">language</td>
                    <td>english</td>
                </tr>
                                <tr>
                    <td class="hilight">charset</td>
                    <td>UTF-8</td>
                </tr>
                                <tr>
                    <td class="hilight">enable_hooks</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">subclass_prefix</td>
                    <td>MY_</td>
                </tr>
                                <tr>
                    <td class="hilight">composer_autoload</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">permitted_uri_chars</td>
                    <td>a-z 0-9~%.:_-</td>
                </tr>
                                <tr>
                    <td class="hilight">allow_get_array</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">enable_query_strings</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">controller_trigger</td>
                    <td>c</td>
                </tr>
                                <tr>
                    <td class="hilight">function_trigger</td>
                    <td>m</td>
                </tr>
                                <tr>
                    <td class="hilight">directory_trigger</td>
                    <td>d</td>
                </tr>
                                <tr>
                    <td class="hilight">log_threshold</td>
                    <td>0</td>
                </tr>
                                <tr>
                    <td class="hilight">log_path</td>
                    <td>C:Bitnamiwampstack-5.5.30-0apache2htdocsKnowledgeDeskapplicationlogs/</td>
                </tr>
                                <tr>
                    <td class="hilight">log_file_extension</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">log_file_permissions</td>
                    <td>420</td>
                </tr>
                                <tr>
                    <td class="hilight">log_date_format</td>
                    <td>Y-m-d H:i:s</td>
                </tr>
                                <tr>
                    <td class="hilight">error_views_path</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">cache_path</td>
                    <td>C:Bitnamiwampstack-5.5.30-0apache2htdocsKnowledgeDeskapplicationcache/</td>
                </tr>
                                <tr>
                    <td class="hilight">cache_query_string</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">encryption_key</td>
                    <td>1478a3f66b29d49940a789dacf4d89ee</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_cookie_name</td>
                    <td>bf_session</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_expiration</td>
                    <td>7200</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_time_to_update</td>
                    <td>300</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_match_ip</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_expire_on_close</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_encrypt_cookie</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_use_database</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_table_name</td>
                    <td>sessions</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_match_useragent</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_driver</td>
                    <td>database</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_regenerate_destroy</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">sess_save_path</td>
                    <td>ci3_sessions</td>
                </tr>
                                <tr>
                    <td class="hilight">cookie_prefix</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">cookie_domain</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">cookie_path</td>
                    <td>/</td>
                </tr>
                                <tr>
                    <td class="hilight">cookie_secure</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">cookie_httponly</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">standardize_newlines</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">global_xss_filtering</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">csrf_protection</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">csrf_token_name</td>
                    <td>ci_csrf_token</td>
                </tr>
                                <tr>
                    <td class="hilight">csrf_cookie_name</td>
                    <td>ci_csrf_token</td>
                </tr>
                                <tr>
                    <td class="hilight">csrf_expire</td>
                    <td>7200</td>
                </tr>
                                <tr>
                    <td class="hilight">csrf_regenerate</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">csrf_exclude_uris</td>
                    <td>Array
(
)
</td>
                </tr>
                                <tr>
                    <td class="hilight">compress_output</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">time_reference</td>
                    <td>utc</td>
                </tr>
                                <tr>
                    <td class="hilight">rewrite_short_tags</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">proxy_ips</td>
                    <td></td>
                </tr>
                                <tr>
                    <td class="hilight">bonfire.installed</td>
                    <td>1</td>
                </tr>
                                <tr>
                    <td class="hilight">site.default_user_timezone</td>
                    <td>UM8</td>
                </tr>
                                <tr>
                    <td class="hilight">modules_locations</td>
                    <td>Array
(
    [C:Bitnamiwampstack-5.5.30-0apache2htdocsKnowledgeDeskapplication/modules/] =&amp;gt; ../../application/modules/
    [C:Bitnamiwampstack-5.5.30-0apache2htdocsKnowledgeDeskbonfire/modules/] =&amp;gt; ../../bonfire/modules/
)
</td>
                </tr>
                                <tr>
                    <td class="hilight">site.backup_folder</td>
                    <td>archives/</td>
                </tr>
                                <tr>
                    <td class="hilight">contexts</td>
                    <td>Array
(
    [0] =&amp;gt; content
    [1] =&amp;gt; reports
    [2] =&amp;gt; settings
    [3] =&amp;gt; developer
)
</td>
                </tr>
                                <tr>
                    <td class="hilight">enable_activity_logging</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">sparks_path</td>
                    <td>../sparks/</td>
                </tr>
                                <tr>
                    <td class="hilight">template.site_path</td>
                    <td>C:Bitnamiwampstack-5.5.30-0apache2htdocsKnowledgeDeskpublic/</td>
                </tr>
                                <tr>
                    <td class="hilight">template.theme_paths</td>
                    <td>Array
(
    [0] =&amp;gt; themes
)
</td>
                </tr>
                                <tr>
                    <td class="hilight">template.default_layout</td>
                    <td>index</td>
                </tr>
                                <tr>
                    <td class="hilight">template.ajax_layout</td>
                    <td>ajax</td>
                </tr>
                                <tr>
                    <td class="hilight">template.use_mobile_themes</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">template.default_theme</td>
                    <td>default/</td>
                </tr>
                                <tr>
                    <td class="hilight">template.admin_theme</td>
                    <td>admin</td>
                </tr>
                                <tr>
                    <td class="hilight">template.message_template</td>
                    <td> &amp;lt;div class=&amp;quot;alert alert-{type} alert-dismissable&amp;quot;&amp;gt;
		&amp;lt;button type=&amp;quot;button&amp;quot; class=&amp;quot;close&amp;quot; data-dismiss=&amp;quot;alert&amp;quot; aria-hidden=&amp;quot;true&amp;quot;&amp;gt;&amp;amp;times;&amp;lt;/button&amp;gt;
		&amp;lt;div&amp;gt;{message}&amp;lt;/div&amp;gt;
	&amp;lt;/div&amp;gt;</td>
                </tr>
                                <tr>
                    <td class="hilight">template.breadcrumb_symbol</td>
                    <td> : </td>
                </tr>
                                <tr>
                    <td class="hilight">template.parse_views</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.directories</td>
                    <td>Array
(
    [base] =&amp;gt; assets
    [cache] =&amp;gt; cache
    [css] =&amp;gt; css
    [image] =&amp;gt; images
    [js] =&amp;gt; js
    [module] =&amp;gt; module
)
</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.js_opener</td>
                    <td>$(document).ready(function() {</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.js_closer</td>
                    <td>});</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.css_combine</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.js_combine</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.css_minify</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.js_minify</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.encrypt_name</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.encode</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.base_folder</td>
                    <td>assets</td>
                </tr>
                                <tr>
                    <td class="hilight">assets.asset_folders</td>
                    <td>Array
(
    [css] =&amp;gt; css
    [js] =&amp;gt; js
    [image] =&amp;gt; images
)
</td>
                </tr>
                                <tr>
                    <td class="hilight">ui.current_shortcuts</td>
                    <td>Array
(
    [form_save] =&amp;gt; Array
        (
            [description] =&amp;gt; Save any form in the admin area.
            [action] =&amp;gt; $(&amp;quot;input[name=save]&amp;quot;).click();return false;
        )

    [create_new] =&amp;gt; Array
        (
            [description] =&amp;gt; Create a new record in the module.
            [action] =&amp;gt; window.location.href=$(&amp;quot;a#create_new&amp;quot;).attr(&amp;quot;href&amp;quot;);
        )

    [select_all] =&amp;gt; Array
        (
            [description] =&amp;gt; Select all records in an index page.
            [action] =&amp;gt; $(&amp;quot;table input[type=checkbox]&amp;quot;).click();return false;
        )

    [delete] =&amp;gt; Array
        (
            [description] =&amp;gt; Delete the record(s).
            [action] =&amp;gt; $(&amp;quot;#delete-me.btn-danger&amp;quot;).click();
        )

    [module_index] =&amp;gt; Array
        (
            [description] =&amp;gt; Return to the index of the current module.
            [action] =&amp;gt; window.location.href=$(&amp;quot;a#list&amp;quot;).attr(&amp;quot;href&amp;quot;);
        )

    [goto_content] =&amp;gt; Array
        (
            [description] =&amp;gt; Jump to the Content context.
            [action] =&amp;gt; window.location.href=$(&amp;quot;#tb_content&amp;quot;).attr(&amp;quot;href&amp;quot;)
        )

    [goto_reports] =&amp;gt; Array
        (
            [description] =&amp;gt; Jump to the Reports context.
            [action] =&amp;gt; window.location.href=$(&amp;quot;#tb_reports&amp;quot;).attr(&amp;quot;href&amp;quot;)
        )

    [goto_settings] =&amp;gt; Array
        (
            [description] =&amp;gt; Jump to the Settings context.
            [action] =&amp;gt; window.location.href=$(&amp;quot;#tb_settings&amp;quot;).attr(&amp;quot;href&amp;quot;)
        )

    [goto_developer] =&amp;gt; Array
        (
            [description] =&amp;gt; Jump to the Developer context.
            [action] =&amp;gt; window.location.href=$(&amp;quot;#tb_developer&amp;quot;).attr(&amp;quot;href&amp;quot;)
        )

)
</td>
                </tr>
                                <tr>
                    <td class="hilight">emailer.write_to_file</td>
                    <td>true</td>
                </tr>
                                <tr>
                    <td class="hilight">migrate.auto_core</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">migrate.auto_app</td>
                    <td>false</td>
                </tr>
                                <tr>
                    <td class="hilight">commonmark.valid_drivers</td>
                    <td>Array
(
    [0] =&amp;gt; Parsedown
    [1] =&amp;gt; Markdown
    [2] =&amp;gt; MarkdownExtra
    [3] =&amp;gt; LeagueCommonMark
)
</td>
                </tr>
                                <tr>
                    <td class="hilight">commonmark.driver</td>
                    <td>MarkdownExtended</td>
                </tr>
                            </table>
                    </div>
                <!-- Files -->
        <div id="ci-profiler-files" class="ci-profiler-box">
            <h2>Files</h2>
                        <table class="main">
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\application.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\application.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\autoload.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\autoload.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\config.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\config.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\constants.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\constants.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\database.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\database.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\events.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\events.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\hooks.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\hooks.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\mimes.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\mimes.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\profiler.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\profiler.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\routes.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\routes.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\user_agents.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\config\user_agents.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\core\Base_Controller.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\core\Base_Controller.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\core\Front_Controller.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\core\Front_Controller.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\core\MY_Model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\core\MY_Model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\core\MY_Output.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\core\MY_Output.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\hooks\App_hooks.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\hooks\App_hooks.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\language\english\application_lang.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\language\english\application_lang.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\libraries\Profiler.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\libraries\Profiler.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\controllers\geekzone.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\controllers\geekzone.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\helpers\geekzone_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\helpers\geekzone_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\answer_model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\answer_model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\category_model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\category_model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\question_model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\question_model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\quiz_model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\quiz_model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\quiz_user_model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\quiz_user_model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\user_category_stat_model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\user_category_stat_model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\useraudit_model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\models\useraudit_model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\views\geekzone\quiz\footer.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\views\geekzone\quiz\footer.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\views\geekzone\quiz\results.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\modules\geekzone\views\geekzone\quiz\results.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\third_party\MX\Base.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\third_party\MX\Base.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\third_party\MX\Config.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\third_party\MX\Config.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\third_party\MX\Controller.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\third_party\MX\Controller.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\third_party\MX\Lang.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\third_party\MX\Lang.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\third_party\MX\Loader.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\application\third_party\MX\Loader.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Benchmark.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Benchmark.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\CodeIgniter.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\CodeIgniter.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Common.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Common.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Config.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Config.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Controller.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Controller.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Hooks.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Hooks.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Input.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Input.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Lang.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Lang.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Loader.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Loader.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Log.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Log.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Output.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Output.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Router.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Router.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Security.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Security.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\URI.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\URI.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Utf8.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\Utf8.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\compat\hash.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\compat\hash.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\compat\mbstring.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\compat\mbstring.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\compat\password.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\compat\password.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\compat\standard.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\core\compat\standard.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\DB.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\DB.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\DB_driver.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\DB_driver.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\DB_query_builder.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\DB_query_builder.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\DB_result.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\DB_result.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\drivers\mysqli\mysqli_driver.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\drivers\mysqli\mysqli_driver.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\drivers\mysqli\mysqli_result.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\database\drivers\mysqli\mysqli_result.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\cookie_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\cookie_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\directory_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\directory_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\form_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\form_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\inflector_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\inflector_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\language_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\language_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\security_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\security_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\url_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\helpers\url_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\language\english\profiler_lang.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\language\english\profiler_lang.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Cache\Cache.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Cache\Cache.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Cache\drivers\Cache_dummy.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Cache\drivers\Cache_dummy.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Driver.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Driver.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Form_validation.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Form_validation.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Session\Session.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Session\Session.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Session\Session_driver.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Session\Session_driver.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Session\drivers\Session_database_driver.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\Session\drivers\Session_database_driver.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\User_agent.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\ci3\libraries\User_agent.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\core\BF_Lang.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\core\BF_Lang.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\core\BF_Loader.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\core\BF_Loader.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\core\BF_Model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\core\BF_Model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\core\BF_Router.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\core\BF_Router.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\core\BF_Security.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\core\BF_Security.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\helpers\BF_directory_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\helpers\BF_directory_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\helpers\BF_form_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\helpers\BF_form_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\helpers\application_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\helpers\application_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\helpers\config_file_helper.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\helpers\config_file_helper.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Assets.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Assets.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\BF_Form_validation.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\BF_Form_validation.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Console.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Console.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Events.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Events.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Modules.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Modules.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Route.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Route.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Template.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\libraries\Template.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\settings\libraries\Settings_lib.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\settings\libraries\Settings_lib.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\settings\models\Settings_model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\settings\models\Settings_model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\ui\libraries\Contexts.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\ui\libraries\Contexts.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\users\language\english\users_lang.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\users\language\english\users_lang.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\users\libraries\Auth.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\users\libraries\Auth.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\users\models\User_model.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\bonfire\modules\users\models\User_model.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\public\index.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\public\index.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\public\themes\default\_sitenav.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\public\themes\default\_sitenav.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\public\themes\default\footer.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\public\themes\default\footer.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\public\themes\default\header.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\public\themes\default\header.php</span>
                    </td>
                </tr>
                                <tr>
                    <td class="hilight">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\public\themes\default\index.php<br/>
                        <span class="faded small">C:\Bitnami\wampstack-5.5.30-0\apache2\htdocs\KnowledgeDesk\public\themes\default\index.php</span>
                    </td>
                </tr>
                            </table>
                    </div>
            </div><!-- /profiler_panel -->
</div><!-- /codeigniter_profiler --></body></html>