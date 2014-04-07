<?php include("sessionstart.php"); ?>
<?php include("loginrequired.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">

  <title>Admin - Notice of Privacy Practices</title>

  <meta name="description" content="">
  <meta name="keywords" content="">

  <link rel="shortcut icon" href="favicon.ico">

  <link href="app.css" rel="stylesheet" type="text/css">
  <link href="fileretriever.css" rel="stylesheet" type="text/css">
  <link href="jsoneditor/css/jsoneditor.css" rel="stylesheet" type="text/css">
  <link href="jsoneditor/css/menu.css" rel="stylesheet" type="text/css">
  <link href="jsoneditor/css/searchbox.css" rel="stylesheet" type="text/css">
  <link href="jsoneditor/css/contextmenu.css" rel="stylesheet" type="text/css">

  <script type="text/javascript" src="jsoneditor/js/jsoneditor.js"></script>
  <script type="text/javascript" src="jsoneditor/js/treeeditor.js"></script>
  <script type="text/javascript" src="jsoneditor/js/texteditor.js"></script>
  <script type="text/javascript" src="jsoneditor/js/node.js"></script>
  <script type="text/javascript" src="jsoneditor/js/appendnode.js"></script>
  <script type="text/javascript" src="jsoneditor/js/contextmenu.js"></script>
  <script type="text/javascript" src="jsoneditor/js/history.js"></script>
  <script type="text/javascript" src="jsoneditor/js/searchbox.js"></script>
  <script type="text/javascript" src="jsoneditor/js/modebox.js"></script>
  <script type="text/javascript" src="jsoneditor/js/highlighter.js"></script>
  <script type="text/javascript" src="jsoneditor/js/util.js"></script>
  <script type="text/javascript" src="jsoneditor/js/module.js"></script>
  <script type="text/javascript" src="queryparams.js"></script>
  <script type="text/javascript" src="ajax.js"></script>
  <script type="text/javascript" src="fileretriever.js"></script>
  <script type="text/javascript" src="notify.js"></script>
  <script type="text/javascript" src="splitter.js"></script>
  <script type="text/javascript" src="app.js"></script>
  <script type="text/javascript" src="lib/jsonlint/jsonlint.js"></script>

  <script type="text/javascript" src="lib/ace/ace.js"></script>
  <script type="text/javascript" src="lib/ace/mode-json.js"></script>
  <script type="text/javascript" src="lib/ace/theme-textmate.js"></script>
  <script type="text/javascript" src="lib/ace/theme-jsoneditor.js"></script>
  
	<!-- admin -->
	<!-- jq -->
	<script src="admin/3rd/jq/jquery-2.0.0.min.js"></script>
	<!-- fa -->
	<link rel="stylesheet" href="admin/3rd/fa/css/font-awesome.min.css">

  <style type="text/css">
    div.convert-right {
      background: url('jsoneditor/css/img/jsoneditor-icons.png') -0 -48px;
    }
    div.convert-left {
      background: url('jsoneditor/css/img/jsoneditor-icons.png') -24px -48px;
    }
  </style>
</head>

<body>


<div id="header" >
	<div style="padding:8px 0px 0px 10px;">
	  <a href="./admin.php" class="header" style="font-size:1.25em;padding-right:10px;">Admin Editor - Notice of Privacy Practices</a>
      <span style="font-size:1.25em;">[<span id="openedfilenameID" style="padding:5px;"></span>]</span>
  </div>

  <div id="menu">
    <ul>
      <li>
        <a id="open" title="Open file from disk">
          <i class="fa fa-folder fa-fw"></i>&nbsp;Open
                    <span id="openMenuButton" title="Open file from disk or url">
                    &#x25BC;
                    </span>
        </a>
        <ul id="openMenu">
          <li>
            <a id="nppprovenOpenFile" title="Open Provider NPP File (English) from server">Provider&nbsp;(EN)</a>
          </li>
          <li>
            <a id="nppplanenOpenFile" title="Open Plan NPP File (English) from server">Plan&nbsp;(EN)</a>
          </li>
          <li>
            <a id="nppprovesOpenFile" title="Open Provider NPP File (Spanish) from server">Provider&nbsp;(ES)</a>
          </li>
          <li>
            <a id="nppplanesOpenFile" title="Open Plan NPP File (Spanish) from server">Plan&nbsp;(ES)</a>
          </li>
          <!--li>
            <a id="menuOpenFile" title="Open file from disk">Open&nbsp;file</a>
          </li>
          <li>
            <a id="menuOpenUrl" title="Open file from url">Open&nbsp;url</a>
          </li-->
        </ul>
      </li>
      <li>
        <a id="save" title="Save file to server"><i class="fa fa-save fa-fw"></i>&nbsp;Save</a>
      </li>
      <li>
        <a id="clear" title="Close file (without saving)"><i class="fa fa-times fa-fw"></i>&nbsp;Close</a>
      </li>
      <li>
        <a id="help" title="Open documentation (opens in a new window)" href="doc/index.html" target="_blank"><i class="fa fa-question fa-fw"></i>&nbsp;Help</a>
      </li>
      <li>
        <a id="logout" title="Logout" href="logout.php"><i class="fa fa-power-off fa-fw"></i>&nbsp;Logout</a>
      </li>
    </ul>
  </div>

</div>


<div id="auto">
  <div id="contents">
    <div id="codeEditor"></div>

    <div id="splitter">
      <div id="buttons">
        <div>
          <button id="toTree" class="convert" title="Copy code to tree editor">
            <div class="convert-right"></div>
          </button>
        </div>
        <div>
          <button id="toCode" class="convert" title="Copy tree to code editor">
            <div class="convert-left"></div>
          </button>
        </div>
      </div>
      <div id="drag">
      </div>
    </div>

    <div id="treeEditor"></div>

    <script type="text/javascript">
      app.load();
      app.resize();
    </script>

  </div>
</div>

<div id="footer">
  <div id="footer-inner" style="text-align:right;padding:0px 5px 5px 0px;">
	<a href="doc/index.html" target="_blank" style="color:gray;text-decoration:none;font-size:0.85em;">powered by jsoneditoronline</a>
  </div>
</div>

<script type="text/javascript">
  app.resize();
</script>

</body>
</html>
