<link rel="stylesheet" type="text/css" href="Style.css" />

<?php

function printInstructions()
{
?>

<div class="instructions">
    
    <p>
        <b>Instructions:</b>
    </p>
    
    <hr />
    
    <p>
        <b>Print with only the name:</b><br />
        Pass the name to the variable q.
    </p>
        
    <p>
        Example:<br />
        <code>
        http://localhost/Zaipawl/index.php?q=Nl. Sarah Lalrinkimi Aineh
        </code> 
    </p>
    
    <hr />
    
    <p>
        <b>Print with the name and part:</b><br />
        Pass the name and part separated by a comma (,) to the variable q. 
    </p>
        
    <p>
        Example:<br />
        <code>
        http://localhost/Zaipawl/index.php?q=Nl. Sarah Lalrinkimi Aineh,Soprano
        </code> 
    </p>
    
    <hr />
    
    <p>
        <b>Print two or more names:</b><br />
        Pass the names separated by a semi-colon (;) to the variable q. 
    </p>
        
    <p>
        Example:<br />
        <code>
        http://localhost/Zaipawl/index.php?q=Nl. Sarah Lalrinkimi Aineh;Tv. Vanlalhriata
        </code> 
    </p>
    
    <hr />
    
    <p>
        <b>Print two or more names with parts:</b><br />
        Each name and part should be separated by a comma (,).
        Each name-part should then be separated by a semi-colon (;)
        and passed to the variable q.
    </p>
        
    <p>
        Example:<br />
        <code>
        http://localhost/Zaipawl/index.php?q=Nl. Sarah Lalrinkimi Aineh,Soprano;Tv. Vanlalhriata,Bass
        </code> 
    </p>
    
    <hr />
    
    <p>
        <b>Print mixed names and parts:</b><br />
        Parts can be omitted when printing for multiple members.
    </p>
        
    <p>
        Example:<br />
        <code>
        http://localhost/Zaipawl/index.php?q=Nl. Sarah Lalrinkimi Aineh;Tv. Vanlalhriata,Bass
        </code> 
    </p>
    
    <hr />
    
</div>

<?php
}
?>
