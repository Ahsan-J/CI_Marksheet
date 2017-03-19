<?php
class Marksheet_Model extends CI_Model{
    public function calculate($array){
        $mark['Name']=$array['Name'];
        $mark['FName']=$array['FName'];
        $mark['Sindhi'] = (int) $array['Sindhi'];
        $mark['Comp'] = (int) $array['Comp'];
        $mark['English'] = (int) $array['English'];
        $mark['Pst'] = (int) $array['Pst'];
        $mark['Chemistry'] = (int) $array['Chemistry'];

        $mark['total'] =  $mark['Sindhi']+$mark['Comp']+$mark['English']+$mark['Pst']+$mark['Chemistry'];
        
        $mark['SindhiPer'] = ($mark['Sindhi']/75)*100;
        $mark['CompPer'] = ($mark['Comp']/100)*100;
        $mark['ChemPer'] = ($mark['Chemistry']/100)*100;
        $mark['EngPer'] = ($mark['English']/75)*100;
        $mark['PstPer'] = ($mark['Pst']/75)*100;
        $mark['percentage'] = ($mark['total']/425)*100;
        $mark['Grade']='F';
        
        if($mark['percentage']>80.0 and $mark['percentage']<100.0){
            $mark['Grade']='A+';
        }
            if($mark['percentage']>70.0 and $mark['percentage']<80.0){
                $mark['Grade']='A';
            }
            
                if($mark['percentage']>60.0 and $mark['percentage']<70.0){
                    $mark['Grade']='B';
                }
                
                    if($mark['percentage']>50.0 and $mark['percentage']<60.0){
                        $mark['Grade']='C';
                    }
                    if($mark['percentage']>40.0 && $mark['percentage']<50.0){
                        $mark['Grade']='D';
                    }
                
            
        

        return $mark;
    }
}
?>