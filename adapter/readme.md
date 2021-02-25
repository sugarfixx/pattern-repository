# Adapter pattern

## Usage example:


```
$products = [
    (object) ['type' => 'book', 'title' => 'Real Life'],
    (object) ['type' => 'video', 'title' => 'Bohemian Rhapsody'],
    (object) ['type' => 'video', 'title' => 'Green Book'],
    (object) ['type' => 'audio', 'title' => 'Plastic Hearts'],
    (object) ['type' => 'book', 'title' => 'Future Nostalgia'],
    (object) ['type' => '', 'title' => 'Whoopps! what is this?'],
];


function runRender(Render $render, $products) {
    echo $render->render($products);
}

//$render = new RenderXML();
$render = new RenderJSON();
runRender($render,$products);```
