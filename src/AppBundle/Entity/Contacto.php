<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="contacto")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\Repository\ContactoRepository")
 */
class Contacto
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	private $nombre;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=false)
	 */
	private $email;
	
	/**
	 * @ORM\Column(type="string", length=255, nullable=true)
	 */
	private $telefono;
	
	/**
	 * @ORM\Column(type="string", nullable=true)
	 */
	private $mensaje;
	
	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $fecha;
	
	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $fecha_ingreso;
	
	/**
	 * @ORM\Column(type="datetime", nullable=true)
	 */
	private $fecha_salida;
	
	/**
	 * @ORM\Column(type="integer", nullable=true)
	 */
	private $cantidad_adultos;
	
	/**
	 * @ORM\Column(type="integer", nullable=true)
	 */
	private $cantidad_ninos;
	

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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Contacto
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contacto
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
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Contacto
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
    
    /**
     * Set cantidad_adultos
     *
     * @param string $cantidad
     *
     * @return Contacto
     */
    public function setCantidadAdultos($cantidad)
    {
        $this->cantidad_adultos = $cantidad;

        return $this;
    }

    /**
     * Get cantidad_adultos
     *
     * @return string
     */
    public function getCantidadAdultos()
    {
        return $this->cantidad_adultos;
    }
    
    /**
     * Set cantidad_ninos
     *
     * @param string $cantidad
     *
     * @return Contacto
     */
    public function setCantidadNinos($cantidad)
    {
        $this->cantidad_ninos = $cantidad;

        return $this;
    }

    /**
     * Get cantidad_ninos
     *
     * @return string
     */
    public function getCantidadNinos()
    {
        return $this->cantidad_ninos;
    }
    
    /**
     * Set fecha
     *
     * @param string $fecha
     *
     * @return Contacto
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }
    
    /**
     * Set fecha_ingreso
     *
     * @param string $fecha_ingreso
     *
     * @return Contacto
     */
    public function setFechaIngreso($fecha_ingreso)
    {
        $this->fecha_ingreso = $fecha_ingreso;

        return $this;
    }

    /**
     * Get fecha_ingreso
     *
     * @return \DateTime
     */
    public function getFechaIngreso()
    {
        return $this->fecha_ingreso;
    }
    
    /**
     * Set fecha_salida
     *
     * @param string $fecha_salida
     *
     * @return Contacto
     */
    public function setFechaSalida($fecha_salida)
    {
        $this->fecha_salida = $fecha_salida;

        return $this;
    }

    /**
     * Get fecha_salida
     *
     * @return \DateTime
     */
    public function getFechaSalida()
    {
        return $this->fecha_salida;
    }

    /**
     * Set mensaje
     *
     * @param string $mensaje
     *
     * @return Contacto
     */
    public function setMensaje($mensaje)
    {
        $this->mensaje = $mensaje;

        return $this;
    }

    /**
     * Get mensaje
     *
     * @return string
     */
    public function getMensaje()
    {
        return $this->mensaje;
    }
    
    public function getUploadRootDir()
    {
    	// absolute path to your directory where images must be saved
    	return __DIR__.'/../../../../../web/'.$this->getUploadDir();
    }
    
    public function getUploadDir()
    {
    	return 'uploads/promociones';
    }
    
    public function getAbsolutePath()
    {
    	return null === $this->image ? null : $this->getUploadRootDir().'/'.$this->image;
    }
    
    public function getWebPath()
    {
    	return null === $this->image ? null : '/'.$this->getUploadDir().'/'.$this->image;
    }
}
