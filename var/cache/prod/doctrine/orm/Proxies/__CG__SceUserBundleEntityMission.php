<?php

namespace Proxies\__CG__\Sce\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Mission extends \Sce\UserBundle\Entity\Mission implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'id', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'titre', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'contexteScenaristique', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'descriptif', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'ludification', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'authenticite', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'immersion', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'jen', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'cartesJen', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'images'];
        }

        return ['__isInitialized__', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'id', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'titre', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'contexteScenaristique', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'descriptif', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'ludification', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'authenticite', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'immersion', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'jen', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'cartesJen', '' . "\0" . 'Sce\\UserBundle\\Entity\\Mission' . "\0" . 'images'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Mission $proxy) {
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
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', [$titre]);

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', []);

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setContexteScenaristique($contexteScenaristique)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContexteScenaristique', [$contexteScenaristique]);

        return parent::setContexteScenaristique($contexteScenaristique);
    }

    /**
     * {@inheritDoc}
     */
    public function getContexteScenaristique()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContexteScenaristique', []);

        return parent::getContexteScenaristique();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescriptif($descriptif)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescriptif', [$descriptif]);

        return parent::setDescriptif($descriptif);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescriptif()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescriptif', []);

        return parent::getDescriptif();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchema($schema)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchema', [$schema]);

        return parent::setSchema($schema);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchema()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchema', []);

        return parent::getSchema();
    }

    /**
     * {@inheritDoc}
     */
    public function setLudification($ludification)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLudification', [$ludification]);

        return parent::setLudification($ludification);
    }

    /**
     * {@inheritDoc}
     */
    public function getLudification()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLudification', []);

        return parent::getLudification();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthenticite($authenticite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthenticite', [$authenticite]);

        return parent::setAuthenticite($authenticite);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthenticite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthenticite', []);

        return parent::getAuthenticite();
    }

    /**
     * {@inheritDoc}
     */
    public function setImmersion($immersion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImmersion', [$immersion]);

        return parent::setImmersion($immersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getImmersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImmersion', []);

        return parent::getImmersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setIllustration($illustration)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIllustration', [$illustration]);

        return parent::setIllustration($illustration);
    }

    /**
     * {@inheritDoc}
     */
    public function getIllustration()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIllustration', []);

        return parent::getIllustration();
    }

    /**
     * {@inheritDoc}
     */
    public function setJen(\Sce\UserBundle\Entity\Jen $jen = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJen', [$jen]);

        return parent::setJen($jen);
    }

    /**
     * {@inheritDoc}
     */
    public function getJen()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJen', []);

        return parent::getJen();
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

    /**
     * {@inheritDoc}
     */
    public function addImage(\Sce\UserBundle\Entity\Image $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addImage', [$image]);

        return parent::addImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function removeImage(\Sce\UserBundle\Entity\Image $image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeImage', [$image]);

        return parent::removeImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImages', []);

        return parent::getImages();
    }

}
