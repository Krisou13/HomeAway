<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

class PropertySearch
{
   
    /**
     * @var int|null
     * @Assert\Range(min=9, max=800)
     */
    private $minSurface;

    /**
     * @var int|null
     */
    private $maxPrice;

    
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    public function setMinSurface(int $minSurface): self
    {
        $this->minSurface = $minSurface;

        return $this;
    }
    /**
     * @var ArrayCollection
     */
    private $options;

    public function __construct() {
        $this->options = new ArrayCollection();
    }

    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    public function setMaxPrice(int $maxPrice): self
    {
        $this->maxPrice = $maxPrice;

        return $this;
    }
  /**
     * @return ArrayCollection
     */
    public function getOptions(): ArrayCollection {
        return $this->options;
    }
 
    /**
     * @param ArrayCollection $options
     */
    public function setOptions(ArrayCollection $options): void {
        $this->options = $options;
    }
}
