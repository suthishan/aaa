
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/music/plugin/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/music/demo.css">
    <script type="text/javascript" src="assets/music/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="assets/music/plugin/jquery-jplayer/jquery.jplayer.js"></script>
    <script type="text/javascript" src="assets/music/plugin/ttw-music-player-min.js"></script>
    <script type="text/javascript" src="assets/music/myplaylist.js"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            var description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce id tortor nisi. Aenean sodales diam ac lacus elementum scelerisque. Suspendisse a dui vitae lacus faucibus venenatis vel id nisl. Proin orci ante, ultricies nec interdum at, iaculis venenatis nulla. ';

            $('body').ttwMusicPlayer(myPlaylist, {
                autoPlay:false, 
                description:description,
                jPlayer:{
                    swfPath:'../plugin/jquery-jplayer' //You need to override the default swf path any time the directory structure changes
                }
            });
        });
    </script>
</head>
<body>

<div id="title"></div>
<a href="index.php" id="download">Go Home Page</a>
</body>
</html>