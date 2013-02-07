<?php
namespace entities;
/** @Entity
 * @Table(name="peliculas")
 */
class peliculas
	{
                /**@id
                 * @Column(name="Num_Pelicula",type="integer")*/
		private $num_pelicula;
                /** @Column(name="Titulo",type="string",length=25)*/
		private $titulo;
                /** @Column(name="Director",type="string",length=25)*/
                private $director;
                //RELACION 1-* con cliente
                /** @ManyToOne(targetEntity="genero",inversedBy="peliculas")
                 * @JoinColumn(name="Genero",referencedColumnName="Tipo")
                 */                
		private $genero;
                /** @Column(name="Year",type="integer")*/
                private $year;
                /** @Column(name="Year",type="integer")*/
                private $stock;
		
		
		public function __construct ($nup,$ti,$di,$ge,$ye,$sto)
		{
			$this->num_pelicula=$nup;
			$this->titulo=$ti;
                        $this->director=$di;
                        $this->genero=$ge;
                        $this->year=$ye;
			$this->stock=$sto;			                        
		}
                
		public function getNumPelicula()
		{
			return $this->num_pelicula;
		}
                function setNumPelicula($nup){
                    $this->num_pelicula=$nup;
                }
                
		public function getTitulo()
		{
			return $this->titulo;
		}                
                function setTitulo($ti){
                    $this->titulo=$ti;
                }
                
                public function getDirector()
		{
			return $this->director;
		}                
                function setDirector($ti){
                    $this->director=$di;
                }
                
		public function getGenero()
		{
			return $this->genero;
		}                
                function setGenero($ge){
                    $this->genero=$ge;
                }
                
                public function getYear()
		{
			return $this->year;
		}                
                function setGYear($ye){
                    $this->year=$ye;
                }
                
                public function getStock()
		{
			return $this->stock;
		}                
                function setStock($sto){
                    $this->stock=$sto;
                }
                
                public function restarexistencias($res)
                {
                    $this->existenciasRegalo=$this->existenciasRegalo-$res;
                }            
	}
?>
