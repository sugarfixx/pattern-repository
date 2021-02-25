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


function runRender(Formatter $formatter, $products) {
    echo $formatter->render($products);
}

// $formatter = new XMLFormatter();
$formatter = new JSONFormatter();
runRender($render,$products);```
