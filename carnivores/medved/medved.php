
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">

    <title>mèdved @ carnivores</title>

    <!-- Bootstrap core CSS -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/modify.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../bootstrap/js/ie8-responsive-file-warning.js"></script><![endif]-->

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../medved/medved.php">carnivores / mèdved</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class=""><a href="../index.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="dropdown active">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">tools<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="medved.php">mèdved</a></li>
                <li><a href="../aquila/">aquila</a></li>
              </ul>
            </li>
            <li>
              <a href="medved_archive.php">archive</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container visible-xs" style='height:1em'></div>
    <div class="container visible-sm visible-md visible-lg" >
      <div class="page-header">
        <h1><img src="../img/medved.png" alt="medved-logo">mèdved <small> dns zone transfer automation</small></h1>
      </div>
    </div>

    <div class="container">
      <form role="form" action="">
        <div class="form-group">
          <label for="domain">Domain:</label>
          <textarea type="text-area" class="form-control" rows="5" id="domain" placeholder="Enter domain or comma-separated list of domains"></textarea>
        </div>
        <div id='large_dev'>
          <div class="btn-group visible-lg" style='width:100%'>
              <a href="javascript:request()" class="btn btn-primary " role="button" style='width:15%' ><span class='glyphicon glyphicon-search'></span>&nbsp;Analyze</a>
              <a href="javascript:clear_domains()" class="btn btn-default" role="button" style='width:13%'><span class='glyphicon glyphicon-trash'></span>&nbsp;Clear List</a>
              <a href="javascript:sanitize_urls()" class="btn btn-default" role="button" style='width:13%'><span class='glyphicon glyphicon-link'></span>&nbsp;Sanitize URLs</a>
              <a href="javascript:replace_spaces()" class="btn  btn-default" role="button" style='width:15%'><span class='glyphicon glyphicon-transfer'></span>&nbsp;Spaces to commas</a>
              <a type="button" class="btn btn-default dig_toggle" data-toggle="button" style='width:10%'><span class='glyphicon glyphicon-info-sign'></span> Show dig</a>
              <a href="javascript:show_help()" class="btn btn-default help_toggle" role="button" style='width:9%'><span class=' glyphicon glyphicon-question-sign'></span>&nbsp;Help</a>
              <a href="javascript:show_log()" class="btn btn-default log_toggle" role="button" style='width:10%'><span class='glyphicon glyphicon-list'></span>&nbsp;Show log</a>
              <a href="javascript:clear_results()" class="btn btn-danger " role="button" style='width:15%'><span class='glyphicon glyphicon-trash'></span>&nbsp;Clear results</a>
          </div>
        </div>
        <div id='medium_dev'>
          <div class="btn-group visible-md" style='width:100%'>
              <a href="javascript:request()" class="btn btn-primary " role="button" style='width:14%' ><span class='glyphicon glyphicon-search'></span>&nbsp;Analyze</a>
              <a href="javascript:clear_domains()" class="btn btn-default" role="button"><span class='pull-left glyphicon glyphicon-trash'></span>&nbsp;Clear List</a>
              <a href="javascript:sanitize_urls()" class="btn btn-default" role="button"><span class='pull-left glyphicon glyphicon-link'></span>&nbsp;Sanitize URLs</a>
              <a href="javascript:replace_spaces()" class="btn  btn-default" role="button"><span class='pull-left glyphicon glyphicon-transfer'></span>&nbsp;Spaces to commas</a>
              <a type="button" class="btn btn-default dig_toggle" data-toggle="button"><span class='pull-left glyphicon glyphicon-info-sign'></span>&nbsp;Show dig</a>
              <a href="javascript:show_help()" class="btn btn-default help_toggle" role="button" ><span class='pull-left glyphicon glyphicon-question-sign'></span>&nbsp;Help</a>
              <a href="javascript:show_log()" class="btn btn-default log_toggle" role="button" ><span class='glyphicon glyphicon-list'></span>&nbsp;Show log</a>
              <a href="javascript:clear_results()" class="btn btn-danger " role="button" style='width:15%'><span class='glyphicon glyphicon-trash'></span>&nbsp;Clear results</a>
          </div>
        </div>
        <div id='small_dev'>
          <div class="btn-group visible-sm" style='width:100%'>
            <a href="javascript:request()" class="btn btn-primary " role="button" style='width:30%'><span class='glyphicon glyphicon-search'>&nbsp;</span> Analyze</a>
              <div class="btn-group" style='width:20%'>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style='width:100%'>
                  <span class='glyphicon glyphicon-cog' >&nbsp;</span> Tools
                  <span class="caret" ></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="javascript:clear_domains()" class="btn  " role="button"><span class='pull-left glyphicon glyphicon-trash'> </span> List</a></li>
                  <li><a href="javascript:sanitize_urls()" class="btn " role="button"><span class='pull-left glyphicon glyphicon-link'> </span> Sanitize</a></li>
                  <li><a href="javascript:replace_spaces()" class="btn  " role="button"><span class='pull-left glyphicon glyphicon-transfer'> </span> _ to ,</a></li>
                  <li><a type="button" class="btn dig_toggle" data-toggle="button"><span class='pull-left glyphicon glyphicon-info-sign'> </span> Show dig</a></li>
                  <li><a href="javascript:show_help()" class="btn help_toggle" role="button" ><span class='pull-left glyphicon glyphicon-question-sign'> </span>Help</a></li>
                </ul>
              </div>
              <a href="javascript:show_log()" class="btn btn-default log_toggle" role="button" style='width:20%' ><span class='glyphicon glyphicon-list'>&nbsp;</span> Log</a>
              <a href="javascript:clear_results()" class="btn btn-danger " role="button" style='width:30%'><span class='glyphicon glyphicon-trash'>&nbsp;</span> Results</a>
          </div>
        </div>
        
        <div id='xsmall_dev'>
          <div class="btn-group visible-xs" style='width:100%'>
            <a href="javascript:request()" class="btn btn-primary " role="button" style='width:30%'><span class='glyphicon glyphicon-search'></span></a>
              <div class="btn-group" style='width:20%'>
                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" style='width:100%'>
                  <span class='glyphicon glyphicon-cog' ></span> <span class="caret" ></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="javascript:clear_domains()" class="btn  " role="button"><span class='pull-left glyphicon glyphicon-trash'></span>List</a></li>
                  <li><a href="javascript:sanitize_urls()" class="btn " role="button"><span class='pull-left glyphicon glyphicon-link'></span>Sanitize</a></li>
                  <li><a href="javascript:replace_spaces()" class="btn  " role="button"><span class='pull-left glyphicon glyphicon-transfer'></span>_ to ,</a></li>
                  <li><a type="button" class="btn dig_toggle"  data-toggle="button"><span class='pull-left glyphicon glyphicon-info-sign'></span>Show dig</a></li>
                  <li><a href="javascript:show_help()" class="btn help_toggle" role="button" ><span class='pull-left glyphicon glyphicon-question-sign'></span>Help</a></li>
                </ul>
              </div>
              <a href="javascript:show_log()" class="btn btn-default log_toggle" role="button" style='width:20%' ><span class='glyphicon glyphicon-list'></span></a>
              <a href="javascript:clear_results()" class="btn btn-danger " role="button" style='width:30%'><span class='glyphicon glyphicon-trash'></span></a>
          </div>
        </div>
      </form>
      <div class="container visible-xs" style='height:1em'></div><br>
      <div id="help" style="display:none; margin-top:2em">
        <h3>Functions available:</h3>
        <dl class="dl-horizontal" style='padding:1em'>
          <dt style='padding-top:10px;text-align: left' ><span class='glyphicon glyphicon-search' style='color: #3276b1'></span>&nbsp;Analyze domains</dt>
          <dd style='padding-top:10px'>Domains supplied in the text area will be sent to be processed.<br><small style='color:#AAA'>Shortcut: Enter</small></dd>
          <dt style='padding-top:10px;text-align: left' ><span class='glyphicon glyphicon-trash'></span>&nbsp;Clear list</dt>
          <dd style='padding-top:10px'>Text area above will be wiped.<br><small style='color:#AAA'>Shortcut: Alt + Shift + Backspace</small></dd>
          <dt style='padding-top:10px;text-align: left' ><span class='glyphicon glyphicon-link'></span>&nbsp;Sanitize URLs</dt>
          <dd style='padding-top:10px'><u>URLs</u> supplied in the text area <u>will be truncated</u>, leaving domain part only.<br><small style='color:#AAA'>Shortcut: Alt + Shift + U</small></dd>
          <dt style='padding-top:10px;text-align: left' ><span class='glyphicon glyphicon-transfer'></span>&nbsp;Spaces to commas</dt>
          <dd style='padding-top:10px'>Since it is common to have a space-separated or CRLF lists instead of comma-separated, <br>this functions will loosely convert spaces and CRLFs to commas.<br><small style='color:#AAA'>Shortcut: Alt + Shift + Space</small></dd>
          <dt style='padding-top:10px;text-align: left' ><span class='glyphicon glyphicon-info-sign'></span>&nbsp;Show dig</dt>
          <dd style='padding-top:10px'>Result for each server will contain a command used in the zone transfer attempt, in the form: <pre style="min-width: 300px;width:350px">dig axfr domain.com @server_address</pre><small style='color:#AAA'>Shortcut: F2</small></dd>
          <dt style='padding-top:10px;text-align: left' ><span class='glyphicon glyphicon-list'></span>&nbsp;Show log</dt>
          <dd style='padding-top:10px'>Log generated during the analysis. Signed with timestamp. Will contain dig commands if <i>Show dig</i> is activated.<br><small style='color:#AAA'>Shortcut: Alt + Shift + L</small></dd>
          <dt style='padding-top:10px;text-align: left;' ><span class='glyphicon glyphicon-trash' style='color: #d2322d'></span>&nbsp;Clear results</dt>
          <dd style='padding-top:10px'><u>Results</u> generated by previous processing <u>will be removed</u>.<br><small style='color:#AAA'>Shortcut: Alt + Shift + Delete <br>(this is necessary when using the same domain repeatedly). </small></dd>
        </dl>
      </div>
    </div>
    <br>

    <div class='container'>
      <ul class="list-inline" id='quick_links'>
      </ul>
    </div>

    <!-- DYNAMIC RESULTS -->
    <div class="container" id="dynamic_results">

    </div>

    <div class="container" id="log" style='display: none'>
      <pre id='log'>
 <?php echo date("d M Y H:i:s"); ?> mèdved log:
 </pre>
      <a href="javascript:clear_log()" class="btn btn-default" role="button">Clear log</a>
    </div>

    <div id='footer' style='min-height:30px'>

    </div>
    
    <script src="../js/jquery.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>

    <script>
      // LOCAL FUNCTIONS
        $(document).ready(function(){
            $('#domain').focus();
        });


        $('.dig_toggle').click( function (){
            $('.dig_toggle').toggleClass('btn-info');
        });
        $('.help_toggle').click( function (){
            $('.help_toggle').toggleClass('btn-info');
        });
        $('.log_toggle').click( function (){
            $('.log_toggle').toggleClass('btn-info');
        });

        function show_help(){
            $('#help').toggle(200);
        }
        function show_log(){
            $('#log').toggle(200);
        }
        function getMyDate(){
          var now=new Date();
          var date=now.getDate();
          var year=now.getFullYear();
          var months=new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
          var month=months[now.getMonth()]
          var hours=now.getHours();
          var minutes=now.getMinutes();
          var seconds=now.getSeconds();
            console.log("in date");
          if ( minutes < 10){
            minutes = '0' + minutes;
          }
          if (hours < 10){
            hours = '0' + hours;
          }
          if (seconds < 10){
            seconds = '0' + seconds;
          }
          return date + ' ' + month + ' ' + year + ' ' + hours + ':'+ minutes + ':' + seconds;
        }

        function clear_log(){
            var mydate = getMyDate();
            console.log(mydate);
            $('pre#log').html( " " + mydate + " mèdved log:\n\n" );
        }


      // URL FUNCTIONS
      function parseUri (str) {
        var o   = parseUri.options,
          m   = o.parser[o.strictMode ? "strict" : "loose"].exec(str),
          uri = {},
          i   = 14;

        while (i--) uri[o.key[i]] = m[i] || "";

        uri[o.q.name] = {};
        uri[o.key[12]].replace(o.q.parser, function ($0, $1, $2) {
          if ($1) uri[o.q.name][$1] = $2;
        });

        return uri;
      };

      parseUri.options = {
        strictMode: false,
        key: ["source","protocol","authority","userInfo","user","password","host","port","relative","path","directory","file","query","anchor"],
        q:   {
          name:   "queryKey",
          parser: /(?:^|&)([^&=]*)=?([^&]*)/g
        },
        parser: {
          strict: /^(?:([^:\/?#]+):)?(?:\/\/((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?))?((((?:[^?#\/]*\/)*)([^?#]*))(?:\?([^#]*))?(?:#(.*))?)/,
          loose:  /^(?:(?![^:@]+:[^:@\/]*@)([^:\/?#.]+):)?(?:\/\/)?((?:(([^:@]*)(?::([^:@]*))?)?@)?([^:\/?#]*)(?::(\d*))?)(((\/(?:[^?#](?![^?#\/]*\.[^?#\/.]+(?:[?#]|$)))*\/?)?([^?#\/]*))(?:\?([^#]*))?(?:#(.*))?)/
        }
      };

      // MEDVED FUNCTIONS

        // CLEAN VALUE OF TEXT AREA
        function clear_domains(){
          $('textarea#domain').val("");
        }

        function clear_results(){
          $('#dynamic_results').html("");
          $('#quick_links').html("");
        }

        // CLEANING DOMAIN NAME FROM INVALID CAHARS
        function sanitize( validChars, inputString ){
          var regex = new RegExp('[^' + validChars + ']', 'g');
          var result =  inputString.replace(regex, '');
          return result.replace("www.", '');
        }

        // GET VALUE OF TEXT AREA
        function get_domains(){
          // FINAL ARRAY
          var results = [];
          var domains_string = $('textarea#domain').val();
          var domains = domains_string.split(",");
          // MAKING SURE ONLY VALID DOMAINS ARE SUBMITTED
          for (var index = 0; index < domains.length; ++index) {
            var trimmed = (domains[index]).trim();
            if (trimmed.length > 3){
              // ALFANUMERICS AND DOTS ARE ALLOWED
              var sanitized = sanitize("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-", trimmed );
              results.push(sanitized);
            }
          }
          $('pre#log').append("\n\nANALYZED DOMAINS:\n\t" + results.join("\n\t"));
          return results;
        }

        function request(){
            // VARIABLES
            var domains = get_domains();
            var i = 0;
            //var show_dig = $('#dig_commands').prop( "checked" );
            var show_dig = $('.dig_toggle').hasClass('active');
            $('#quick_links').html("");
            $('#quick_links').append('<li>Jump to: </li><li class="pull-right"><a id="collapse_all">collapse all</a><a style="display:none" id="show_all">show all</a></li>');


            // FOREACH DOMAIN
            for ( i ; i < domains.length; i++){

                // JSON REQUEST
                $.getJSON( "medved_ajax.php?q="+domains[i], function( data ) {
                    

                    // ONLY IF THERE IS A DATA RETURNED
                    if ( data.length > 0 ){
                        
                        // LOCAL VARS
                        var short_domain = (data[0].domain).split('.');
                        var panel_begin = "<a name='"+short_domain[0]+"' style='margin-bottom:50px'></a>\
                          <div class='panel panel-default' >\
                            <div class='panel-heading'>\
                            <h3 class='panel-title' id='panel-title-"+short_domain[0]+"'>"+ data[0].domain + "<span class='glyphicon glyphicon-eye-close pull-right'></span><span class='glyphicon glyphicon-eye-open pull-right' style='display:none'></span></h3>\
                            </div>\
                            <div class='panel-body' id='panel_body'>\
                              <ul id='tabs-"+ short_domain[0] +"' class='nav nav-tabs nav-justified'></ul>\
                              <div id='tab-content-"+ short_domain[0] +"' class='tab-content'>\
                              </div>";

                        // APPENDING BEGINNING
                        $('#dynamic_results').append(panel_begin);

                        $('#quick_links').append("<li><a href='#"+short_domain[0]+"'>#"+ short_domain[0] +"</a></li>");

                        // FOR EACH RETURNED SERVER
                        for ( var j = 0; j < data.length; j++){

                            // BUILDING DATA RETURNED FROM SERVER
                            var server_link = "";
                            var server_data = "";
                            var command = "";
                            var command_log = "";
                            if ( show_dig ){
                                command = "<br><small> dig axfr " + data[j].domain + " @" + data[j].name + "</small>";
                                command_log = "\t--> dig axfr " + data[j].domain + " @" + data[j].name;
                            }

                            if (j == 0){
                                // IF THIS IS THE FIRST ELEMENT
                                server_link = "<li class='active'>";
                                server_data = "<div class='tab-pane fade in active' id='"+ (data[j].name).replace(/\./g, "") +"'>";
                            }
                            else {
                                server_link = "<li>";
                                server_data = "<div class='tab-pane fade' id='"+ (data[j].name).replace(/\./g, "") +"'>";
                            }

                            // BUILDING TAB LINK
                            if ( data[j].data == "TRANSFER FAILED" ){
                                // LOG
                                $('pre#log').append("\n\t" + data[j].domain + "\t@\t" + data[j].name +"\tTRANSFER FAILED" + command_log);

                                server_link = server_link + "<a id='tab"+ j + "' href='#" + (data[j].name).replace(/\./g, "") +"' style='color:  #d9534f'>"+data[j].name+" <span class='glyphicon glyphicon-fire'></span></a></li>";
                                server_data = server_data + "<div class='alert alert-danger'>"+ data[j].data + command+"</div>";
                            }
                            else if ( data[j].data == "SERVER UNREACHABLE") {
                                // LOG
                                $('pre#log').append("\n\t" + data[j].domain + "\t@\t" + data[j].name +"\tSERVER UNREACHABLE" + command_log);

                                server_link = server_link + "<a id='tab"+ j + "' href='#" + (data[j].name).replace(/\./g, "") +"' style='color:  #f0ad4e'>"+data[j].name+" <span class='glyphicon glyphicon-warning-sign'></span></a></li>";
                                server_data = server_data + "<div class='alert alert-warning'>"+ data[j].data + command+"</div>";
                            }
                            else if ( data[j].data == "SERVER FAIL") {
                                // LOG
                                $('pre#log').append("\n\t" + data[j].domain + "\t@\t" + data[j].name +"\tSERVER FAIL" + command_log);
                                server_link = server_link + "<a id='tab"+ j + "' href='#" + (data[j].name).replace(/\./g, "") +"' >"+data[j].name+" <span class='glyphicon glyphicon-warning-sign'></span></a></li>";
                                server_data = server_data + "<div class='alert alert-danger'>"+ data[j].data + command+"</div>";
                            }
                            else if ( data[j].data == "SERVER ADDRESS NOT FOUND") {
                                // LOG
                                $('pre#log').append("\n\t" + data[j].domain + "\t@\t" + data[j].name +"\tSERVER ADDRESS NOT FOUND" + command_log);
                                server_link = server_link + "<a id='tab"+ j + "' href='#" + (data[j].name).replace(/\./g, "") +"' >"+data[j].name+" <span class='glyphicon glyphicon-warning-sign'></span></a></li>";
                                server_data = server_data + "<div class='alert alert-danger'>"+ data[j].data + command+"</div>";
                            }
                            else {
                                // LOG
                                $('pre#log').append("\n\t" + data[j].domain + "\t@\t" + data[j].name +"\tTRANSFER SUCCESSFUL" + command_log + "\n\n" + data[j].data);
                                server_link = server_link + "<a id='tab"+ j + "' href='#" + (data[j].name).replace(/\./g, "") +"' style='color: #5cb85c'>" + data[j].name +" <span class='glyphicon glyphicon-ok'></span></a></li>";
                                server_data = server_data + command +"<pre>" + data[j].data + "</pre>";
                                $('#panel-title-'+ short_domain[0] ).css("color", "#5cb85c" );
                            }
                            
                            // BUILDING TAB CONTENT
                            server_data = server_data + " </div>";

                            // APPENDING DATA
                            $('#tabs-'+ short_domain[0] ).append(server_link);
                            $('#tab-content-'+ short_domain[0] ).append(server_data);
                        }
                
                        // ENDING PANELS
                        $('#dynamic_results').append("   </div></div>");

                        // LOGGING ACTIONS

                    }
                });
            }
        }

        function sanitize_urls(){
            // GET URLS
            var urls = $('textarea#domain').val();
            var urls_array = [];
            var results = [];
            // IF COMMA-SEPARATED
            if ( urls.indexOf(",") != -1 ){
              urls_array = urls.split(",");
            }
            else {
              // IF SPACE-SEPARATED
              urls_array = urls.split(" ");
            }

            // PARSE EACH URL
            for (var i = 0; i < urls_array.length; i++){
              results.push( (parseUri(urls_array[i])).host );
            }

            // PUT VALUES IN TEXT FIELD
            $('textarea#domain').val( results.join(", "));
        }

        function replace_spaces(){
            var urls = $('textarea#domain').val();
            var urls_array = urls.split(" ");
            var results = [];
            for (var i = 0; i < urls_array.length; i++){
              var tmp = urls_array[i].split("\n");
              for (var j = 0; j < tmp.length; j++){
                results.push(tmp[j]);
              }
            }
            $('textarea#domain').val( results.join(", "));
        }

        function hide_me( element ){
            console.log(element);
            $('panel_body_'+element).css("display", "none");
        }


        $('.nav-tabs a').click(function (e) {
          e.preventDefault()
          $(this).tab('show')
        })



        $('#dynamic_results').bind('DOMNodeInserted DOMNodeRemoved', function(event) {
            $('.nav-tabs a').click(function (e) {
              e.preventDefault()
              $(this).tab('show')
            })
            $('.glyphicon-eye-close').click( function (e){
              e.preventDefault();
              e.stopPropagation();
              $(this).parent().parent().parent().children('.panel-body').hide(200);
              $(this).parent().children('.glyphicon-eye-close').hide(500);
              $(this).parent().children('.glyphicon-eye-open').show(500);
            });
            $('.glyphicon-eye-open').click( function (e){
              e.preventDefault();
              e.stopPropagation();
              $(this).parent().parent().parent().children('.panel-body').show(200);
              $(this).parent().children('.glyphicon-eye-close').show(500);
              $(this).parent().children('.glyphicon-eye-open').hide(500);
            });
            $('#collapse_all').click( function (e){
              e.preventDefault();
              e.stopPropagation();
              $('.panel-body').hide(200);
              $('.glyphicon-eye-open').show(500);
              $('.glyphicon-eye-close').hide(500);
              $('#show_all').css("display", "block");
              $('#collapse_all').css("display", "none");
            });
            $('#show_all').click( function (e){
              e.preventDefault();
              e.stopPropagation();
              $('.panel-body').show(200);
              $('.glyphicon-eye-open').hide(500);
              $('.glyphicon-eye-close').show(500);
              $('#collapse_all').css("display", "block");
              $('#show_all').css("display", "none");
            });
        });

  

    </script>

    <script src='../js/shortcut.js'></script>
    <script>
      shortcut.add("Alt+Shift+m",function() {
        window.location.href = 'medved.php';
      });
      shortcut.add("Alt+Shift+a",function() {
        window.location.href = 'medved_archive.php';
      });
      shortcut.add("Alt+Shift+h",function() {
        $('.help_toggle').toggleClass('btn-info');
        show_help();
      });
      shortcut.add("Alt+Shift+l",function() {
        $('.log_toggle').toggleClass('btn-info');
        show_log();
      });
      shortcut.add("F2",function() {
        $('.dig_toggle').toggleClass('btn-info');
        show_dig();
      });
      shortcut.add("Alt+Shift+delete",function() {
        clear_results()
      });
      shortcut.add("Alt+Shift+backspace",function() {
        clear_domains()
      });
      shortcut.add("Alt+Shift+u",function() {
        sanitize_urls()
      });
      shortcut.add("Alt+Shift+space",function() {
        replace_spaces()
      });
      shortcut.add("enter",function() {
        request()
      });


    </script>
  
  </body>
</html>
