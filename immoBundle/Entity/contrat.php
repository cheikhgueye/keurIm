<?php

namespace KEURGUI\immoBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * contrat.
 *
 * @ORM\Table(name="contrat")
 * @ORM\Entity(repositoryClass="KEURGUI\immoBundle\Repository\contratRepository")
 */
class contrat
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
     * @var \DateTime
     *
     * @ORM\Column(name="datecontrat", type="date")
     */
    private $datecontrat;

    /**
     * @var int
     *
     * @ORM\Column(name="caution", type="integer")
     */
    private $caution;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duree", type="datetime")
     */
    private $duree;
    /**
     * @ORM\OneToOne(targetEntity="KEURGUI\immoBundle\Entity\Bien")
     */
    private $bien;
    /**
     * @ORM\OneToOne(targetEntity="KEURGUI\immoBundle\Entity\Bien")
     */
    private $client;

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
     * Set datecontrat.
     *
     * @param \DateTime $datecontrat
     *
     * @return contrat
     */
    public function setDatecontrat($datecontrat)
    {
        $this->datecontrat = $datecontrat;

        return $this;
    }

    /**
     * Get datecontrat.
     *
     * @return \DateTime
     */
    public function getDatecontrat()
    {
        return $this->datecontrat;
    }

    /**
     * Set caution.
     *
     * @param int $caution
     *
     * @return contrat
     */
    public function setCaution($caution)
    {
        $this->caution = $caution;

        return $this;
    }

    /**
     * Get caution.
     *
     * @return int
     */
    public function getCaution()
    {
        return $this->caution;
    }

    /**
     * Set duree.
     *
     * @param \DateTime $duree
     *
     * @return contrat
     */
    public function setDuree($duree)
    {
        $this->duree = $duree;

        return $this;
    }

    /**
     * Get duree.
     *
     * @return \DateTime
     */
    public function getDuree()
    {
        return $this->duree;
    }

    /**
     * Set bien.
     *
     * @param \KEURGUI\immoBundle\Entity\Bien $bien
     *
     * @return contrat
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

    /**
     * Set client
     *
     * @param \KEURGUI\immoBundle\Entity\Bien $client
     *
     * @return contrat
     */
    public function setClient(\KEURGUI\immoBundle\Entity\Bien $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \KEURGUI\immoBundle\Entity\Bien
     */
    public function getClient()
    {
        return $this->client;
    }
}
