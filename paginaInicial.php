<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html" />
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="class/generic.css?<?php echo time(); ?>" />
        <script language="JavaScript" src="js/functions.js" charset="UTF-8"></script>
    </head>
    <body>
        <div class="cleo">
            Qual é o seu nome?<br>
            <input type="text" onchange="setName(this.value);"/><br>
            Qual é a sua idade em <?php print(date("d/m/y")); ?>?<br>
            <input type="text" onchange="setAge(this.value);"/><br>
        </div>
    </body>
</html>