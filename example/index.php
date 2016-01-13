<?php
    // This is a dynamic version of index.html that generates a randomized
    // different table every time the page is loaded. index.html was
    // generated using this file

    function __autoload($class)
    {
        $parts = explode('\\', $class);
        require end($parts) . '.php';
    }

    $t = new Table();
    $table = $t->generate();
?>
<!doctype html>
<html class="" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Super Table Demo</title>
    <link rel="stylesheet" href="foundation.min.css" />
    <link rel="stylesheet" href="all.css">
</head>
<body>
    
	<h1>Super Table Demo</h1>

    <table id="demoTable1">
        <thead>
            <?php foreach($table['thead'] as $theadRow){ ?>
                <tr
                    <?php foreach($theadRow['attr'] as $attrName => $attrValue){ ?>
                        <?=$attrName?>="<?=$attrValue?>"
                    <?php } ?>
                >
                    <?php foreach($theadRow['data'] as $cell){ ?>
                    <th
                        <?php foreach($cell['attr'] as $attrName => $attrValue){ ?>
                            <?=$attrName?>="<?=$attrValue?>"
                        <?php } ?>
                    >
                            <?=$cell['data']?>
                    </th>
                    <?php } ?>
                </tr>
            <?php } ?>
        </thead>
        <tbody>
            <?php foreach($table['tbody'] as $tbodyRow){ ?>
            <tr
                <?php foreach($tbodyRow['attr'] as $attrName => $attrValue){ ?>
                    <?=$attrName?>="<?=$attrValue?>"
                <?php } ?>
            >
                <?php foreach($tbodyRow['data'] as $cell){ ?>
                    <td
                        <?php foreach($cell['attr'] as $attrName => $attrValue){ ?>
                            <?=$attrName?>="<?=$attrValue?>"
                        <?php } ?>
                    >
                            <?=$cell['data']?>
                    </td>
                <?php } ?>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    
	
	
    <script src="jquery.js"></script>
    <script src="foundation.min.js"></script>
    <script src="../jquery.super-table.js"></script>
    <script>
        // Set default options before initializing the superTable
        $.fn.superTable.defaults.columnCollapse = true;
        $.fn.superTable.defaults.rowCollapse = true;

        // Pass in options while initializing the superTable
        $('#demoTable1').superTable({
            columnCollapsedClass : 'collapsedColumn',
            columnExpandedClass : 'expandedColumn',
            rowCollapsedClass : 'collapsedColumn',
            rowExpandedClass : 'expandedColumn'
        });
    </script>
  </body>
</html>