    function loadLayout() {
        $('#header').load("layout.html #header");
        $('#footer').load("layout.html #footer");
    }
    function loadContent(sourceUrl) {
        $('#content').load(""+sourceUrl+"");
    }
    function updateHead() {
        $('head').append("<meta http-equiv=\"X-UA-Compatible\" content=\"chrome=1\">");
        $('head').append("<meta name=\"author\" content=\"Thomas Tsai\" />");
        $('head').append("<meta http-equiv=\"Content-Type\" content=\"text/html\; charset=utf-8\" />");

        $('head').append("<link href=\"http://freshmeat.net/projects/partclone/releases.atom\" rel=\"alternate\" title=\"freshmeat.net releases feed for Partclone\" type=\"application/atom+xml\" />");
        $('head').append("<link REL=\"SHORTCUT ICON\" HREF=\"http://partclone.org/images/favicon.ico\">");
        $('head').append("<title>Partclone</title>");
        $('head').append("<link rel=\"stylesheet\" href=\"stylesheets/styles.css\">");
        $('head').append("<link rel=\"stylesheet\" href=\"stylesheets/pygment_trac.css\">");
        $('head').append("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, user-scalable=no\">");

    }
