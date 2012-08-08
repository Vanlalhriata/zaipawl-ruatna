<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>PMCF Zaipawl</title>
    </head>
    <body>
        
        <?php
        
        if(isset($_GET["q"]))
        {
            include_once 'Ruatna.php';
            
            $members = explode(';', $_GET["q"]);
            
            foreach ($members as $index => $member) {
                $namePart = explode(',',$member);
                if(count($namePart)>1)
                    printRuatna($namePart[0],$namePart[1]);
                else
                    printRuatna ($namePart[0]);
            }
        }
        else
        {
            include_once 'Instructions.php';
            printInstructions();
        }
        ?>
            
    </body>
</html>
