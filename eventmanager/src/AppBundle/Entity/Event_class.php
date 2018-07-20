<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**

* @ORM\Entity

* @ORM\Table(name="events")

*/

class Event_class

{

 /**

 * @ORM\Column(type="integer")

 * @ORM\Id

 * @ORM\GeneratedValue(strategy="AUTO")

 */

 private $id;

 /**

 * @ORM\Column(type="string", length=50)

 */

 private $name;

 /**

 * @ORM\Column(type="date")

 */

 private $startdate;

 /**

 * @ORM\Column(type="date")

 */

 private $enddate;

 /**

 * @ORM\Column(type="text")

 */

 private $description;

 /**

 * @ORM\Column(type="string", length=50)

 */

 private $image;

 /**

 * @ORM\Column(type="integer")

 */

 private $capacity;
 
 /**

 * @ORM\Column(type="string", length=50)

 */

 private $email;

 /**

 * @ORM\Column(type="string", length=50)

 */

 private $phonenumber;

 /**

 * @ORM\Column(type="string", length=1024)

 */

 private $address;

 /**

 * @ORM\Column(type="string", length=50)

 */

 private $url;
/**

 * @ORM\Column(type="string", length=50)

 */

 private $type;
 
 

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
     *
     * @return Event_class
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
     * Set startdate
     *
     * @param \DateTime $startdate
     *
     * @return Event_class
     */
    public function setStartdate($startdate)
    {
        $this->startdate = $startdate;

        return $this;
    }

    /**
     * Get startdate
     *
     * @return \DateTime
     */
    public function getStartdate()
    {
        return $this->startdate;
    }

    /**
     * Set enddate
     *
     * @param \DateTime $enddate
     *
     * @return Event_class
     */
    public function setEnddate($enddate)
    {
        $this->enddate = $enddate;

        return $this;
    }

    /**
     * Get enddate
     *
     * @return \DateTime
     */
    public function getEnddate()
    {
        return $this->enddate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Event_class
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
     * Set image
     *
     * @param string $image
     *
     * @return Event_class
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
     * Set capacity
     *
     * @param integer $capacity
     *
     * @return Event_class
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Event_class
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phonenumber
     *
     * @param string $phonenumber
     *
     * @return Event_class
     */
    public function setPhonenumber($phonenumber)
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get phonenumber
     *
     * @return string
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Event_class
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Event_class
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Event_class
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
