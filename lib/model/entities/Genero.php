<?php
namespace entities;
/** @Entity
 * @Table(name="genero")
 */
class genero
	{
        /**@id
        * @Column(name="Num_Cliente",type="integer")*/
        Private $tipo;
        
        public function __construct ($tipo)
		{
			$this->tipo=$tipo;						                        
		}
                
		public function getTipoGenero()
		{
			return $this->tipo;
		}
                function setTipoGenero($tipo){
                        $this->tipo=$tipo;
                }
    
        }

?>
