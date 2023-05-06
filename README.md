## PHP Avolitty Pathfinder

#### Description
Create shortest path traversals in grid graphs using PHP with a fast and unique pathfinding algorithm.

- All versions of PHP supported without recompiling binaries or including extensions
- Defines a destination, obstacles, a source and traversable spaces
- Defines grid points with 1-byte strings instead of 8-byte integers
- Fast grid pathfinding speed without A* or Dijkstra algorithms
- Guarantees the shortest path from a source to a destination with obstacle avoidance
- Maps traversal waypoint coordinates efficiently based on a count of adjacent obstacles
- Minified and readable code with single-letter variable names
- Navigates in 8 directions with diagonal and non-diagonal movement
- Navigates in 4 directions with non-diagonal movement only
- Optimized for calculation speed and minimal memory usage
- Path trees are traversed and reversed efficiently in existing grid memory
- Returns a count of spaces traversed and a marked traversal path
- Traversal direction calculation is optimized with minimal conditional statements
- Traversal paths auto-correct with natural-looking traversal
- Traverses safely within bounds of a rectangular grid

#### Usage
Install the Composer module in the current directory with `composer`.

``` console
composer require avolitty/pathfinder
```

Include the module in a PHP file named `test.php` with `require_once()`.

``` php
require_once("vendor/avolitty/pathfinder/src/avolitty-pathfinder.php");
```

The following example uses code from [/vendor/avolitty/pathfinder/test.php](https://github.com/avolitty/php-avolitty-pathfinder/blob/main/test.php) to traverse shortest paths.

``` php
$a = 15;
$b = 11;
$c = array(
	"1", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0",
	"0", "0", "0", "0", "0", "3", "0", "0", "0", "0", "0",
	"0", "0", "0", "0", "0", "3", "0", "0", "0", "0", "0",
	"0", "0", "0", "0", "0", "3", "0", "0", "0", "0", "0",
	"0", "0", "0", "0", "0", "3", "0", "0", "0", "0", "0",
	"0", "0", "0", "3", "3", "3", "0", "3", "0", "0", "0",
	"0", "0", "0", "3", "0", "3", "3", "3", "0", "0", "0",
	"0", "0", "0", "3", "0", "3", "0", "0", "0", "0", "0",
	"0", "3", "3", "3", "3", "3", "0", "0", "0", "0", "0",
	"0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0",
	"0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0",
	"3", "3", "3", "3", "3", "0", "0", "0", "0", "0", "0",
	"0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0",
	"0", "2", "0", "0", "0", "0", "0", "0", "0", "0", "0",
	"0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0"
);
$c = AvolittyPathfinderA($a, $b, $c);
$a *= $b;
$d = 0;

while ($a != $d) {
	echo " " . $c[0][$d];

	if (($d + 1) % $b == 0) {
		echo "\n";
	}

	$d++;
}
```

`AvolittyPathfinderA()` traverses in 8 directions diagonally and non-diagonally.

`AvolittyPathfinderB()` traverses in 4 directions non-diagonally.

The return value variable `$c` is an `array` with 2 values.

The first value is an `array` defined as the grid graph.

The second value is an `integer` defined as the number of spaces in the shortest traversal path.

The first argument variable `$a` is an `integer` defined as the height of the grid graph.

The second argument variable `$b` is an `integer` defined as the width of the grid graph.

The result of `$a * $b` must be within the bounds of `PHP_INT_MAX`.

The third argument variable `$c` is an `array` defined as the grid graph for pathfinding.

The length must be the result of `$a * $b`.

The grid graph spaces are defined as the following numeric strings.

- `"0"` Traversable
- `"1"` Source
- `"2"` Destination
- `"3"` Obstacle

The grid must have a single source `"1"` and a single destination `"2"`.

If the destination `"2"` can't be reached, the grid path is unmodified and the return value `$c[1]` is defined as `0`.

The output from executing `php test.php` is the grid graph with the shortest path traversal spaces defined as `"4"`.

``` console
php test.php
# 1 0 0 0 0 0 0 0 0 0 0
# 4 0 0 0 0 3 0 0 0 0 0
# 4 0 0 0 0 3 0 0 0 0 0
# 4 0 0 0 0 3 0 0 0 0 0
# 4 0 0 0 0 3 0 0 0 0 0
# 4 0 0 3 3 3 0 3 0 0 0
# 4 0 0 3 0 3 3 3 0 0 0
# 4 0 0 3 0 3 0 0 0 0 0
# 4 3 3 3 3 3 0 0 0 0 0
# 0 4 0 0 0 0 0 0 0 0 0
# 0 0 4 4 4 0 0 0 0 0 0
# 3 3 3 3 3 4 0 0 0 0 0
# 0 0 0 0 4 0 0 0 0 0 0
# 0 2 4 4 0 0 0 0 0 0 0
# 0 0 0 0 0 0 0 0 0 0 0
```
