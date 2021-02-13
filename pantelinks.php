<html>
  <head>
    <title>Jamet1337 | Indonesian Cyber Team</title>
    <link rel="icon" type="image/png" href="https://i.ibb.co/gV8d3z7/ictnew.png" type="image/x-icon"/>
    <meta name="viewport" content="initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 
    <meta name="google-site-verification" content="Jamet1337"/> 
    <meta http-equiv="Content-Type" content="text/html; charset=Windows-1254"/> <meta name="description" content="Pantelinks,This tool will parse the html of a website and extract links from the page. The hrefs or "page links" are displayed in plain text for easy copying or review."> 
    <meta name="author" content=""/> 
    <meta name="keywords" content="Jamet1337,Ahmat Badali,pantelinks, Indonesian Cyber Team"/> 
    <meta name="googlebot" content="all"/> 
    <meta name="robots" content="all" /> 
    <meta name="googlebot-news" content="all" /> 
    <meta name="og:title" content=""/> 
    <meta property="og:image" content="https://i.ibb.co/gV8d3z7/ictnew.png" /> 
    <meta property="og:type" content="website" /> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <link href='http://fonts.googleapis.com/css?family=Share+Tech+Mono' rel='stylesheet' type='text/css'>
  </head>

  <style type="text/css">
    body {
      background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url("https://i.ibb.co/gV8d3z7/ictnew.png");
      height: 100vh;
      background-position: center;
      background-size: cover;
      color:#fff;
      font-family: 'Share Tech Mono';
    }

    input[type=text] , input[type=file] , input[type=password] {
      background:none;
      border-top:none;
      border-left:none;
      border-right:none;
      color: #02BC8C ;
      border-bottom:2px solid #02BC8C;
      font-family: 'Share Tech Mono';
      margin:6px;
      padding:6px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      width:35%;
    }

    textarea {
      background:none;
      border-top:none;
      border-left:none;
      border-right:none;
      color: white ;
      border:3px solid #02BC8C;
      font-family: 'Share Tech Mono';
      font-size:18px;
      margin:6px;
      padding:6px;
      -moz-border-radius: 7px;
      border-radius: 7px;
      width:300;
      height:150px;
    }

    input[type=submit] {
      background:#02BC8C;
      font-size:20px;
      color:white;
      border:2px solid #02BC8C;
      font-family: 'Share Tech Mono';
      padding:2px 8px;
      -moz-border-radius: 10px;
      border-radius: 10px;
      width:300;
      height:40;
    }

    .fak {
      background: #02BC8C ;
      color:#fff;
      border:1px solid #02BC8C;
      font-family: 'Share Tech Mono';
      padding:2px 8px; 
      -moz-border-radius: 7px; 
      border-radius: 7px;
      width:15%;
    }

    a {
      text-decoration:none;
      color:#02BC8C;
    }

    #tabnet {
      margin-left:15px auto 0 auto;
      margin-right:15px auto 0 auto;
      border: 1px solid #02BC8C;
      width: 50%;
    }

    #ex {
      color:black;
      border:2px solid #02BC8C;
    }

    #c {
    text-align: center;
    }
  </style>
<!--- Development By Ahmat Badali (Jamet1337)--->
  <body>
    <table width=100% height=100%>
    <td align="center">
    <b>
    <center>
      <font new size="7">Jamet
        <font color="#02BC8C">1337</font>
      </font>
      <br>Indonesian Cyber 
      <font color="#02BC8C">Team</font>
      <br><br>
      <font color="#02BC8C">Pantelinks, </font>
      This tool will parse the html of a website and extract links from the page. The hrefs or "page links" are displayed in plain text for easy copying or review.<br/><br><br>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
        <textarea name="url" placeholder="site.com">site.com</textarea>
        <br /><br>
        <input type="submit" value="Submit" name="exe"></input>
      </form>

    <?php
    if(isset($_POST['exe'])){

      $url=$_POST['url'];
      $urlData = 'http://jamet.smk-efarina.sch.id/pagelink.PHp?target='.$url;
      $result = file_get_contents($urlData);
      $resultJson = json_decode($result, TRUE);

    ?>

    <div id="results">
      <a name="startresults"></a>
      <div>
        <b><p name="removed" id="removed"></p></b>
      </div>
      <textarea name="output" placeholder="Result Here!!" id="output"><?= $resultJson['hasil']; ?></textarea>
      
    </div>
    <br>

    <?php } ?>

    <h0>Made With &hearts; By Jamet1337<br/> &copy; Indonesian Cyber Team</h0>
  </body>
</html>
