<?php

namespace Proxies\__CG__\Sce\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Jen extends \Sce\UserBundle\Entity\Jen implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'id', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'intitule', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'nbEnseignants', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'nbEtudiants', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'nbActeurs', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'outils', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'dispositifs', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'synopsys', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'createurs', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'disciplines', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'communautes', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'cartesJen', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'missions'];
        }

        return ['__isInitialized__', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'id', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'intitule', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'nbEnseignants', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'nbEtudiants', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'nbActeurs', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'outils', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'dispositifs', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'synopsys', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'createurs', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'disciplines', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'communautes', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'cartesJen', '' . "\0" . 'Sce\\UserBundle\\Entity\\Jen' . "\0" . 'missions'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Jen $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIntitule($intitule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIntitule', [$intitule]);

        return parent::setIntitule($intitule);
    }

    /**
     * {@inheritDoc}
     */
    public function getIntitule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIntitule', []);

        return parent::getIntitule();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbEnseignants($nbEnseignants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbEnseignants', [$nbEnseignants]);

        return parent::setNbEnseignants($nbEnseignants);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbEnseignants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbEnseignants', []);

        return parent::getNbEnseignants();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbEtudiants($nbEtudiants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbEtudiants', [$nbEtudiants]);

        return parent::setNbEtudiants($nbEtudiants);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbEtudiants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbEtudiants', []);

        return parent::getNbEtudiants();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbActeurs($nbActeurs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbActeurs', [$nbActeurs]);

        return parent::setNbActeurs($nbActeurs);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbActeurs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbActeurs', []);

        return parent::getNbActeurs();
    }

    /**
     * {@inheritDoc}
     */
    public function setOutils($outils)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutils', [$outils]);

        return parent::setOutils($outils);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutils()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutils', []);

        return parent::getOutils();
    }

    /**
     * {@inheritDoc}
     */
    public function setDispositifs($dispositifs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDispositifs', [$dispositifs]);

        return parent::setDispositifs($dispositifs);
    }

    /**
     * {@inheritDoc}
     */
    public function getDispositifs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDispositifs', []);

        return parent::getDispositifs();
    }

    /**
     * {@inheritDoc}
     */
    public function setSynopsys($synopsys)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSynopsys', [$synopsys]);

        return parent::setSynopsys($synopsys);
    }

    /**
     * {@inheritDoc}
     */
    public function getSynopsys()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSynopsys', []);

        return parent::getSynopsys();
    }

    /**
     * {@inheritDoc}
     */
    public function addCreateur(\Sce\UserBundle\Entity\User $createur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCreateur', [$createur]);

        return parent::addCreateur($createur);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCreateur(\Sce\UserBundle\Entity\User $createur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCreateur', [$createur]);

        return parent::removeCreateur($createur);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreateurs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreateurs', []);

        return parent::getCreateurs();
    }

    /**
     * {@inheritDoc}
     */
    public function addDiscipline(\Sce\UserBundle\Entity\Discipline $discipline)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDiscipline', [$discipline]);

        return parent::addDiscipline($discipline);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDiscipline(\Sce\UserBundle\Entity\Discipline $discipline)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDiscipline', [$discipline]);

        return parent::removeDiscipline($discipline);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisciplines()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisciplines', []);

        return parent::getDisciplines();
    }

    /**
     * {@inheritDoc}
     */
    public function addCommunaute(\Sce\UserBundle\Entity\Communaute $communaute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCommunaute', [$communaute]);

        return parent::addCommunaute($communaute);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCommunaute(\Sce\UserBundle\Entity\Communaute $communaute)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCommunaute', [$communaute]);

        return parent::removeCommunaute($communaute);
    }

    /**
     * {@inheritDoc}
     */
    public function getCommunautes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCommunautes', []);

        return parent::getCommunautes();
    }

    /**
     * {@inheritDoc}
     */
    public function addMission(\Sce\UserBundle\Entity\Mission $mission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addMission', [$mission]);

        return parent::addMission($mission);
    }

    /**
     * {@inheritDoc}
     */
    public function removeMission(\Sce\UserBundle\Entity\Mission $mission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeMission', [$mission]);

        return parent::removeMission($mission);
    }

    /**
     * {@inheritDoc}
     */
    public function getMissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMissions', []);

        return parent::getMissions();
    }

    /**
     * {@inheritDoc}
     */
    public function addCartesJen(\Sce\UserBundle\Entity\CarteJen $cartesJen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCartesJen', [$cartesJen]);

        return parent::addCartesJen($cartesJen);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCartesJen(\Sce\UserBundle\Entity\CarteJen $cartesJen)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCartesJen', [$cartesJen]);

        return parent::removeCartesJen($cartesJen);
    }

    /**
     * {@inheritDoc}
     */
    public function getCartesJen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCartesJen', []);

        return parent::getCartesJen();
    }

}
