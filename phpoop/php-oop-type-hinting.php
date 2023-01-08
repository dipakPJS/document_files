 <?php
/* 
 class dipak{
    protected $dipak;
    protected $tori;

    public function __construct($d, $p)
    {
        $this->dipak = $d;
        $this->tori = $p;
    }


    function lal(){
        echo "MY name is ".$this->dipak;
        echo "<br> I am from ".$this->tori;
    }


 }

 function putho(dipak $b){
    $b->lal();
 }

 $estt = new dipak("Dipak Billionaire", "Nepal");
 putho($estt); */

 class horizon{
    function getnames(school $stu){
      foreach($stu->sch() as $horizon){
        echo $horizon."<br>";
      }
    }
 }

 class school{
    function sch(){
        return ["dipak", "Dipak1", "dipak2"];
    }
 }                                                                                                           

 $see = new horizon();
 $stee = new school();

 $see->getnames($stee);                                                                                                                                                                                                                                                                                                                                             
                                                        

                                                                                
 ?>