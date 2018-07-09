<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="static/test.css">
        <title>
            Welcome to the Advance Threat Analytics!!!
        </title>
    </head>
    <body>
        <h3>
          Input the network indicator such as IP/domain name to enrich.
        </h3>
        <p>
            <form action="/hello" method="post">
                Search the attribute <input type="text" name="search_entity">  <br />
                <input type="submit" name= "form" value="Submit" />
            </form>
        </p>
    </body>
</html>
<?php
    echo $this->Form->input('AdvanceThreatIntel', array(
        'type' => 'textarea',
        'label' => __('From the Advanced Threat Intelligence search'),
        'div' => 'input clear',
        'rows' => 2,
        'class' => 'input-xxlarge'));
?>
