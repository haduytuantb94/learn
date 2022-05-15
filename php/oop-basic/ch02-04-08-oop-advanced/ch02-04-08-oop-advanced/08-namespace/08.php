<?php

namespace Foo\Bar;
include '07.php';

const FOO = 2;
function foo() { echo '<h3 style="color:red;font-weight:bold">' . __FILE__ . '</h3>';}
class foo
{
    static function staticmethod() {}
}


/* Unqualified name */
// foo(); 
// foo::staticmethod(); 
// echo FOO; 

/* Qualified name */
// subnamespace\foo(); 
// subnamespace\foo::staticmethod(); 
// echo subnamespace\FOO;


/* Fully qualified name */
\Foo\Bar\foo(); 
\Foo\Bar\foo::staticmethod(); 
echo \Foo\Bar\FOO; 

\Foo\Bar\subnamespace\foo();