<?php

$fields = array(
    "live" => "0",
    "oid" => "112",
    "inv" => "112020102292999",
    "ttl" => "1",
    "tel" => "0710485357",
    "eml" => "kajuej@gmailo.com",
    "vid" => "demo",
    "curr" => "KES",
    "p1" => "airtel",
    "p2" => "020102292999",
    "p3" => "",
    "p4" => "900",
    "cbk" => $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"],
    "cst" => "1",
    "crl" => "2"
);

$datastring =  $fields['live'] . $fields['oid'] . $fields['inv'] . $fields['ttl'] . $fields['tel'] . $fields['eml'] . $fields['vid'] . $fields['curr'] . $fields['p1'] . $fields['p2'] . $fields['p3'] . $fields['p4'] . $fields['cbk'] . $fields['cst'] . $fields['crl'];
$hashkey = "demoCHANGED"; //use "demoCHANGED" for testing where vid is set to "demo"

$generated_hash = hash_hmac('sha1', $datastring, $hashkey);

?>
<html>

<head>
    <title>iPay</title>
</head>

<body>

    <form method="POST" action="https://payments.ipayafrica.com/v3/ke">

        <?php
        foreach ($fields as $key => $value) {
            echo $key;
            echo ' :<input name="' . $key . '" type="text" value="' . $value . '"></br>';
        }

        ?>

        <input name="hsh" type="text" value="<?php echo $generated_hash ?>">

        <button type="submit">Lipa</button>
    </form>
</body>

</html>