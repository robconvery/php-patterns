<?php
/**
 * Class BadCar
 *
 * @package Patterns\SequentialCoupling
 * @author robconvery <robconvery@me.com>
 */

namespace Patterns\SequentialCoupling;

class BadCar
{
    private $started = false;
    private $speed = 0;
    private $topSpeed = 125;

    /**
     * @return bool
     */
    public function startCar(): bool
    {
        $this->started = true;
        return $this->started;
    }

    /**
     * Changes speed, increments by 1 if $accelerate is true, else decrease by 1.
     * @param $accelerate
     * @return bool
     * @throws \Exception
     */
    public function changeSpeed(bool $accelerate): bool
    {
        if ($this->started !== true) {
            throw new \Exception('Car not started.');
        }

        if ($accelerate == true) {
            if ($this->speed > $this->topSpeed) {
                return false;
            } else {
                $this->speed++;
                return true;
            }
        } else {
            if ($this->speed <= 0) {
                return false;
            } else {
                $this->speed--;
                return true;
            }
        }
    }

    /**
     * Stops car.
     * @return bool
     * @throws \Exception
     */
    public function stopCar(): bool
    {
        if ($this->started !== true) {
            throw new \Exception('Car not started.');
        }

        $this->started = false;
        return true;
    }
}
