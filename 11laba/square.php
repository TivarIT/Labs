<!-- Класс Квадрат, члены класса: координаты 4-х точек. Предусмотреть в классе конструктор и методы: проверка, является ли 
фигура квадратом; вычисления и вывода сведений о фигуре: длины сторон, периметр, площадь.-->
<!DOCTYPE html>
<html>

<head>
    <title>Квадрат</title>
    <?php
    class square
    {
        public $x1;
        public $y1;
        public $x2;
        public $y2;
        public $x3;
        public $y3;
        public $x4;
        public $y4;
        function __construct($x1,  $y1,  $x2,  $y2,  $x3,  $y3,  $x4,  $y4)
        {
            $this->x1 = $x1;
            $this->y1 = $y1;
            $this->x2 = $x2;
            $this->y2 = $y2;
            $this->x3 = $x3;
            $this->y3 = $y3;
            $this->x4 = $x4;
            $this->y4 = $y4;
        }
        public function getSquareCheck()
        {
            if (
                sqrt(pow($this->x2 - $this->x1, 2) + pow($this->y2 - $this->y1, 2)) * sqrt(2) ==
                sqrt(pow($this->x3 - $this->x2, 2) + pow($this->y3 - $this->y2, 2)) * sqrt(2) &&
                sqrt(pow($this->x2 - $this->x1, 2) + pow($this->y2 - $this->y1, 2)) ==
                sqrt(pow($this->x4 - $this->x3, 2) + pow($this->y4 - $this->y3, 2)) &&
                sqrt(pow($this->x3 - $this->x2, 2) + pow($this->y3 - $this->y2, 2)) ==
                sqrt(pow($this->x1 - $this->x4, 2) + pow($this->y1 - $this->y4, 2))
            ) {
                return TRUE;
            } else {
                return FALSE;
            }
        }
        public function getSquareSideLengths()
        {
            return "<br>Сторона AB = " . round(sqrt(pow($this->x2 - $this->x1, 2) + pow($this->y2 - $this->y1, 2)), 2) . ";" .
                " Сторона BC = " . round(sqrt(pow($this->x3 - $this->x2, 2) + pow($this->y3 - $this->y2, 2)), 2) . ";" .
                " Сторона CD = " . round(sqrt(pow($this->x4 - $this->x3, 2) + pow($this->y4 - $this->y3, 2)), 2) . ";" .
                " Сторона DA = " . round(sqrt(pow($this->x1 - $this->x4, 2) + pow($this->y1 - $this->y4, 2)), 2) . ";";
        }
        public function getSquarePerimeterAndArea()
        {
            return "<br>Периметр фигуры = " . round(sqrt(pow($this->x2 - $this->x1, 2) + pow($this->y2 - $this->y1, 2)) * 4, 2) . ";<br>" .
                "Площадь фигуры = " . round(pow(sqrt(pow($this->x2 - $this->x1, 2) + pow($this->y2 - $this->y1, 2)), 2), 2) . "; 
                <br>Это квадрат, сэр! Так как диагонали и стороны равны. Может чаю?";
        }
        public function notSquare()
        {
            return "<br>НЕ БУДУ Я ТРАТИТЬ ВРЕМЯ НА РАСЧЕТЫ, ЕСЛИ ЭТО НЕ КВАДРАТ, ХАМЛО!";
        }
    };
    ?>
    <?php
    echo "<b>Фигура №1</b><br>";
    $square1 = new square(0, 0, 0, 2, 2, 2, 2, 0);
    echo $square1->getSquareSideLengths();
    echo ($square1->getSquareCheck() === FALSE) ? $square1->notSquare() : $square1->getSquarePerimeterAndArea();
    echo "<hr>";
    echo "<b>Фигура №2</b><br>";
    $square2 = new square(0, 0, 0, 4, 4, 4, 4, 0);
    echo $square2->getSquareSideLengths();
    echo ($square2->getSquareCheck() === FALSE) ? $square2->notSquare() : $square2->getSquarePerimeterAndArea();
    echo "<hr>";
    echo "<b>Фигура №3</b><br>";
    $square3 = new square(0, 0, 0, 3, 4, 4, 3, 0);
    echo $square3->getSquareCheck();
    echo $square3->getSquareSideLengths();
    echo ($square3->getSquareCheck() === FALSE) ? $square3->notSquare() : $square3->getSquarePerimeterAndArea();
    echo "<hr>";
    ?>
</head>

<body>
</body>

</html>