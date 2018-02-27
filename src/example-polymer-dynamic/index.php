<?php
$pageTitle = "ag-Grid Examples: Polymer Dynamic Components";
$pageDescription = "ag-Grid is a feature-rich datagrid available in Free or Enterprise versions. This page shows examples showing Polymer Components as Cell Renderers.";
$pageKeyboards = "ag-Grid polymer grid component dynamic cell renderer";
$pageGroup = "examples";
include '../documentation-main/documentation_header.php';
?>

<div>

    <h2 id="dynamic">Simple Dynamic Component</h2>
    <p>A simple Grid using Polymer Components as Cell Renderers, with Child Components, Two-Way Binding and
        Parent to Child Components Events.</p>

    <?= example('Simple Dynamic Component', 'dynamic-components', 'polymer', array("exampleHeight" => 460)) ?>

</div>

<?php include '../documentation-main/documentation_footer.php';?>
