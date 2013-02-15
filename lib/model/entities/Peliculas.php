<?php
namespace entities;
/** @Entity
 * @Table(name="peliculas")
 */
class peliculas
	{
                /** @id
                 * @GeneratedValue(strategy="AUTO")
                 * @Column(name="num_pelicula",type="integer")*/
		private $num_pelicula;
                /** @Column(name="titulo",type="string",length=50)*/
		private $titulo;
                /** @Column(name="director",type="string",length=50)*/
                private $director;
                /** @Column(name="year",type="integer")*/
                private $year;
                /** @Column(name="genero",type="string",length=20)*/
                private $genero;
                /** @Column(name="stock",type="integer")*/
                private $stock;
		/** @OneToMany (targetEntity="ventas",mappedBy="peliculas")
                * @JoinColumn(name="cod_pelicula",referencedColumnName="num_pelicula")
                */
                private $venta;
		
		public function __construct ($ti,$di,$ye,$ge,$sto)
		{
			$this->titulo=$ti;
                        $this->director=$di;
                        $this->year=$ye;
                        $this->genero=$ge;
			$this->stock=$sto;
                        $venta=new \Doctrine\Common\Collections\ArrayCollection();
		}
                
		public function getNumPelicula()
		{
			return $this->num_pelicula;
		}
                                
		public function getTitulo()
		{
			return $this->titulo;
		}                
                                
                public function getDirector()
		{
			return $this->director;
		}                    
		      
                public function getYear()
		{
			return $this->year;
		}                
                public function getGenero()
		{
			return $this->genero;
		}                
                public function getStock()
		{
			return $this->stock;
		}                
                
                public function anadirVenta($ventas)
                {
                    $this->venta[]=$ventas;
                }
                public function restarStock()
                {
                    $this->stock=$this->stock-1;
                }            
	}
?>
