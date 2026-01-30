<?php
$resultHtml = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $a = (float)$_POST['x1'];
    $b = (float)$_POST['x2'];
    $c = (float)$_POST['x3'];

    if ($a == 0) {
        $resultHtml = "<p class='error'>This is not a quadratic equation because a = 0.</p>";
    } else {
        $d = $b * $b - 4 * $a * $c; // discriminant
        $precision = 4;

        $equation = "f(x) = {$a}x² + {$b}x + {$c} = 0";
        $deltaStep = "Δ = b² - 4ac = ({$b})² - 4·{$a}·{$c} = {$d}";

        if ($d < 0) {
            $real = -$b / (2 * $a);
            $imag = sqrt(-$d) / (2 * $a);

            $x1 = $real . " + " . number_format($imag, $precision) . "i";
            $x2 = $real . " - " . number_format($imag, $precision) . "i";

            $steps = "
                <p>Because Δ &lt; 0, the roots are complex.</p>
                <p>x = [-b ± √Δ] / (2a)</p>
                <p>x₁ = ({-$b} + √{$d}) / (2·{$a}) = {$x1}</p>
                <p>x₂ = ({-$b} - √{$d}) / (2·{$a}) = {$x2}</p>
            ";

            $resultHtml = "
                <h3>Complex roots</h3>
                <p><strong>Equation:</strong> {$equation}</p>
                <p><strong>Step 1:</strong> {$deltaStep}</p>
                {$steps}
            ";
        } elseif ($d == 0) {
            $x = -$b / (2 * $a);

            $steps = "
                <p>Because Δ = 0, both roots are equal.</p>
                <p>x = [-b] / (2a)</p>
                <p>x = ({-$b}) / (2·{$a}) = {$x}</p>
            ";

            $resultHtml = "
                <h3>Double root</h3>
                <p><strong>Equation:</strong> {$equation}</p>
                <p><strong>Step 1:</strong> {$deltaStep}</p>
                {$steps}
            ";
        } else {
            $sqrtD = sqrt($d);
            $x1 = (-$b + $sqrtD) / (2 * $a);
            $x2 = (-$b - $sqrtD) / (2 * $a);

            $steps = "
                <p>Because Δ &gt; 0, there are two distinct real roots.</p>
                <p>x = [-b ± √Δ] / (2a)</p>
                <p>x₁ = ({-$b} + √{$d}) / (2·{$a}) = {$x1}</p>
                <p>x₂ = ({-$b} - √{$d}) / (2·{$a}) = {$x2}</p>
            ";

            $resultHtml = "
                <h3>Real roots</h3>
                <p><strong>Equation:</strong> {$equation}</p>
                <p><strong>Step 1:</strong> {$deltaStep}</p>
                {$steps}
            ";
        }
    }
}
?>
