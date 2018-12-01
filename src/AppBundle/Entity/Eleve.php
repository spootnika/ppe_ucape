<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Eleve
 *
 * @ORM\Table(name="eleve")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EleveRepository")
 */
class Eleve
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
     * @ORM\Column(name="eleve_nom", type="string", length=255)
     */
    private $eleveNom;

    /**
     * @var string
     *
     * @ORM\Column(name="eleve_prenom", type="string", length=255)
     */
    private $elevePrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="eleve_dateNaissance", type="string", length=255)
     */
    private $eleveDateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="eleve_email", type="string", length=255)
     */
    private $eleveEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="eleve_autreInfos", type="string", length=255)
     */
    private $eleveAutreInfos;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set eleveNom
     *
     * @param string $eleveNom
     *
     * @return Eleve
     */
    public function setEleveNom($eleveNom)
    {
        $this->eleveNom = $eleveNom;

        return $this;
    }

    /**
     * Get eleveNom
     *
     * @return string
     */
    public function getEleveNom()
    {
        return $this->eleveNom;
    }

    /**
     * Set elevePrenom
     *
     * @param string $elevePrenom
     *
     * @return Eleve
     */
    public function setElevePrenom($elevePrenom)
    {
        $this->elevePrenom = $elevePrenom;

        return $this;
    }

    /**
     * Get elevePrenom
     *
     * @return string
     */
    public function getElevePrenom()
    {
        return $this->elevePrenom;
    }

    /**
     * Set eleveDateNaissance
     *
     * @param string $eleveDateNaissance
     *
     * @return Eleve
     */
    public function setEleveDateNaissance($eleveDateNaissance)
    {
        $this->eleveDateNaissance = $eleveDateNaissance;

        return $this;
    }

    /**
     * Get eleveDateNaissance
     *
     * @return string
     */
    public function getEleveDateNaissance()
    {
        return $this->eleveDateNaissance;
    }

    /**
     * Set eleveEmail
     *
     * @param string $eleveEmail
     *
     * @return Eleve
     */
    public function setEleveEmail($eleveEmail)
    {
        $this->eleveEmail = $eleveEmail;

        return $this;
    }

    /**
     * Get eleveEmail
     *
     * @return string
     */
    public function getEleveEmail()
    {
        return $this->eleveEmail;
    }

    /**
     * Set eleveAutreInfos
     *
     * @param string $eleveAutreInfos
     *
     * @return Eleve
     */
    public function setEleveAutreInfos($eleveAutreInfos)
    {
        $this->eleveAutreInfos = $eleveAutreInfos;

        return $this;
    }

    /**
     * Get eleveAutreInfos
     *
     * @return string
     */
    public function getEleveAutreInfos()
    {
        return $this->eleveAutreInfos;
    }
}

