class rectangle {
    public int $height;
    public int $width;
    public int $area;
    public int $volume;

    public function setValue(String $name, int $value){
        if ($name == 'height'){
            $this-> height = $value;
        }
        if ($name == 'width'){
            $this->width = $value;
        }
        if ($name == 'depth'){
            $this->depth = $value;
        }
    }

    public function setProperties () {
        $this->area = $this->height * $this->width;
        $thi->volume = $this->height * $this->width * $this->depth;
    }
}



Refractored

class Rectangle {
    public $height;
    public $width;
    public $area;
    public $volume;

    public function __construct($height, $width) {
        $this->height = $height;
        $this->width = $width;
        $this->area = $this->calculateArea();
        $this->volume = 0;
    }

    public function setDepth($depth) {
        $this->volume = $this->height * $this->width * $depth;
    }

    private function calculateArea() {
        return $this->height * $this->width;
    }
}