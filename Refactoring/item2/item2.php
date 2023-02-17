public function getDistanceTravelled($time, $haggis) {
    $result = 0;
    $acceleration = $haggis->primaryForce / $haggis->mass;
   
    $computedTime = min($time, $haggis->delay); // Primary time
   
    $result = 0.5 *$acceleration * $computedTime * $computedTime;
    
    $computedTime = $time - $haggis->delay; // secondary time

    if ($computedTime > 0) {
        $primaryVelocity = $acceleration * $haggis->delay;
        $acceleration = ($haggis->primaryForce + $haggis->secondaryForce) / $haggis->mass;
        $result += ($primaryVelocity * $computedTime) + (0.5 $acceleration * $computedTime *$computedTime);
    }
    return $result
}








Refractored

public function getDistanceTravelled($time, $haggis) {
    $result = 0;
    $mass = $haggis->mass;
    $primaryForce = $haggis->primaryForce;
    $secondaryForce = $haggis->secondaryForce;
    $acceleration = $primaryForce / $mass;

    $primaryTime = min($time, $haggis->delay);
    $result = 0.5 * $acceleration * $primaryTime * $primaryTime;

    $secondaryTime = $time - $haggis->delay;

    if ($secondaryTime > 0) {
        $primaryVelocity = $acceleration * $haggis->delay;
        $acceleration = ($primaryForce + $secondaryForce) / $mass;
        $result += ($primaryVelocity * $secondaryTime) + (0.5 * $acceleration * $secondaryTime * $secondaryTime);
    }
    
    return $result;
}