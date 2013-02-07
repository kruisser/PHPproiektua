<?php
namespace entities;
/** @Entity
 * @Table(name="alquileres")
 */
class alquileres
	{
    
                /**@id
                 * @Column(name="Cod_Alquiler",type="integer")*/
		private $cod_alquiler;
                //RELACION 1-* con cliente
                /** @ManyToOne(targetEntity="clientes",inversedBy="alquileres")
                 * @JoinColumn(name="Cod_Cliente",referencedColumnName="Num_Cliente")
                 */
		private $cod_cliente;
                //RELACION 1-* con cliente
                /** @ManyToOne(targetEntity="peliculas",inversedBy="alquileres")
                 * @JoinColumn(name="Cod_pelicula",referencedColumnName="Num_Pelicula")
                 */                
		private $cod_pelicula;
                /** @Column(name="Entregado",type="boolean")*/
                private $entregado;
		
		
		public function __construct ($ccli,$cpeli)
		{
			$this->cod_cliente=$ccli;
			$this->cod_pelicula=$cpeli;                        			                        
		}
                
		public function getCodAlquiler()
		{
			return $this->cod_alquiler;
		}
                
		public function getCodCliente()
		{
			return $this->cod_cliente;
		}                
                function setCodCliente($ccli){
                    $this->cod_cliente=$ccli;
                }
                
		public function getCodPelicula()
		{
			return $this->cod_pelicula;
		}                
                function setCodPelicula($cpeli){
                    $this->cod_pelicula=$cpeli;
                }
                
                public function getEntregado()
		{
			return $this->entregado;
		}                
                
                
                public function restarexistencias($res)
                {
                    $this->existenciasRegalo=$this->existenciasRegalo-$res;
                }            
	}
?>
