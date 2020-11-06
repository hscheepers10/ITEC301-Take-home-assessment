<!-- $GLOBALS -->
<?php
function test()
{
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "\n";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();
?>


<!-- $_GET -->
<?php
echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
?>


<!-- $_POST -->
<?php
echo 'Hello ' . htmlspecialchars($_POST["name"]) . '!';
?>

<!-- $_COOKIE -->
<?php
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
?>

<!-- $_REQUEST -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>