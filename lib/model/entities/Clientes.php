<?php
namespace entities;
/** @Entity
 * @Table(name="clientes")
 */
class clientes
	{
                /** @id
                 * @ GeneratedValue
                 * @Column(name="Num_Cliente",type="integer")*/
		private $numcliente;
                /** @Column(name="Nombre",type="string",length=25)*/
		private $nombre;
                /** @Column(name="Apellido",type="string",length=25)*/
		private $apellido;
                /** @Column(name="Direccion",type="string",length=50)*/
                private $direccion;
                /** @Column(name="Telefono",type="integer")*/
		private $telefono;
                /** @Column(name="Usuario",type="string",length=10)*/
		private $usuario;
                /** @Column(name="Password",type="string",length=10)*/
		private $pass;
		
		public function __construct ($no,$ap,$di,$te,$us,$co)
		{
			$this->nombre=$no;
			$this->apellido=$ap;
                        $this->direccion=$di;
			$this->telefono=$te;
			$this->usuario=$us;
                        $this->pass=$co;
        	}
		public function getNumeroCliente()
		{
			return $this->numclien;
		}
                
		public function getNombre()
		{
			return $this->nombre;
		}                
                function setNombre($no){
                    $this->nombre=$no;
                }
                
		public function getApellido()
		{
			return $this->apellido;
		}                
                function setApellido($ap){
                    $this->apellido=$ap;
                }
                
                public function getDireccion()
		{
			return $this->direccion;
		}                
                function setDireccion($di){
                    $this->direccion=$di;
                }
                
		public function getTelefono()
		{
			return $this->telefono;
		}
                function setTelefono($te){
                    $this->telefono=$te;
                }
                
		public function getUsuario()
		{
			return $this->usuario;
		}
                function setUsuario($us){
                    $this->usuario=$us;
                }
                
                public function getPass()
		{
			return $this->pass;
		}
		function setPass($pa){
                    $this->pass=$pa;
                }
                
                public function restarexistencias($res)
                {
                    $this->existenciasRegalo=$this->existenciasRegalo-$res;
                }            
	}
?>