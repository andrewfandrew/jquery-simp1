<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        
        <style type="text/css">
            #age {
                display: none;
                line-height: 0px;
                font-size: 20px;
            }
        </style>
    </style>
        <meta charset="UTF-8">
        <title>Jquery Simple 1</title>
        <script = "text/javascript" src= "js/jquery-1.11.1.js"></script>
        
        <script type="text/javascript">
            function get() {
                $('#age').hide();
                $.post('data.php', { name: form.name.value },
                        function(output) {
                            $('#age').html(output).fadeIn(1000);
                        });
            }
            </script>
            
    </head>
    <body>
        <p>
        <form name="form">
            <input type="text" name="name"><input type="button" value="Get" onclick="get();">
        </form>
    </p>
        <div id="age"></div>
    
        <?php
        // put your code here
        ?>
    </body>
</html>
