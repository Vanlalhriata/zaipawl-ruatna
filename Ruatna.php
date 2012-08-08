<link rel="stylesheet" type="text/css" href="Style.css" />

<?php

function printRuatna($name,$part=null){

global $index;
if($index > 0)
    echo '<p class="pagebreak">&nbsp;</p>';
?>

<div class="body">

    <table>
        <tr>
            <td class="headLogo" rowspan="2">
                <img src="pmcfLogo.jpg" />
            </td>
            <td class="headPmcf">
                PUNE MIZO CHRISTIAN FELLOWSHIP
            </td>
        </tr>
        <tr>
            <td class="headSub">
                Music Sub-committee
            </td>
        </tr>
    </table>

    <br /><br />

    <table>
        <tr>
            <td class="name">
                <?php
                echo $name;
                ?>
            </td>
            <td class="right">
                <?php
                if(!is_null($part)){
                    echo "Part: ";
                    echo $part;
                }
                ?>
            </td>
        </tr>
    </table>

    <br />

    <p>
        Subject: <b>PMCF Zaipawl member a ruat hriattirna</b>
    </p>

    <p>
        Rawngbawlpui duhtak,
    </p>

    <p>
        Kan Lalpa Isua Krista hmingin chibai ka buk a che.
    </p>

    <p>
        PMCF Music subcommittee chuan 2012-2013 chhunga Zaipawl member
        atan lawm takin a ruat che a. He rawngbawlna hi Pathian chakna
        ring chunga i tih hlawhtlin ngei ka beisei. I thei dawn lo anih
        chuan a hnuaia hming ziak ah hian i in hriattir dawn nia.
    </p>

    <p>
        I rawngbawlpui,
    </p>

    <br /><br /><br />

    <p>
        (VANLALHRIATA)
    </p>

    <table>
        <tr>
            <td>
                Secretary<br />
                Music Sub-committee<br />
                PUNE MIZO CHRISTIAN FELLOWSHIP
            </td>
            <td class="right">
                Ph: 7875056085
            </td>
        </tr>
    </table>
    
    

</div>

<?php
}
?>
