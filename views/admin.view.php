<?php

class AdminView{

    public function showAdmin($columnists, $podcasts){
        $smarty = new Smarty();

        $smarty->assign('title', 'Administración');
        $smarty->assign('base_url', BASE_URL);
        $smarty->assign('columnists', $columnists);  
        $smarty->assign('podcasts', $podcasts); 
            
        $smarty->display('admin.tpl');
    }

    public function showEditColumnist($old){

        $smarty = new Smarty();

        $smarty->assign('title', 'Editar Columnista');
        $smarty->assign('base_url', BASE_URL);
        $smarty->assign('old', $old);        
        $smarty->assign('url_columnist','columnistas/');
            
        $smarty->display('editColumnist.tpl');
        
    }

    public function showEditPodcast($old, $listColumnists){

        $smarty = new Smarty();

        $smarty->assign('title', 'Editar Podcast');
        $smarty->assign('base_url', BASE_URL);
        $smarty->assign('old', $old);  
        $smarty->assign('listColumnists', $listColumnists);        
     
        $smarty->display('editPodcast.tpl');

    }


    public function showError($message){ // Ultra provisiorio - hay que hacer view del error
        echo($message);
    }
    
}