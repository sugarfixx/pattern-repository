# Composite

##Usage

```php

<?php

use Composite\Document;
use Composite\Field;
use Composite\Property;

function clientCode(Field $field)
{
    echo "RESULT: " . $field->operation();
}
function clientCode2(Field $field1, Field $field2)
{
    if ($field1->isComposite()) {
        $field1->add($field2);
    }
    echo "RESULT: " . $field1->operation();
}


$simple = new Property();
echo "Client: I've got a simple component:<br>";
clientCode($simple);
echo "<br><br>";

$tree = new Document();
$branch1 = new Document();
$branch1->add(new Property());
$branch1->add(new Property());
$branch2 = new Document();
$branch2->add(new Property());
$tree->add($branch1);
$tree->add($branch2);
echo "Client: Now I've got a composite tree:<br>";
clientCode($tree);
echo "<br><br>";


echo "Client: I don't need to check the components classes even when managing the tree:<br>";
clientCode2($tree, $simple);


```
