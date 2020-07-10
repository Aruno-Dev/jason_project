<?php

class Argonaut {

    public $id;
    public $name;


    /**
     * Argonaut constructor
     * @param $id
     */
    function __construct ($db, $id){
        
        //global $db;

        $id = str_secure($id);

        $reqArgonaut = $db->prepare('

        select *
        from argonauts 
        where a.id = ?

        ');
        $reqArgonaut->execute([$id]);
        $data = $reqArgonaut->fetch();

        $this->id = $id;
        $this->name = $data['name'];
       
    }

/**
 * returns all the argonauts
 * @return array
 */
    static function getAllArgonauts($db){

        $reqAllArgonauts = $db->prepare('select * from argonauts order by id DESC ');
        $reqAllArgonauts->execute([]);

        return $reqAllArgonauts->fetchAll();
    }

/**
 * Add an argonaut
 */
static function addArgonaut($argonautName){
    global $db;
     
    $addArgonaut = $db->prepare("insert into argonauts (name) values(?)");
    $addArgonaut->execute([$argonautName]);
}

/**
 * Delete argonaut with the id
 */
    static function deleteArgonaut($db, $argonautId){
        
        $deleteArgonaut = $db->prepare('delete from argonauts where id = ?');
        $deleteArgonaut->execute([$argonautId]);
    }
}