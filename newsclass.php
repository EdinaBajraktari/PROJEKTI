<?php
require_once('dbconfig.php');
class Lajmet extends dbConnect { 
private $id;
private $titulli;
private $permbajtja; 
private $data_e_publikimit; 
private $fotografia; 
protected $dbconn;
public function construct($id='', $titulli='',$permbajtja='', $data_e_publikimit='', $fotografia='')
{
$this->id=$id;
$this->titulli=$titulli;
$this->permbajtja=$permbajtja;
$this->data_e_publikimit=$data_e_publikimit;
$this->fotografia=$fotografia;
$this->dbconn=$this->connectDB();
}

public function setId($id){
    $this->id=$id;
    }
    public function getId(){ 
    return $this->id;
    }
    public function setTitulli($titulli){
    $this->titulli=$titulli;
    }
    public function getTitulli(){ 
    return $this->titulli;
    }
    public function setPermbajtja($permbajtja){
    $this->permbajtja=$permbajtja;
    }
    public function getPermbajtja(){
    $this->permbajtja;
    }
    public function setData_e_publikimit($data_e_publikimit){
    $this->data_e_publikimit=$data_e_publikimit;
    }
    public function getData_e_publikimit(){ 
    return $this->data_e_publikimit;
    }
    public function setFotografia($fotografia){
    $this->fotografia=$fotografia;
    }
    public function getFotografia(){ 
    return $this->fotografia;
    }
    
   
    public function insertoDhenat(){
        $sql="INSERT INTO Lajmet (titulli,permbajtja,data_e_publikimit,fotografia)
        VALUES (?,?,?,?)";
        $stm=$this->dbconn->prepare($sql);
        $stm->execute([$this->titulli,$this->permbajtja,$this->data_e_publikimit,$this->fotografia]); 
        echo "<script>
        alert('dhenat jane REGJISTRUAR me sukses'); 
        document.location='displaydhenat.php';
        </script>";
        }
        public function lexoDhenat(){
        $sql='SELECT * FROM Lajmet';
        $stm=$this->dbconn->prepare($sql);
        $stm->execute();
        $rezultati =$stm->fetchAll(PDO::FETCH_ASSOC);
        return $rezultati;
        }

        public function lexoDhenatSipasIDs($id){
            $sql='SELECT * FROM Lajmet where id=:id';
            $stm=$this->dbconn->prepare($sql);
            $stm->execute([':id'=>$this->id=$id]);
            $rezultati =$stm->fetch(PDO::FETCH_ASSOC); 
            return $rezultati;
            }

            public function updateDhenat(){
                $sql='UPDATE Lajmet SET titulli=?, permbajtja=?, data_e_publikimit=?, fotografia=? where id=?';
                $stm=$this->dbconn->prepare($sql);
                $stm->execute([$this->titulli, $this->permbajtja,$this->data_e_publikimit,$this->fotografia, $this->id]);
                }
                public function deleteDhenat($id){
                $sql="DELETE FROM Studenti WHERE id=:id";
                $stm=$this->dbconn->prepare($sql);
                $stm->bindParam(':id',$id);
                $stm->execute(); 
                if ($stm==true){
                echo "<script>
                alert('dhenat jane DELETE me sukses'); 
                document.location='displaydhenat.php';
                </script>";
                }
                else {
                return false;
                }
                }
                }
                ?>