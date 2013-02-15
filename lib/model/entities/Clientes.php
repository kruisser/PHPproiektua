<?php
namespace entities;
/** @Entity
 * @Table(name="clientes")
 */
class clientes
	{
                /** @id
                 *  @Column(name="dni",type="string",length=9)*/
		private $dni;
                /** @Column(name="nombre",type="string",length=25)*/
		private $nombre;
                /** @Column(name="apellido",type="string",length=25)*/
		private $apellido;
                /** @Column(name="direccion",type="string",length=50)*/
                private $direccion;
                /** @Column(name="telefono",type="integer")*/
		private $telefono;                
                /** @Column(name="password",type="string",length=10)*/
		private $password;
                /** @OneToMany (targetEntity="ventas",mappedBy="clientes")
                * @JoinColumn(name="cod_cliente",referencedColumnName="dni")
                */
                private $venta;
		
		public function __construct ($no,$ap,$di,$te,$dni,$co)
		{
			$this->nombre=$no;
			$this->apellido=$ap;
                        $this->direccion=$di;
			$this->telefono=$te;
                        $this->dni=$dni;
			$this->password=$co;
                        $venta=new \Doctrine\Common\Collections\ArrayCollection();
        	}
		               
		public function getNombre()
		{
			return $this->nombre;
		}                
                
		public function getApellido()
		{
			return $this->apellido;
		}                
                                
                public function getDireccion()
		{
			return $this->direccion;
		}                
                                
		public function getTelefono()
		{
			return $this->telefono;
		}
                                
		public function getDNI()
		{
			return $this->dni;
		}
                                
                public function getPass()
		{
			return $this->password;
		}
		
                public function anadirVenta($ventas)
                {
                    $this->venta[]=$ventas;
                }
        }
?>