<?php 

class Movie{
    
    public $title;
    public $year;
    public $genre;
    public $vote;



    //costruttore

    function __construct($_x, $_y, $_z){

        $this->title = $_x;
        $this->year = $_y;
        $this->genre = $_z;
        $this->vote = rand(1,100) ;

    }

    
    
    public function voteRange(){
        
        if( $this->vote >= 6 ){
         return "il film $this->title la visione e' consigliata";
        }else{
            return "il film $this->title e' sconsigliato";
        }
    }



}


?>