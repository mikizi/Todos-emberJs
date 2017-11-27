<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Ember.js • TodoMVC</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="task-title">משימות</div>
    <div class="addTask">+</div>
</header>
<div class="main">
    <div class="task">
        <div class="task-status"></div>
        <div class="taskName"><input type="text" value="Task A"></div>
        <div class="remove">X</div>
        <hr>
    </div>
    <div class="task">
        <div class="task-status"></div>
        <div class="taskName"><input type="text" value="Task A"></div>
        <div class="remove">X</div>
        <hr>
    </div>
    <div class="task">
        <div class="task-status"></div>
        <div class="taskName"><input type="text" value="Task A"></div>
        <div class="remove">X</div>
        <hr>
    </div>
    <div class="task">
        <div class="task-status"></div>
        <div class="taskName"><input type="text" value="Task A"></div>
        <div class="remove">X</div>
        <hr>
    </div>
    <div class="task">
        <div class="task-status"></div>
        <div class="taskName"><input type="text" value="Task A"></div>
        <div class="remove">X</div>
        <hr>
    </div>

</div>
<script type="text/x-handlebars" data-template-name="todos">

    <section id="todoapp"></section>

    <footer id="info">
      <p>Double-click to edit a todo</p>
    </footer>
</script>
<!-- ... additional lines truncated for brevity ... -->
<script src="js/libs/jquery-1.11.2.min.js"></script>
<script src="js/libs/handlebars-v1.3.0.js"></script>
<script src="js/libs/ember.js"></script>
<script src="js/libs/ember-data.js"></script>
<!-- ... additional lines truncated for brevity ... -->
<script src="js/application.js"></script>
<script src="js/router.js"></script>
<script>
    $(document).ready(function () {
        $.get('test', function (response) {
            console.log(response, 'response');
        });
    });
</script>
</body>
</html>