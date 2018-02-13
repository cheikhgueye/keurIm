<?php

namespace KEURGUI\immoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * image.
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="KEURGUI\immoBundle\Repository\imageRepository")
 */
class image
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=50 ,nullable=true)
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity="KEURGUI\immoBundle\Entity\Bien")
     */
    private $bien;

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return image
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set bien.
     *
     * @param \KEURGUI\immoBundle\Entity\Bien $bien
     *
     * @return image
     */
    public function setBien(\KEURGUI\immoBundle\Entity\Bien $bien = null)
    {
        $this->bien = $bien;

        return $this;
    }

    /**
     * Get bien.
     *
     * @return \KEURGUI\immoBundle\Entity\Bien
     */
    public function getBien()
    {
        return $this->bien;
    }
}
