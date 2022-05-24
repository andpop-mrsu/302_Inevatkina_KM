<?php

namespace rmvit\task04;

function run_test()
{
    echo "Ожидание: " . PHP_EOL .
        "TRUE" . PHP_EOL .
        "TRUE" . PHP_EOL .
        "FALSE" . PHP_EOL .
        "Получено: " . PHP_EOL;
    echo compareStrings("ab#c", "ade##c") . PHP_EOL;
    echo compareStrings("a#c", "c") . PHP_EOL;
    echo compareStrings("abc##", "a#b#") . PHP_EOL;
    
    $stack = new Stack('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h');
    $stack2 = $stack->copy();
    echo PHP_EOL . "Ожидание: " . PHP_EOL .
        "[h->g->f->e->d->c->b->a]" . PHP_EOL .
        "h" . PHP_EOL .
        "[g->f->e->d->c->b->a]" . PHP_EOL .
        "g" . PHP_EOL .
        "[g->f->e->d->c->b->a]" . PHP_EOL .
        "[g->f->e->d->c->b->a] - [h->g->f->e->d->c->b->a]" . PHP_EOL .
        "Получено: " . PHP_EOL;
    echo $stack->__toString() . PHP_EOL;
    echo $stack->pop() . PHP_EOL;
    echo $stack->__toString() . PHP_EOL;
    echo $stack->top() . PHP_EOL;
    echo $stack->__toString() . PHP_EOL;
    echo $stack->__toString() . " - " . $stack2->__toString();
}
