# Strategy pattern

## Usage example

```
$context = new Context(new GroupByTitle());
$context->doSomeBusinessLogic();

$context->setStrategy(new GroupByType());
$context->doSomeBusinessLogic();```
