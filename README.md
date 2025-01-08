# PHP Array Key Handling Pitfalls

This repository demonstrates a common yet easily overlooked error in PHP: unexpected array key behavior when adding elements. This often leads to subtle bugs that can be difficult to track down.

The `bug.php` file contains the erroneous code, showing how adding an element using `[]` appends to the array instead of possibly overwriting existing entries based on the key.

The `bugSolution.php` file offers a solution highlighting best practices for handling array keys, ensuring clarity and predictable results.