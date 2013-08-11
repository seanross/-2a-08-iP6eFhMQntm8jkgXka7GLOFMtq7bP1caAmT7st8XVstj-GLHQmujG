<?php

namespace Entity;

/**
 * Product Entity
 *
 * @Entity
 * @Table(name="product")
 * @author  Sean Ross Fortunato
 */
class Product extends BaseEntity {
    /**
     * @var integer
     *
     * @Column(name="id", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @ManyToOne(targetEntity="Category")
     * @JoinColumn(name="category_id", referencedColumnName="id")
     */
    private $category;

    /**
     * @var string
     *
     * @Column(name="brand", type="string", length=50, nullable=false)
     */
    private $brand;

    /**
     * @var float
     *
     * @Column(name="price", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @Column(name="description", type="text")
     */
    private $description;

    /**
     * @OneToOne(targetEntity="Picture", mappedBy="product")
     */
    private $picture;
 

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Assign the product to a category
     *
     * @param   Entity\Category $category
     * @return  void
     */
    public function setCategory(Category $category)
    {
        $this->category = $category;

        // The association must be defined in both directions
        if ( ! $category->getProducts()->contains($this))
        {
            $category->addProduct($this);
        }
    }

    /**
     * Get Category
     *
     * @return EntityCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set brand
     *
     * @param string $brand
     * @return Product
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    
        return $this;
    }

    /**
     * Get brand
     *
     * @return string 
     */
    public function getBrand()
    {
        return $this->brand;
    }


    /**
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

         /**
     * Assign the picture to a product
     *
     * @param   Entity\Picture $picture
     * @return  void
     */
    public function setPicture(Picture $picture)
    {
        $this->picture = $picture;
    }

    /**
     * Get Picture
     *
     * @return Picture
     */
    public function getPicture()
    {
        return $this->picture;
    }

}
