<?php

namespace Siteadmin3Bundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Siteadmin3
 */
class Siteadmin3
{
    /* ajout de code genere */
    public $file1;

    protected function getUploadDir()
    {
        return 'uploads';
    }

    protected function getUploadRootDir()
    {
        return __DIR__.'/../../../web/'.$this->getUploadDir();
    }


    public function getWebPath1()
    {
        return null === $this->image1 ? null : $this->getUploadDir().'/'.$this->image1;
    }

    public function getAbsolutePath1()
    {
        return null === $this->image1 ? null : $this->getUploadRootDir().'/'.$this->image1;
    }




    
    public function preUpload1()
    {
        if (null !== $this->file1) {
            // do whatever you want to generate a unique name
            $this->image1 = uniqid().'.'.$this->file1->guessExtension();
        }
    }


    public function upload1()
    {
        if (null === $this->file1) {
            return;
        }

        // if there is an error when moving the file, an exception will
        // be automatically thrown by move(). This will properly prevent
        // the entity from being persisted to the database on error
        $this->file1->move($this->getUploadRootDir(), $this->image1);

        unset($this->file1);
    }


    public function removeUpload1()
    {
        if ($file = $this->getAbsolutePath1()) {
            unlink($file);
        }
    }

    
    /*********************************************************************/
    public $file2;
   
    public function getWebPath2()
    {
        return null === $this->image2 ? null : $this->getUploadDir().'/'.$this->image2;
    }

    public function getAbsolutePath2()
    {
        return null === $this->image2 ? null : $this->getUploadRootDir().'/'.$this->image2;
    }
    
    public function preUpload2()
    {
        if (null !== $this->file2) {
            $this->image2 = uniqid().'.'.$this->file2->guessExtension();
        }
    }

    public function upload2()
    {
        if (null === $this->file2) {
            return;
        }

        $this->file2->move($this->getUploadRootDir(), $this->image2);

        unset($this->file2);
    }
    
    public function removeUpload2()
    {
        if ($file = $this->getAbsolutePath2()) {
            unlink($file);
        }
    }

    /*********************************************************************/
    public $file3;

    public function getWebPath3()
    {
        return null === $this->image3 ? null : $this->getUploadDir().'/'.$this->image3;
    }

    public function getAbsolutePath3()
    {
        return null === $this->image3 ? null : $this->getUploadRootDir().'/'.$this->image3;
    }

    public function preUpload3()
    {
        if (null !== $this->file3) {
            $this->image3 = uniqid().'.'.$this->file3->guessExtension();
        }
    }

    public function upload3()
    {
        if (null === $this->file3) {
            return;
        }

        $this->file3->move($this->getUploadRootDir(), $this->image3);

        unset($this->file3);
    }

    public function removeUpload3()
    {
        if ($file = $this->getAbsolutePath3()) {
            unlink($file);
        }
    }
    /* fin ajout de code genere */
    
    
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $image;


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
     * Set nom
     *
     * @param string $nom
     * @return Siteadmin3
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set image
     *
     * @param string $image
     * @return Siteadmin3
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string 
     */
    public function getImage()
    {
        return $this->image;
    }

 
    /**
     * @var string
     */
    private $image1;


    /**
     * Set image1
     *
     * @param string $image1
     * @return Siteadmin3
     */
    public function setImage1($image1)
    {
        $this->image1 = $image1;

        return $this;
    }

    /**
     * Get image1
     *
     * @return string 
     */
    public function getImage1()
    {
        return $this->image1;
    }
    /**
     * @var string
     */
    private $image2;


    /**
     * Set image2
     *
     * @param string $image2
     * @return Siteadmin3
     */
    public function setImage2($image2)
    {
        $this->image2 = $image2;

        return $this;
    }

    /**
     * Get image2
     *
     * @return string 
     */
    public function getImage2()
    {
        return $this->image2;
    }
    /**
     * @var string
     */
    private $image3;


    /**
     * Set image3
     *
     * @param string $image3
     * @return Siteadmin3
     */
    public function setImage3($image3)
    {
        $this->image3 = $image3;

        return $this;
    }

    /**
     * Get image3
     *
     * @return string 
     */
    public function getImage3()
    {
        return $this->image3;
    }
}
