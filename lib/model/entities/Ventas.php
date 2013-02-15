<?php
namespace entities;
/** @Entity
 * @Table(name="ventas")
 */
class ventas
	{
    
                /** @id
                 * @GeneratedValue(strategy="AUTO")
                 * @Column(name="cod_venta",type="integer")*/
		private $cod_venta;
                //RELACION 1-* con cliente
                /** @ManyToOne(targetEntity="clientes",inversedBy="ventas")
                 * @JoinColumn(name="cod_cliente",referencedColumnName="dni")
                 */
		private $cod_cliente;
                //RELACION 1-* con cliente
                /** @ManyToOne(targetEntity="peliculas",inversedBy="ventas")
                 * @JoinColumn(name="cod_pelicula",referencedColumnName="num_pelicula")
                 */                
		private $cod_pelicula;
                		
		
		public function __construct ($ccli,$cpeli)
		{
			$this->cod_cliente=$ccli;
			$this->cod_pelicula=$cpeli;                        
		}
                
		public function getCodVenta()
		{
			return $this->cod_venta;
		}
                
		public function getCodCliente()
		{
			return $this->cod_cliente;
		}                
                                
		public function getCodPelicula()
		{
			return $this->cod_pelicula;
		}                          
	}
?>
