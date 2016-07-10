<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Selects dependientes con jQuery.</title>
        <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
        <script language="JavaScript" type="text/JavaScript">
            $(document).ready(function(){
                $("#select1").change(function(event){
                    var id = $("#select1").find(':selected').val();
                    $("#select2").load('genera-select.php?id='+id);
                });
            });
        </script>
    </head>

    <body>
        <form>
            <select name="select1" id="select1">
                <option value="">SELECCIONAR</option>
                <option value="1">SANTO DOMINGO</option>
                <option value="2">SANTIAGO</option>
                
            </select>
            <select name="select2" id="select2">
            <option value="">PRIMERO SELECCIONE ZONA</option>
            
            </select>
        </form>
    </body>
</html>