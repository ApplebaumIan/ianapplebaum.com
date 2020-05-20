<?php
// No direct access
defined('_JEXEC') or die; ?>
<?php echo '
<!DOCTYPE html>
<html>
  <head>
    <title>Terminal.js Demo</title>
<!--    <link rel="stylesheet" href="terminal.css">-->
      <link rel=\'stylesheet\' href=\'https://unpkg.com/shell.js@1.0.5/dist/css/shell.min.css\'>
      <link rel=\'stylesheet\' href=\'https://code.jquery.com/ui/1.12.1/themes/cupertino/jquery-ui.css\'>
      <link rel=\'stylesheet\' href=\'https://unpkg.com/jquery.terminal/css/jquery.terminal.min.css\'>
      <link rel=\'stylesheet\' href=\'https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\'><link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <h1>Terminal.js Demo</h1>
    <div id="terminal">
      <!-- <p>Type \'help\' to get started.</p> -->
        <form>
            <label for="type">Window Type:</label>
            <select id="type">
                <option value="osx">osx</option>
                <option value="ubuntu" selected>ubuntu</option>
                <option value="windows">windows</option>
                <option value="custom">custom</option>
            </select>
            <label for="dark">dark</label>
            <input type="checkbox" id="dark" checked/>
        </form>
        <div class="shell ubuntu dark shadow">
            <div class="status-bar">
                <div class="buttons">
                    <a href="javascript:;" class="close" title="Close">
                        <i class="fa fa-times"></i>
                    </a>
                    <a href="javascript:;" class="minimize" title="Minimize">
                        <i class="fa fa-minus"></i>

                    </a>
                    <a href="javascript:;" class="enlarge" title="Enlarge">
                        <i class="fa fa-plus"></i>

                    </a>

                </div>
                <div class="title">user@host: ~</div>
            </div>
            <div class="content">
<!--                <p class="hidden">-->
<!--                    <span class="prompt">guest@ianapplebaum.com &sim; &gt; </span>-->
<!--                    <span contenteditable="true" class="input" id="thing"> </span>-->
            </div>
        </div>
        <!-- partial -->
        <script src=\'https://code.jquery.com/jquery-3.1.1.min.js\'></script>
        <script src=\'https://cdn.terminal.jcubic.pl/wcwidth.js\'></script>
        <script src=\'https://unpkg.com/jquery.terminal/js/jquery.mousewheel-min.js\'></script>
        <script src=\'https://unpkg.com/js-polyfills/keyboard.js\'></script>
        <script src=\'https://code.jquery.com/ui/1.12.1/jquery-ui.min.js\'></script>
        <script src=\'https://codepen.io/jcubic/pen/WZjbgq.js\'></script>
        <script src=\'https://unpkg.com/jquery.terminal/js/jquery.terminal.min.js\'></script>
        <script src=\'https://unpkg.com/resize-observer-polyfill@1.5.1/dist/ResizeObserver.js\'></script>
        <script src=\'https://cdn.jsdelivr.net/gh/aaronbarker/css-variables-polyfill@master/css-var-polyfill.js\'></script><script  src="./script.js"></script>


<script>
    var shell = $(\'.shell\').resizable({
        minHeight: 108,
        minWidth: 250
    }).draggable({
        handle: \'> .status-bar .title\'
    });
    // Fake in memory filesystem
    var fs = {
        \'projects\': {
            \'baz.txt\': \'Hello this is file baz.txt\',
            \'quux.txt\': "Lorem Ispum (quux.txt)",
            \'foo.txt\': "Hello, World!",
            \'bar.txt\': "Wellcome to the bar",
            "terminal": {
                "foo": {
                    "bar.txt": "hello bar",
                    "baz.txt": "baz content"
                }
            }
        }
    };

    var path = [];
    var cwd = fs;
    function restore_cwd(fs, path) {
        path = path.slice();
        while (path.length) {
            var dir_name = path.shift();
            if (!is_dir(fs[dir_name])) {
                throw new Error(\'Internal Error Invalid directory \' +
                    $.terminal.escape_brackets(dir_name));
            }
            fs = fs[dir_name];
        }
        return fs;
    }
    function is_dir(obj) {
        return typeof obj === \'object\';
    }
    function is_file(obj) {
        return typeof obj === \'string\';
    }
    var commands = {
        cd: function(dir) {
            this.pause();
            if (dir === \'/\') {
                path = [];
                cwd = restore_cwd(fs, path);
            } else if (dir === \'..\') {
                if (path.length) {
                    path.pop(); // remove from end
                    cwd = restore_cwd(fs, path);
                }
            } else if (dir.match(/\//)) {
                var p = dir.replace(/\/$/, \'\').split(\'/\').filter(Boolean);
                if (dir[0] !== \'/\') {
                    p = path.concat(p);
                }
                cwd = restore_cwd(fs, p);
                path = p;
            } else if (!is_dir(cwd[dir])) {
                this.error($.terminal.escape_brackets(dir) + \' is not a directory\');
            } else {
                cwd = cwd[dir];
                path.push(dir);
            }
            this.resume();
        },
        ls: function() {
            if (!is_dir(cwd)) {
                throw new Error(\'Internal Error Invalid directory\');
            }
            var dir = Object.keys(cwd).map(function(key) {
                if (is_dir(cwd[key])) {
                    return key + \'/\';
                }
                return key;
            });
            this.echo(dir.join(\'\n\'));
        },
        cat: function(file) {
            if (!is_file(cwd[file])) {
                this.error($.terminal.escape_brackets(file) + " don\'t exists");
            } else {
                this.echo(cwd[file]);
            }
        },
        help: function() {
            this.echo(\'Available commands: \' + Object.keys(commands).join(\', \'));
        }
    };
    function completion(string, callback) {
        var command = this.get_command();
        var cmd = $.terminal.parse_command(command);
        function dirs(cwd) {
            return Object.keys(cwd).filter(function(key) {
                return is_dir(cwd[key]);
            }).map(function(dir) {
                return dir + \'/\';
            });
        }
        if (cmd.name === \'ls\') {
            callback([]);
        } else if (cmd.name === \'cd\') {
            var p = string.split(\'/\').filter(Boolean);
            if (p.length === 1) {
                if (string[0] === \'/\') {
                    callback(dirs(fs));
                } else {
                    callback(dirs(cwd));
                }
            } else {
                if (string[0] !== \'/\') {
                    p = path.concat(p);
                }
                if (string[string.length - 1] !== \'/\') {
                    p.pop();
                }
                var prefix = string.replace(/\/[^/]*$/, \'\');
                callback(dirs(restore_cwd(fs, p)).map(function(dir) {
                    return prefix + \'/\' + dir;
                }));
            }
        } else if (cmd.name === \'cat\') {
            var files = Object.keys(cwd).filter(function(key) {
                return is_file(cwd[key]);
            });
            callback(files);
        } else {
            callback(Object.keys(commands));
        }
    }
    var term = $(\'.content\').terminal(commands, {
        prompt: prompt(),
        completion: completion,
        // detect iframe codepen preview
        enabled: $(\'body\').attr(\'onload\') === undefined,
    });
    // for codepen preview
    if (!term.enabled()) {
        term.find(\'.cursor\').addClass(\'blink\');
    }
    function prompt(type) {
        return function(callback) {
            var prompt;
            if (type === \'windows\') {
                prompt = \'C:\\\' + path.join(\'\\\') + \'> \';
            } else {
                prompt = \'user@host:/\' + path.join(\'/\') + \'$ \';
            }
            $(\'.title\').html(prompt);
            callback(prompt);
        };
    }
    $(\'#type\').on(\'change\', function() {
        shell.removeClass(\'osx windows ubuntu default custom\').addClass(this.value);
        term.toggleClass(\'underline-animation\', this.value == \'windows\');
        term.set_prompt(prompt(this.value));
    });
    $(\'#dark\').on(\'change\', function() {
        shell.removeClass(\'dark light\');
        if (this.checked) {
            shell.addClass(\'dark\');
        } else {
            shell.addClass(\'light\');
        }
    });
    $(\'#type, #dark\').on(\'change\', function() {
        setTimeout(function() {
            term.focus();
        }, 400)
    });
    github && github(\'jcubic/jquery.terminal\');

    var wtf = "cat HelloWorld.txt\n";

(function typeChar(elem, msg, offset) {
  return function() {
    if(msg[offset] == \'\n\') elem.innerHTML += \'<br>\';
    else elem.innerHTML += msg[offset];

    if(offset < msg.length-1) {
      setTimeout(typeChar(elem, msg, offset+1), 50)
    }
  }
})(document.getElementById("thing"), wtf, 0)()</script>
      </p>

    </div>
    <script src="terminal.js"></script>
    <script>
    // runCommand(elem, cat,"HelloWorld.txt")
      var commands = {};

      commands.help = function() {
        var output = "<div>" +
                     "<ul>" +
                     "<li><strong>help</strong> - display this help.</li>" +
                     "<li><strong>hello NAME</strong> - displays a greeting for NAME.</li>" +
                     "<li><strong>weather LOCATION</strong> - show weather for LOCATION</li>" +
                     "</ul></div>";
        return output;
      };
      commands.cat = function(args){
        if(args[1]==="HelloWorld.txt")
        return `  <pre>
            Hello World, my name is
                           __
         /                /  |           /      /
        (  ___  ___      (___| ___  ___ (  ___ (___  ___       _ _
        | |   )|   )     |   )|   )|   )| |___)|   )|   )|   )| | )
        | |__/||  /      |  / |__/ |__/ | |__  |__/ |__/||__/ |  /
                              |    |                               </pre>`
                            }


      commands.hello = function(args) {
        if(args.length < 2) return "<p>Hello. Why don\'t you tell me your name?</p>";
        return "Hello " + args[1];
      };



      commands.weather = function(args) {
        args.shift();
        var xhr = new XMLHttpRequest();
        xhr.open("get", "http://api.openweathermap.org/data/2.5/weather?units=metric&q=" + args.join(" "), false);
        xhr.send();
        if(xhr.status !== 200) return "Error :(";
        weather = JSON.parse(xhr.responseText);
        return "<p><img style=\"vertical-align: middle\" src=\"http://openweathermap.org/img/w/" +
               weather.weather[0].icon + ".png\">" +
               weather.weather[0].description + ", " +
               weather.main.temp + " &deg;C</p>"
      };

      Terminal.init(document.getElementById("terminal"), commands);

    </script>
  </body>
</html>
';
?>

